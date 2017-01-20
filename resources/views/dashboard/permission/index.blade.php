@extends('dashboard.template')
@section('content')
    <div class="page-header">
    	<h2>权限管理</h2>
    </div>
    <div class="row">
    	<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>名称</th>
						<th>描述</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach($permissions as $permission)
						<tr>
							<td>{{ $permission->id }}</td>
							<td>{{ $permission->display_name }}</td>
							<td>{{ $permission->description }}</td>
							<td><a class="btn btn-info" href="{{ url('dashboard/permissions/'.$permission->id) }}">详情</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $permissions->render() !!}
    	</div>
    </div>
@endsection
