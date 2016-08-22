<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- Sidebar menu -->
            @include('admin.templates.'.session('adminTemplate').'.navbar', ['links' => $navlinks])

            <!-- Top navigation -->
            @include('admin.templates.'.session('adminTemplate').'.topbar', ['links' => $toplinks])

            <div class="right_col" role="main" id="pjax-container">
                <!-- Page content -->
                @yield('content')
            </div>
        </div>
    </div>

    <!-- basic script -->
    {!! Html::script(asset(elixir('js/lib.js'))) !!}
    <!-- theme script -->
    {!! Html::script(asset('admin-assets/gentallela/js/custom.min.js')) !!}
    {!! Html::script(asset(elixir('js/admin.js'))) !!}
    @yield('script')
</body>