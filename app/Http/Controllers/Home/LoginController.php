<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
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

        //存闪存
        $request->flash();

        //如果用电话号码登录
       $b=DB::table('user')->where('tel',$a['tel'])->first();

       //如果用户名登录
       $c=DB::table('user')->where('username',$a['tel'])->first();

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

    //忘记密码,给表单
    public function getForgot()
    {
      return view('home.login.forgot');
    }

    //收集账号和邮箱
    public function postData(Request $request)
    {
      $data=$request->except('_token');
      // dd($data);
      
      // 通过账号获得用户信息
      $user=DB::table('user')->where('username',$data['user'])->first();

      //通过uid查询注册邮箱
      $users=DB::table('user_detail')->where('uid',$user['uid'])->first();

      //取出邮箱
      $email=$users['email'];
    // dd($email);
    
    // 判断输入的邮箱与注册邮箱是否相同
      if($data['email']==$email)
      {
          $token=str_random(30);

          $time=time();

          Session::put('token',$token);

          Session::put('time',$time);
          // dd($token);
          
          //发送邮件
          Mail::send('home.emailback', ['user' => $user,'token'=>$token,'time'=>$time], function ($m) use ($email) {

            $m->to($email)->subject('AC FUN 密码重置!');

        });

        echo '邮件已发送,请去邮箱点击验证链接,修改密码!!!谢谢!';

      }else{

        return back()->with('error','邮箱不正确!');

      }
    }

    public function getEdit(Request $request)
    {
      $a=$request->all();

      $user=$a['user'];

      $b=session('time')+3600;
      
      if(session('token') ==$a['token'] && session('time')<$b)
        {
          return view('home.login.email',compact('user'));

        }else

        if(session('token') ==$a['token'] && session('time')>$b)
          {
            echo '对不起!邮箱验证已超时,请重新去发送验证邮件!';

            return redirect('/login/forgot');
          };

    }

    //修改密码
    public function postReset(Request $request)
    { 
      $a=$request->except('_token');

      $b=$a['password'];

      DB::update('update user set password='.$b.' where username=?',[$a['user']]);

      return redirect('/login/login');
    } 

    //接收ajax
    public static function getUser()
    {
      $a=$_GET['user'];

      $b=DB::table('user')->where('username',$a)->first();

      if($b==null)
      {
        echo '该账号不存在!请输入正确的账号!';
      }

    }

}