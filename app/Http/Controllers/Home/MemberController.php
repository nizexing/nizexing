<?php

namespace App\Http\Controllers\Home;



use App\Http\Model\User_detail;
use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class MemberController extends Controller
{
    public function getInfo()
    {
        $user = User::where("uid",1)->first();
//        dump($res);
        $detail = User_detail::where("uid",$user['uid'])->first();

//       dd($detail);
        return view("home.mem.mem",compact("user","detail"));
    }

    public function postUpdate(Request $request)
    {
//        echo 1;
//        $uid = session("user")['uid'] = 1;
        dump($request->all());

    }

    public function postUpload(Request $request)
    {
//        dd(Input::all());
        $file = Input::file("photo");
       if(!$file) return 'aabb';
        if($file->isValid()){
            // 获得上传文件的后缀名
            $extension = $file -> getClientOriginalExtension();
//            return $extension;
            // 获得新的名字
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$extension;

            // 移动到public下
            $path = $file->move(public_path().'/uploads',$newName);

            //
            $filePath = 'uploads/'.$newName;
            return $filePath;
        }

    }
}
