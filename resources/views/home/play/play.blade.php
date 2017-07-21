<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="zh">
<head>


    <!-- <script src="/home/js/route.min.js"></script> -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="copyright" content="Copyright (c) AcFun" />
    <link rel="search" type="application/opensearchdescription+xml" href="http://cdn.aixifan.com/acfun-pc/2.0.56/xml/opensearch.xml" title="AcFun" />
    <title>{{ $data['title'] }}</title>
    <link href="http://cdn.aixifan.com/ico/favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="/home/css/core.min.css" />
    <link rel="stylesheet" href="/home/css/detail.min.css" />
    <link rel="stylesheet" href="/home/css/comm.min.css" />
    <script></script>

    <link rel="stylesheet" href="/home/js/bootstrap.min.css">
     <script type="text/javascript" src="{{asset('admin/style/js/jquery.js')}}"></script>
     <script type="text/javascript" src="{{asset('home/js/bootstrap.min.js')}}"></script>



    <script type="text/javascript" src="{{ asset('/home/js/ueditor.config.js') }}"></script>
    <script type="text/javascript" src="/home/js/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="/home/js/lang/zh-cn/zh-cn.js"></script>



</head>
<body>

<div id="header" class="header" style="height: 0px">
    <nav id="nav" class="wp nav">
        <div class="clearfix wp nav-parent">
            <ul class="fl" style="height: 70px">
                <h1 class="fl logo"> <a href="http://www.acfun.cn"> <img src="/home/picture/logo.png" width="88" height="27" /></a> </h1>
                <li data-category="105" data-cid="0"> <a href="/v/list144/index.htm">番剧</a></li>
                <li data-category="14" data-cid="1"> <a href="/v/list1/index.htm">动画</a></li>
                <li data-category="16" data-cid="58"> <a href="/v/list58/index.htm">音乐</a></li>
                <li data-category="17" data-cid="123"> <a href="/v/list123/index.htm">舞蹈&middot;彼女</a></li>
                <li data-category="15" data-cid="59"> <a href="/v/list59/index.htm">游戏</a></li>
                <li data-category="18" data-cid="60"> <a href="/v/list60/index.htm">娱乐</a></li>
                <li data-category="19" data-cid="70"> <a href="/v/list70/index.htm">科技</a></li>
                <li data-category="20" data-cid="68"> <a href="/v/list68/index.htm">影视</a></li>
                <li data-category="21" data-cid="69"> <a href="/v/list69/index.htm">体育</a></li>
                <li data-category="22" data-cid="125"> <a href="/v/list125/index.htm">鱼塘</a></li>
                <li data-category="24" data-cid="110"> <a href="/v/list110/index.htm">文章</a></li>
                <li data-category="25" data-cid="0"> <a href="/album/index.htm">合辑</a></li>
            </ul>
            <ol id="header-guide" class="fr header-guide">
                <li class="guide-item guide-user"> <a href="http://www.acfun.cn/member/" target="_blank" class="user-avatar item"> <img src="/home/picture/avatar.jpg" width="30" height="30" /></a> 
                @if($homeuser)

                   <img src="{{$homeuser['photo']}}" width="30" height="30" style="border-radius: 50%">

                @else

                    <a href="{{ url('/login/login') }}">登录</a>/<a href="{{ url('/reg/zhuce') }}">注册</a> 
                    
                @endif    
                </a> <span class="user-message-count hidden"></span>
                    <div class="guide-item-con">
                        <p class="clearfix"> 
                        <a href="http://www.acfun.cn/member/" target="_blank" class="fl user-name"></a> 
                        <a href="'/login/logout'" class="fr icon icon-logout user-logout">退出</a></p>
                        <div id="user-message" class="user-message"></div>
                        <a href="http://www.acfun.cn/member/#area=mail" target="_blank" class="more">查看更多</a>
                    </div> </li>
                <li class="guide-item guide-history"> <a href="http://www.acfun.cn/member/#area=history" target="_blank" class="icon icon-history item"></a>
                    <div class="guide-item-con">
                        <ul></ul>
                        <a href="http://www.acfun.cn/member/#area=history" target="_blank" class="more">查看更多</a>
                    </div> <script id="temp-history" type="text/template">< li > <a href = "[url]"target = "_blank" > [title] < /a><p>浏览于[time]</p > </li>
                    /</script></li>
                <li class="guide-item guide-upload"> <a href="http://www.acfun.cn/member/#area=upload-video" target="_blank" class="icon icon-upload item"></a>
                    <div class="guide-item-con">
                        <ul>
                            <li> <a href="http://www.acfun.cn/member/#area=upload-video" target="_blank">投视频</a></li>
                            <li> <a href="http://www.acfun.cn/member/#area=post-article" target="_blank">投文章</a></li>
                        </ul>
                    </div> </li>
                <li class="guide-item"> <a href="http://www.acfun.cn/member/#area=favourite" target="_blank" class="icon icon-collect item"></a> </li>
            </ol>
            <div id="search-box" class="fr search-box">
                <form id="search-form" target="_blank" method="get" action="http://www.acfun.cn/search/">
                    <input id="search-text" type="text" placeholder="【阅后即瞎】这段相声把纽约黑手党老大听哭了" data-url="http://www.acfun.cn/v/ac3810827" value="" autocomplete="off" />
                    <button id="search-btn" class="search-btn"> <i class="icon icon-search"></i> <span>搜索</span></button>
                    <div class="search-result hidden"></div>
                    <script id="temp-search-hot" type="text/template">< div class = "hot-search" > 今日热搜 < /div><ul class="search-hot-ul"><li class="search-hot-item"><a id="hot-key-count-1" href="http:/ / www.acfun.cn / search / #query = 阅后即瞎" target="_blank "><span class="num ">1</span><b>阅后即瞎</b></a></li><li class="search - hot - item "><a id="hot - key - count - 2 " href="http: //www.acfun.cn/search/#query=STEAM销量周榜" target="_blank"><span class="num">2</span><b>STEAM销量周榜</b></a></li><li class="search-hot-item"><a id="hot-key-count-3" href="http://www.acfun.cn/search/#query=CS：GO" target="_blank"><span class="num">3</span><b>CS：GO</b></a></li><li><a id="hot-key-count-4" href="http://www.acfun.cn/search/#query=木鱼微剧场" target="_blank"><span class="num">4</span><b>木鱼微剧场</b></a></li><li><a id="hot-key-count-5" href="http://www.acfun.cn/search/#query=新桓结衣" target="_blank"><span class="num">5</span><b>新桓结衣</b></a></li><li><a id="hot-key-count-6" href="http://www.acfun.cn/search/#query=中国交通事故合集" target="_blank"><span class="num">6</span><b>中国交通事故合集</b></a></li><li><a id="hot-key-count-7" href="http://www.acfun.cn/search/#query=LPL" target="_blank"><span class="num">7</span><b>LPL</b></a></li></ul></script>
                </form>
            </div>
        </div>
        <div class="nav-sub">
            <div class="wp nav-sub-con">
                <ul data-category="14" data-cid="1" class="clearfix">
                    <li> <a href="/v/list159/index.htm" data-cid="159">动画资讯</a></li>
                    <li> <a href="/v/list109/index.htm" data-cid="109">旧番补档</a></li>
                    <li> <a href="/v/list67/index.htm" data-cid="67">新番连载</a></li>
                    <li> <a href="/v/list107/index.htm" data-cid="107">MAD&middot;AMV</a></li>
                    <li> <a href="/v/list108/index.htm" data-cid="108">MMD&middot;3D</a></li>
                    <li> <a href="/v/list133/index.htm" data-cid="133">2.5次元</a></li>
                    <li> <a href="/v/list120/index.htm" data-cid="120">国产动画</a></li>
                </ul>
                <ul data-category="16" data-cid="58" class="clearfix">
                    <li> <a href="/v/list136/index.htm" data-cid="136">原创&middot;翻唱</a></li>
                    <li> <a href="/v/list137/index.htm" data-cid="137">演奏</a></li>
                    <li> <a href="/v/list103/index.htm" data-cid="103">Vocaloid</a></li>
                    <li> <a href="/v/list138/index.htm" data-cid="138">日系音乐</a></li>
                    <li> <a href="/v/list139/index.htm" data-cid="139">综合音乐</a></li>
                    <li> <a href="/v/list140/index.htm" data-cid="140">演唱会</a></li>
                </ul>
                <ul data-category="17" data-cid="123" class="clearfix">
                    <li> <a href="/v/list134/index.htm" data-cid="134">宅舞</a></li>
                    <li> <a href="/v/list135/index.htm" data-cid="135">综合舞蹈</a></li>
                    <li> <a href="/v/list129/index.htm" data-cid="129">爱豆</a></li>
                    <li> <a href="/v/list130/index.htm" data-cid="130">手作</a></li>
                    <li> <a href="/v/list127/index.htm" data-cid="127">造型</a></li>
                </ul>
                <ul data-category="15" data-cid="59" class="clearfix">
                    <li> <a href="/v/list84/index.htm" data-cid="84">主机单机</a></li>
                    <li> <a href="/v/list83/index.htm" data-cid="83">游戏集锦</a></li>
                    <li> <a href="/v/list145/index.htm" data-cid="145">电子竞技</a></li>
                    <li> <a href="/v/list85/index.htm" data-cid="85">英雄联盟</a></li>
                    <li> <a href="/v/list170/index.htm" data-cid="170">守望先锋</a></li>
                    <li> <a href="/v/list165/index.htm" data-cid="165">桌游卡牌</a></li>
                    <li> <a href="/v/list72/index.htm" data-cid="72">Mugen</a></li>
                    <li> <a href="/gamecenter" data-cid="0">游戏中心</a></li>
                </ul>
                <ul data-category="18" data-cid="60" class="clearfix">
                    <li> <a href="/v/list86/index.htm" data-cid="86">生活娱乐</a></li>
                    <li> <a href="/v/list87/index.htm" data-cid="87">鬼畜调教</a></li>
                    <li> <a href="/v/list88/index.htm" data-cid="88">萌宠</a></li>
                    <li> <a href="/v/list89/index.htm" data-cid="89">美食</a></li>
                    <li> <a href="/v/list98/index.htm" data-cid="98">综艺</a></li>
                </ul>
                <ul data-category="19" data-cid="70" class="clearfix">
                    <li> <a href="/v/list90/index.htm" data-cid="90">科学技术</a></li>
                    <li> <a href="/v/list151/index.htm" data-cid="151">教程</a></li>
                    <li> <a href="/v/list91/index.htm" data-cid="91">数码</a></li>
                    <li> <a href="/v/list122/index.htm" data-cid="122">汽车</a></li>
                    <li> <a href="/v/list149/index.htm" data-cid="149">广告</a></li>
                </ul>
                <ul data-category="20" data-cid="68" class="clearfix">
                    <li> <a href="/v/list96/index.htm" data-cid="96">电影</a></li>
                    <li> <a href="/v/list162/index.htm" data-cid="162">日剧</a></li>
                    <li> <a href="/v/list141/index.htm" data-cid="141">国产剧</a></li>
                    <li> <a href="/v/list121/index.htm" data-cid="121">网络剧</a></li>
                    <li> <a href="/v/list142/index.htm" data-cid="142">韩剧</a></li>
                    <li> <a href="/v/list99/index.htm" data-cid="99">布袋&middot;特摄</a></li>
                    <li> <a href="/v/list100/index.htm" data-cid="100">纪录片</a></li>
                    <li> <a href="/v/list143/index.htm" data-cid="143">其他</a></li>
                </ul>
                <ul data-category="21" data-cid="69" class="clearfix">
                    <li> <a href="/v/list152/index.htm" data-cid="152">综合体育</a></li>
                    <li> <a href="/v/list94/index.htm" data-cid="94">足球</a></li>
                    <li> <a href="/v/list95/index.htm" data-cid="95">篮球</a></li>
                    <li> <a href="/v/list153/index.htm" data-cid="153">搏击</a></li>
                    <li> <a href="/v/list154/index.htm" data-cid="154">11区体育</a></li>
                    <li> <a href="/v/list93/index.htm" data-cid="93">惊奇体育</a></li>
                </ul>
                <ul data-category="22" data-cid="125" class="clearfix">
                    <li> <a href="/v/list131/index.htm" data-cid="131">历史</a></li>
                </ul>
                <ul data-category="24" data-cid="110" class="clearfix">
                    <li> <a href="/v/list110/index.htm" data-cid="110">文章综合</a></li>
                    <li> <a href="/v/list73/index.htm" data-cid="73">工作&middot;情感</a></li>
                    <li> <a href="/v/list74/index.htm" data-cid="74">动漫文化</a></li>
                    <li> <a href="/v/list75/index.htm" data-cid="75">漫画&middot;轻小说</a></li>
                    <li> <a href="/v/list164/index.htm" data-cid="164">游戏</a></li>
                </ul>
                <ul data-category="25" data-cid="0" class="clearfix">
                    <li> <a href="/a/aa5007988" data-cid="0">评论才是本体</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- main start -->
