<!DOCTYPE html>
<head xmlns="http://www.w3.org/1999/xhtml">


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="copyright" content="{{Config('web.copyright')}}">
    <meta name="keywords" content="{{Config('web.keys')}}">
    <meta name="description" content="{{Config('web.descript')}}">

    <title>{{Config('web.title')}}</title>
    <link href="./favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="{{asset('/static/css/core_1.css')}}" />

    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{asset('/static/css/font-awesome-ie7.min.css')}}"></link>
    <![endif]-->
    <!--[if (gte IE 8)|!(IE)]>
        <!-->
    <link rel="stylesheet" href="{{asset('/static/css/font-awesome.min.css')}}" />
    <!--<![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="{{asset('/static/css/css/style-ie7.css')}}"></link>
    <![endif]-->
    <!--[if (gte IE 8)|!(IE)]>
        <!-->
    <link rel="stylesheet" href="{{asset('/static/css/style.css')}}" />
    <!--<![endif]-->

    <link rel="stylesheet" media="screen and (min-width: 1440px)" href="{{asset('/static/css/wide.css')}}" />
    <link rel="stylesheet" href="{{asset('/static/css/member.css')}}" />
    <link id="style-theme-member" rel="stylesheet" href="{{asset('/static/css/theme.css')}}" />
    <script src="{{asset("/static/js/jquery.min.js")}}"></script>
</head>

@section("css")

@show


<body>
@if(session("success"))
<div id="area-info" style="display:block;height:40px">
    <div class="item success" style="line-height:24px;left: 0px;opacity: 1; transition: left 200ms ease, opacity 200ms ease;">
        <i class="icon icon-check-square-o" style="width:12px;height:12px">
        </i>{{ session("success") }}
    </div>
    <div class="item error" style="line-height:24px;left: 0px;opacity: 1; transition: left 200ms ease, opacity 200ms ease;">
        <i class="icon icon-check-square-o" style="width:12px;height:12px">
        </i>{{ session("error") }}
    </div>
</div>
@endif
<script>
    setTimeout(function(){
        $('#area-info').fadeOut();
//        alert(a);
    },2000);
</script>


<div id="guide-space" class="simple"></div>
<div id="guide" class="simple">
    <div id="guide-top-bar">
        <a id="guide-fix" target="_blank"></a>
        <div class="inner">
            <a id="guide-logo" href="/" title="天下漫友是一家"></a>
            <div id="area-user-guide">

                <a id="a-avatar-guide" href="{{url('/member/info')}}" target="_blank" class="thumb">
                    <img class="avatar img-circle" src="{{asset(session('user')['photo'])}}" width="30" height="30"/>
                    <p class="info-hint hidden">0</p>
                </a>


                <a id="a-history-guide" href="/member/#area=history" target="_blank" class="tool">
                    <i class="icon icon-history"></i>
                    <p>看过</p>
                </a>
                <a id="a-post-guide" href="/member/#area=upload-video" target="_blank" class="tool">
                  <i class="icon icon-upload"></i>
                    <p>投稿</p>
                </a>
                <a id="a-favor-guide" href="/member/#area=favourite" target="_blank" class="tool">
                    <i class="icon icon-folder-open"></i>
                    <p>收藏</p>
                </a>
                <span class="clearfix"></span>
            </div>
            <div id="win-info-guide" class="win hidden" style="opacity: 1; top: 46px;">
                <div class="mainer">
                    <div class="a">
                        <div class="l">
                            <a id="a-name-guide" href="{{url('/member/info')}}" target="_blank" title="前往我的个人中心" class="name">{{session('user')['username']}}</a></div>
                        <div class="r">
                            <a id="a-logout-guide" href="{{url('/login/logout')}}" title="退出登录">
                                <i class="icon icon-power-off"></i>退出登录</a>
                        </div>
                        <span class="clearfix"></span>
                    </div>

                    <div class="c">
                        <a href="{{url('/member/info')}}" target="_blank">查看更多</a></div>
                    <div class="tail"></div>
                </div>
            </div>
            <script>
//                $('#a-avatar-guide').mouseover(function(){
//                    $('#win-info-guide').removeClass('hidden');
//                });
                $(function(){
                    $('#a-avatar-guide>.img-circle').mouseover(function(){

                        $('#win-info-guide').removeClass('hidden');
                    });
                    $('#win-info-guide').hover(function(){

                        $('#win-info-guide').removeClass('hidden');
                    },function(){
                        var a = setTimeout(function(){
                            $('#win-info-guide').addClass('hidden');
                        },800);
                    });

                });
            </script>
        </div>
    </div>
    <div id="guide-middle">
        <div id="guide-winhint" class="win win-hint left">
            <div class="mainer"></div>
            <div class="arrow"></div>
        </div>
        <div id="guide-inner"></div>
    </div>
    <div id="guide-bar">
        <div class="inner">
            <div class="l">
                <a href="/" title="天下漫友是一家" class="first only">首页</a>
                <a href="/v/list144/index.htm" class="only">番剧</a>
                <a href="/v/list1/index.htm" data-channel="anime">动画</a>
                <a href="/v/list58/index.htm" data-channel="music">音乐</a>
                <a href="/v/list123/index.htm" data-channel="lsgirl">舞蹈&middot;彼女</a>

                <span class="clearfix"></span>
            </div>
            <div class="r">
                <form id="area-search-guide" target="_blank" method="get" action="/search/">
                    <input name="query" type="text" placeholder="请输入搜索词" autocomplete="off" x-webkit-speech="" class="ipt-search" />
                    <i class="icon icon-search"></i>
                    <input type="submit" value="搜 索" title="搜索" class="btn-search" />
                    <span class="clearfix"></span>
                    <ul class="menu menu-search"></ul>
                </form>
            </div>
            <span class="clearfix"></span>
        </div>
    </div>
    <div id="sub-guide">
        <div id="sub-guide-inner">
            <div class="unit channel-anime hidden c1 sc2 wc1 swc1">
                <a href="/v/list106/index.htm">动画短片</a>
                <a href="/v/list107/index.htm">MAD&middot;AMV</a>
                <a href="/v/list108/index.htm">MMD&middot;3D</a>
                <a href="/v/list133/index.htm">2.5次元</a>
                <a href="/v/list67/index.htm">新番连载</a>
                <a href="/v/list120/index.htm">国产动画</a>
                <a href="/v/list109/index.htm">旧番补档</a>
                <a href="/v/list159/index.htm">动画资讯</a>
                <span class="clearfix"></span>
            </div>
            <div class="unit channel-music hidden c2 sc2 wc1 swc1">
                <a href="/v/list136/index.htm">原创&middot;翻唱</a>
                <a href="/v/list137/index.htm">演奏</a>
                <a href="/v/list103/index.htm">Vocaloid</a>
                <a href="/v/list138/index.htm">日系音乐</a>
                <a href="/v/list139/index.htm">综合音乐</a>
                <a href="/v/list140/index.htm">演唱会</a>
                <span class="clearfix"></span>
            </div>

            <div class="unit channel-album hidden c3 sc3 wc3 swc3">
                <a href="/a/aa5003806">AcFun专题-视频</a>
                <a href="/a/aa5003830">AcFun专题-文章</a>
                <span class="clearfix"></span>
            </div>
            <div class="unit channel-extra hidden c3 sc3 wc3 swc3">
                <a href="/rank/" target="_blank">排行榜</a>
                <a href="https://www.douyu.com/" target="_blank">斗鱼直播</a>
                <a href="/map/" target="_blank">地图</a>
                <a href="http://h.nimingban.com" target="_blank">匿名版</a>
                <span class="clearfix"></span>
            </div>
        </div>
    </div>
</div>

<div id="header">
    <div id="header-inner" class="inner">
        <a id="logo-home-member" href="/" title="认真你就输了"></a>
        <div id="block-message-header" class="block hidden">
            <div class="mainer"></div>
        </div>
    </div>
    <div id="btn-top-shortcut" class="hidden">
        <a id="feedback" href="/feedback/" target="_blank" class="item feedback">
            <i class="icon icon-paper-plane"></i>
            <p class="hint">意见反馈</p></a>
        <div id="to-top" class="item top">
            <i class="icon icon-chevron-up"></i>
            <p class="hint">返回顶部</p></div>
    </div>


</div><div id="mainer">
    <div id="mainer-inner">
        <div id="block-main">
