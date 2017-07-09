<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pinlunController extends Controller
{
   public function postPinlun(Request $request,$data,$user)
   {        //获得评论内容
            $a=$request->except('_token');
            $time=time();
            DB::table('comment')->insert(['uid'=>$user,'vid'=>$data,'content'=>$a['content'],'hfcontent'=>'','ctime'=>$time]);

            return back();
   }
}