<div id="main" class="main">
    <section class="clearfix wp area head">
      
        <div id="pageInfo" data-title="投票标题" data-desc="视屏描述&nbsp;" data-name="" data-view="400" data-collect="0" data-comment="0" data-pic="http://imgs.aixifan.com/content/2017_06_27/1498537345.jpg" data-vid="5347129" data-cid="137" data-pcid="58" data-aid="3812129" data-sid="5347129" data-from="zhuzhan" data-isshowcount="1" data-uid="12138573" data-isallowedaddtag="false"></div>
        <div class="title">
           {{ $data['title'] }}
        </div>
        <div class="crumbs">
            <div id="bd_crumb" class="fl">
                <a href="/" class="sp1">主页</a>
                <span class="sp2">&gt;</span>
                <a href="/v/list58/index.htm" class="sp3">音乐</a>
                <span class="sp4">&gt;</span>
                <a href="/v/list137/index.htm" class="sp5">演奏</a>
                <a href="/u/12138573.aspx" target="_blank" class="avatar-wrap"> <img src="/home/picture/avatar.jpg" class="avatar" /></a>
                <a href="/u/12138573.aspx" target="_blank" class="name-wrap">{{ $user['username'] }}</a>
                <span class="sp6">{{ $data['upload'] }}</span>

            </div>
            <div class="fr">
                <a href="/member/#area=admin;aid=3812129" target="_blank" class="barrage-management">弹幕管理</a>
            </div>
        </div>
    </section>
    <div style="margin:0px 0px 210px 145px">
