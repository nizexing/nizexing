<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
  public function getLogin(){
    return view('admin.login');
  }


  public function postInsert(Request $request)
  {
    $a=$request->except(['_token']);
    dump($a);
    $b=DB::table('')->where([''=>$a['user'],''=>$a['password']])->first();
    if($b){

    }else{
        
    }

    
  }
}
