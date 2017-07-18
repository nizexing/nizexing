<?php

namespace App\Http\Controllers\Home;



use App\Http\Model\User_detail;
use App\Http\Model\User;


use Barryvdh\Debugbar\Middleware\Debugbar;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class MemberController extends CommonController


{

    /**
     * 用户个人中心页
     * 显示数据
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function getInfo()
    {
        if(session('user')){
            $user = session('user');
            return view("home.mem.mem",compact('user'));
        }else{
            return redirect('/login/login');
        }

    }

    /**
     *  功能  个人扩展信息修改
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(Request $request)
    {

        $data = $request -> all();

        // 接收并处理要修改的数据
        $data2 = $request -> except("uid","_token","province","city",'photo');
        $data2["address"] = $data['province'].'-'.$data['city'];

        $data2['photo'] = $data2['upload_path'];
        $data2['photo'] = trim($data2['photo'],'/');

        unset($data2['upload_path']);
        foreach($data2 as $k=>$v){
            if($v==''){
                unset($data2[$k]);
            }
        }

        $res = User_detail::where("uid",$data["uid"])->update($data2);
        if($res){
            $user = User::find($data['uid'])->toArray();
            $user_detail = User::find($data['uid'])->detail() ->get()->toArray()[0];

             $user = array_merge($user,$user_detail);
            session(['user'=>$user]);
            return redirect("/member/info")->with("success","扩展信息修改成功");
        }else{
            return redirect("/member/info")->with("error","扩展信息修改失败");
        }
    }

    /**
     *
     *  功能: 利用ajax 修改头像 保存头像的路径
     * @param Request $request
     * @return string
     */
    public function postUpload(Request $request)
    {
//        dd(Input::all());
        $file = Input::file("img");
       if(!$file) return 'aabb';
        if($file->isValid()){
            // 获得上传文件的后缀名
            $extension = $file -> getClientOriginalExtension();
//            return $extension;
            // 获得新的名字
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$extension;

            // 移动到public下
            $path = $file->move(public_path().'/'.Config('web.img_path'),$newName);

            //
            $filePath = '/'.Config('web.img_path').'/'.$newName;
            $res = User_detail::find(Input::get('uid'))->update(['photo'=>$filePath]);
            if($res){
                $user = Session::get('user');
                $user['photo'] = $filePath;
                Session::put('user',$user);
                return $filePath;
            }else{
                return 'aabb';
            }

        }

    }

    /**
     * 功能:  显示 视频上传 提交页面
     *
     */
    public function getVideo()
    {
        if(!session('user')){
            return redirect('/login/login');
        }
        $user = session('user');


        return view("home.mem.video",compact('user'));
    }



}
