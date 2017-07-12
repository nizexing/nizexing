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
         // dd($reg);
        return view('admin.detail',compact('reg'));
   }

   //删除指定用户所有数据
   public function getDelete($id)
   {   
      
     DB::table('user')->where('uid',$id)->delete();
     DB::table('user_detail')->where('uid',$id)->delete();

     return redirect('/admin/user/user');
    
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

        $role=array(
                'username'=>'required|max:10', //必填
                'email'=>'required|email',
                'tel'=>'required|max:11'
            );
        $errormassge=array(
                'username.required'=>'用户名必填!',
                'username.max'=>'用户名最大长度为10',
                'email.required'=>'邮箱必填!',
                'email.email'=>'邮箱不符合规则!',
                'tel.required'=>'电话号码必填!',
                'tel.max'=>'电话长度为11位!',
            );

        if($request->hasFile('photo'))
        {
            $data=$request->except('_token');

            $ss=DB::table('user')->where('username',$data['username'])->first();
            if($ss){
                return back()->with('errora','该账号已被使用!');
            }else{
                    $data['birth']=$data['year'].'-'.$data['month'].'-'.$data['day'];
                    $data['birth']=strtotime($data['birth']);
                    unset($data['year']);
                    unset($data['month']);
                    unset($data['day']);
                    $file= $request -> photo;
                    //随机一个文件名
                    $a=rand(0000,9999).time();

                    //获取上传文件的后缀
                    $hz='.'.$request->file('photo')->getClientOriginalExtension();

                    //设置文件url
                    $res = $file->move('uploads/image',$a.$hz);

                    //头像地址
                    $url='/uploads/image/'.$a.$hz;

                    //将部分数据存入user表
                    $num=DB::table('user')->insertGetId(['username'=>$data['username'],'password'=>$data['password'],'tel'=>$data['tel'],'name'=>$data['name']]);

                    //将部分数据存入user_detail表
                    DB::table('user_detail')->insert(['uid'=>$num,'sex'=>$data['sex'],'email'=>$data['email'],'birth'=>$data['birth'],'sign'=>$data['sign'],'photo'=>$url]);
                    //完成后跳转至用户列表
                    return redirect('/admin/user/user');
            } 
                }else{
                    //不通过返回
                    return back()->with('error','头像不能为空!');
                }

}
}
?>