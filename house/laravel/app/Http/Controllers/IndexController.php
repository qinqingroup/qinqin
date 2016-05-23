<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use DB;

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
		return view("html.register");
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
