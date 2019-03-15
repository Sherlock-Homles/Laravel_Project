<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// 默认进入显示主页
Route::get('/','Home\IndexController@Index');
// 搜索
Route::any('search','Home\IndexController@Search');
// 退出功能
Route::any('logout','Login\LoginController@Logout');
// 登录模块
Route::group(['prefix'=>'login'],function(){
    // 登录页面显示
    Route::any('index','Login\LoginController@Index')->name('login.index');
    // 登录方法
    Route::any('login','Login\LoginController@Login')->name('login.login');
    // 注册页面显示
    Route::any('register','Login\LoginController@Register')->name('register.register');
    // 注册方法显示
    Route::any('doregister','Login\LoginController@doRegister')->name('doregister.doregister');
});
// 用户模块
Route::group(['prefix'=>'user'],function(){
    // 用户信息页面显示
    Route::any('index','User\UserController@Index')->name('user.index');
    // 搜索用户信息
    Route::any('search','User\UserController@Search')->name('user/search');
});
// 文章管理
Route::group(['prefix'=>'article'],function(){
    // 列表
    Route::get('index','Article\ArticleController@index')->name('article.index');
    // 添加显示
    Route::get('add','Article\ArticleController@add')->name('article.add');
    // 添加处理
    Route::post('store','Article\ArticleController@store')->name('article.store');
    // 修改显示
    Route::get('edit/{id}','Article\ArticleController@edit')->name('article.edit')->where(['id'=>'\d+']);
    // 修改处理
    Route::put('edit/{id}','Article\ArticleController@update')->name('article.edit')->where(['id'=>'\d+']);
    // 删除
    Route::delete('del/{id}','Article\ArticleController@del')->name('article.del')->where(['id'=>'\d+']);
    // 根据指定ID看对应的文章
    Route::get('show/{id}','Article\ArticleController@show')->name('article.show')->where(['id'=>'\d+']);
});
