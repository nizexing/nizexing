@extends('layouts.admin')
@section('content')
		
        <div class="result_wrap" style="width:1024px;margin:60px 0px 0px 200px">
            <div class="result_content">
            <h1>友情链接列表</h1>
                <table class="list_tab" style="text-align:center">
                    <tr>                     
                        <th>ID</th>
                        <th>链接名</th>
                        <th>链接地址</th>
                        <th>链接logo</th>
                        <th>状态</th>
                        <th>操作</th>
                        <th>管理</th>
                    </tr>
                    @foreach($data as $k=>$v)
                    <tr>
                        <td>{{$v['id']}}</td>
                        <td>{{$v['name']}}</td>
                        <td>{{$v['url']}}</td>
                        <td><img src="{{asset($v['img'])}}" alt=""></td>
                        <td>{{$v['status']}}</td>                     
                        <td>	
                            <a href="/admin/url/edit/{{$v['id']}}" class="list">修改</a>
                            <a href="/admin/url/delete/{{$v['id']}}" class="list">删除</a>
                        </td>
                        <td>
							@if($v['status'])
                        	<button type="button"  class="btn btn-danger" value="0">撤销推荐</button>
                        	@else
                        	<button type="button"  class="btn btn-success" value="1">设为推荐</button>
							@endif
                        </td>
                    </tr>
                  @endforeach
                </table>

            </div>
            {!! $data->render() !!}
            
        </div>

@endsection