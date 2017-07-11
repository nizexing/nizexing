@extends('layouts.admin')
@section('content')
		
        <div class="result_wrap" style="width:1024px;margin:60px 0px 0px 200px">
            <div class="result_content">
            <h1>用户列表</h1>
                <table class="list_tab">
                    <tr>                     
                        <th>UID</th>
                        <th>用户</th>
                        <th>密码</th>
                        <th>昵称</th>
                        <th>电话</th>
                        <th>积分</th>
                        <th>注册时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    @foreach($user as $k=>$v)
                    <tr>
                        <td>{{$v['uid']}}</td>
                        <td>{{$v['username']}}</td>
                        <td>{{$v['password']}}</td>
                        <td>{{$v['name']}}</td>
                        <td>{{$v['tel']}}</td>
                        <td>{{$v['score']}}</td>
                        <td>{{$v['regtime']}}</td>
                        <td>{{$v['status']}}</td>
                        <td>
                            <a href="/admin/user/detail/{{$v['uid']}}" class="list">详情</a>
                            <a href="/admin/user/delete/{{$v['uid']}}" class="list">删除</a>
                        </td>
                    </tr>
                  @endforeach
                </table>

            </div>
            {!! $user->render() !!}
            
        </div>
    </form>
@endsection