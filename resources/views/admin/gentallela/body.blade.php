<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- Sidebar menu -->
            @include('admin.'.session('adminTemplate').'.navbar', ['links' => $navlinks])

            <!-- Top navigation -->
            @include('admin.'.session('adminTemplate').'.topbar', ['links' => $toplinks])

            <div class="right_col" role="main" id="pjax-container">
                <!-- Page content -->
                @yield('content')
            </div>
        </div>
    </div>

    <!-- basic script -->
    <script type="text/javascript" src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('node_modules/jquery-pjax/jquery.pjax.js') }}"></script>

    <!-- theme script -->
    <script type="text/javascript" src="{{ asset('admin-assets/gentallela/js/custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin-assets/custom/custom.js') }}"></script>
    @yield('script')
</body>