<div id="a1"></div>
 <script type="text/javascript" src="/ckplayer/ckplayer.js" charset="utf-8"></script>
                                <script type="text/javascript">
                                    // cdplayer  播放视频
                                    var flashvars={
                                        f:"{{ $massge['video'] }}",
                                        c:0
                                    };
                                    var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
                                    CKobject.embedSWF('/ckplayer/ckplayer.swf','a1','ckplayer_a1','600','400',flashvars,params);
                                </script>

        </div>


    <section class="clearfix wp area crumb" style="margin-top: -195px">
        <span class="view fl"> <span class="sp1">播放</span> <span class="sp2">{{$data['click']}}</span></span>

        <span id="bd_comm" class="comm fl"> <span class="sp1">评论</span> <span class="sp2">{{$contents}}</span></span>
        <span class="shu fl"></span>
        <span id="shoucang" data-status="0" class="collection fl">
     <div class="fl ico">
      <div class="img"></div>
     </div> <span class="sp3 fl" id="shoucang">收藏</span> <br /> <span class="sp4" id="num">{{$num}}</span></span>

            <script>
            $('#shoucang').click(function(){

                

                $.get('/store',{'vid':{{$data['vid']}}},function(msg){

                
                    if(msg=='1'){

                        alert('您已经收藏过了!');

                    }
                    if(msg=='0'){

                         var num=$('#num').text();

                         num=parseInt(num)+1;

                         $('#num').text(num);
                 
                        
                         alert('收藏视频成功!');
                    }


                });
            });

            </script>


        <span id="bd_phoneshow" class="phone fl">

      </span>
        <span data-status="0" class="banana fl">

     <div class="div-banana">
      <span data-num="1" class="bananaer fl"></span>
      <span data-num="2" class="bananaer fl"></span>
      <span data-num="3" class="bananaer fl"></span>
      <span data-num="4" class="bananaer fl"></span>
      <span data-num="5" class="bananaer fl"></span>
      <span class="text fl">喂 <span>{{ $user['username'] }}</span>食&nbsp;0&nbsp;香蕉</span>
     </div>
     <div id="bd_throwbanana" class="fly-banana">
      <div style="width:auto">
       <span class="bananaer fl banana-1"></span>
       <span class="bananaer fl banana-2"></span>
       <span class="bananaer fl banana-3"></span>
       <span class="bananaer fl banana-4"></span>
       <span class="bananaer fl banana-5"></span>
      </div>
     </div> </span>
        <div id="bdshare" class="share_box fr"></div>

    </section>
    <div class="introduction">
        <section class="clearfix wp area">
            <div class="columen-left fl">
                <div class="title">
                    简介
                </div>
                <div class="desc gheight">
                    <div class="sp1">
                        视屏简介内容:&nbsp;&nbsp;{{ $massge['desc'] }}

                    </div>
                    <span class="open">展开详情</span>
                    <span class="close">关闭详情</span>
                </div>
 
                <div id="temp-tag-view" class="hidden">
                    <span class="tag-single fl"> <a href="/search/#query=[name]" data-tid="[tid]" target="_blank" class="fl">[name]</a> <span title="删除标签" data-tid="[tid]" class="icon icon-delete1 fl"></span> </span>
                </div>
            </div>
            <div class="column-right fr">
                <div class="upzhu"></div>
                <div data-uid="12138573" class="user">
                    <a href="/u/12138573.aspx" target="_blank" id="bd_uphead" class="a1">
                        <div class="backg"></div>
                        <img src="{{ $detail['photo'] }}" class="avatar" />
                        <div class="banana-num"></div>
                        <div class="bubble">
                            <div class="bubble-1 fl"></div>
                            <div class="bubble-3 fl"></div>
                            <div class="bubble-2 fl"></div>
                        </div>
                        <div class="eating"></div> </a>
                   
                        <div class="title">
                            {{ $user['name'] }}
                        </div>
                        <div class="desc">
                        <p>签名:</p>{{ $detail['sign'] }}
                    </div>
                </div>
              
            </div>
        </section>
        <section class="clearfix wp area collection"></section>
        <div id="temp-collection" class="hidden">
            <div class="top clearfix">
                <div id="bd_collectionname" class="title fl">
                    所属合辑：
                    <a>[title]</a>
                </div>
                <div id="bd_collectionsubscribe" data-status="0" class="subs fl">
                    <i>订阅</i>
                    <span class="sp1">&nbsp;[subscribeSize]</span>
                    <div class="cover">
                        取消订阅
                    </div>
                </div>
            </div>
            <div class="up-crumb clearfix">
                <span id="bd_collectionmanager" class="up"> <i>创建者:</i> <a>[username]</a> </span>
                <span class="gaojian"> <i>稿件:</i> <span>[countSize]</span></span>
                <span class="time"> <i>最近更新:</i> <span>[updateTime]</span></span>
            </div>
            <div id="bd_collectionvideo" class="video-list"></div>
        </div>
        <div id="temp-video" class="hidden">
            <figure data-collec="[cid]" class="fl">
                <a href="[href]" title="[title]">[cover]
                    <div class="play-icon"></div></a>
                <div class="cover">
                    <i class="icon">播放中</i>
                </div>
                <figcaption>
                    <div class="title">
                        <a href="[href]" title="[title]">[title]</a>
                    </div>
                    <p class="clearfix"> <span class="icon icon-view-player fl">[viewCount]</span> <span class="icon icon-danmu fl">[danmuSize]</span></p>
                </figcaption>
            </figure>
        </div>
    </div>            

    <div class="comment-area">
        <section class="clearfix wp area comm">
            <div class="columen-left fl">



         <!-- 评论编辑器 -->

        <form action="/pinlun/pinlun/{{ $data['vid'] }}" method="post">
             {{ csrf_field() }}
             <p>请输入评论内容:</p>
                <textarea name="content" id="" cols="30" rows="10" style="resize: none;width: 720px;height: 100px"></textarea>

              <input type="submit" value="提交" style="margin: 10px 550px;width: 170px" class="btn btn-default" id="submit">
        </form>

                <div id="area-comment" class="block">
                    <div class="banner">

                        <i class="icon _icon-commentLeft"></i>
                        <p class="tab _fixed">评论区</p>        
            
                        
                    </div>


      <!-- !!!!!! -->
                    <script>
                    $('#submit').click(function(){
                        if(!session('user')){
                            location.href='www.nnn.com/login/login';
                        }
                    });
                    </script>

        
                    

             <!-- 评论内容区 -->

            

            @foreach($content as $k=>$v)
            <div class="mainer">
            <div id="c-78399892" class="item-comment   item-comment-first " data-fullcid="78395691,78396292,78397393,78397396,78397596,78399892" data-qid="78397596" data-layer="21">
             <div class="area-comment-left"> 
             <a class="thumb" target="_blank" href="http://www.acfun.cn/u/490814.aspx#home">

             <img class="avatar-bg" src="{{ $v['photo'] }}" style="width: 48px;height: 50px"></a> </div> 
             <div class="area-comment-right"> 
             <div class="author-comment last" data-uid="490814" > 
             <span class="index-comment">{{$v['uname']}}</span> 
             <a class="name " data-uid="490814" target="_blank" href="http://www.acfun.cn/u/490814.aspx#home"></a> 
             <span class="time_">发表于 {{ date('Y-m-d H:i:s',$v['ctime']) }}</span><p class="floor-comment">6</p> </div>
              <div class="content-comment">{{ $v['content'] }}</div>
              <div class="author-comment last"></div></div></div>
            </div>
            @endforeach
                     <!-- 评论内容区 end-->

                </div>
            </div>

            <div class="anchor-right fl">


                <!--Created by user on 2016/11/1.-->
                <div class="anchorMessage"></div>
                <div id="anchor-temp" class="hidden">
                    <div class="anchor-box">
                        <div class="head [hid]">
                        <a href="http://live.acfun.cn/space#from=0;platformId=[platformId];videoId=[videoId];compereId=[compereId];isLive=[isLive];contentId=;liveType=[liveType];" target="_blank" class="images fl">[userImg]</a>

                            <div class="rig fl">
                                <a href="http://live.acfun.cn/space#from=0;platformId=[platformId];videoId=[videoId];compereId=[compereId];isLive=[isLive];contentId=;liveType=[liveType];" target="_blank" title="[nickName]" class="name text-overflow fl">[nickName]</a>

                                <span class="p1 fl">[followed]粉丝</span>

                                <strong class="clearfix"></strong>

                                <div class="p2 text-overflow">
                                    [verifiedInfo]
                                </div>

                            </div>
                            <strong class="clearfix"></strong>
                        </div>

                        <a href="http://live.acfun.cn/space#from=0;platformId=[platformId];videoId=[videoId];compereId=[compereId];isLive=[isLive];contentId=;liveType=[liveType];" target="_blank">
                            <div style="background:url(images/6bb4201b74aa44079afc94cace4558ec.gif);background-size:100%" class="bg [ac]">
                                <div class="islive [live] [av]">
                                    [state]
                                </div>
                                <div class="mask-gradient mask">
                                    <b class="text-overflow">[title]</b>
                                </div>
                                <div class="mask-pop">
                                    <div class="playP"></div>
                                </div>
                            </div> </a>
                    </div>
                </div>
                <div class="openanchor hidden">
                    <div>
                        <span>展开全部主播</span>
                        <i class="icon"></i>
                    </div>
                </div>
            </div>

            <div class="columen-right fr">
                <ul id="bd_recommend"></ul>
                <div id="temp-recom-view" class="hidden">
                    <li class="has-img">
                <a href="[link]" title="[title]" target="_blank" class="fl img-wp">[img]</a> <b> 
                <a href="[link]" title="[title]" target="_blank">[title]</a></b> <p class="text-overflow">
                <a href="[userurl]" target="_blank" title="[username]">UP: [username]</a></p> <p> 
                <span class="icon icon-view-player"> 
                <strong>[view]</strong></span> 
                <span class="icon icon-comments"> 
                <strong>[comm]</strong></span> </p> </li>
                </div>
            </div>
        </section>
    </div>
