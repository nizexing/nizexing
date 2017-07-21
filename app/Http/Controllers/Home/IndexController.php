<?php

namespace App\Http\Controllers\Home;



use App\Http\Controllers\Home\CommonController;

use App\Http\Model\Adver;
use App\Http\Model\Tjvideo;
use App\Http\Model\Type;
use App\Http\Model\Url;
use App\Http\Model\User;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Session;

class IndexController extends CommonController
{
    /**
     *  获取 数据 显示首页内容
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        // 获取 双图广告
        $adver = Adver::orderBy("aid") -> take(2) -> get();

        // 获取 各种推荐
        // top 推荐 6 + 猴子推荐 5
//        $top = self::_get('Tjvideo',6,3);
        $top = Tjvideo::where('tjstatus',3)->orderBy('order','desc') ->take(6)->get()->all();
        $top = self::name($top);


        $monkey = Tjvideo::where('tjstatus',4)->orderBy('order','desc') ->take(5)->get();
        $monkey = self::name($monkey);
//        echo time();
        // 轮播图推荐 6
        $lunbo = Tjvideo::where("tjstatus",2)->orderBy('order','desc') ->take(6)->get();
        $lunbo = self::name($lunbo);
        // 遍历分类 获取 栏目推荐
        $type = $this -> type;
        $tjvideo = [];
        foreach($type as $k=>$v){
            $tids = Type::where('pid',$v['tid']) -> select("tid")->get()->toArray();
//            dd($tids);
            $tmp = [];
            foreach($tids as $kk=>$vv)
            {
               $tmp[] = $vv['tid'];
            }
//            dump($tmp);
            $video = Tjvideo::whereIn('tid',$tmp)->where('tjstatus',1)->orderBy('order','desc') ->take(12)->get()->toArray();
            $video = self::name($video);
            $tjvideo[$v['tid']] = $video;
           
        }
//        dump($type);
//        dd($tjvideo);
        return view('home.index.index',['lunbo'=>$lunbo,"tjvideo"=>$tjvideo,"top"=>$top,"adver"=>$adver]);
    }

    /**
     * 查询 user 表  将name 追加到
     * @param $top
     * @return mixed
     */
    public static function name($top)
    {
//        foreach($top as $k=>$v){
//            $top[$k]['name'] = User::where('uid',$v['uid'])->select('name')->first()->name;
//        }
        $tmp = [];
        foreach($top as $k=>$v){
            $tmp[] = $v['uid'];
        }
        $user = User::whereIn('uid',$tmp)->get()->toArray();
        foreach($user as $k=>$v){
            foreach($top as $key=>$value){
                if($v['uid']==$value['uid']){
                    $top[$key]['name'] = $v['name'];
                }
            }
        }
        return $top;
    }

    /**
     *  获取 各种推荐
     * @param $model  表的模型(获取哪个表的数据)
     * @param $num   取多少条数据
     * @param int $tjstaus  所属推荐类型
     * @return mixed
     */
    public function _get($model,$num,$tjstatus=1)
    {
        $top = $model::where('tjstatus',$tjstatus)->take($num)->get()->toArray();

        return $top = self::name($top);

    }

    /**
     * 二级分类
     * @param $tid
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function vindex($tid)
    {
        $tids = Type::where('pid',$tid)->select('tid')->get()->toArray();
        foreach($tids as $k=>$v){
            $tids[$k] = $v['tid'];
        }
        // whereIn tid 所属分类的视频
//        $video = $video->whereIn('video.tid',$tids);
        //

        // 获取 各种推荐
        // top 推荐 6 + 猴子推荐 5
        $top = Tjvideo::where('tjstatus',3)->whereIn('video.tid',$tids)->take(6)->get()->all();
        $top = self::name($top);
        dd($top);

        $monkey = Tjvideo::where('tjstatus',4)->whereIn('video.tid',$tids)->take(5)->get();
        $monkey = self::name($monkey);
//        echo time();
        // 轮播图推荐 6
        $lunbo = Tjvideo::where("tjstatus",2)->whereIn('video.tid',$tids)->take(6)->get();
        $lunbo = self::name($lunbo);
        // 遍历分类 获取 栏目推荐
        $type = $this -> type;
        $tjvideo = [];
        foreach($type as $k=>$v){
            $tids = Type::where('pid',$v['tid']) -> select("tid")->get()->toArray();
//            dd($tids);
            $tmp = [];
            foreach($tids as $kk=>$vv)
            {
                $tmp[] = $vv['tid'];
            }
//            dump($tmp);
            $video = Tjvideo::whereIn('tid',$tmp)->where('tjstatus',1)->take(12)->get()->toArray();
            $video = self::name($video);
            $tjvideo[$v['tid']] = $video;

        }
        return view('home/index/vindex');
    }


}
