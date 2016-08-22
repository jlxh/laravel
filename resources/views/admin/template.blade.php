<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>后台管理</title>

    <link rel="stylesheet" href="{{ elixir('css/lib.css') }}">
    <!-- Theme style -->
    @include('admin.templates.'.session('adminTemplate').'.css')
    <link rel="stylesheet" href="{{ elixir('css/admin.css') }}">
    @yield('css')
</head>

<!-- template body -->
@include('admin.templates.'.session('adminTemplate').'.body', [
                'navlinks' => [
                    // 首页
                    ['name' => '首页', 'links' => url('admin'), 'icon' => 'fa-home', 'pjax' => 'pjax-data'],

                    // 样例
                    [
                        'name' => '导航菜单',
                        'links' => [
                            ['name' => '子菜单1', 'links' => url('admin/example/1'), 'pjax' => 'pjax-data'],
                            ['name' => '子菜单2', 'links' => url('admin/example/2'), 'pjax' => 'pjax-data']
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