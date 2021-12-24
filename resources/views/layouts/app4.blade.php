<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Website Kependudukan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('login-form-07/images/icon.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('quixlab/./plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('quixlab/./plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('quixlab/./plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('quixlab/./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('quixlab/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="http://127.0.0.1:8000/home">
                    <b class="logo-abbr"><img src="{{ asset('quixlab/images/logo-text.png') }}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('quixlab/./images/logo-text.png') }}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('quixlab/images/logo-text.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">           
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <font face="Tahoma" size="4"> {{ Auth::user()->name }}</font>
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="http://127.0.0.1:8000/profil"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>

                                        <hr class="my-2">

                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-key"></i>
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                <li class="nav-label" href="http://127.0.0.1:8000/home">Dashboard</li>
                <li>
                    <a class="has" href="http://127.0.0.1:8000/home" aria-expanded="false">
                        <i class="icon-home menu-icon"></i> <span class="nav-text">Home</span>
                    </a>

                    <li>
                        <a href="http://127.0.0.1:8000/calender" aria-expanded="false">
                            <i class="icon-calender menu-icon"></i><span class="nav-text">Calender</span>
                        </a>
                    </li>

                    <li class="nav-label">Layanan</li>

                    <li>
                        <a class="has" href="javascript:void()" aria-expanded="false">
                            <i class="icon-user menu-icon"></i> <span class="nav-text">Penduduk</span>
                        </a>
                    </li>

                    <li>
                        <a class="has" href="javascript:void()" aria-expanded="false">
                            <i class="icon-folder menu-icon"></i> <span class="nav-text">Kartu Keluarga</span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="has" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Surat Kelahiran</span>
                        </a>
                    </li>

                    <li>
                        <a class="has" href="javascript:void()" aria-expanded="false">
                            <i class="icon-star menu-icon"></i><span class="nav-text">Surat Kematian</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            @yield('content')
          <!-- #/ container -->
        </div>
                        
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by Irvi Ariefatul Julia Putri & IchsanI Nikken Rahamawati</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('quixlab/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('quixlab/js/custom.min.js') }}"></script>
    <script src="{{ asset('quixlab/js/settings.js') }}"></script>
    <script src="{{ asset('quixlab/js/gleek.js') }}"></script>
    <script src="{{ asset('quixlab/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('quixlab/./plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('quixlab/./plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('quixlab/./plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('quixlab/./plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('quixlab/./plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('quixlab/./plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('quixlab/./plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('quixlab/./plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('quixlab/./plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('quixlab/./plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('quixlab/./js/plugins-init/fullcalendar-init.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('quixlab/./plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('quixlab/./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>



    <script src="{{ asset('quixlab/./js/dashboard/dashboard-1.js') }}"></script>

</body>

</html>