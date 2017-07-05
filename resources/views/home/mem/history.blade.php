@extends("home.layout.mem")

@section("main")
    <!-- main  主体 -->
    <div id="mainer">
        <div id="mainer-inner">
            <div id="block-main">
                <div id="area-main-left" class="l">
                    <div id="block-user-left" data-active="active">
                        <a href="#area=profile" class="thumb">
                            <img src="http://cdn.aixifan.com/dotnet/20120923/style/image/avatar.jpg" class="avatar" />
                            <span class="cover">
                                    <i class="icon icon-user"></i>编辑资料</span>
                        </a>
                        <div class="d">
                            <a href="/u/12001390.aspx" target="_blank" class="name">小彦东琦</a></div>
                        <div data-group="0" class="group">
                            <a href="/info/#page=limit" target="_blank">注册会员</a></div>
                        <div class="answer">
                            <a>[游戏答题转正]</a>
                        </div>
                        <button id="btn-sign-user" data-checked="0" data-group="0" class="btn primary">
                            <i class="icon icon-check-circle"></i>签到</button>
                        <p title="点击以修改签名" class="desc">加时sdlakf
                            <i class="icon icon-edit"></i></p>
                        <div class="area-extra">
                            <div class="space"></div>
                            <a href="#area=post-history">
                                <span class="pts">0</span>
                                <span class="hint">过审投稿</span></a>
                            <a href="#area=following">
                                <span class="pts">1</span>
                                <span class="hint">收听</span></a>
                            <a href="#area=followers">
                                <span class="pts">0</span>
                                <span class="hint">听众</span></a>
                            <a href="#area=banana">
                                <span class="pts">14</span>
                                <span class="hint">香蕉</span></a>
                            <a href="#area=golden-banana">
                                <span class="pts">0</span>
                                <span class="hint">金香蕉</span></a>
                            <a href="#area=splash" title="18% - 当前总经验值：9 / 下一级所需总经验值：50">
                                <span class="pts">0</span>
                                <span class="hint">等级</span></a>
                            <span class="clearfix"></span>
                        </div>
                    </div>
                    <div id="shadow-guide-left" class="hidden"></div>
                    <div id="list-guide-left">
                        <div class="part-guide-left">
                            <div class="banner">
                                <a href="#area=splash" class="tab fixed">
                                    <i class="icon icon-home"></i>欢迎</a>
                            </div>
                            <div class="mainer hidden">
                                <a href="#area=splash" class="tab">
                                    <i class="icon"></i>欢迎</a>
                            </div>
                        </div>
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
                                <a href="#area=push" class="tab fixed">
                                    <i class="icon icon-at"></i>圈子</a>
                                <span id="hint-relation-left" class="hidden">0</span></div>
                            <div class="mainer hidden">
                                <a href="#area=push" class="tab">
                                    <i class="icon"></i>内容推送
                                    <span class="hint hidden hint-push-left">(0)</span></a>
                                <a href="#area=mention" class="tab">
                                    <i class="icon"></i>提到我的
                                    <span class="hint hidden hint-mention-left">(0)</span></a>
                                <a href="#area=following" class="tab">
                                    <i class="icon"></i>我关注的
                                    <span class="hint hidden hint-following-left">(0)</span></a>
                                <a href="#area=followers" class="tab">
                                    <i class="icon"></i>关注我的
                                    <span class="hint hidden hint-followers-left">(0)</span></a>
                            </div>
                        </div>
                        <div class="part-guide-left">
                            <div class="banner">
                                <a href="#area=setting" class="tab fixed">
                                    <i class="icon icon-cog"></i>设置</a>
                                <span id="hint-setting-left" class="hidden">0</span></div>
                            <div class="mainer hidden">
                                <a href="#area=setting" class="tab">
                                    <i class="icon"></i>设置</a>
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
                <div id="area-main-right" class="r">
                    <div id="area-cont-right">

                        <div id="block-title-banner">
                            <p>历史</p>
                            <div>
                                <a href="/member/">AcFun</a>
                                <span class="d">History</span></div>
                            <span class="clearfix"></span>
                        </div>
                        <div id="block-banner-right" class="block banner">
                            <a href="#area=history" data-type="views" class="tab active">
                                <i class="icon"></i>浏览历史</a>
                            <a href="#area=history" data-type="comms" class="tab">
                                <i class="icon"></i>评论历史</a>
                        </div>

                        <div id="block-first" class="block">
                            <div class="mainer">
                                <p class="alert alert-info">
                                    <button id="btn-clear-history" title="点击清空所有历史记录" class="btn danger r">
                                        <i class="icon icon-times-circle-o"></i>清空历史记录</button>下方列表中记录着您近期的浏览或评论历史记录。
                                    <br>您可以点击右侧按钮以清空所有历史记录。
                                    <span class="clearfix"></span></p>
                                <div id="area-filter-history">
                                    <div class="l group group-date">
                                        <p class="subtitle l">日期</p>
                                        <button data-type="date" data-value="all" class="btn active primary">全部</button>
                                        <button data-type="date" data-value="1" class="btn">今天</button>
                                        <button data-type="date" data-value="2" class="btn">昨天</button>
                                        <button data-type="date" data-value="3" class="btn">昨天之前</button>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div class="l group group-channel">
                                        <p class="subtitle l">分区</p>
                                        <button data-type="channel" data-value="all" class="btn active primary">全部</button>
                                        <button data-type="channel" data-value="bangumi" class="btn">番剧</button>
                                        <button data-type="channel" data-value="1" class="btn">动画</button>
                                        <button data-type="channel" data-value="58" class="btn">音乐</button>
                                        <button data-type="channel" data-value="123" class="btn">舞蹈·彼女</button>
                                        <button data-type="channel" data-value="59" class="btn">游戏</button>
                                        <button data-type="channel" data-value="60" class="btn">娱乐</button>
                                        <button data-type="channel" data-value="70" class="btn">科技</button>
                                        <button data-type="channel" data-value="68" class="btn">影视</button>
                                        <button data-type="channel" data-value="69" class="btn">体育</button>
                                        <button data-type="channel" data-value="125" class="btn">鱼塘</button>
                                        <button data-type="channel" data-value="110" class="btn">文章</button>
                                        <button data-type="channel" data-value="album" class="btn">合辑</button>
                                        <span class="clearfix"></span>
                                    </div>
                                    <span class="clearfix"></span>
                                </div>
                                <p class="divider"></p>
                                <div id="list-history">
                                    <div id="" class="area-pager ">
                                        <span class="pager pager-here active" data-page="1">1</span>
                                        <span class="pager pager-fores" data-page="2">2</span>
                                        <span class="pager pager-fores" data-page="3">3</span>
                                        <span class="pager pager-fores" data-page="4">4</span>
                                        <span class="pager pager-hind" data-page="2">
                        <i class="icon icon-chevron-right" title="下一页"></i>
                    </span>
                                        <span class="pager pager-first" data-page="4">
                        <i class="icon icon-step-forward" title="最末"></i>
                    </span>
                                        <span class="hint">当前位置：
                        <input class="ipt-pager" type="number" value="1" data-max="4">
                        <button class="btn mini btn-pager">跳页</button>&nbsp;&nbsp;共4页</span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div data-index="34" class="item block item-views item-post">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ac3721082" class="thumb thumb-preview">
                                                    <img src="http://imgs.aixifan.com/content/2017_05_23/1495528197.jpg" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=620462" title="点击访问[拳师七号]的个人空间" class="thumb thumb-avatar ">
                                                    <img src="http://cdn.aixifan.com/dotnet/artemis/u/cms/www/201308/10014243my8o.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list145/index.htm" title="点击访问电子竞技频道" target="_blank" class="channel">电子竞技</a>
                                                    <a target="_blank" href="/v/ac3721082" class="title">【抗韩中年人】120期.青铜手法九杀制裁韩服 把把15投场场20杀</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=620462" class="name ">拳师七号</a>/ 发布于
                                                    <span class="time pts">5月23日(星期二) 18时38分</span></div>
                                                <p class="hint-time-history">浏览于 前天 23时37分</p></div>
                                            <p class="hint-list-index">35</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div data-index="33" class="item block item-views item-post">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ac3826365" class="thumb thumb-preview">
                                                    <img src="http://imgs.aixifan.com/content/2017_07_02/1499018248.jpg" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=1273049" title="点击访问[守护茶茶]的个人空间" class="thumb thumb-avatar ">
                                                    <img src="http://cdn.aixifan.com/dotnet/artemis/u/cms/www/201706/061800038ocofozj.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list85/index.htm" title="点击访问英雄联盟频道" target="_blank" class="channel">英雄联盟</a>
                                                    <a target="_blank" href="/v/ac3826365" class="title">为什么非要逼我玩亚索？就这么想窒息吗？</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=1273049" class="name ">守护茶茶</a>/ 发布于
                                                    <span class="time pts">前天 2时10分</span></div>
                                                <p class="hint-time-history">浏览于 前天 23时35分</p></div>
                                            <p class="hint-list-index">34</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div data-index="32" class="item block item-views item-post">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ac3822081" class="thumb thumb-preview">
                                                    <img src="http://imgs.aixifan.com/content/2017_06_30/1498822918.jpg" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=534377" title="点击访问[起小点是大腿]的个人空间" class="thumb thumb-avatar ">
                                                    <img src="http://cdn.aixifan.com/dotnet/artemis/u/cms/www/201705/22180006hxpoo6ah.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list85/index.htm" title="点击访问英雄联盟频道" target="_blank" class="channel">英雄联盟</a>
                                                    <a target="_blank" href="/v/ac3822081" class="title">主播真会玩八卦篇46： 笑笑 德云寺全体集合</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=534377" class="name ">起小点是大腿</a>/ 发布于
                                                    <span class="time pts">6月30日(星期五) 21时15分</span></div>
                                                <p class="hint-time-history">浏览于 7月1日(星期六) 16时44分</p></div>
                                            <p class="hint-list-index">33</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div data-index="31" class="item block item-views item-post">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ac3822259" class="thumb thumb-preview">
                                                    <img src="http://imgs.aixifan.com/content/2017_06_30/1498830340.jpg" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=534377" title="点击访问[起小点是大腿]的个人空间" class="thumb thumb-avatar ">
                                                    <img src="http://cdn.aixifan.com/dotnet/artemis/u/cms/www/201705/22180006hxpoo6ah.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list86/index.htm" title="点击访问生活娱乐频道" target="_blank" class="channel">生活娱乐</a>
                                                    <a target="_blank" href="/v/ac3822259" class="title">主播真会玩女神篇24：飞儿“球球”大作战</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=534377" class="name ">起小点是大腿</a>/ 发布于
                                                    <span class="time pts">6月30日(星期五) 22时17分</span></div>
                                                <p class="hint-time-history">浏览于 7月1日(星期六) 16时42分</p></div>
                                            <p class="hint-list-index">32</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div data-index="30" class="item block item-views item-album">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ab1480112_11" class="thumb thumb-preview">
                                                    <img src="http://imgs.aixifan.com/cms/2017_06_30/1498820722408.png" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=[uid]" title="点击访问[[name]]的个人空间" class="thumb thumb-avatar hidden">
                                                    <img src="[avatar]" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list144/index.htm" title="点击访问番剧频道" target="_blank" class="channel">番剧</a>
                                                    <a target="_blank" href="/v/ab1480112_11" class="title">恶搞柴犬 第11话</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=[uid]" class="name hidden">[name]</a>更新于
                                                    <span class="time pts">6月30日(星期五) 19时16分</span></div>
                                                <p class="hint-time-history">浏览于 7月1日(星期六) 0时19分</p></div>
                                            <p class="hint-list-index">31</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div data-index="29" class="item block item-views item-post">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ac3820911" class="thumb thumb-preview">
                                                    <img src="http://imgs.aixifan.com/content/2017_06_30/1498803714.png" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=1378726" title="点击访问[一只撸狗]的个人空间" class="thumb thumb-avatar ">
                                                    <img src="http://cdn.aixifan.com/dotnet/artemis/u/cms/www/201505/08233833dv61.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list85/index.htm" title="点击访问英雄联盟频道" target="_blank" class="channel">英雄联盟</a>
                                                    <a target="_blank" href="/v/ac3820911" class="title">快速看完2017LCK夏季赛W5D3</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=1378726" class="name ">一只撸狗</a>/ 发布于
                                                    <span class="time pts">6月30日(星期五) 14时29分</span></div>
                                                <p class="hint-time-history">浏览于 7月1日(星期六) 0时16分</p></div>
                                            <p class="hint-list-index">30</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div data-index="28" class="item block item-views item-post">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ac3807136" class="thumb thumb-preview">
                                                    <img src="http://imgs.aixifan.com/content/2017_06_25/1498361274.jpg" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=348627" title="点击访问[渣丸子]的个人空间" class="thumb thumb-avatar ">
                                                    <img src="http://cdn.aixifan.com/dotnet/artemis/u/cms/www/201608/29110522wl61vd1c.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list106/index.htm" title="点击访问动画短片频道" target="_blank" class="channel">动画短片</a>
                                                    <a target="_blank" href="/v/ac3807136" class="title">瞎盘点：爷们专享！铠甲变身</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=348627" class="name ">渣丸子</a>/ 发布于
                                                    <span class="time pts">6月25日(星期日) 12时26分</span></div>
                                                <p class="hint-time-history">浏览于 6月28日(星期三) 22时53分</p></div>
                                            <p class="hint-list-index">29</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div data-index="27" class="item block item-views item-post">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ac3770320" class="thumb thumb-preview">
                                                    <img src="http://imgs.aixifan.com/content/2017_06_11/1497174857.jpg" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=11668475" title="点击访问[霸道总裁捣蛋鬼]的个人空间" class="thumb thumb-avatar ">
                                                    <img src="http://cdn.aixifan.com/dotnet/artemis/u/cms/www/201705/13075515as5op91s.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list136/index.htm" title="点击访问原创·翻唱频道" target="_blank" class="channel">原创·翻唱</a>
                                                    <a target="_blank" href="/v/ac3770320" class="title">【沫雪翻唱】晴天（想要来杯咖啡嘛</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=11668475" class="name ">霸道总裁捣蛋鬼</a>/ 发布于
                                                    <span class="time pts">6月11日(星期日) 17时56分</span></div>
                                                <p class="hint-time-history">浏览于 6月28日(星期三) 16时12分</p></div>
                                            <p class="hint-list-index">28</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div data-index="26" class="item block item-views item-post">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ac290231" class="thumb thumb-preview">
                                                    <img src="http://cdn.aixifan.com/dotnet/20120923/style/image/cover.png" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=55300" title="点击访问[飛鳥Asuka]的个人空间" class="thumb thumb-avatar ">
                                                    <img src="http://cdn.aixifan.com/dotnet/artemis/u/cms/www/201605/03112649pkdwn12c.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list110/index.htm" title="点击访问文章频道" target="_blank" class="channel">文章</a>
                                                    <a target="_blank" href="/v/ac290231" class="title">【高级弹幕教程】播放器应用和高级弹幕基础流程</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=55300" class="name ">飛鳥Asuka</a>/ 发布于
                                                    <span class="time pts">2012年1月25日(星期三) 4时01分</span></div>
                                                <p class="hint-time-history">浏览于 6月28日(星期三) 16时07分</p></div>
                                            <p class="hint-list-index">27</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div data-index="25" class="item block item-views item-post">
                                        <div class="inner">
                                            <div class="l">
                                                <a target="_blank" href="/v/ac3810553" class="thumb thumb-preview">
                                                    <img src="http://imgs.aixifan.com/content/2017_06_26/1498470439.png" class="preview">
                                                    <div class="cover"></div>
                                                </a>
                                                <a target="_blank" href="/member/user.aspx?uid=6894185" title="点击访问[背包影院]的个人空间" class="thumb thumb-avatar ">
                                                    <img src="http://cdn.aixifan.com/dotnet/artemis/u/cms/www/201702/16113419uxn9jspn.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list143/index.htm" title="点击访问其他频道" target="_blank" class="channel">其他</a>
                                                    <a target="_blank" href="/v/ac3810553" class="title">背包怪物赏第一期：悲催的人类</a></p>
                                                <div class="area-info">
                                                    <a target="_blank" href="/member/user.aspx?uid=6894185" class="name ">背包影院</a>/ 发布于
                                                    <span class="time pts">6月26日(星期一) 19时11分</span></div>
                                                <p class="hint-time-history">浏览于 6月28日(星期三) 15时07分</p></div>
                                            <p class="hint-list-index">26</p>
                                            <div class="block-manage">
                                                <button title="删除历史记录" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除历史记录</button>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="area-cont">
                                            <p class="cont"></p>
                                        </div>
                                    </div>
                                    <div id="" class="area-pager ">
                                        <span class="pager pager-here active" data-page="1">1</span>
                                        <span class="pager pager-fores" data-page="2">2</span>
                                        <span class="pager pager-fores" data-page="3">3</span>
                                        <span class="pager pager-fores" data-page="4">4</span>
                                        <span class="pager pager-hind" data-page="2">
                        <i class="icon icon-chevron-right" title="下一页"></i>
                    </span>
                                        <span class="pager pager-first" data-page="4">
                        <i class="icon icon-step-forward" title="最末"></i>
                    </span>
                                        <span class="hint">当前位置：
                        <input class="ipt-pager" type="number" value="1" data-max="4">
                        <button class="btn mini btn-pager">跳页</button>&nbsp;&nbsp;共4页</span>
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <span class="clearfix"></span>
            </div>
        </div>
    </div>
    <span class="clearfix"></span>
    <!-- main 主体结束 -->

@endsection