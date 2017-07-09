@extends("home.layout.mem")

@section("css")
    <link rel="stylesheet" href="{{asset('/static/css/upload_video.css')}}">
@endsection

@section("area-main")
    @parent
    <div id="area-main-right" class="r">
    <div id="area-cont-right">

        {{--<script src="http://cdn.aixifan.com/dotnet/20130418/script/member/upload-video.min.js?v=1.1.77"></script>--}}
        <div class="container">
            <div id="block-banner-right" class="block banner">
                <a href="#area=upload-video" class="tab active">
                    <i class="icon"></i>视频投稿</a>
                <a href="#area=post-history" class="tab">
                    <i class="icon"></i>过往投稿</a>
                <a href="#area=post-manage" class="tab">
                    <i class="icon"></i>视频管理</a>
            </div>
            <!--#go-old-->
            <!-- a.go-old 返回旧版-->
            <div id="uploadVideo" onsubmit="return false" data-focus="auto" data-save="uploadVideo" class="upload cfix form">
                <div class="up-info fl">
                    <div class="up-title cfix">
                        <h3 class="up-text fl">投稿信息</h3>
                        <span class="up-tips fl">（红色星号标记为必填项）</span></div>
                    <div class="up-detail">
                        <div class="up-title must cfix">
                            <label>标题
                                <em>*</em></label>
                            <div class="titt pos-rele">
                                <input id="title" type="text" placeholder="据老司机们说，好的标题能提升15%的Acer投蕉量....." spellcheck="false" autocomplete="off" data-length="1,50" data-name="标题" required="required">
                                <span class="num">50</span></div>
                        </div>
                        <div class="up-type must">
                            <label>类型
                                <em>*</em></label>
                            <input id="up-type1" name="up-type" type="radio" value="3" checked="checked" class="up-typeset">
                            <label for="up-type1"></label>
                            <span class="type-text">原创</span>
                            <input id="up-type2" name="up-type" type="radio" value="1" class="up-typeset">
                            <label for="up-type2"></label>
                            <span class="type-text">搬运</span></div>
                        <div class="up-area must">
                            <label>分区
                                <em>*</em></label>
                            <div class="pos-rele inline-block">
                                <select name="channel" class="up-channel">
                                    <option value="-250">请选择分区</option>
                                    <option value="1">动画</option>
                                    <option value="58">音乐</option>
                                    <option value="123">舞蹈·彼女</option>
                                    <option value="59">游戏</option>
                                    <option value="60">娱乐</option>
                                    <option value="70">科技</option>
                                    <option value="69">体育</option>
                                    <option value="125">鱼♂塘</option>
                                    <option value="-1">其它</option></select>
                            </div>
                            <div class="pos-rele inline-block">
                                <select name="subject" class="up-sub disabled">
                                    <option value="-250">请选择子分区</option></select>
                            </div>
                            <div class="pos-live">未经剪辑的直播录屏请投至本分区，剪辑后的视频请按直播内容投至相应分区
                                <br>直播分区的投稿将会在娱乐、游戏等的直播子分区出现，但不会进入到各大分区的最新/最热列表中</div></div>
                        <div class="up-pic cfix must">
                            <label>封面
                                <em>*</em></label>
                            <div class="pic-cont">
                                <div id="up-pic" class="pos-rele">
                                    <img src="http://cdn.aixifan.com/dotnet/20130418/style/image/member/default.png"></div>
                            </div>
                            <div class="pic-textbox">
                                <p class="pic-text">推荐使用高清精美封面吸引Acer们来围观</p>
                                <p class="pic-tips">支持≤3MB，JPG、JPEG、PNG格式文件</p></div>
                        </div>
                        <div class="up-tag must">
                            <label>标签
                                <em>*</em></label>
                            <div class="up-tagbox">
                                <div class="tag-cont cfix">
                                    <input id="inputTagator" name="inputTagator" placeholder="输入标签按回车保存" value="" style="display: none;">
                                    <div id="tagator_inputTagator" class="tagator options-hidden" style="width: 146px; padding: 0px; position: relative;">
                                        <span class="tagator_textlength" style="position: absolute; visibility: hidden;"></span>
                                        <div class="tagator_tags"></div>
                                        <input class="tagator_input" autocomplete="false" maxlength="20" placeholder="" onkeydown="var code = event.keyCode || event.which;if(code!==8 &amp;&amp; this.value.length >= 20){ return false }" style="width: 20px;">
                                        <ul class="tagator_options"></ul>
                                    </div>
                                    <input id="activate_tagator" value="销毁 tagator" type="hidden" class="operateBtn">
                                    <input id="getvalue" value="获取值" type="hidden" class="operateBtn"></div>
                                <div class="tag-tips cfix">
                                    <div class="tag-num fr">输入内容按回车键保存会生成新的标签，还可添加
                                        <span id="tag-num">10</span>个标签</div></div>
                            </div>
                            <div class="tag-checkbox">
                                <input id="tag-checkbox" type="checkbox" value="1">
                                <label for="tag-checkbox"></label>
                                <span class="label-text">允许其他用户添加标签</span></div>
                        </div>
                        <div class="up-descr must">
                            <label>简介
                                <em>*</em></label>
                            <div class="overCont cfix">
                                <textarea id="up-descr" placeholder="辛苦UP主的制作，请UP主为观众们介绍一下内容吧~" maxlength="" resize="none" onkeydown="var code = event.keyCode || event.which;if(code!==8 &amp;&amp; this.value.length >= 255){ return false }"></textarea>
                                <span class="num fr">255</span></div>
                        </div>
                    </div>
                </div>
                <div id="up-progress" class="up-progress fr">
                    <div class="up-title cfix">
                        <h3 class="up-text fl">投稿内容</h3>
                        <span class="up-tips fl">（点击箭头可调整排序）</span>
                        <div id="addNew" class="fr webuploader-container">
                            <div class="webuploader-pick">选择本地文件</div>
                            <div id="rt_rt_1bkc4rv6s9gj12sgno91ej41ros1" style="position: absolute; top: 0px; left: 0px; width: 90px; height: 22px; overflow: hidden; bottom: auto; right: auto;">
                                <input type="file" name="file" class="webuploader-element-invisible" multiple="multiple" accept=".mkv,.wmv,.avi,.mpg,.mp4,.rmvb,.flv,.3gp,.mov,.vob">
                                <label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label>
                            </div>
                        </div>
                    </div>
                    <ul id="barspool" class="barspool">
                        <li id="up-ready" class="up-ready cfix">
                            <input id="upload-speed" type="hidden" value="0">
                            <img src="http://cdn.aixifan.com/dotnet/20130418/style/image/member/upfile.png">
                            <p class="tips-1">把文件拖至此处上传</p>
                            <p class="tips-2">支持批量添加，单个文件大小不超过 4G
                                <br>个数不超过30个，支持wmv. avi. mpg. mp4.
                                <br>rmvb. flv.3gp. mov. mkv. vob 格式文件
                                <br>建议上传mp4格式文件，视频效果会更加清晰哦~</p></li>
                        <li id="add-new-copy">
                            <div class="add-new-copy">
                                <i class="icon-plus-font"></i>
                                <span>选择本地文件</span></div>
                        </li>
                    </ul>
                </div>
                <div class="dividers pos-rel">
                    <div style="display:none" class="pselect cfix tag-checkbox">
                        <input id="auto-c" type="checkbox" checked="false" value="1" class="auto-submit hide-t">
                        <label for="auto-c"></label>
                        <!--todo-->
                        <span>视频上传完成后自动投稿</span>
                        <span class="ptotal fr">共5P</span></div>
                </div>
                <div class="up-submit cfix">
                    <!--todo-->
                    <div class="tip-left hide-t fl">填写视频信息
                        <i class="icon-done"></i></div>
                    <div class="tip-right hide-t fl">上传视频文件
                        <i class="icon-undone"></i></div>
                    <div id="up-submit">投稿</div></div>
            </div>
        </div>
    </div>
    </div>
@endsection


