<body class="skin-blue sidebar-mini fixed">
    <div class="wrapper">
        <!-- Top navigation -->
        @include('admin.'.session('adminTemplate').'.topbar', ['links' => $toplinks])

        <!-- Sidebar menu -->
        @include('admin.'.session('adminTemplate').'.navbar', ['links' => $navlinks])

        <div class="content-wrapper">
            <section class="content">
                @include('admin.components.alert')

                <!-- Page content -->
                @yield('content')
            </section>
        </div>
    </div>

    <!-- basic script -->
    <script type="text/javascript" src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- theme script -->
    <script type="text/javascript" src="{{ asset('admin-assets/adminlte/js/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin-assets/custom/custom.js') }}"></script>
    @yield('script')
</body>