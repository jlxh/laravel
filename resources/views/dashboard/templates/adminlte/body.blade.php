<body class="skin-blue sidebar-mini fixed">
    <div class="wrapper">
        <!-- Top navigation -->
        @include('dashboard.templates.adminlte.topbar', ['links' => $toplinks])

        <!-- Sidebar menu -->
        @include('dashboard.templates.adminlte.navbar', ['links' => $navlinks])

        <div class="content-wrapper">
            <section class="content">
                <!-- Page content -->
                @yield('content')
            </section>
        </div>
    </div>

    <script src="{{ mix('js/dashboard.js') }}"></script>
    <script src="{{ asset('admin-assets/adminlte/js/app.min.js') }}"></script>
    @yield('script')
</body>
