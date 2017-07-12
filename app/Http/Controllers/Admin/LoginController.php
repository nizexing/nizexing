<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class LoginController extends Controller
{ 
  //显示登录页
  public function getLogin(){

    return view('admin.login');
  }


  public function postInsert(Request $request)
  {
    //获取登录数据
    $a=$request->except('_token');
    $request->flash();
    //校验账号获得校验结果
    $b=DB::table('admin')->where('adminname',$a['user'])->first();

    //判断
    if($b==null)
    {
      return back()->with('error','该账号不存在!');

    }else{

      if($a['password'] != $b['password'] && $a['yanzm'] == session('code'))
      {
        return back()->with('error','该账号密码错误!');
      }else

      if($a['yanzm'] != session('code') && $a['password'] == $b['password'])
      {
        return back()->with('error','您输入的验证码错误!');
      }else

      if($a['password']==$b['password'] && $a['yanzm']==session('code'))
      {
        Session(['user'=>$b['adminname']]);
        return redirect('/admin/admin/index');
      }

      
    }

















    //判断校验结果
    // if($b){
    //     //账号存在且密码正确
    //     return redirect('/admin/admin/index');
    // }else{
    //   //账号不存在或密码错误
    //     return back()->with('error','账号或密码不正确!');
    // }
  }
}
