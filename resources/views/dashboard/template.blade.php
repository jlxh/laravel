<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>后台管理</title>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">
    @include('dashboard.templates.'.session('adminTemplate', 'gentallela').'.css')
    @yield('css')
</head>

<!-- template body -->
@include('dashboard.templates.'.session('adminTemplate', 'gentallela').'.body',
[
    'navlinks' => $navlinks,
    'toplinks' => [
        // 选择模板
        [
            'name' => '选择模板',
            'links' => [
                ['name' => 'Gentenllela', 'links' => url('dashboard/template/gentallela')],
                ['name' => 'AdminLTE', 'links' => url('dashboard/template/adminlte')]
            ]
        ],

        // 退出
        ['name' => 'logout', 'links' => url('dashboard/logout')]
    ]
])

</html>
