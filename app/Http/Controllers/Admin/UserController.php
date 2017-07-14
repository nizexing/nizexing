<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
     //用户管理
   public function getUser()
   {    //获取所有用户
       
        $user = DB::table('user')->paginate(5);
        return view('admin.user',compact('user'));
   }
    //用户详情列表
   public function getDetail(Request $request,$id)
   {

        $data=DB::table('user_detail')->where('uid',$id)->first();
        $user=DB::table('user')->where('uid',$id)->first();
        $user['regtime']=date('Y年m月d H时i分s秒',$user['regtime']);
        $data['birth']=date('Y年--m月--d日',$data['birth']);

         $reg=array_merge($data,$user);
        return view('admin.detail',compact('reg'));
   }

   //删除用户
   public function getDelete($id)
   {   
      //删除指定用户
     $a=DB::table('user')->where('uid',$id)->delete();

     return redirect('/admin/admin/user');
    
   }



   //获取修改后的用户资料
   public function postUpdate(Request $request)
   {    
        $a=$request->except(['_token']);
        $b=DB::table('user')->where('uid',$a['uid'])->update(['tel'=>$a['tel'],'name'=>$a['name']]);
        $c=DB::table('user_detail')->where('uid',$a['uid'])->update(['sign'=>$a['sign'],'birth'=>$a['birth'],'email'=>$a['email'],'sex'=>$a['sex']]);


        return redirect('/admin/user/user');
   }


   //添加用户
   public function getInsert()
   {    //显示添加表单
        return view('admin.insert');
   }



   // 获取添加用户表单的所有数据
   public  function postData(Request $request)
   {

        $data=$request->except('_token');
        $data['birth']=$data['year'].'-'.$data['month'].'-'.$data['day'];
        unset($data['year']);
        unset($data['month']);
        unset($data['day']);
        dump($data);
   }
}

?>