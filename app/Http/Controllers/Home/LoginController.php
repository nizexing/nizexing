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
        $a = $request->except('_token');

        $request->flash();

       $b=DB::table('user')->where('tel',$a['tel'])->first();

       if($a['tel'] != $b['tel'])
       {
            return back()->with('error','该账号不存在');
       }
       //验证密码是否正确
       if($a['tel'] == $b['tel'] && $a['password'] != $b['password'])
       {
           return back()->with('error','该账号密码错误');
       }
       //验证码输入是否正确
       if($a['tel'] == $b['tel'] && $a['password'] == $b['password'] && $a['code'] != session('code'))
       {
           return back()->with('error','输入的验证码错误');
       }
       // 全都正确跳转至首页
      if($a['tel'] == $b['tel'] && $a['password'] == $b['password'])
      {   
          $tel=DB::table('user')->where('tel',$b['tel'])->get()[0];

          session(['user'=>$tel['username']]);
          
          return redirect('/index');
      }


    }


}