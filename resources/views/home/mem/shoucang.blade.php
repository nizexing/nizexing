@extends("home.layout.mem")

@section("area-main")
   @parent
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

@endsection