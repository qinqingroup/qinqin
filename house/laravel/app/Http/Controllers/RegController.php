<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Request,Validator,DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;


/**
*	reg
*	RegController
*	2016/5/20
*	于思蕊
*	
*/
 
class RegController extends BaseController
{
	//验证昵称唯一性
	public function nickname(){
		if(Request::ajax()){
           $nickname=$_POST['names'];
			$users=DB::table('user')
				->select()
				->where('u_nickname','=',$nickname)
				->get();
			if($users){
				echo 1;
			}else{
				echo 0;
			}
        }		
	}
	//用户注册
	public function userAdd(){
		//接值  添加
		$name=Request::input('u_name');
		$pwd=Request::input('u_pwd');
		$email=Request::input('u_email');
		$sex=Request::input('u_sex');
		$ressadd=Request::input('u_ressadd');
		$phone=Request::input('u_phone');
		$area=Request::input('u_area_id');
		$country=request::input("country");
		$city=request::input("city");
		$place=request::input("place");
		$zhuzhi=$country.','.$city.','.$place;
		$insert=DB::table('user')->insert(
			array(	
				'u_email' => $email,
				'u_pwd' => $pwd,
				'u_name'=>$name,
				'u_ressadd'=>$ressadd,
				'u_sex'=>$sex,
				'u_phone'=>$phone,
				'u_zhuzhi'=>$zhuzhi,
				'u_area_id'=>$area,
				'u_time'=>date("Y-m-d H:i:s")
			)
		);
		if($insert){
			return view("html.login");
		}
	}
	
}

?>