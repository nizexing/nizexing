<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Model\User;
use App\Http\Model\Type;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public $type = null;
   /**
    * 查询 分类
    *  用户 信息
    *
    */
   public function __construct()
   {
       // 获得 分类信息
       $type = Type::where('pid',0)->get()->toArray();
       $type2 = [];
       foreach($type as $value){
           $type2[] = Type::where('pid',$value['tid'])->get()->toArray();
       }

       // 获得当前 用户信息
       $user = User::find(1);
       $detail = $user->detail;
       $user = $user -> toArray();
       $tmp = array_pop($user);
       $user = array_merge($user,$tmp);

       // 视图变量共享
       view() -> share('type',$type);
       view() -> share('type2',$type2);
       view() -> share('user',$user);


       $this -> type = $type;
   }

}
