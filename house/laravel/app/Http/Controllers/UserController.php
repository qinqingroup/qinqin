<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Request,Validator,DB,Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Cookie;
use Illuminate\Pagination\Paginator;

//use Illuminate\Pagination\Paginator;
//use Illuminate\Pagination\LengthAwarePaginator;



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
	//根据id显示个人信息
	public function index(){
		$id=$_COOKIE["id"];
		$user=DB::table('u_r')
            ->join('r_p', 'u_r.r_id', '=', 'r_p.r_id')
            ->join('power', 'r_p.p_id', '=', 'power.p_id')
            ->select()
			->where(['u_id'=>$id])
			->get();
		$users=DB::table('user')
            ->select()
			->where(['u_id'=>$id])
			->get();
		$sex=$users[0]->u_sex;
		$area=$users[0]->u_area_id;
		$city=$users[0]->u_zhuzhi;
		$diqu=DB::table('region')
            ->select()
            ->whereIn('region_id',array(1,18,255))
			->get();
			$g=$diqu[0]->region_name;
			$s=$diqu[1]->region_name;
			$q=$diqu[2]->region_name;
		return view('html.user',['user'=>$user,'users'=>$users,'g'=>$g,'s'=>$s,'q'=>$q]);
	}
	//展示房东的订单管理
	public function orderList(){
		$id=$_COOKIE["id"];
		$user=DB::table('u_r')
            ->join('r_p', 'u_r.r_id', '=', 'r_p.r_id')
            ->join('power', 'r_p.p_id', '=', 'power.p_id')
            ->select()
			->where(['u_id'=>$id])
			->get();
		$orders=DB::table('order')
			->join('house', 'order.house_id', '=', 'house.house_id')
			->join('user','order.u_id','=','user.u_id')
            ->select(['*'])
			->where(['order.u_boss_id'=>$id])
			->get();
			$area=$orders[0]->u_area_id;
			//var_dump($area);die;
		//var_dump($orders);die;
		return view('html.order',['orders'=>$orders,'area'=>$area,'user'=>$user]);
	}

	//房东的房源管理
	public function housingList(){
		$id=$_COOKIE['id'];
		$user=DB::table('u_r')
            ->join('r_p', 'u_r.r_id', '=', 'r_p.r_id')
            ->join('power', 'r_p.p_id', '=', 'power.p_id')
            ->select()
			->where(['u_id'=>$id])
			->get();
		$house=DB::table('house')
			->join('user', 'house.u_id', '=', 'user.u_id')
			->join('class','house.class_id','=','class.class_id')
			->where(['house.u_id'=>$id])
			->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');

			///$house->setPsth("custom/url");
			//$a="aaa";
		return view('html.housing',['house'=>$house,'user'=>$user]);
	}
	//房源信息修改
	/*public function housingUpdate(){
		$id=Request::input("id");
		$house=DB::table('house')
			->join('user', 'house.u_id', '=', 'user.u_id')
			->join('class','house.class_id','=','class.class_id')
			->where(['house.u_id'=>$id])
			->paginate($perPage = 3, $columns = ['*'], $pageName = 'page');
		return view('html.housing',['house'=>$house,'user'=>$user]);
	}*/
	//房东的房源删除

	public function  houseDel(){
		$id=Request::input("id");
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

	//房客的订单管理
	public function ordersList(){
		$id=$_COOKIE["id"];
		$user=DB::table('u_r')
            ->join('r_p', 'u_r.r_id', '=', 'r_p.r_id')
            ->join('power', 'r_p.p_id', '=', 'power.p_id')
            ->select()
			->where(['u_id'=>$id])
			->get();
		$orders=DB::table('order')
			->join('house', 'order.house_id', '=', 'house.house_id')
            ->select()
			->where(['order.u_id'=>$id])
			->get();
		//var_dump($orders);die;
		return view('html.orders',['orders'=>$orders,'user'=>$user]);
	}
	//房客订单取消
	public function CancelOrder(){
		$id=Request::input("id");
		$update=DB::table('order')
            ->where('order_id', $id)
            ->update(array('order_state' => 4));
		if($update){
			return redirect()->action('UserController@ordersList');
		}
	}
	//房客查看自己的收藏
	public function collect(){
		$id=$_COOKIE["id"];
		$user=DB::table('u_r')
            ->join('r_p', 'u_r.r_id', '=', 'r_p.r_id')
            ->join('power', 'r_p.p_id', '=', 'power.p_id')
            ->select()
			->where(['u_id'=>$id])
			->get();
		$collect=DB::table('collect')
			->join('house', 'collect.house_id', '=', 'house.house_id')
            ->select()
			->where(['collect.u_id'=>$id])
			->get();
		return view('html.collect',['collect'=>$collect,'user'=>$user]);
	}
	//删除收藏
	public function  collectDel(){
		$id=Request::input("id");
		$collectDel=DB::table('collect')
			->where('coll_id', '=', $id)
			->delete();
		if($collectDel){
			return redirect()->action('UserController@collect');
		}
	}


	//昵称修改
	public function  nicknameUpdate(){
		$id=$_COOKIE["id"];
		$nickname=Request::input("nickname");
		$update=DB::table('user')
            ->where('u_id', $id)
            ->update(array('u_nickname' => $nickname));
		//var_dump($update);die;
		if($update){
			echo 1;
		}else{
			echo 0;
		}
	}
	//用户名修改
	public function  usernameUpdate(){
		$id=$_COOKIE["id"];
		$username=Request::input("username");
		$update=DB::table('user')
			->where('u_id', $id)
			->update(array('u_name' => $username));
		//var_dump($update);die;
		if($update){
			echo 1;
		}else{
			echo 0;
		}
	}
	//邮箱修改
	public function emailUpd(){
		$id=Request::Input("id");
		$email=Request::input("name");
		$update=DB::table('user')
			->where('u_id', $id)
			->update(array('u_email' => $email));
		//var_dump($update);die;
		if($update){
			echo 1;
		}else{
			echo 0;
		}
	}

	//手机号修改
	public function phoneUpd(){
		$id=Request::Input("id");
		$phone=Request::input("name");
		$update=DB::table('user')
			->where('u_id', $id)
			->update(array('u_phone' => $phone));
		//var_dump($update);die;
		if($update){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	//修改头像
	public function photoUpdate(){
		$id=$_COOKIE["id"];
		$date=Input::all();
		$filename=$date["u_photo"]->getClientOriginalName();
		//var_dump($filename);die;
		//检验文件上传是否有效
		$path=$date['u_photo']->move("C:phpStudy\WWW\house\laravel\public\UserUploads",$filename);
		$update=DB::table('user')
			->where('u_id', $id)
			->update(array('u_photo' => $filename));
		return Redirect::action("UserController@index");
	}


	//实名认证前台展示
	public function auth(){
		$id=$_COOKIE["id"];
		$user=DB::table('u_r')
            ->join('r_p', 'u_r.r_id', '=', 'r_p.r_id')
            ->join('power', 'r_p.p_id', '=', 'power.p_id')
            ->select()
			->where(['u_id'=>$id])
			->get();
		$users=DB::table('user')
            ->select()
			->where(['u_id'=>$id])
			->get();
		$sex=$users[0]->u_sex;
		$area=$users[0]->u_area_id;
		$city=$users[0]->u_zhuzhi;
		$diqu=DB::table('region')
            ->select()
            ->whereIn('region_id',array(1,18,255))
			->get();
			$g=$diqu[0]->region_name;
			$s=$diqu[1]->region_name;
			$q=$diqu[2]->region_name;
		return view('html.auth',['user'=>$user,'users'=>$users,'g'=>$g,'s'=>$s,'q'=>$q]);
	}

	public function auth_add(){
		$id=$_COOKIE["id"];
		$update=DB::table('user')
			->where('u_id', $id)
			->update(array('u_state' => "2"));
		//var_dump($update);die;
		if($update){
			echo "<script>alert('提交成功')</script>".Redirect::action("UserController@auth");
		}else{
			echo "<script>alert('提交失败')</script>".Redirect::action("UserController@auth");
		}
		
	}

	//短信注册
	public function tel(){
		$phone=Request::input('phone');
		$num=rand(11111,99999);
		setcookie($phone,$num);
		$url="http://api.k780.com:88/?app=sms.send&tempid=50629&param=code%3d{$num}&phone=".$phone."&appkey=18371&sign=e8b21e0029fcd6502c0f2440dbdbfb26&format=json";
		$str=file_get_contents($url);
		if($str){
		 	echo 1;
		}
	}

}
?>