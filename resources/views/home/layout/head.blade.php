<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="copyright" content="Copyright (c) AcFun" />
    <meta property="wb:webmaster" content="1cfc89ab72f02dc3" />
    <meta name="keywords" content="A站 ACFUN ACG 弹幕 视频 动画 漫画 游戏 斗鱼 新番 鬼畜 东方 初音 DOTA MUGEN LOL Vocaloid MAD AMV 天下漫友是一家" />
    <meta name="description" content="AcFun是一家弹幕视频网站，致力于为每一个人带来欢乐。" />
    <title>用户中心 - AcFun弹幕视频网 - 认真你就输啦 (・ω・)ノ- ( ゜- ゜)つロ</title>
    <script src="{{asset("/static/js/jquery.min.js")}}"></script>
    <link rel="stylesheet" href="http://cdn.aixifan.com/dotnet/20130418/style/core.css?v=1.1.76" />
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="http://cdn.aixifan.com/dotnet/20130418/project/font-awesome/4.2.0/css/font-awesome-ie7.min.css"></link>
    <![endif]-->
    <!--[if (gte IE 8)|!(IE)]>
        <!-->
    <link rel="stylesheet" href="http://cdn.aixifan.com/dotnet/20130418/project/font-awesome/4.2.0/css/font-awesome.min.css" />
    <!--<![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="http://cdn.aixifan.com/dotnet/20130418/project/font-acfun/css/style-ie7.css"></link>
    <![endif]-->
    <!--[if (gte IE 8)|!(IE)]>
        <!-->
    <link rel="stylesheet" href="http://cdn.aixifan.com/dotnet/20130418/project/font-acfun/css/style.css" />
    <!--<![endif]-->
    <link rel="stylesheet" media="screen and (min-width: 1440px)" href="/static/css/wide.css" />
    <link rel="stylesheet" href="http://cdn.aixifan.com/dotnet/20130418/project/homura/style/member.css?v=1.1.76" />
    <link id="style-theme-member" rel="stylesheet" href="http://cdn.aixifan.com/dotnet/20130418/project/theme/default/theme.css?v=1.1.76" /></head>
<link href="favicon.ico" rel="shortcut icon">
{{--<link rel="stylesheet" href="/static/css/core.min.css">--}}
@section("css")

@show


<body>
@if(session("success"))
<div id="area-info" style="display:block;height:40px">
    <div class="item success" style="line-height;24px;left: 0px;opacity: 1; transition: left 200ms ease, opacity 200ms ease;">
        <i class="icon icon-check-square-o" style="width:12px;height:12px">
        </i>{{ session("success") }}
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
                <a id="a-app-guide" href="/app/" target="_blank" class="tool">
                    <i class="icon icon-app-phone"></i>
                    <p class="app-text">客户端</p>
                    <div class="app-show">
                        <img alt="" src="http://cdn.aixifan.com/dotnet/20130418/style/image/app-code.png" class="app-code" />
                        <p class="app-tip">扫描下载最新版客户端</p>
                        <img width="141" height="19" alt="" src="http://cdn.aixifan.com/dotnet/20130418/style/image/app-word.png" class="app-word" />
                        <div class="tail"></div>
                    </div>
                </a>
                <a id="a-login-guide" href="/login/" target="_blank" class="tool">
                    <i class="icon icon-user"></i>
                    <p>登录/注册</p>
                </a>
                <a id="a-avatar-guide" href="/member/" target="_blank" class="thumb hidden">
                    <img class="avatar" />
                    <p class="info-hint hidden">0</p></a>
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
            <div id="win-info-guide" class="win hidden">
                <div class="mainer">
                    <div class="a">
                        <div class="l">
                            <a id="a-name-guide" href="/member/" target="_blank" title="前往我的个人中心" class="name"></a>
                        </div>
                        <div class="r">
                            <a id="a-logout-guide" href="http://www.acfun.cn/logout.aspx" title="退出登录">
                                <i class="icon icon-power-off"></i>退出登录</a>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                    <div class="b"></div>
                    <div class="c">
                        <a href="/member/#area=mail" target="_blank">查看更多</a></div>
                    <div class="tail"></div>
                </div>
            </div>
            <div id="win-history-guide" class="win hidden">
                <div class="mainer">
                    <div class="b"></div>
                    <div class="c">
                        <a href="/member/#area=history" target="_blank">查看更多</a></div>
                    <div class="tail"></div>
                </div>
            </div>
            <div id="win-post-guide" class="win hidden">
                <div class="mainer">
                    <div class="b">
                        <a href="/member/#area=upload-video" target="_blank">投视频</a>
                        <a href="/member/#area=post-article" target="_blank">投文章</a></div>
                    <div class="tail"></div>
                </div>
            </div>
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
                <a href="/v/list59/index.htm" data-channel="game">游戏</a>
                <a href="/v/list60/index.htm" data-channel="joy">娱乐</a>
                <a href="/v/list70/index.htm" data-channel="tech">科技</a>
                <a href="/v/list68/index.htm" data-channel="film" style="display: none !important;">影视</a>
                <a href="/v/list69/index.htm" data-channel="sport">体育</a>
                <a href="/v/list125/index.htm" data-channel="fishpond">鱼♂塘</a>
                <a href="/v/list110/index.htm" data-channel="article">文章</a>
                <a href="/album/index.htm" data-channel="album">合辑</a>
                <a href="/rank/" target="_blank" data-channel="extra" class="last">更多</a>
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
            <div class="unit channel-game hidden c2 sc2 wc2 swc2">
                <a href="/v/list83/index.htm">游戏集锦</a>
                <a href="/v/list145/index.htm">电子竞技</a>
                <a href="/v/list84/index.htm">主机单机</a>
                <a href="/v/list85/index.htm">英雄联盟</a>
                <a href="/v/list170/index.htm">守望先锋</a>
                <a href="/v/list165/index.htm">桌游卡牌</a>
                <a href="/v/list72/index.htm">Mugen</a>
                <a href="/v/list175/index.htm">游戏直播</a>
                <a href="/gamecenter" data-id="2" class="gamePortal">游戏中心</a>
                <span class="clearfix"></span>
            </div>
            <div class="unit channel-joy hidden c2 sc2 wc2 swc2">
                <a href="/v/list86/index.htm">生活娱乐</a>
                <a href="/v/list87/index.htm">鬼畜调教</a>
                <a href="/v/list88/index.htm">萌宠</a>
                <a href="/v/list89/index.htm">美食</a>
                <a href="/v/list98/index.htm">综艺</a>
                <a href="/v/list174/index.htm">娱乐直播</a>
                <span class="clearfix"></span>
            </div>
            <div class="unit channel-tech hidden c2 sc2 wc2 swc2">
                <a href="/v/list90/index.htm">科学技术</a>
                <a href="/v/list151/index.htm">教程</a>
                <a href="/v/list91/index.htm">数码</a>
                <a href="/v/list122/index.htm">汽车</a>
                <a href="/v/list149/index.htm">广告</a>
                <span class="clearfix"></span>
            </div>
            <div class="unit channel-sport hidden c3 sc3 wc3 swc2">
                <a href="/v/list152/index.htm">综合体育</a>
                <a href="/v/list94/index.htm">足球</a>
                <a href="/v/list95/index.htm">篮球</a>
                <a href="/v/list153/index.htm">搏击</a>
                <a href="/v/list154/index.htm">11区体育</a>
                <a href="/v/list93/index.htm">惊奇体育</a>
                <span class="clearfix"></span>
            </div>
            <div class="unit channel-lsgirl hidden c3 sc3 wc3 swc2">
                <a href="/v/list134/index.htm">宅舞</a>
                <a href="/v/list135/index.htm">综合舞蹈</a>
                <a href="/v/list129/index.htm">爱豆</a>
                <a href="/v/list130/index.htm">手作</a>
                <a href="/v/list127/index.htm">造型</a>
                <span class="clearfix"></span>
            </div>
            <div class="unit channel-fishpond hidden c3 sc3 wc3 swc2">
                <!--var arr=[ [92, '军事'], [131, '历史'], [132, '焦点']]-->
                <a href="/v/list131/index.htm">历史</a>
                <span class="clearfix"></span>
            </div>
            <div class="unit channel-film hidden c3 sc3 wc2 swc2">
                <a href="/v/list96/index.htm">电影</a>
                <a href="/v/list162/index.htm">日剧</a>
                <a href="/v/list163/index.htm">美剧</a>
                <a href="/v/list141/index.htm">国产剧</a>
                <a href="/v/list121/index.htm">网络剧</a>
                <a href="/v/list142/index.htm">韩剧</a>
                <a href="/v/list99/index.htm">布袋&middot;特摄</a>
                <a href="/v/list100/index.htm">纪录片</a>
                <a href="/v/list143/index.htm">其他</a>
                <span class="clearfix"></span>
            </div>
            <div class="unit channel-article hidden c3 sc3 wc3 swc3">
                <a href="/v/list110/index.htm">文章综合</a>
                <a href="/v/list73/index.htm">工作&middot;情感</a>
                <a href="/v/list74/index.htm">动漫文化</a>
                <a href="/v/list75/index.htm">漫画&middot;小说</a>
                <a href="/v/list164/index.htm">游戏</a>
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
            <div id="area-main-left" class="l">
                <div id="block-user-left" data-active="active">
                    <a href="{{asset('member/info')}}?#aphoto" class="thumb">
                        <img src="/{{$user['photo']}}" class="avatar" />
                        <span class="cover">
                                    <i class="icon icon-user"></i>编辑资料{{$user['name']}}</span>
                    </a>
                    <div class="d">
                        <a href="javascript:;"  class="name" style="cursor:default;">{{$user['name']}}</div>


                    <button id="btn-sign-user" data-checked="0" data-group="0" class="btn primary">
                        <i class="icon icon-check-circle"></i>签到
                    </button>
                    <p title="点击以修改签名" class="desc">{{$user['sign']}}
                        <i class="icon icon-edit"></i></p>

                </div>
                <div id="shadow-guide-left" class="hidden"></div>
                <div id="list-guide-left">

                    <div class="part-guide-left">
                        <div class="banner">
                            <a href="#area=favourite" class="tab fixed">
                                <i class="icon icon-folder-open"></i>收藏夹</a>
                            <span id="hint-favourite-left" class="hidden">0</span></div>
                        <div class="mainer hidden">
                            <a href="#area=favourite" class="tab">
                                <i class="icon"></i>稿件收藏
                                <span class="hint hidden hint-favourite-left">(0)</span></a>
                            <a href="#area=favourite-bangumi" class="tab">
                                <i class="icon"></i>剧集收藏
                                <span class="hint hidden hint-favourite-bangumi-left">(0)</span></a>
                            <a href="#area=favourite-album" class="tab">
                                <i class="icon"></i>合辑收藏
                                <span class="hint hidden hint-favourite-album-left">(0)</span></a>
                        </div>
                    </div>
                    <div class="part-guide-left">
                        <div class="banner">
                            <a href="#area=history" class="tab fixed">
                                <i class="icon icon-history"></i>历史</a>
                        </div>
                        <div class="mainer hidden">
                            <a href="#area=history" class="tab">
                                <i class="icon"></i>历史</a>
                        </div>
                    </div>
                    <div class="part-guide-left">
                        <div class="banner">
                            <a href="#area=mail" class="tab fixed">
                                <i class="icon icon-envelope-square"></i>私信</a>
                            <span id="hint-mail-left" class="hidden">0</span></div>
                        <div class="mainer hidden">
                            <a href="#area=mail" class="tab">
                                <i class="icon"></i>私信
                                <span class="hint hidden hint-mail-left">(0)</span></a>
                        </div>
                    </div>
                    <div class="part-guide-left">
                        <div class="banner">
                            <p class="tab fixed unfold">
                                <i class="icon icon-upload"></i>投稿&middot;管理</p>
                        </div>
                        <div class="mainer">
                            <a href="#area=upload-video" class="tab">
                                <i class="icon"></i>视频投稿</a>
                            <a href="#area=upload-link" class="tab">
                                <i class="icon"></i>链接投稿</a>
                            <a href="#area=post-article" class="tab">
                                <i class="icon"></i>文章投稿</a>
                            <a href="#area=post-history" class="tab">
                                <i class="icon"></i>过往投稿</a>
                            <a href="#area=post-manage" class="tab">
                                <i class="icon"></i>视频管理</a>
                        </div>
                    </div>
                    <div class="part-guide-left">
                        <div class="banner">
                            <a href="#area=album-manage" class="tab fixed">
                                <i class="icon icon-book"></i>合辑</a>
                        </div>
                        <div class="mainer hidden">
                            <a href="#area=create-album" class="tab">
                                <i class="icon"></i>创建合辑</a>
                            <a href="#area=album-manage" class="tab">
                                <i class="icon"></i>合辑管理</a>
                            <a href="#area=album-add-content" class="tab">
                                <i class="icon"></i>稿件管理</a>
                        </div>
                    </div>

                    <div class="part-guide-left">
                        <div class="banner">
                            <a href="#area=setting" class="tab fixed">
                                <i class="icon icon-cog"></i>设置</a>
                            <span id="hint-setting-left" class="hidden">0</span></div>
                        <div class="mainer hidden">

                            <a href="#area=profile" class="tab">
                                <i class="icon"></i>编辑资料</a>
                        </div>
                    </div>
                    <div class="part-guide-left">
                        <div class="banner">
                            <a href="#area=banana-store" class="tab fixed">
                                <i class="icon icon-gift"></i>商城</a>
                        </div>
                        <div class="mainer hidden">
                            <a href="#area=banana-store" class="tab">
                                <i class="icon"></i>香蕉商城</a>
                            <a href="#area=banana" class="tab">
                                <i class="icon"></i>香蕉</a>
                            <a href="#area=golden-banana" class="tab">
                                <i class="icon"></i>金香蕉</a>
                            <a href="#area=depot" class="tab">
                                <i class="icon"></i>我的道具</a>
                            <a href="#area=banana-order" class="tab">
                                <i class="icon"></i>我的订单</a>
                        </div>
                    </div>
                </div>
            </div>

