<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Type;
use App\Http\Model\Video;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class VideoController extends Controller
{
    /**
     *  视频 列表页展示, 条件查询结果
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(Request $request)
    {

        if(!session('user'))
    {
        return redirect('/admin/login/login')->with('error','请先登录!');
    }
        
        $search = $request -> all();

        $video = Type::join('video','type.tid','=','video.tid')
            -> join('user','video.uid','=','user.uid');
        if($request->has('key')){
            // 有关键字的话
            $key = $request->only('key');
            // 判断关键词是否分类名
            $type = Type::where('tname',$key['key'])->first();
            if($type){
                // 是的话 判断是几级分类
                if($type['pid']==0){
                    // 一级分类 的话 查二级分类并联查出user.name 和 video.*
                    $video =$video  -> where('type.pid',$type['tid']);
                }else{
                    // 二级分类的话 直接联查出video的结果
                  $video = $video-> where('video.tid',$type['tid']);
                }

            }else{
                // 不是分类名  则查询为title标题或label标签是否含有 $key['key']
                $video = $video ->where('video.title','like','%'.$key['key'].'%')
                    ->orWhere('video.label','like','%'.$key['key'].'%');
            }
        }

        $video = $video->select('video.*','user.name','type.tname')->paginate(8);
        // 定义video.status视频的状态
        $status = ['0'=>'未知','1'=>'审核中','2'=>'审核通过','3'=>'冻结'];


        // 传入视图
        return view('admin/video/index',compact('video','status','search'));
    }

    /**
     * 显示添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdd()
    {

        $type = Type::where('pid',0)->get()->toArray();
        $type2 = [];
        foreach($type as $value){
            $type2[] = Type::where('pid',$value['tid'])->get()->toArray();
        }

        return view('admin.video.add',compact('type','type2'));
    }

    /**
     *  插入一条视频
     * @param Request $request
     */
    public function postDoadd(Request $request)
    {
        $data = $request->all();
//        dd($data);
        $video = $request ->only('tid','label','title');
    }

    /**
     *  uploadify 上传视频video
     * @return string
     */
    public function postUpload()
    {

//          dd(Input::all());
        $file = Input::file("Filedata");

        if(!$file) return 'aabb';
        if($file->isValid()){
            // 获得上传文件的后缀名
            $extension = $file -> getClientOriginalExtension();
//            return $extension;
            $fileTypes = array('mp4','mkv','avi','swf','wmv');
            if (in_array($extension,$fileTypes)){
                // 获得新的名字
                $newName = date('YmdHis').mt_rand(1000,9999).'.'.$extension;

                // 移动到public/video下
                $path = $file->move(public_path().'/'.Config('web.video-path'),$newName);

                //
                $filePath = '/'.Config('web.video-path').'/'.$newName;
                return $filePath;
            }else{
                return 2;
            }

        }else{
            return 2;
        }
    }
}
