@extends("home.layout.index")

@section('css')
    <link rel="stylesheet" href="{{asset('/static/css/core.min.css')}}">
    <link rel="stylesheet" href="{{asset('/static/css/index.min.css')}}">
    <link rel="stylesheet" href="{{asset('/static/css/channel.min.css')}}">
    <style>
        .b04 { width: 452px;}

        .b04 .dots { position: absolute; left: 0; right: 0; bottom: 20px;}
        .b04 li{list-style:none;}
        .b04 .dots li

        {

            display: inline-block;

            width: 10px;

            height: 10px;

            margin: 0 4px;

            text-indent: -999em;

            border: 2px solid #fff;

            border-radius: 6px;

            cursor: pointer;

            opacity: .4;

            -webkit-transition: background .5s, opacity .5s;

            -moz-transition: background .5s, opacity .5s;

            transition: background .5s, opacity .5s;

        }

        .b04 .dots li.active

        {

            background: #fff;

            opacity: 1;

        }

        .b04 .arrow { position: absolute; top: 200px;}

        .b04 #al { left: 15px;}

        .b04 #ar { right: 15px;}

    </style>
@endsection
@section("main")
    <!-- main start -->
    <div id="main" class="main">
        <nav id="channel-nav" class="nav">
            <!--Created by user on 16/2/24.-->
            <div class="nav-sub">
                <div class="wp nav-channel-sub-con">
                    <ul data-category="17" tid="{{$tid}}" class="clearfix">
                        <li class="active">
                            <a href="" data-cid="123">本区推荐</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <section b-id="181" b-name="轮播图+6小视频" b-type="26" class="clearfix wp area area-slider">
            <div class="slider-wrap fl">
                <div class="slider-wrap-1">
                    <div id="" m-id="301" m-name="轮播图" m-type="1" class="b04 fl slider-big">
                        <ul>
                            @foreach($lunbo as $k=>$v)
                                <li style="margin:0px 0px 0px 0px;margin-right:-10px;">
                                    <a href="{{url('/play/'.$v['vid'])}}" target="_blank" style="margin:0px;width:452px;height:251px;">
                                        <img src="{{  $v['img']  }}"style="width:452px;height:231px;margin:0px;"/>
                                    </a>
                                </li>

                            @endforeach
                            <a href="javascript:void(0);" class="unslider-arrow05 prev">
                                <img class="arrow" id="al" src="{{asset('static/images/arrowl.png')}}" alt="prev" width="20" height="35"></a>

                            <a href="javascript:void(0);" class="unslider-arrow05 next">
                                <img class="arrow" id="ar" src="{{asset('static/images/arrowr.png')}}" alt="next" width="20" height="37"></a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fr slider-right-x6">
                <ul m-id="302" m-name="小图综合推荐" m-type="2" class="slider-small">

                    @foreach($top as $k=>$v)

                        <li  style="width:210px;">
                            <a href="{{ url('/play/'.$v['vid']) }}" target="_blank">
                                <img src="{{asset($v['img'])}}" width="216" height="120">
                                <div class="mask-gradient mask">
                                    <b>{{$v['title']}}</b>
                                    <p class="text-overflow">
                                        <span>UP: {{$v['name']}}</span>
                                        <span class="clearfix">
                                            <i class="icon icon-view-player">{{$v['click']}}</i>
                                            <i class="icon icon-danmu">{{$v['comment']}}</i></span>
                                    </p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="area-ad-right"></div>
        </section>
        <section class="clearfix wp main-bottom column-box">
            {{--主体右半部分开始--}}
            <div class="fr channel-rank column-right">
                <!--Created by user on 16/2/26.-->

                <div b-id="74" class="channel-module-rank">
                    <section data-tab="" b-id="74" b-type="14" class="module module-rank">
                        <header class="clearfix module-header">
                            <div class="fl module-title">
                                <b>
                                    <a href="javascript:;" target="_blank" title="排行榜">排行榜</a></b>
                            </div>
                            <div class="fr module-tab">
                                <a href="javascript:;" data-nav="1" class="active">日榜</a>
                            </div>
                        </header>

                        <div m-id="130" m-name="排行榜" m-type="17" class="module-main">
                            <div class="module-con">
                                <ul data-con="1">
                                    @foreach($rank as $k=>$v)
                                        <li class="has-img   ">
                                    <span>
                                        <i>{{$k+1}}</i>
                                    </span>
                                            <a href="{{url('/play/'.$v['vid'])}}" target="_blank" class="fl img-wp">
                                                <img src="{{asset($v['img'])}}" style="width:90px;height:50px;" title="{{$v['title']}}
                                                        UP主:{{$v['name']}}
                                                        发布于{{date('Y-m-d H:i;s',$v['upload_time'])}}&nbsp;/&nbsp;点击：{{$v['click']}}&nbsp;/&nbsp;评论：{{$v['comment']}}"   width="160" height="90" style="display: inline;"></a>
                                            <b class="text-over">
                                                <a href="{{url('/play/'.$v['vid'])}}" title="{{$v['title']}}
                                                        UP主:{{$v['name']}}
                                                        发布于{{date('Y-m-d H:i;s',$v['upload_time'])}}&nbsp;/&nbsp;点击：{{$v['click']}}&nbsp;/&nbsp;评论：{{$v['comment']}}" target="_blank" class="third-title">{{$v['title']}}</a>
                                            </b>
                                            <p class="p1 text-overflow">
                                                <a href="javascript:;" target="_blank" title="空绫玥" class="text-overflow">UP: {{$v['name']}}</a></p>
                                            <p class="p2">
                                        <span class="icon icon-view-player">
                                            <strong>{{$v['click']}}</strong></span>
                                                <span class="icon icon-comments">
                                            <strong>{{$v['comment']}}</strong></span>
                                            </p>
                                        </li>
                                    @endforeach


                                </ul>


                            </div>
                        </div>

                    </section>
                </div>

            </div>
            {{--主体右半部分结束--}}
            <div class="fl channel-operate column-left">
                <!--Created by user on 16/3/9.-->
                @foreach($tjvideo as $k=>$v)
                <section data-cid="130" tid="{{$tids[$k]['tid']}}" tname="{{$tids[$k]['tname']}}" class="clearfix column-box area area-channel area-channel-channel area125">
                    <div data-tab="">
                        <header class="clearfix area-header">
                            <div class="fl channel-symbol"></div>
                            <a href="{{url('list/'.$tids[$k]['tid'])}}" target="_blank" class="area-title">{{$tids[$k]['tname']}}</a>

                            <a href="{{url('list/'.$tids[$k]['tid'])}}" target="_blank" class="fr area-more">
                                <span>更多</span>
                                <i class="icon icon-arrow-slim-right"></i>
                            </a>
                            <div class="clearfix hidden"></div>
                        </header>
                        <section data-pagenum="1" m-id="198" class="video-main">
                            <div data-con="0" class="column-box area-main active ">
                                <div class="clearfix module-video crop-margin">
                                    @foreach($v as $key=>$value)
                                    <figure class="fl block-box block-video ">
                                        <a href="{{url('/play/'.$value['vid'])}}" target="_blank" class="block-img has-danmu">
                                            <img src="{{asset($value['img'])}}" >
                                            <time>10:04</time></a>
                                        <figcaption class="block-title">
                                            <b>
                                                <a href="{{url('/play/'.$value['vid'])}}" target="_blank" title="{{$value['title']}}
                                            UP:{{$value['name']}}
                                            发布于2017-07-19 16:40:33&nbsp;/&nbsp;点击:{{$value['click']}}&nbsp;/&nbsp;评论:{{$value['comment']}}">{{$value['title']}}</a>
                                            </b>
                                            <p class="clearfix">
                                                <span class="icon icon-view-player">{{$value['click']}}</span>
                                                <span class="icon icon-danmu">{{$value['comment']}}</span></p>
                                        </figcaption>
                                    </figure>
                                    @endforeach
                                </div>
                            </div>
                            <div data-con="1" class="column-box area-main hidden ">
                                <div class="clearfix module-video crop-margin"></div>
                            </div>

                        </section>
                    </div>
                </section>
                @endforeach
            </div>
        </section>

    </div>
