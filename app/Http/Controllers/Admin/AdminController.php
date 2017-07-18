<?php

namespace App\Http\Controllers\Admin;
use Session;
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
   	if(session('user'))
   		{
			return view('/config/index');
   		}else{
   			return redirect('/admin/login/login')->with('error','请先登录!');
   		}
        
   }

    //浏览管理员
    public function getAdmin()
    {
      $admin=DB::table('admin')->paginate(5);

      return view('admin.uadmin.admin',compact('admin'));
    }


    //增加管理员
    public function getAdmininsert()
    {

    }
   
    //删除管理员
    public function getAdmindelete()
    {

    }

    //修改管理员信息
    public function getAdminupdate()
    {
      
    }
   
}
