<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//展示首页面
Route::get('/', 'IndexController@index');
Route::get('/index/index', 'IndexController@index');
//展示登陆
Route::get('/login', 'IndexController@login');



//关于我们
Route::get('/index/about', 'IndexController@about');
//注册展示
Route::get('/reg', 'IndexController@register');
//三级联动
Route::get('/regs',"IndexController@regs");
//注册验证昵称的唯一性
Route::get('/nickname','RegController@nickname');
//注册添加
Route::post('/userAdd','RegController@userAdd');
//登陆
Route::post('/logins','LoginController@logins');
//退出
Route::get('/tui','LoginController@tui');
//个人中心
Route::get('/user', 'UserController@index');
//我的收藏
Route::get('/collect', 'UserController@collect');
//删除收藏
Route::get('/collectDel', 'UserController@collectDel');
//房东的订单管理
Route::get('/orderList', 'UserController@orderList');
//房客的订单管理
Route::get('/ordersList', 'UserController@ordersList');
//房源管理
Route::get('/housingList', 'UserController@housingList'); 
//房客取消订单
Route::get('/CancelOrder', 'UserController@CancelOrder'); 
//房源删除
Route::get('/houseDel', 'UserController@houseDel'); 
//头像的修改
Route::post('/photoUpdate','UserController@photoUpdate');
//房源信息修改
Route::get('/housingUpdate','UserController@housingUpdate');
//电话号码即点即改
Route::get('/phoneUpd','UserController@phoneUpd');
//邮箱
Route::get('/emailUpd','UserController@emailUpd');
//实名认证
Route::get('/auth','UserController@auth');
//实名认证
Route::post('/auth_add','UserController@auth_add');


/**
 * 房屋详情
 */
Route::get('/House/single', 'HouseController@single');
//评论处理
Route::get('/House/adddesc', 'HouseController@adddesc');
//收藏
Route::get('/House/collect', 'HouseController@collect');

//收藏
Route::get('/House/order', 'HouseController@order');

//房屋保障
Route::get('/index/safe', 'IndexController@safe');
//理想搜索
Route::post('/index/searchhouse', 'IndexController@searchhouse');

//房源列表
Route::get('/House/index', 'HouseController@index');
//热买房
Route::get('/House/hot', 'HouseController@hot');
//精品房
Route::get('/House/best', 'HouseController@best');
//推荐房
Route::get('/House/tui', 'HouseController@tui');

//获取手机短信
Route::get('/tel','UserController@tel');