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
                                        <button data-tid="0" class="btn active primary">
                                            <i class="icon icon-list"></i>所有分区</button>
                                    </div>
                                    <div class="r group">
                                        @foreach($type as $v)
                                            <button data-tid="{{$v['tid']}}" class="btn">{{$v['tname']}}</button>

                                        @endforeach
                                    </div>

                                    <span class="clearfix"></span>
                                </div>
                                <div id="list-favourite-favourite">
                                    <div data-aid="3812129" class="item block">
                                        <div class="inner">
                                            <div class="l">
                                                <a href="/v/ac3812129" target="_blank" class="thumb thumb-preview">
                                                    <img data-aid="3812129" src="http://imgs.aixifan.com/content/2017_06_27/1498537345.jpg" class="preview"></a>

                                            </div>
                                            <div class="r" style="float:left;margin-left:10px;overflow:hidden;width:500px;">
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
                                                   
                                                </div>
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