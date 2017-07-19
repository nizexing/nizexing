<?php

namespace App\Http\Controllers\Admin;
use Session;
use Illuminate\Http\Request;
use DB;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//管理员管理控制器
class AdminController extends Controller
{   
   //显示后台主页
   public function getIndex()
   {	
   	if(session('admin'))
   		{

			return view('/config/index');

   		}else{

   			return redirect('/admin/login/login')->with('error','请先登录!');
   		}
        
   }

    //浏览管理员
    public function getAdmin()
    {
      $admin=DB::table('admin_jiaose')
                     ->join('admin','admin.id','=','admin_jiaose.admin_id')
                     ->join('jiaose','admin_jiaose.jiaose_id','=','jiaose.id')
                     ->paginate(5);

      return view('admin.uadmin.admin',compact('admin'));
    }


    //管理员详情
    public function getAdmindetail($id)
    {


      // 获取管理员的详情和角色信息
      $admin=DB::table('admin_jiaose')->where('admin_id',$id)
                  ->join('admin','admin_jiaose.admin_id','=','admin.id')
                  ->join('jiaose','admin_jiaose.jiaose_id','=','jiaose.id')
                  ->get();

     return view('admin.uadmin.admindetail',compact('admin'));

    }


    //增加管理员,显示添加表单
    public function getAdmininsert()
    {
         return view('admin.uadmin.addadmin');
    }
   
    //获取管理员详情
    public function postInsertdata(Request $request)
    {
         $data=$request->except('_token');

         // $user=DB::table('admin')->where('adminname',$data['adminname'])->first();

         // if(!empty($user)){
         //    return back()->with('errors','该账户以被注册!');
         // }

         //管理员密码加密哈希
         $data['password']=Hash::make($data['password']);

        if(count($data)<6){

            $request->flash();

            return back()->with('error','请选择管理员角色!');

        }else{

            $a=DB::table('admin')->insertGetId(
                     ['adminname'=>$data['adminname'],
                       'password'=>$data['password'],
                            'tel'=>$data['tel'],
                          'email'=>$data['email']]);

            DB::table('admin_jiaose')->insert(
                          ['admin_id'=>$a,
                          'jiaose_id'=>$data['jiaose_id']]);
        }

        return redirect('admin/admin/admin');

    } 



    //删除管理员
    public function getAdmindelete($id)
    {


      //获取用户数据
      $num=DB::table('admin')->where('id',$id)->get();
      //获取用户角色数据
      $jnum=DB::table('admin_jiaose')->where('admin_id',$id)->get();
      dd($jnum);
      //删除相关数据
      //删除用户表
      DB::table('admin')->where('id',$id)->delete();
      //删除用户角色
      $a=DB::table('admin_jiaose')->where('admin_id',$id)->delete();

      //删除用户角色权限数据
      DB::table('jiaose_auth')->where('jiaose_id',$jnum['jiaose_id'])->delete();

      return redirect('/admin/admin/admin');
    }




    //修改管理员信息
    public function postAdminupdate(Request $request)
    {
      $a=$request->except('_token');

      if($a['password']=='')
      {

         $b=DB::table('admin')->where('id',$a['id'])
                           ->update(
                                   ['tel'=>$a['tel'],
                                  'email'=>$a['email']]);
      }else{

            //管理员密码哈希加密
          $a['password']=Hash::make($a['password']);

           $b=DB::table('admin')->where('id',$a['id'])
                           ->update(
                              ['password'=>$a['password'],
                                    'tel'=>$a['tel'],
                                  'email'=>$a['email']]);
      }

      $c=DB::table('admin_jiaose')->where('admin_id',$a['id'])
                                  ->update(['jiaose_id'=>$a['jiaose_id']]);

      return redirect('admin/admin/admin');
    }



    //接收页面的ajax
    public static function getUniquer()
    {
      $a=$_GET['adminname'];

      $b=DB::table('admin')->where('adminname',$a)->get();

      if($b!=null)
      {
            echo 1;
      }

    }

   
}
