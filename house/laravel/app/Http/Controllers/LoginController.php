<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Request,Validator,DB,Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;

use Illuminate\Session;

use Illuminate\Cookie;

/**
*	login
*	LoginController
*	2016/5/22
*	于思蕊
*	
*/


class LoginController extends BaseController
{
	//验证登录
	public function logins(){
		$name=Request::input('u_name');
		$pwd=Request::input('u_pwd');
		$user=DB::table('user')
			->select()
			->where(['u_name'=>$name])
			->get();
		$id=$user[0]->u_id;
		if($user){
			if($user[0]->u_name==$name){
				if($user[0]->u_pwd==$pwd){
                    setcookie('name',$name);
					setcookie('id',$id);
                   return "<script>alert('登陆成功')</script>".redirect()->action("IndexController@index3");
				}else{
					return "<script>alert('密码错误')</script>".Redirect::action("IndexController@login");
					
				}
			}else{
				echo '<script>alert("用户名不存在");</script>';
				return view('html.login');
			}
		}
	}
	
	

}

?>