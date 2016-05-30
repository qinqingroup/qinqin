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
           $nickname=Request::input("names");
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
		//echo 12312;die;
		$name=htmlspecialchars(Request::input('u_name'));
		$pwd=htmlspecialchars(Request::input('u_pwd'));
		$email=htmlspecialchars(Request::input('u_email'));
		$sex=htmlspecialchars(Request::input('u_sex'));
		$ressadd=htmlspecialchars(Request::input('u_ressadd'));
		$phone=htmlspecialchars(Request::input('u_phone'));
		$tel=htmlspecialchars(Request::input('u_tel'));
		$area=htmlspecialchars(Request::input('u_area_id'));
		$country=htmlspecialchars(request::input("country"));
		$city=htmlspecialchars(request::input("city"));
		$place=htmlspecialchars(request::input("place"));
		$nickname=htmlspecialchars(request::input("u_nickname"));
		$zhuzhi=$country.','.$city.','.$place;
		if($phone==$tel){

		$insert= DB::table('user')->insert(
			array(	
				'u_email' => $email,
				'u_pwd' => $pwd,
				'u_name'=>$name,
				'u_ressadd'=>$ressadd,
				'u_sex'=>$sex,
				'u_phone'=>$phone,
				'u_zhuzhi'=>$zhuzhi,
				'u_area_id'=>$area,
				'u_nickname'=>$nickname,
				'u_time'=>date("Y-m-d H:i:s")
			)
		);
		//获取最后一条id
		$select=DB::table('user')
				->select()
				->orderBy('u_id', 'desc')
				->get();
		
		$ids=$select[0]->u_id;
		$ur=DB::table('u_r')->insert(
			array(	
				'u_id' => $ids,
				'r_id' => $area
			)
		);
		if($ur){
			return view("html.login");
		}
	}else{
		echo "<script>alert('短信验证码输入错误')</script>".Request::action("IndexController@reg");
	}
	}
	
}

?>
