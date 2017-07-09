@extends('layouts.admin')
@section('content')
<<<<<<< HEAD
	

	
	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="{{url('/')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->
	<table>
		<tr>
			<th>aaaaa</th>
			<td>ttt</td>
		</tr>
	</table>
=======
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
				<li><a href="{{url('admin/repass')}}" target="main">修改密码</a></li>
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
                    <li><a href="{{url('admin/user/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加用户</a></li>
                    <li><a href="{{url('admin/user')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>用户列表</a></li>

                </ul>
            </li>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>分类操作</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/cate/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
					<li><a href="{{url('admin/cate')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>

				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>视频管理</h3>
				<ul class="sub_menu">
					<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>视频添加</a></li>
					<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>列表</a></li>

				</ul>
			</li>
            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
                <ul class="sub_menu">
                    <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
                    
                </ul>
            </li>
            
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

>>>>>>> origin/nizexing
	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2015. Powered By <a href="http://www.itxdl.cn">http://www.itxdl.cn</a>.
	</div>
<<<<<<< HEAD

	
=======
	<!--底部 结束-->
>>>>>>> origin/nizexing
@endsection