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

        // 上传人
        $user=DB::table('user')->where('uid',$vid)->first();

        //上传人的详细数据
        $detail=DB::table('user_detail')->where('uid',$vid)->first();

        //接收视屏vid,查出视屏名及其他数据
        $data=DB::table('video')->where('vid',$vid)->first();

        $data['upload']=date('Y-m-d H:i:s',$data['upload_time']);

        //获取该视屏相关的评论人id,内容,头像
        $massge=DB::table('video_detail')->where('vid',$vid)->get()[0];
        
        //获取评论内容
        $content=DB::table('comment')->where('vid',$vid)->get();

        return view('home.play.play',compact('data','massge','user','detail','content','photo'));


   }




}
