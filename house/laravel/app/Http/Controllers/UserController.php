<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Request,Validator,DB,Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;

use Illuminate\Cookie;



/**
*	User
*	UserController
	管理用户
*	2016/5/23
*	于思蕊
*	
*/


class UserController extends BaseController
{
	//根据id显示 房东的个人信息
	public function index(){
		$id=$_COOKIE["id"];
		$user=DB::table('u_r')
            ->join('r_p', 'u_r.r_id', '=', 'r_p.r_id')
            ->join('power', 'r_p.p_id', '=', 'power.p_id')
            ->select()
			->where(['u_id'=>$id])
			->get();
		//var_dump($user);die;
		return view('html.categories',['user'=>$user]);
	}
	//展示个人的详细信息
	public function userList(){
		$id=$_COOKIE["id"];
		$user=DB::table('user')
            ->select()
			->where(['u_id'=>$id])
			->get();
		//var_dump($user);die;
		return view('html.users',['user'=>$user]);
	}
	//展示房东的订单管理
	public function orderList(){
		$id=$_COOKIE["id"];
		$orders=DB::table('order')
			->join('house', 'order.house_id', '=', 'house.house_id')
			->join('user','order.u_id','=','user.u_id')
            ->select(['*'])
			->where(['order.u_boss_id'=>$id])
			->get();
		//var_dump($orders);die;
		return view('html.order',['orders'=>$orders]);
	}

	//房东的房源管理
	public function housingList(){
		$id=$_COOKIE['id'];
		$house=DB::table('house')
			->join('user', 'house.u_id', '=', 'user.u_id')
			->join('class','house.class_id','=','class.class_id')
            ->select(['*'])
			->where(['house.u_id'=>$id])
			->get();
		return view('html.housingList',['house'=>$house]);
	}
	//房东的房源删除

	public function  houseDel(){
		$id=$_GET['id'];
		$houseDel=DB::table('house')
			->where('house_id', '=', $id)
			->delete();
		if($houseDel){
			return redirect()->action('UserController@housingList');
		}else{
			echo "<script>alert('删除失败')</script>";
			return redirect()->action('UserController@housingList');
		}
	}
	//房客的个人信息
	public function  usersList(){
		$id=$_COOKIE["id"];
		$user=DB::table('user')
            ->select()
			->where(['u_id'=>$id])
			->get();
		//var_dump($user);die;
		return view('html.usersList',['user'=>$user]);
	}

	//房客的订单管理
	public function OrderManagement(){
		$id=$_COOKIE["id"];
		$orders=DB::table('order')
			->join('house', 'order.house_id', '=', 'house.house_id')
            ->select()
			->where(['order.u_id'=>$id])
			->get();
		//var_dump($orders);die;
		return view('html.orders',['orders'=>$orders]);
	}
	//房客订单取消
	public function CancelOrder(){
		$id=$_GET["id"];
		$update=DB::table('order')
            ->where('order_id', $id)
            ->update(array('order_state' => 4));
		if($update){
			return redirect()->action('UserController@OrderManagement');
		}
	}
	//房客查看自己的收藏
	public function collection(){
		$id=$_COOKIE["id"];
		$collect=DB::table('collect')
			->join('house', 'collect.house_id', '=', 'house.house_id')
            ->select()
			->where(['collect.u_id'=>$id])
			->get();
		//var_dump($collect);die;
		return view('html.collection',['collect'=>$collect]);
	}
	//删除收藏
	public function  collectDel(){
		$id=$_GET['id'];
		$collectDel=DB::table('collect')
			->where('coll_id', '=', $id)
			->delete();
		if($collectDel){
			return redirect()->action('UserController@collection');
		}
	}
}
?>