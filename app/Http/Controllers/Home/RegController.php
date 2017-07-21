<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
class RegController extends Controller
{
    //显示注册列表
    public function getZhuce()
    {
      return view('home.login.zhuce');
    }

    //接收用户注册数据
    public function postInsert(Request $request)
    {
        $data = $request->except('_token');

        $user=DB::table('user')->where('username',$data['name'])->first();
        $tel=DB::table('user')->where('tel',$data['tel'])->first();

        if($user || $tel)
        {
            return back()->with('error','账号或电话已被使用!,请重新注册!');

        }else{

            $regtime=time();

            $data['password']=Hash::make($data['password']);
            // dd($data);
             $num=DB::table('user')->insertGetId(['tel'=>$data['tel'],
                                             'username'=>$data['name'],
                                             'password'=>$data['password'],
                                              'regtime'=>$regtime]);


             if($num){
                         DB::table('user_detail')->insert(['uid'=>$num['uid']]);
                          return redirect('/login/login');
                    }else{

                        return back();
        }
        }

       
       

        

        
    }


    //验证电话号码
    public function getYz()
    {
       $phone=$_GET['phone'];

       $a=DB::table('user')->where('tel',$phone)->first();

       return $a;
    }

    // ajax  发送验证码
    public function getCode()
    {
        echo session('code');
    }
    //ajax      判断用户名是否被注册
    public function getName()
    {   
        $name=$_GET['username'];

        $a=DB::table('user')->where('username',$name)->first();

        if($a){
            echo 1;
        }else{
            echo 0;
        }
    }
   
}
