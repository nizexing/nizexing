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
        // dump($a);
        
    }
    public function getYz(){
       $phone=$_GET['phone'];
       $a=DB::table('user')->where('tel',$phone)->first();
       return $a;
    }
   
}
