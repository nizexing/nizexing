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

 Route::get('/', function () {
     return view('welcome');
 });
// 后台路由
// 注册登录
Route::controller('admin/login','Admin\LoginController');
// 管理员管理路由
Route::controller('admin/admin','Admin\AdminController');
// 用户管理路由
Route::controller('admin/user','Admin\UserController');
// 分类管理路由
Route::controller('admin/type','Admin\TypeController');
// 视频管理路由
Route::controller('admin/video','Admin\VideoController');
// 网站管理路由
Route::controller('admin/config','Admin\ConfigController');


// 前台路由
// 首页路由
Route::controller('/index','Home\IndexController');
// 列表页路由
Route::controller('/list','Home\ListController');
// 注册路由
Route::controller('/reg','Home\RegController');
// 登录路由
Route::controller('/login','Home\LoginController');
// 视频播放页路由
Route::controller('/play','Home\PlayController');
// 个人中心路由
Route::controller('/member','Home\MemberController');