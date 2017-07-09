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
        $adver = Adver::orderBy("aid") -> take(2) -> get()->toArray();
//        dd($adver);

        // 获取 各种推荐
        // top 推荐 6 + 猴子推荐 5
//        $top = self::_get('Tjvideo',6,3);
        $top = Tjvideo::where('tjstatus',3)->take(6)->get()->toArray();
        $top = self::name($top);
        
        $monkey = Tjvideo::where('tjstatus',4)->take(5)->get()->toArray();
        $monkey = self::name($monkey);
//        echo time();
        // 轮播图推荐 6
        $lunbo = Tjvideo::where("tjstatus",2)->take(6)->get()->toArray();
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
        foreach($top as $k=>$v){
            $top[$k]['name'] = User::where('uid',$v['uid'])->select('name')->first()->name;
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

    public function vindex($tid)
    {
        echo $tid;
    }


}
