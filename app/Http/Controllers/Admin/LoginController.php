<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
  public function getLogin(){
    return view('admin.login');
  }


  public function postInsert(Request $request)
  {
    //获取登录数据
    $a=$request->except('_token');
    // dump($a);
    //校验账号密码获得校验结果与
    $b=DB::table('admin')->where(['adminname'=>$a['user'],'password'=>$a['password']])->first();
    //判断校验结果
    if($b){
        //账号存在且密码正确
        return redirect('/admin/admin/index');
    }else{
      //账号不存在或密码错误
        return back()->with('error','账号或密码不正确!');
    }
  }
}
