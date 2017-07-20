<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pinlunController extends Controller
{
   public function postPinlun(Request $request,$data,$user,$uname)
   {     
   	if(session('user')){


   			//获得评论内容
            $a=$request->except('_token');

            $time=time();

            $photo=session('user')['photo'];
            
            DB::table('comment')->insert(['uid'=>$user,
                                          'vid'=>$data,
                                      'content'=>$a['content'],
                                        'ctime'=>$time,
                                        'photo'=>$photo,
                                        'uname'=>$uname]);

            
            return back();
        }else{

        	return redirect('/login/login');
        }
   }
}
