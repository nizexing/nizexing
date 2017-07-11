<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session;
class LoginController extends Controller
{
//    登录
  public function getLogin()
  {    
      return view('home.login.login');
  }

  //接收用户登录的账号密码

    public function postDologin(Request $request)
    {
        //表单接收的账号密码
        $a = $request->except('_token');

        $request->flash();
        //如果用电话号码登录
       $b=DB::table('user')->where('tel',$a['tel'])->first();

       //如果用户名登录
       $c=DB::table('user')->where('username',$a['tel'])->first();
       // dump($a);
       // dump($b);
       // dump($c);
       // exit;

      //验证账号或电话号码是否存在
       if($b==null && $a['tel'] != $c['username'])
       {
          return back()->with('error','该账号不存在');
       }

       if($c==null && $a['tel'] != $b['tel'])
       {
          return back()->with('error','该账号不存在');
       }
     


       //验证密码是否正确
       if($a['tel'] == $b['tel'] && $a['password'] != $b['password'] && $c==null)
       {
           return back()->with('error','该账号密码错误');
       }

        if($a['tel'] == $c['username'] && $a['password'] != $c['password'] && $b==null)
       {
           return back()->with('error','该账号密码错误');
       }

       //验证码输入是否正确
       if($a['tel'] == $b['tel'] && $a['password'] == $b['password'] && $a['code'] != session('code') && $c==null)
       {
           return back()->with('error','输入的验证码错误');
       }

       if($a['tel'] == $c['username'] && $a['password'] == $c['password'] && $a['code'] != session('code') && $b==null)
       {
           return back()->with('error','输入的验证码错误');
       }

       // 全都正确跳转至首页
      if($a['tel'] == $b['tel'] && $a['password'] == $b['password'] && $c==null && $a['code']==session('code'))
      {   
          $tel=DB::table('user')->where('tel',$a['tel'])->get()[0];
          $detail=DB::table('user_detail')->where('uid',$tel['uid'])->first();

          $user=array_merge($tel,$detail);
          session(['user'=>$user]);
          
          return redirect('/index');
      }

       if($a['tel'] == $c['username'] && $a['password'] == $c['password'] && $b==null && $a['code']==session('code'))
      {    
          $tel=DB::table('user')->where('username',$a['tel'])->get()[0];
          // 获取详情
          $detail=DB::table('user_detail')->where('uid',$tel['uid'])->first();

          $user=array_merge($tel,$detail);
          session(['user'=>$user]);
          
          return redirect('/index');
      }


    }


}