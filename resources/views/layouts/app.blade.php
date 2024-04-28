<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div id="app" class="wrapper p-2 m-1">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('dist/img/logo.png') }}" alt="Exchange And Transaction System"
                height="200" width="200">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" id="search" type="search"
                                    placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="{{ asset('dist/img/logo.png') }}" alt="transaction system"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">E&T System</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://avatars.githubusercontent.com/u/112787367?s=400&u=69fc69cce4a51d7dd9f6bb854d042d2e35462b29&v=4"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->



                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">

                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    studens
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="fa-plus-square nav-icon"></i>
                                        <p>new student</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-eye nav-icon"></i>
                                        <p>view student</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/setting" class="nav-link">
                                <i class="fa-plus-square nav-icon"></i>
                                <p>setting</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!--begin::Page loading(append to body)-->

        <!--end::Page loading-->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper  ">

            <!-- /.content-header -->
            <div class="container">
                {{ $header ?? '' }}
            </div>
            <!-- Main content -->
            <section class="content m-0 p-2" id="content">
                {{ $slot }}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{ now()->year }} <a
                    href="https://https://www.facebook.com/nasarimukhlis/">mukhlis</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.00
            </div>
            <div class="float-right d-none d-sm-inline-block mx-2">
                <b>contact</b> 0779404681
                <a href="mailto:ahmadullahmukhlis2019@gmail.com">mukhlis</a>
            </div>
        </footer>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('js/AdminLTE/custom.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    {{-- <script src="{{ asset('plugins/chart.js/chart.js') }}"></script> --}}
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
    @livewireScripts
</body>

</html>
