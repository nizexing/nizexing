<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlayController extends Controller
{

   public function play($vid)
   {    
        //获得当前登录用户
    //     if($vid){
    //         $user=DB::table('user')->where('uid',$vid)->first();
    //     dump($user);
    // }else{
    //         $user['username']=false;
    // }
    // 
    // 上传人
         $user=DB::table('user')->where('uid',$vid)->first();
        // dump($user);

        //上传人的详细数据
        $detail=DB::table('user_detail')->where('uid',$vid)->first();
        // dump($detail);

        //接收视屏vid,查出视屏名及其他数据
        $data=DB::table('video')->where('vid',$vid)->first();
        $data['upload']=date('Y-m-d H:i:s',$data['upload_time']);
        // dump($data);

        //获取该视屏向相关的评论人id,内容,头像
        $massge=DB::table('video_detail')->where('vid',$vid)->get()[0];
        // dump($massge);
         //获取评论内容
        $content=DB::table('comment')->where('vid',$vid)->get();

        return view('home.play.play',compact('data','massge','user','detail','content'));


   }




}
