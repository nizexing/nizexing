<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UrlController extends Controller
{
 //获取友情链接
   public function getUrl()
   {
        $data=DB::table('url')->paginate(5);
        return view('admin.url',compact('data'));
   }

   //显示修改链接表单
   public function getEdit($id)
   {    
        $data=DB::table('url')->where('id',$id)->first();

        return view('admin.editurl',compact('data'));
   }

   //接收修改表单数据
   public function postEdits(Request $request)
   {
        $data=$request->expect('_token');
        dd($data);
   }




   //删除指定链接数据
   public function getDelete($id)
   {
      DB::table('url')->where('id',$id)->delete();
      return redirect('/admin/url/url');
   }



   //设置推荐状态
   public function postStatus()
   {
    
   }
}
