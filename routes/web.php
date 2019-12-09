<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info',function(){
    phpinfo();
});
Route::get('/test/redis1/','Test\TestController@redis1');
Route::get('/test/hello','Test\TestController@hello');
Route::get('/test/adduser','User\LoginController@addUser');
Route::get('/test/adduserdo','User\LoginController@adduserdo');
Route::get('/test/delete/{id}','User\LoginController@destroy');
Route::get('/test/update/{id}','User\LoginController@destroy');
//微信开发
Route::get('/wx','WeiXin\WxController@wechat');


