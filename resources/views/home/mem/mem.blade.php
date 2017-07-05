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
                        <div id="block-title-banner"><p>稿件收藏</p><div><a href="/member/">AcFun</a><span class="d">Favourites of Contributions</span></div><span class="clerafix"></span></div>
                        <div id="block-first" class="block">
                            <div class="mainer">
                                <div id="list-channel-favourite">
                                    <div class="l">
                                        <button data-cid="0" class="btn active primary">
                                            <i class="icon icon-list"></i>所有分区</button>
                                    </div>
                                    <div class="r group">
                                        <button data-cid="1" class="btn">动画</button>
                                        <button data-cid="58" class="btn">音乐</button>
                                        <button data-cid="123" class="btn">舞蹈·彼女</button>
                                        <button data-cid="59" class="btn">游戏</button>
                                        <button data-cid="60" class="btn">娱乐</button>
                                        <button data-cid="70" class="btn">科技</button>
                                        <button data-cid="68" class="btn">影视</button>
                                        <button data-cid="69" class="btn">体育</button>
                                        <button data-cid="125" class="btn">鱼塘</button>
                                        <button data-cid="63" class="btn">文章</button></div>
                                    <span class="clearfix"></span>
                                </div>
                                <div id="list-favourite-favourite">
                                    <div data-aid="3812129" class="item block">
                                        <div class="inner">
                                            <p class="hint-list-index">1</p>
                                            <div class="l">
                                                <a href="/v/ac3812129" target="_blank" class="thumb thumb-preview">
                                                    <img data-aid="3812129" src="http://imgs.aixifan.com/content/2017_06_27/1498537345.jpg" class="preview"></a>
                                                <a href="/member/user.aspx?uid=12138573" target="_blank" title="点击访问[凯文先生在路上]的个人空间" class="thumb thumb-avatar">
                                                    <img data-uid="12138573" src="http://cdn.aixifan.com/dotnet/20120923/style/image/avatar.jpg" class="avatar"></a>
                                            </div>
                                            <div class="r">
                                                <p class="block-title">
                                                    <a href="/v/list137/index.htm" target="_blank" title="点击访问演奏频道" class="channel">演奏</a>
                                                    <a href="/v/ac3812129" data-aid="3812129" target="_blank" class="title">凯文先生《结果》非洲鼓丽江手鼓音乐演奏表演</a></p>
                                                <div class="area-info">
                                                    <a href="/member/user.aspx?uid=12138573" target="_blank" class="name">凯文先生在路上</a>&nbsp;&nbsp;/&nbsp;&nbsp;发布于
                                                    <span class="time pts">6月27日(星期二) 12时24分</span>&nbsp;&nbsp;/&nbsp;&nbsp;播放:
                                                    <span class="views pts">1,557</span>&nbsp;&nbsp;评论:
                                                    <span class="comments pts">0</span>&nbsp;&nbsp;收藏:
                                                    <span class="favors pts">8</span></div>
                                                <p class="desc">感谢亲们点赞，转发，评论&nbsp;凯文每天将在点赞，转发，评论的小伙伴中随机抽出幸运小伙伴送一副凯文的亲笔签名鼓棒。&nbsp;</p>
                                                <div class="area-tag">
                                                    <a class="tag" href="/search/#query=%E5%87%AF%E6%96%87%E5%85%88%E7%94%9F" target="_blank">凯文先生</a>
                                                    <a class="tag" href="/search/#query=%E7%BB%93%E6%9E%9C" target="_blank">结果</a>
                                                    <a class="tag" href="/search/#query=%E9%9D%9E%E6%B4%B2%E9%BC%93" target="_blank">非洲鼓</a>
                                                    <a class="tag" href="/search/#query=%E4%B8%BD%E6%B1%9F%E6%89%8B%E9%BC%93" target="_blank">丽江手鼓</a>
                                                    <a class="tag" href="/search/#query=%E6%BC%94%E5%A5%8F" target="_blank">演奏</a></div>
                                            </div>
                                            <div class="block-manage" style="float:right">
                                                <button title="删除收藏" class="btn danger mini btn-delete">
                                                    <i class="icon icon-times-circle-o"></i>删除收藏</button>
                                            </div>

                                            <span class="clearfix"></span>
                                        </div>
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