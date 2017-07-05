<!DOCTYPE html>
<html lang="zh">

<head>
    <script src="/static/js/route.min.js"></script>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="copyright" content="Copyright (c) AcFun">
    <meta name="keywords" content="A站 ACFUN ACG 弹幕 视频 动画 漫画 游戏 新番 鬼畜 东方 初音 DOTA MUGEN">
    <meta name="description" content="AcFun是一家弹幕视频网站，致力于为每一个人带来欢乐。">

    <title>aa</title>
    <link href="favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="/static/css/core.min.css">
    <link rel="stylesheet" href="/static/css/index.min.css">
    <!--[if lt IE 9]>
    <script src="/static/js/html5shiv.min.js"></script>
    <![endif]-->


</head>

<body>

<div id="christmas" style="display:none">
    <div class="close-btn">跳过动画(14)</div>
</div>

<!-- header -->
<div id="header" class="header">
    <div class="header-top">
        <div class="wp clearfix header-top-con">
            <h1 class="fl logo">
                <a href="/index">
                    <img src="/static/picture/logo.png" width="88" height="27"></a>
            </h1>
            <ul id="header-guide" class="fr header-guide">
                <li class="guide-item guide-user">
                    <a href="/member/index" target="_blank" class="user-avatar item">
                        <img src="/static/picture/1.png" width="30" height="30"></a>
                    <a href="/login" target="_blank" class="item user-login">登录/注册</a>
                    <span class="user-message-count hidden"></span>
                    <div class="guide-item-con">
                        <p class="clearfix">
                            <a href="/member/" target="_blank" class="fl user-name"></a>
                            <a href="/logout/logout" class="fr icon icon-logout user-logout">退出</a></p>
                        <div id="user-message" class="user-message"></div>
                        <a href="http://www.acfun.cn/member/#area=mail" target="_blank" class="more">查看更多</a></div>
                </li>
                <li class="guide-item guide-history">
                    <a href="http://www.acfun.cn/member/#area=history" target="_blank" class="icon icon-history item"></a>
                    <div class="guide-item-con">
                        <ul></ul>
                        <a href="/member/#area=history" target="_blank" class="more">查看更多</a></div>
                    <script id="temp-history" type="text/template">< li > <a href = "[url]"target = "_blank" > [title] < /a><p>浏览于[time]</p > </li>/</script></li>
                <li class="guide-item guide-upload">
                    <a href="http://www.acfun.cn/member/#area=upload-video" target="_blank" class="icon icon-upload item"></a>
                    <div class="guide-item-con">
                        <ul>
                            <li>
                                <a href="http://www.acfun.cn/member/#area=upload-video" target="_blank">投视频</a></li>
                            <li>
                                <a href="http://www.acfun.cn/member/#area=post-article" target="_blank">投文章</a></li>
                        </ul>
                    </div>
                </li>
                <li class="guide-item">
                    <a href="http://www.acfun.cn/member/#area=favourite" target="_blank" class="icon icon-collect item"></a>
                </li>
            </ul>
            <div class="fr download-app">
                <a href="http://www.acfun.cn/app/" target="_blank">
                    <i class="icon icon-app-phone"></i>
                    <span>下载客户端</span></a>
                <div data-img="http://cdn.aixifan.com/acfun-pc/2.0.56/img/app-download.png"></div>
            </div>
            <div id="search-box" class="fr search-box">
                <form id="search-form" target="_blank" method="get" action="http://www.acfun.cn/search/">
                    <input id="search-text" type="text" placeholder="【阅后即瞎】这段相声把纽约黑手党老大听哭了" data-url="http://www.acfun.cn/v/ac3810827" value="" autocomplete="off">
                    <button id="search-btn" class="search-btn">
                        <i class="icon icon-search"></i>
                        <span>搜索</span></button>
                    <div class="search-result hidden"></div>
                    <script id="temp-search-hot" type="text/template"><div class = "hot-search"> 今日热搜 </div>
                        <ul class="search-hot-ul">
                            <li class="search-hot-item">
                                <a id="hot-key-count-1" href="http:/ / www.acfun.cn / search / #query = 阅后即瞎" target="_blank ">
                                            <span class="num ">1
                                            </span>
                                    <b>阅后即瞎
                                    </b>
                                </a>
                            </li><li class="search - hot - item "><a id="hot - key - count - 2 " href="http: //www.acfun.cn/search/#query=STEAM销量周榜" target="_blank"><span class="num">2</span><b>STEAM销量周榜</b></a></li><li class="search-hot-item"><a id="hot-key-count-3" href="http://www.acfun.cn/search/#query=CS：GO" target="_blank"><span class="num">3</span><b>CS：GO</b></a></li><li><a id="hot-key-count-4" href="http://www.acfun.cn/search/#query=木鱼微剧场" target="_blank"><span class="num">4</span><b>木鱼微剧场</b></a></li><li><a id="hot-key-count-5" href="http://www.acfun.cn/search/#query=新桓结衣" target="_blank"><span class="num">5</span><b>新桓结衣</b></a></li><li><a id="hot-key-count-6" href="http://www.acfun.cn/search/#query=中国交通事故合集" target="_blank"><span class="num">6</span><b>中国交通事故合集</b></a></li><li><a id="hot-key-count-7" href="http://www.acfun.cn/search/#query=LPL" target="_blank"><span class="num">7</span><b>LPL</b></a></li></ul></script>
                </form>
            </div>
            <div class="gameIcon">
                <a href="/gamecenter" data-id="0" class="fr gamePortal">
                    <i class="icon icon-youxi"></i>
                    <span>游戏中心</span></a>
            </div>
        </div>
    </div>
    <!-- 导航 start -->
    <nav id="nav" class="wp nav">
        <div class="clearfix wp nav-parent">
            <ul class="clearfix">
                <li class="nav-home active">
                    <a href="/">首页</a></li>
                <li data-category="105" data-cid="0">
                    <a href="/v/list144/index.htm">番剧</a></li>
                <li data-category="14" data-cid="1">
                    <a href="/v/list1/index.htm">动画</a></li>

                <li class="nav-rank">
                    <a href="http://www.acfun.cn/rank/" target="_blank">
                        <i class="icon icon-rank"></i>全站排行榜</a>
                </li>
            </ul>
        </div>


        <div class="nav-sub">
            <div class="wp nav-sub-con">
                <ul data-category="14" data-cid="1" class="clearfix">
                    <li>
                        <a href="/v/list159/index.htm" data-cid="159">动画资讯</a></li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- 导航 end -->
    <!-- width image -->
    <div class="header-banner">
        <style>
            @media screen and (max-width:1280px){ .header .header-banner .banner-href{ background-image: url(/static/images/1498537936194.jpg); } }
            @media screen and (min-width:1280px) and (max-width:1960px){ .header .header-banner .banner-href{ background-image: url(/static/images/1498537936194.jpg); } }
        </style>
        <a href="http://www.acfun.cn/a/ac3811915" target="_blank" class="banner-href"></a>
        <span class="point hidden">AC娘，大发明家！</span></div>
    <!-- width image end -->
</div>


<!-- header  end  -->
