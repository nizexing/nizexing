<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('admin/style/css/ch-ui.admin.css')}}">
    <link rel="stylesheet" href="{{asset('admin/style/font/css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('admin/style/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/style/js/ch-ui.admin.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{asset('/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/jquery.min.js')}}"></script>

    <style type="text/css">
        ul li{
            float: left;
            margin-left:20px; 
        }
        .pagination{
            float: right;
            margin: 20px 20px 0px 0px;
            
        }

    </style>
</head>
<body>
<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">后台管理模板</div>
			<ul>
				<li><a href="#" class="active">首页</a></li>
				<li><a href="#">管理页</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：admin</li>
				<li><a href="{{url('admin/repass')}}" target="_self">修改密码</a></li>
				<li><a href="{{url('admin/quit')}}">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>用户操作</h3>
                <ul class="sub_menu">

                    <li><a href="{{url('/admin/user/user')}}" target="_self"><i class="fa fa-fw fa-plus-square"></i>管理用户</a></li>
                    <li><a href="{{ url('/admin/user/insert')}}" target="_self"><i class="fa fa-fw fa-list-ul"></i>添加用户</a></li>

                </ul>
            </li>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>分类操作</h3>
				<ul class="sub_menu">

					<li><a href="" target="_self"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
					<li><a href="" target="_self"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>


				</ul>
			</li>
			<li>

				<h3><i class="fa fa-fw fa-clipboard"></i>文章操作</h3>
				<ul class="sub_menu">
					<li><a href="" target="_self"><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>
					<li><a href="" target="_self"><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>


				</ul>
			</li>
            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
                <ul class="sub_menu">

                    <li><a href="" target="_self"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
                    <li><a href="" target="_self"><i class="fa fa-fw fa-database"></i>备份还原</a></li>
                </ul>
            </li>
           <!--  <li>
            	<h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
                <ul class="sub_menu">
                    <li><a href="http://www.yeahzan.com/fa/facss.html" target="_self"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
                    <li><a href="http://hemin.cn/jq/cheatsheet.html" target="_self"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
                    <li><a href="http://tool.c7sky.com/webcolor/" target="_self"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
                    <li><a href="element.html" target="_self"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
                </ul>
            </li> -->

                </ul>

	</div>
	<!--左侧导航 结束-->


@section('content')

              


@show

    <!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2015. Powered By <a href="http://www.itxdl.cn">http://www.itxdl.cn</a>.
	</div>
	<!--底部 结束-->

    <script type="text/javascript" src="{{asset('layer/layer.js')}}"></script>
</head>
</html>