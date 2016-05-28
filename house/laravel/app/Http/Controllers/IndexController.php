<?php
namespace App\Http\Controllers;

class IndexController extends Controller {
	//展示首页面
	public  function index(){
		return view("html.index");
	}
	//展示登陆
	public  function login(){
		return view("html.login");
	}
	//商品列表展示
	public  function goodslist(){
		return view("html.buy_single");
	}

	public  function about(){
		return view("html.about");
	}

	public  function blog(){
		return view("html.blog");
	}

	public  function blog_single(){
		return view("html.blog_single");
	}

	public  function buy(){
		return view("html.buy");
	}

	public  function buy_single(){
		return view("html.buy_single");
	}

	public  function career(){
		return view("html.career");
	}

	public  function faqs(){
		return view("html.faqs");
	}

	public  function feedback(){
		return view("html.feedback");
	}

	public  function loan(){
		return view("html.loan");
	}

	public  function loan_single(){
		return view("html.loan_single");
	}

	public  function privacy(){
		return view("html.privacy");
	}

	public  function register(){
		return view("html.register");
	}

	public  function single(){
		return view("html.single");
	}

	public  function suggestion(){
		return view("html.suggestion");
	}

	public  function terms(){
		return view("html.terms");
	}

	public  function typo(){
		return view("html.typo");
	}

	public  function contact(){
		return view("html.contact");
	}

	public  function mobile_app(){
		return view("html.mobile_app");
	}

	public  function top(){
		return view("html.top");
	}

	public  function footer(){
		return view("html.footer");
	}

}	

?>
