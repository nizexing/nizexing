<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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

        $regtime=time();

         DB::table('user')->insert(['tel'=>$data['tel'],'username'=>$data['name'],'password'=>$data['password'],'regtime'=>$regtime]);

         return redirect('/login/login');

        
    }


    //验证电话号码
    public function getYz()
    {
       $phone=$_GET['phone'];

       $a=DB::table('user')->where('tel',$phone)->first();

       return $a;
    }


    public function getCode()
    {
        echo session('code');
    }
   
}
