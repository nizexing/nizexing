<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{   
   //显示后台主页
   public function getIndex()
   {
        return view('/config/index');
   }
}
