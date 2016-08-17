<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>后台管理</title>

    <!-- basic style -->
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}">
    <!-- Data tables -->
    <!-- Theme style -->
    @include('admin.'.session('adminTemplate').'.css')
    <link rel="stylesheet" href="{{ asset('admin-assets/custom/custom.css') }}"/>
    @yield('css')
</head>

<!-- template body -->
@include('admin.'.session('adminTemplate').'.body', [
                'navlinks' => [
                    // 首页
                    ['name' => '首页', 'links' => url('admin'), 'icon' => 'fa-home'],

                    // 样例
                    [
                        'name' => '导航菜单',
                        'links' => [
                            ['name' => '子菜单1', 'links' => url('admin/example/1')],
                            ['name' => '子菜单2', 'links' => url('admin/example/2')]
                        ],
                        'icon' => 'fa-key'
                    ]
                ],

                'toplinks' => [
                    // 选择模板
                    [
                        'name' => '选择模板',
                        'links' => [
                            ['name' => 'Gentenllela', 'links' => url('admin/template/gentallela')],
                            ['name' => 'AdminLTE', 'links' => url('admin/template/adminlte')]
                        ]
                    ],

                    // 退出
                    ['name' => 'logout', 'links' => url('admin/logout')]
                ]
            ]
        )

</html>