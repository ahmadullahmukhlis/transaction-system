<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

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
                            <a href="{{ route('dashboard') }}" class="nav-link">
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
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    subject
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-plus-square nav-icon"></i>
                                        <p>new subject</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-eye nav-icon"></i>
                                        <p>subjects</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    test
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-eye nav-icon"></i>
                                        <p>tests</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-search"></i>
                                <p>
                                    fees
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-eye nav-icon"></i>
                                        <p>add fees to studen</p>
                                    </a>
                                </li>

                            </ul>
                        </li>






                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!--begin::Page loading(append to body)-->
        <div class="page-loader flex-column bg-dark bg-opacity-25">
            <span class="spinner-border text-primary" role="status"></span>
            <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
        </div>

        <!--end::Page loading-->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- /.content-header -->
            <div class="container">
                {{ $header ?? '' }}
            </div>
            <!-- Main content -->
            <section class="content" id="content">
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

    <script>
        window.onload = function() {

            var dataPoints = [];
            var y = 1000;
            var limit = 50000;

            for (var i = 0; i < limit; i++) {
                y += Math.round(10 + Math.random() * (-10 - 10));
                dataPoints.push({
                    y: y
                });
            }

            var options = {
                animationEnabled: true,
                zoomEnabled: true,
                title: {
                    text: "Performance Chart"
                },
                subtitles: [{
                    text: "Try Zooming and Panning"
                }],
                data: [{
                    type: "line",
                    dataPoints: dataPoints
                }]
            };
            var startTime = new Date();
            $("#chartContainer").CanvasJSChart(options);
            var endTime = new Date();
            document.getElementById("timeToRender").innerHTML = "Time to Render: " + (endTime - startTime) + "ms";

        }
        window.onload = function() {

            var totalVisitors = 883000;
            var visitorsData = {
                "New vs Returning Visitors": [{
                    click: visitorsChartDrilldownHandler,
                    cursor: "pointer",
                    explodeOnClick: false,
                    innerRadius: "75%",
                    legendMarkerType: "square",
                    name: "New vs Returning Visitors",
                    radius: "100%",
                    showInLegend: true,
                    startAngle: 90,
                    type: "doughnut",
                    dataPoints: [{
                            y: 519960,
                            name: "New Visitors",
                            color: "#E7823A"
                        },
                        {
                            y: 363040,
                            name: "Returning Visitors",
                            color: "#546BC1"
                        }
                    ]
                }],
                "New Visitors": [{
                    color: "#E7823A",
                    name: "New Visitors",
                    type: "column",
                    xValueFormatString: "MMM YYYY",
                    dataPoints: [{
                            x: new Date("1 Jan 2015"),
                            y: 33000
                        },
                        {
                            x: new Date("1 Feb 2015"),
                            y: 35960
                        },
                        {
                            x: new Date("1 Mar 2015"),
                            y: 42160
                        },
                        {
                            x: new Date("1 Apr 2015"),
                            y: 42240
                        },
                        {
                            x: new Date("1 May 2015"),
                            y: 43200
                        },
                        {
                            x: new Date("1 Jun 2015"),
                            y: 40600
                        },
                        {
                            x: new Date("1 Jul 2015"),
                            y: 42560
                        },
                        {
                            x: new Date("1 Aug 2015"),
                            y: 44280
                        },
                        {
                            x: new Date("1 Sep 2015"),
                            y: 44800
                        },
                        {
                            x: new Date("1 Oct 2015"),
                            y: 48720
                        },
                        {
                            x: new Date("1 Nov 2015"),
                            y: 50840
                        },
                        {
                            x: new Date("1 Dec 2015"),
                            y: 51600
                        }
                    ]
                }],
                "Returning Visitors": [{
                    color: "#546BC1",
                    name: "Returning Visitors",
                    type: "column",
                    xValueFormatString: "MMM YYYY",
                    dataPoints: [{
                            x: new Date("1 Jan 2015"),
                            y: 22000
                        },
                        {
                            x: new Date("1 Feb 2015"),
                            y: 26040
                        },
                        {
                            x: new Date("1 Mar 2015"),
                            y: 25840
                        },
                        {
                            x: new Date("1 Apr 2015"),
                            y: 23760
                        },
                        {
                            x: new Date("1 May 2015"),
                            y: 28800
                        },
                        {
                            x: new Date("1 Jun 2015"),
                            y: 29400
                        },
                        {
                            x: new Date("1 Jul 2015"),
                            y: 33440
                        },
                        {
                            x: new Date("1 Aug 2015"),
                            y: 37720
                        },
                        {
                            x: new Date("1 Sep 2015"),
                            y: 35200
                        },
                        {
                            x: new Date("1 Oct 2015"),
                            y: 35280
                        },
                        {
                            x: new Date("1 Nov 2015"),
                            y: 31160
                        },
                        {
                            x: new Date("1 Dec 2015"),
                            y: 34400
                        }
                    ]
                }]
            };

            var newVSReturningVisitorsOptions = {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "New VS Returning Visitors"
                },
                subtitles: [{
                    text: "Click on Any Segment to Drilldown",
                    backgroundColor: "#2eacd1",
                    fontSize: 16,
                    fontColor: "white",
                    padding: 5
                }],
                legend: {
                    fontFamily: "calibri",
                    fontSize: 14,
                    itemTextFormatter: function(e) {
                        return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";
                    }
                },
                data: []
            };

            var visitorsDrilldownedChartOptions = {
                animationEnabled: true,
                theme: "light2",
                axisX: {
                    labelFontColor: "#717171",
                    lineColor: "#a2a2a2",
                    tickColor: "#a2a2a2"
                },
                axisY: {
                    gridThickness: 0,
                    includeZero: false,
                    labelFontColor: "#717171",
                    lineColor: "#a2a2a2",
                    tickColor: "#a2a2a2",
                    lineThickness: 1
                },
                data: []
            };

            newVSReturningVisitorsOptions.data = visitorsData["New vs Returning Visitors"];
            $("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);

            function visitorsChartDrilldownHandler(e) {
                e.chart.options = visitorsDrilldownedChartOptions;
                e.chart.options.data = visitorsData[e.dataPoint.name];
                e.chart.options.title = {
                    text: e.dataPoint.name
                }
                e.chart.render();
                $("#backButton").toggleClass("invisible");
            }

            $("#backButton").click(function() {
                $(this).toggleClass("invisible");
                newVSReturningVisitorsOptions.data = visitorsData["New vs Returning Visitors"];
                $("#flix").CanvasJSChart(newVSReturningVisitorsOptions);
            });

        }
    </script>
    <style>
        #timeToRender {
            position: absolute;
            top: 10px;
            font-size: 20px;
            font-weight: bold;
            background-color: #d85757;
            padding: 0px 4px;
            color: #ffffff;
        }

        #backButton {
            border-radius: 4px;
            padding: 8px;
            border: none;
            font-size: 16px;
            background-color: #2eacd1;
            color: white;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .invisible {
            display: none;
        }
    </style>


    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

</body>

</html>
