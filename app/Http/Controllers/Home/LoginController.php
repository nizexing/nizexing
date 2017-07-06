<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $a = $request->except('_token');
        // dump($a);
        // dump(session('code'));
       $b=DB::table('user')->get()[0];
      // dump($b);
      exit;
      //验证账号是否正确
       if($a['username'] != $b['username'])
       {
            return back()->with('error','该账号不存在');
       }
       //验证密码是否正确
       if($a['username'] == $b['username'] && $a['password'] != $b['password'])
       {
           return back()->with('error','输入的密码错误');
       }
       //验证码输入是否正确
       if($a['username'] == $b['username'] && $a['password'] == $b['password'] && $a['code'] != session('code'))
       {
           return back()->with('error','输入的验证码错误');
       }
       // 全都正确跳转至首页
        if($a['username'] == $b['username'] && $a['password'] == $b['password'])
        {// {   设置cookie
            // $cookie=\Cookie::queue('username',$b['username'],3);
          // 将cookie发送到页面
            return redirect('/index/index')->with('user',$b);
       }

    }


}