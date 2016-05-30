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


class IndexController extends Controller {
	//展示首页面
	public  function index(){
		$photo = DB::table('photo')->limit(4)->get();
		$re = DB::table('house')->limit(4)->get();
		$res = DB::table('house')->where('house_heat', '=', 1)->limit(3)->get();
		return view("html.index", ['data' => $res,'datas' => $re,'photo'=>$photo]);
	}

	//展示登陆
	public  function login(){
		return view("html.login");
	}
	//商品列表展示
	public  function HouseList(){
		return view("html.HouseList");
	}
	//注册
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
	//客服保障计划
	public  function safe(){
		return view("html.safe");
	}

		//搜索理想
	public  function searchhouse(){
		
		$name=Request::Input('searchcity');
		//$time=Request::Input('searchdate');
		$city=DB::table('house')
			->select()
			->where('house_name','like',"%$name%")
			->get();

			var_dump($city);die;
		// return view("html.morehouse");
	}

	//关于我们
	public  function about(){
		return view("html.about");
	}


}	

?>
