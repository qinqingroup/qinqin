<?php

//首页展示

Route::get('/',"IndexController@index3");
//房源分类展示
Route::get('/index',"IndexController@classindex");
//注册页面
Route::get('/reg',"IndexController@register");
//登陆页面
Route::get('/login',"IndexController@login");
//房源详情页
Route::get('/housing',"IndexController@housing");
//个人中心首页
Route::get('/users','IndexController@index');
//个人信息
Route::get('/userlist','IndexController@userlist');
//头像
Route::get('/headportrait','IndexController@headportrait');

Route::group(['middleware' => ['web']], function () {
    //
});

