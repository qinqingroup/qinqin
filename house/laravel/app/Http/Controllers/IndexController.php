<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Request,Validator,DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Cookie;

class IndexController extends BaseController
{
	//首页展示
	public function index3(){
		return view("html.index3");
	}
	//根据分类展示
	public function classindex(){
		return view("html.index");
	}
	//注册页面
	public function register(){
		$user=DB::table('region')
			->select()
			->where(['parent_id'=>0])
			->get();
		return view("html.register",["region"=>$user]);
	}
	//三级联动
	public function regs(){
		$id=$_GET['id'];
		$city=DB::table('region')
			->select()
			->where(['parent_id'=>$id])
			->get();
		if($city){
			echo json_encode($city);
		}else{
			echo 0;
		}
	}
	//登陆页面
	public function login(){
		return view("html.login");
	}

	//房源详情
	public function housing(){
		header("content-type:text/html;charset=utf-8");
		$house = DB::table('house')->where('house_id','29')->get();
		return view("html.housing");
	}
	//个人中心首页
	public function index(){

		return view('html.categories');
	}
	// 个人资料
    
    public function userlist(){

		return view('html.username');
	}
        	//头像
    public function headportrait(){

		return view('html.headpor');
	}
}

