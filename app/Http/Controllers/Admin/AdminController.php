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
      $admin=session('admin');

      $admins=DB::table('admin')->where('adminname',$admin)->first();

      $lastlogtime=date('Y年m月d日 H时i分s秒',$admins['lastlogtime']);
      
			return view('/config/index',compact('lastlogtime'));

        
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

    //权限添加表单
    public function getAuth()
    {
      return view('admin.auth.auth');
    }

    //接收权限分配
    public function postAuths(Request $request)
    {
      // 获取传输过来的分配的角色
      $data=$request->except('_token');

      //获取权限的ID
      $auth=DB::table('auth')->insertGetId(['urlname'=>$data['authurl'],'urldesc'=>$data['authname']]);

      //获取角色分配给谁
      $a=in_array('1',$data['auth']);  //金
      $b=in_array('2',$data['auth']);  //银
      $c=in_array('3',$data['auth']);  //铜

     if($a)
     {
        if($b)
        {
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>1]);
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>2]);
        }

        if($c)
        {
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>1]);
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>3]);
        }

        if($b && $c)
        {
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>1]);
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>2]);
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>3]);
        }

        if($b==false && $c==false)
        {
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>1]);

        }
     }

      if($b)
      {
        if($c)
        {
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>2]);
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>3]);
        }

        if($a==false && $c==false)
        {
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>2]);
        }
      }

    if($c)
    {
      if($a==false && $b==false)
      {
          DB::table('jiaose_auth')->insert(['auth_id'=>$auth,'jiaose_id'=>3]);
      }
    }


      //待跳转更改

}


  //金牌角色权限
  public function getJin()
  {

    $auth=DB::select('select * from jiaose_auth as a left join auth as b on a.auth_id=b.id');
    foreach ($auth as $k => $v) {
      if($v['jiaose_id']==1){
        $jin[]=$auth[$k];
      }
    }

    return view('admin.auth.jin',compact('jin'));
  }

 //银牌角色权限
  public function getYin()
  {

    $auth=DB::select('select * from jiaose_auth as a left join auth as b on a.auth_id=b.id');
    foreach ($auth as $k => $v) {

      if($v['jiaose_id']==2){
        $yin[]=$auth[$k];
      }

    }

    return view('admin.auth.yin',compact('yin'));
  }
   //铜牌角色权限
  public function getTong()
  {

    $auth=DB::select('select * from jiaose_auth as a left join auth as b on a.auth_id=b.id');
    foreach ($auth as $k => $v) {
      if($v['jiaose_id']==3){
        $tong[]=$auth[$k];
      }
    }

    return view('admin.auth.tong',compact('tong'));
  }

  public function getAuthedit($id)
  {
      $data=DB::table('auth')->where('id',$id)->first();

      return view('admin.auth.editauth',compact('data'));
  }

  public function getDelete($id)
  {
      DB::table('auth')->where('id',$id)->delete();

      return back();

  }

  public function postEdit(Request $request,$id)
  {
    $auth=$request->except('_token');

    DB::table('auth')->where('id',$id)->update(['urlname'=>$auth['urlname'],'urldesc'=>$auth['urldesc']]);

    return redirect('/admin/admin/select');
  }


  public function getAuthdelete($jiaose_id,$auth_id)
  {

    DB::delete('delete from jiaose_auth where jiaose_id=? and auth_id=?',[$jiaose_id,$auth_id]);

    return back();
  }


  public function getSelect()
  {

    $data=DB::table('auth')->where('id','>',0)->get();

    return view('admin.auth.lookauth',compact('data'));
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
