<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//管理员管理控制器
class AdminController extends Controller
{   
   //显示后台主页
   public function getIndex()
   {	
        return view('/config/index');
   }

   
}
