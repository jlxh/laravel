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
    <script type="text/javascript" src="{{ elixir('js/lib.js') }}"></script>
    <!-- theme script -->
    <script type="text/javascript" src="{{ asset('admin-assets/adminlte/js/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ elixir('js/admin.js') }}"></script>
    
    @yield('script')
</body>