@endsection
@section('js')
    <script src="{{asset('/static/js/aq_auth.js')}}"></script>
    <script src="{{asset('/static/js/unslider.min.js')}}"></script>
    <script>
        $(function(){
            $('#nav li[tid={{$tid}}]').addClass('active');
            var aa = $('#nav>.nav-sub ul[tid={{$tid}}]').html();

            $('#main>#channel-nav ul[tid={{$tid}}]').html($('#main>#channel-nav ul[tid={{$tid}}]').html()+aa);
        })

        $(function(){
            tname = $('#nav>div>ul>li[class=active]').find('a').html();
            $('.column-right>.channel-module-rank .module-header .fl a').html(tname+'排行榜');
        })
        $(function(){
            var li = $('.column-right>.channel-module-rank .module-main li')
            for(var i;i<li.length;i++){
                if(i=2){
                    li[i].addClass('has-img-last');
                }
                if(i>2){
                    li[i].addClass('channel-rank-after');
                }
            }
        })
        $(document).ready(function(e) {

            var unslider04 = $('.b04').unslider({

                    dots: true

                }),

                data04 = unslider04.data('unslider');



            $('.unslider-arrow04').click(function() {

                var fn = this.className.split(' ')[1];

                data04[fn]();

            });

        });
    </script>


@endsection

