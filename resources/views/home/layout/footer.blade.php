<!-- footer -->
<div id="footer" class="footer">
    <div class="wp footer-con">
        <div class="clearfix footer-top">
            <div class="fl footer-nav">
                <div class="item-cooperation">
                    <h5>合作</h5>
                    <p>
                        <a href="javascript:;" target="_blank">关于我们</a>
                        <a href="javascript:;" target="_blank" class="mr0">联系我们</a>
                        <br>
                        <a href="javascript:;" target="_blank">AC招聘</a></p>
                </div>


                <div class="item-function">
                    <h5>友情链接</h5>
                    <p>
                        <!--a(href="#{think.config().rootDomain ||''}/map/",target="_blank") 网站地图-->
                        <!--a(href="#{think.config().rootDomain ||''}/rank/",target="_blank") 排行榜-->
                        <!--a.mr0(href="#{think.config().rootDomain ||''}/info/#page=help",target="_blank") 帮助手册-->
                        <!--br-->
                        <a href="https://www.douyu.com/" target="_blank">斗鱼直播</a>
                        <a href="http://h.nimingban.com" target="_blank" class="mr0">匿名版</a>
                        <br>
                        <a href="http://lg.dianbo.me/index.php" target="_blank">AC大逃杀</a></p>
                </div>

            </div>

        </div>
        {{--许可证--}}

        <div class="footer-bottom">
            <a href="{{url('/index')}}">
                <img src="{{asset(Config('web.logo'))}}" width="78" height="24"></a>
            <p>{{Config('web.copyright')}} 保留所有权利</p>
        </div>
    </div>
</div>
<!-- footer end -->

</body>

</html>
@section('js')

@show