</div>



<!-- main end -->
<div id="footer" class="footer">
    <div class="wp footer-con">
        <div class="clearfix footer-top">
            <div class="fl footer-nav">
                <div class="item-cooperation">
                    <h5>合作</h5>
                    <p> <a href="http://www.acfun.cn/info/#page=about" target="_blank">关于我们</a> <a href="http://www.acfun.cn/info/#page=contact" target="_blank" class="mr0">联系我们</a> <br /> <a href="http://www.acfun.cn/info/#page=joinus" target="_blank">AC招聘</a></p>
                </div>
                <div class="item-official">
                    <h5>官方</h5>
                    <p> <a href="http://weibo.com/danmushipin/" target="_blank">新浪微博</a> 
                    <a href="http://tb.am/cbaz8/" target="_blank" class="mr0">官方网店</a> <br /><a href="/gamecenter" target="_blank" data-id="1" class="gamePortal">游戏中心</a> 
                    <a class="i-o-ewm"> <span class="i-o-code"> <img src="/home/picture/erweima.jpg" /></span>微信公众号</a> </p>
                </div>
                <div class="item-download">
                    <h5>下载</h5>
                    <p> <a href="http://www.acfun.cn/app/" target="_blank" class="mr0">移动客户端</a> <span class="new">new</span> <br /> <a href="http://www.acfun.cn/emot/" target="_blank" class="mr0">AC娘表情包</a></p>
                </div>
                <div class="item-function">
                    <h5>友情链接</h5>
                    <p>
                        <!--a(href="#{think.config().rootDomain ||''}/map/",target="_blank") 网站地图-->
                        <!--a(href="#{think.config().rootDomain ||''}/rank/",target="_blank") 排行榜-->
                        <!--a.mr0(href="#{think.config().rootDomain ||''}/info/#page=help",target="_blank") 帮助手册-->
                        <!--br--> <a href="https://www.douyu.com/" target="_blank">斗鱼直播</a> <a href="http://h.nimingban.com" target="_blank" class="mr0">匿名版</a> <br /> <a href="http://lg.dianbo.me/index.php" target="_blank">AC大逃杀</a></p>
                </div>
                <div class="item-feedback">
                    <h5>反馈</h5>
                    <p> <a href="http://www.acfun.cn/feedback/" target="_blank">意见反馈</a> <a href="http://www.acfun.cn/report/" target="_blank">举报</a> <a href="http://www.acfun.cn/about/help" target="_blank" class="mr0">帮助中心</a> <br /> <a href="http://www.acfun.cn/info/#page=disclaimer" target="_blank">免责声明</a> <a href="http://www.acfun.cn/info/#page=agreement" target="_blank">用户协议</a></p>
                </div>
            </div>
          
        </div>
        <div class="clearfix footer-link">
            <div class="item-link1">
                <i class="item-icon-1"></i>
                <a href="http://www.12377.cn/" target="_blank">中国互联网举报中心</a>
                <br />
                <i class="item-icon-2"></i>
                <span>网络文化经营单位</span>
                <br />
                <i class="item-icon-3"></i>
                <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502032340" target="_blank">京公网安备 11010502032340号</a>
            </div>
            <div class="item-link2">
                <span>京ICP备15067359号</span>
                <br />
                <a href="http://www.bjjubao.org/" target="_blank">北京互联网举报中心</a>
                <br />
                <a href="http://www.bjwhzf.gov.cn/accuse.do" target="_blank">北京12318文化市场举报热线</a>
            </div>
            <div class="item-link3">
                <a href="//www.miitbeian.gov.cn/" target="_blank">京ICP证161323号</a>
                <br />
                <a href="/about/qualification" target="_blank">京网文[2016]0948-099号</a>
            </div>
            <div class="item-link4">
                <span>节目制作经营许可证（京）字第05158号</span>
                <br />
                <a href="http://www.bj.cyberpolice.cn/index.jsp" target="_blank">网络110报警服务</a>
            </div>
            <div class="item-link5 hidden"></div>
        </div>
        <div class="footer-bottom">
            <a href="http://www.acfun.cn"> <img src="/home/picture/logo-gray.png" width="78" height="24" /></a>
            <p>本站不提供任何视听上传服务，所有内容均来自视频分享站点所提供的公开引用资源。Copyright &copy; 2007-2017 AcFun. 保留所有权利</p>
        </div>
    </div>
