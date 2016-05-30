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
		$name=htmlspecialchars(Request::input('u_name'));
		$pwd=htmlspecialchars(Request::input('u_pwd'));
		@$names=$_COOKIE["name"];
		$user=DB::table('user')
			->select()
			->where(['u_nickname'=>$name])
			->get();
		if($names==""){
			if(!empty($user)){
				$id=$user[0]->u_id;
				if($user[0]->u_lock==1){
					echo "<script>alert('您的账号状态异常，请联系管理员')</script>";
					return view('html.login');
				}else{
					if($user[0]->u_pwd==$pwd){
						setcookie('name',$name);
						setcookie('id',$id);
						//echo $_COOKIE["name"];die;
					   return Redirect::action("IndexController@index");
					}else{
						echo "<script>alert('密码错误')</script>".Redirect::action("IndexController@login");
						//return view('html.login');
					}
				}				
			}else{
				echo "<script>alert('此用户不存在')</script>".Redirect::action("IndexController@login");
				//return view('html.login');
			}
		}else{
			echo '<script>alert("您已登陆，请勿重复登录")</script>'.Redirect::action("IndexController@login");
			//return view('html.login');
		}			
			
	}
		//退出功能
	public  function  tui(){
		setcookie('name','');
		setcookie('id','');
		return redirect()->action('IndexController@index');
	
	}
}
	

?>