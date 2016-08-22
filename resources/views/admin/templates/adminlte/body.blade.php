<body class="skin-blue sidebar-mini fixed">
    <div class="wrapper">
        <!-- Top navigation -->
        @include('admin.templates.'.session('adminTemplate').'.topbar', ['links' => $toplinks])

        <!-- Sidebar menu -->
        @include('admin.templates.'.session('adminTemplate').'.navbar', ['links' => $navlinks])

        <div class="content-wrapper">
            <section class="content" id="pjax-container">
                <!-- Page content -->
                @yield('content')
            </section>
        </div>
    </div>

    <!-- basic script -->
    {!! Html::script(asset(elixir('js/lib.js'))) !!}
    <!-- theme script -->
    {!! Html::script(asset('admin-assets/adminlte/js/app.min.js')) !!}
    {!! Html::script(asset(elixir('js/admin.js'))) !!}
    
    @yield('script')
</body>