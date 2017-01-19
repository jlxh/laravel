<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- Sidebar menu -->
            @include('dashboard.templates.'.session('adminTemplate').'.navbar', ['links' => $navlinks])

            <!-- Top navigation -->
            @include('dashboard.templates.'.session('adminTemplate').'.topbar', ['links' => $toplinks])

            <div class="right_col" role="main">
                <!-- Page content -->
                @yield('content')
            </div>
        </div>
    </div>

    <!-- basic script -->
    <script src="{{ mix('js/dashboard.js') }}"></script>
    <script src="{{ asset('admin-assets/gentallela/js/custom.min.js') }}"></script>
    @yield('script')
</body>
