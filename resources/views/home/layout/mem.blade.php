@include("home.layout.head")
{{--@include("home.layout.mainleft")--}}



@section("area-main")
    <div id="area-main-left" class="l">
        <div id="block-user-left" data-active="active">
            {{--照片--}}
            <a href="{{asset('member/info')}}?#aphoto" class="thumb">
                <img src="/{{$user['photo']}}" class="avatar" />
                <span class="cover">
                                    <i class="icon icon-user"></i>编辑资料</span>
            </a>
            {{--名字--}}
            <div class="d">
                <a href="javascript:;"  class="name" style="cursor:default;">{{$user['name']}}</div>
            {{--签到--}}
            <button id="btn-sign-user" data-checked="0" data-group="0" class="btn primary">
                <i class="icon icon-check-circle"></i>签到
            </button>
        </div>
        <div id="shadow-guide-left" class="hidden"></div>
        <div id="list-guide-left">
            <div class="part-guide-left">
                <div class="banner">
                    <a href="{{asset('member/collect')}}" class="tab fixed">
                        <i class="icon icon-folder-open"></i>收藏夹</a>
                    <span id="hint-favourite-left" class="hidden">0</span></div>

            </div>
            <div class="part-guide-left">
                <div class="banner">
                    <a href="{{asset('member/history')}}" class="tab fixed">
                        <i class="icon icon-history"></i>历史记录</a>
                </div>
            </div>

            <div class="part-guide-left">
                <div class="banner" id="collect1">
                    <p class="tab fixed unfold">
                        <i class="icon icon-upload"></i>投稿&middot;管理</p>
                </div>
                <div class="mainer">
                    <a href="{{asset('member/video')}}" class="tab">
                        <i class="icon"></i>视频投稿</a>

                    <a href="{{asset('member/video/list')}}" class="tab">
                        <i class="icon"></i>视频管理</a>
                </div>
            </div>
            <script>
                $(function(){
                    var gggg = $('#collect1');
                    gggg.toggle(function(){
//                        alert(1);
                        $('.part-guide-left>.mainer').hide();
                    },function(){
                        $('.part-guide-left>.mainer').show();
                    });
                })
            </script>

            <div class="part-guide-left">
                <div class="banner">
                    <a href="{{asset('member/info')}}" class="tab fixed">
                        <i class="icon-config"></i>编辑资料</a>
                    <span id="hint-setting-left" class="hidden">0</span></div>
            </div>

        </div>
    </div>
@show

@include("home.layout.foot")