</div>
<div id="toolbar" class="toolbar">
    <div id="to-comm" title="前往评论" class="icon icon-to-comm tool-item tool-to-comm">
        <span class="pts">0</span>
    </div>
    <div id="to-top" title="返回顶部" class="icon icon-arrow-slim-up tool-item tool-to-top"></div>
</div>
<!-- <div id="info-box" class="info-box">
    <p>错误信息</p>
</div> -->
<div id="pop-login" style="display:none" class="pop">
    <div class="login-logo">
        <img src="/home/picture/area-login.png" />
    </div>
    <div class="login-tool">
        <div class="fl help">
            <a href="/info/#page=help" target="_blank" class="area-login-help"> <i class="icon icon-question"></i> </a>
        </div>
        <div title="点击关闭窗体" onclick="$.callPop('login', 'close', '', '', '');" class="fl close">
            <i class="icon icon-close"></i>
        </div>
    </div>
    <div class="form-login">
        <div class="form-info">
            <div class="area1">
                <input name="username" type="text" autocomplete="off" placeholder="请输入账号" />
            </div>
            <div class="area2">
                <input name="password" type="password" autocomplete="off" placeholder="请输入密码" />
            </div>
        </div>
        <div id="area-captcha-login" class="area area-captcha hidden">
            <input id="ipt-captcha-login" name="captcha" type="text" data-direction="bottom" disabled="disabled" autocomplete="off" data-name="验证码" data-length="4,4" data-placeholder="输入验证码" required="required" placeholder="输入验证码" class="captcha fl" />
            <!--img(src="/captcha.svl" onclick="this.src='/captcha.svl?d='+(new Date()).getTime()").captcha-pic.fl-->
            <a id="ipt-captcha-switch">换一张</a>
        </div>
        <div class="area-tool">
            <div class="fl">
                <a href="/login/forgot/" target="_blank" class="fogetPwd">忘记密码?</a>
            </div>
            <div class="fr">
                还没有AcFun账号，
                <a href="/reg/" title="注册新帐号" target="_blank" class="disabled inro regAcfun">立即注册</a>
            </div>
            <div class="clearfix hidden"></div>
        </div>
        <div id="area-login-btn">
            <a class="login">登录</a>
        </div>
    </div>
    <div id="area-login-tool">
        <!--span.fl 使用第三方登录-->
        <!--a(href="/loginbysina.aspx" title="使用新浪微博账号登录")#btn-login-sina.fl-->
        <!-- img(src="http://cdn.aixifan.com/dotnet/20130418/project/sanae/style/image/weibo-reg.png")-->
        <!--a(href="/loginbyqq.aspx" title="使用腾讯QQ账号登录")#btn-login-tencent.fl-->
        <!-- img(src="http://cdn.aixifan.com/dotnet/20130418/project/sanae/style/image/qq-reg.png")-->
        <!--.clearfix.hidden-->
    </div>
