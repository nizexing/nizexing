<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Tjvideo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecommendController extends Controller
{
   public function getIndex()
   {
        $video = Tjvideo::all();
        $search = '';
        $status = ['1'=>'栏目推荐','2'=>'轮播图推荐','3'=>'top推荐','4'=>'猴子推荐'];
       return view('admin/recommend/index',compact('video','status','search'));
   }



}
