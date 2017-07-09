<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
   
    public function  getIndex()
    {   
        //加载后台配置页面
        return view('config.index');
    }

        //配置管理
   
}