</div>
<div id="pop-confirm" style="display:none" class="pop">
    <span class="win-hint-ensure">( *^_^* )</span>
    <button id="btn_ok_ensure">确定</button>
    <button id="btn_cancle_ensure">取消</button>
</div>
<div id="pop-follow" style="display:none" class="pop">
    <span id="win-btn-close"> <i class="icon icon-close"></i> </span>
    <span class="win-hint-ensure">( *^_^* )</span>
    <xmp id="temp-item-follow" class="hidden">
        &lt;option value=&quot;[gid]&quot;&gt;[name]([count])&lt;/option&gt;
    </xmp>
    <div class="unit">
        <div class="fl">
            <p class="p1">选择分组</p>
        </div>
        <div class="fl">
            <select id="ipt-group-follow"></select>
            <p class="hint">请选择分组。 <br />您添加关注的用户将出现在对应的组中。</p>
        </div>
    </div>
    <div class="clearfix hidden"></div>
    <div class="unit-tool">
        <div class="fl">
            <button id="btn-do-follow">添加关注</button>
        </div>
    </div>
</div>
<div id="share-more" style="display:none">
    <div class="jiao"></div>
    <h1>把视频贴到博客或论坛</h1>
    <div class="area-share clearfix">
        <span class="subtitle fl">视频地址</span>
        <input type="text" readonly="readonly" value="" class="ipt-url fl" />
        <span class="copy fl cp-url">复制</span>
    </div>
    <div class="area-share clearfix">
        <span class="subtitle fl">FLASH地址</span>
        <input type="text" readonly="readonly" value="" class="ipt-flash fl" />
        <span class="copy fl cp-flash">复制</span>
    </div>
    <div class="area-share clearfix">
        <span class="subtitle fl">HTML代码</span>
        <input type="text" readonly="readonly" value="" class="ipt-html fl" />
        <span class="copy fl cp-html">复制</span>
    </div>
    <div class="area-share clearfix">
        <span class="subtitle fl">通用代码</span>
        <input type="text" readonly="readonly" value="" class="ipt-iframe fl" />
        <span class="copy fl cp-iframe">复制</span>
    </div>
</div>


<div id="shade-layer"></div>

<script src="/home/js/library.min.js"></script>
<script src="/home/js/main.min.js"></script>
<script src="/home/js/ubb.min.js"></script>
<script src="/home/js/swfobject.min.js"></script>
<script src="/home/js/detail.min.js"></script>

<!-- <script src="/home/js/comm.min.js"></script> -->


</html>