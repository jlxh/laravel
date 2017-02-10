@extends('dashboard.template')
@section('content')
<div class="page-header">
	<h2 class="panel-title">管理员信息</h2>
</div>
@include('dashboard.components.alert')
<div class="row">
    <div class="col-md-12">
		<form action="{{ url('/dashboard/admins/'.$admin->id) }}" method="post" id="profile-form">
			{!! csrf_field() !!}
			<input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="name">姓名：</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $admin->name }}">
            </div>
            
            <div class="form-group">
                <label for="email">邮箱：</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $admin->email }}">
            </div>

            <div class="form-group">
                <label for="phone">手机号：</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $admin->phone }}">
            </div>

			<button class="btn btn-primary" type="submit">保存</button>
            @if(auth()->user()->id !== $admin->id)
            <a href="javascript:;" class="btn btn-danger" id="destroy-btn">删除</a>
            @endif
		</form>
        <form id="destroy-form" action="{{ url('/dashboard/admins/'.$admin->id) }}" method="post" style="display: none;">
            {!! csrf_field() !!}
            <input name="_method" type="hidden" value="delete">
        </form>
	</div>
</div>
@endsection

@section('script')
<script>
    $('#destroy-btn').on('click', function () {
        confirm('确定要删除？') &&
            $('#destroy-form').submit();
    });
</script>
@endsection
