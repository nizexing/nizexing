<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Tjvideo;
use App\Http\Model\Type;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class RecommendController extends Controller
{
    /**
     * 列表显示页  查询显示
     * @param Request $request
     * @param string $tjstatus
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
   public function getIndex(Request $request,$tjstatus='')
   {
       $search = $request -> all();

       $video = Tjvideo::join('type','type.tid','=','tjvideo.tid');
       // 分类 推荐
        if(!empty($tjstatus)){
            $video = $video -> where('tjstatus',$tjstatus);
        }
        // 关键字查询
        if($request->has('key')){
            $video = $video -> where('title','like',Input::get('key'));
        }
        $video = $video->select('tjvideo.*','type.tname')->paginate(8);

        $search = '';
        $status = ['1'=>'栏目推荐','2'=>'轮播图推荐','3'=>'top推荐','4'=>'猴子推荐'];
       return view('admin/recommend/index',compact('video','status','search'));
   }

    /**
     *  排序
     * @param Request $request
     * @return array
     */
    public function getOrder(Request $request)
    {
//        dd($request->all());
        $data = $request -> all();
        $res = Tjvideo::where('id',$data['id'])->update(['order'=>$data['order']]);

        if($res){
            return  [
                'status'=>200,
                'msg'=>'修改排序成功'
            ];
        }else{
            return  [
                'status'=>403,
                'msg'=>'修改排序失败'
            ];
        }
    }

    /**
     * 取消推荐
     * @param Request $request
     * @return array
     */
    public function getDel(Request $request)
    {
//        dd($request->all());
        $data = $request -> all();
        $res = Tjvideo::destroy($data['id']);

        if($res){
            return  [
                'status'=>200,
                'msg'=>'取消成功'
            ];
        }else{
            return  [
                'status'=>403,
                'msg'=>'取消失败'
            ];
        }
    }





}
