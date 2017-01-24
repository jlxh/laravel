@extends('dashboard.template')
@section('content')
    <div class="page-header">
    	<h2>管理员管理</h2>
    </div>
    <div class="row">
    	<div class="col-md-12">
			<table id="amdins-table" class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>用户名</th>
						<th>邮箱</th>
						<th>手机号</th>
						<th>操作</th>
					</tr>
				</thead>
				<tbody>
					@foreach($admins as $admin)
						<tr>
							<td>{{ $admin->id }}</td>
							<td>{{ $admin->name }}</td>
							<td>{{ $admin->email }}</td>
							<td>{{ $admin->phone }}</td>
							<td><a class="btn btn-info" href="{{ url('dashboard/admins/'.$admin->id) }}">详情</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
    	</div>
    </div>
@endsection

@section('script')
<script>
	$('#admins-table').dataTable({
		language: datatables_chs
	})
</script>
@endsection
