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
    <script type="text/javascript" src="{{ elixir('js/lib.js') }}"></script>
    <!-- theme script -->
    <script type="text/javascript" src="{{ asset('admin-assets/gentallela/js/custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ elixir('js/admin.js') }}"></script>
    @yield('script')
</body>