@extends('dashboard.template')
@section('content')
<div class="page-header">
	<h2 class="panel-title">管理员信息</h2>
</div>
<div class="row">
    <div class="col-md-12">
		<form action="{{ url('/dashboard/admins/'.$admin->id) }}" method="post">
			{!! csrf_field() !!}
			<input type="hidden" name="_method" value="put">
			<button class="btn btn-primary">保存</button>
		</form>
	</div>
</div>

<div class="row">
    <div class="col-md-12">
        <form action="{{ url('/dashboard/admins/'.$admin->id) }}" method="post">
            {!! csrf_field() !!}
            <input name="_method" type="hidden" value="delete">
                <button class="btn btn-danger" onclick="return confirm('确认要删除？');" type="submit">删除</button>
            </input>
        </form>
    </div>
</div>
@endsection
