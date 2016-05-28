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
Route::get('/index', 'IndexController@index');
//展示登陆
Route::get('/login', 'IndexController@login');
//列表展示
Route::get('/about', 'IndexController@about');

Route::get('/blog', 'IndexController@blog');

Route::get('/blog_single', 'IndexController@blog_single');

Route::get('/buy', 'IndexController@buy');

Route::get('/buy_single', 'IndexController@buy_single');

Route::get('/career', 'IndexController@career');

Route::get('/faqs', 'IndexController@faqs');

Route::get('/feedback', 'IndexController@feedback');

Route::get('/loan', 'IndexController@loan');

Route::get('/loan_single', 'IndexController@loan_single');

Route::get('/privacy', 'IndexController@privacy');

Route::get('/register', 'IndexController@register');

Route::get('/single', 'IndexController@single');

Route::get('/suggestion', 'IndexController@suggestion');

Route::get('/terms', 'IndexController@terms');

Route::get('/typo', 'IndexController@typo');

Route::get('/contact', 'IndexController@contact');

Route::get('/mobile_app', 'IndexController@mobile_app');

Route::get('/top', 'IndexController@top');

Route::get('/footer', 'IndexController@footer');