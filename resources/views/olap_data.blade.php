<html>

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
       /* canvas {
        border: 1px dotted white;
        } */

        .chart-container {
        position: relative;
        margin: auto;
        height: 300px;
        width: 100%;
        }
    </style>
</head>

<body class="skin-blue">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="/" class="logo"><b>Wisudawan</b></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <!-- <span class="label label-success">4</span> -->
                            </a>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <!-- <span class="label label-warning">10</span> -->
                            </a>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <!-- <span class="label label-danger">9</span> -->
                            </a>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('dist/img/avatar-not-found 160x160.jpeg')}}" class="user-image"
                                    alt="User Image" />
                                <span class="hidden-xs">Sri Desi Mulyani</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('dist/img/avatar-not-found 160x160.jpeg')}}" class="img-circle"
                                        alt="User Image" />
                                    <p>
                                        Sri Desi Mulyani - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <!-- <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div> -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ asset('dist/img/avatar-not-found 160x160.jpeg')}}" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Sri Desi Mulyani</p>

                        <a href="#"><i class="fa fa-circle text-danger"></i> Offline</a>
                    </div>
                </div>
                <!-- search form -->
                <!-- <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..." />
                        <span class="input-group-btn">
                            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i
                                    class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form> -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview">
                        <a href="/">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="/periode">
                            <i class="fa fa-files-o"></i>
                            <span>Periode</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="/prodi">
                            <i class="fa fa-book"></i> <span>Prodi</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="/status-pekerjaan">
                            <i class="fa fa-briefcase"></i> <span>Status Pekerjaan</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="/status-alumni">
                            <i class="fa fa-plane"></i> <span>Status Alumni</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="/status-domisili">
                            <i class="fa fa-archive"></i> <span>Status Domisili</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="/wisudawan">
                            <i class="fa fa-users"></i> <span>Data Wisudawan</span>
                        </a>
                    </li>
                    <li class=" active treeview">
                        <a href="/olap-online">
                        <i class="fa fa-bar-chart"></i> <span>OLAP</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <section class="content-header">
                <h1>
                    OLAP Graph
                    <small>K-Means Clustering</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">OLAP Graph</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border" style="text-align: center;">
                                <h3 class="box-title">Grafik OLAP (Online Analytical Processing) Wisuda</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-8 connectedSortable ui-sortable" style="padding: 10px;">
                                        <!-- <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs pull-right ui-sortable-handle">
                                                <li class="">
                                                    <a href="#myChart2" data-toggle="tab" aria-expanded="false" aria-controls="myChart2">Z-Axis</a>
                                                </li>
                                                <li class="active">
                                                    <a href="#myChart" data-toggle="tab">X-Axis</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content no-padding">
                                                <div class="chart-responsive">
                                                    <canvas class="chart tab-pane fade active in" id="myChart"></canvas>
                                                    <canvas class="chart tab-pane" id="myChart2"></canvas>
                                                </div>
                                            </div>
                                        </div> -->
                                        <button onclick="renderChart('x_axis')" class="" style="float: left; margin: 0 0 0 40px"> X-Axis</button>
                                        <button onclick="renderChart('z_axis')" class="" style="float: right;"> Z-Axis</button>
                                        <div class="chart-responsive">
                                            <canvas class="" id="myChart"></canvas>
                                        </div>
                                    </div>
                                    <!--/.col -->

                                </div><!-- /.row -->
                            </div><!-- ./box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    
                </div><!-- /.row -->

                <div class='row'>

                </div><!-- /.row -->

                <div class="row">

                </div><!-- /.row -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <footer class="main-footer">
            <!-- <div class="pull-right hidden-xs">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All
            rights reserved. -->
        </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset('plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{ asset('plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/app.min.js')}}" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{ asset('plugins/chartjs/Chart.min.js')}}" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard2.js')}}" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js')}}" type="text/javascript"></script>

    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Call Chart -->
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js" type="text/javascript"></script>
    <script>
        // Jurusan
        var _ydataJurusan = {!! json_encode($by_nama_jurusan) !!};
        var _xdataJurusan_memuaskan = {!! json_encode($by_jumlah_jurusan_memuaskan) !!};
        var _xdataJurusan_cukup = {!! json_encode($by_jumlah_jurusan_cukup) !!};

        // Fakultas
        var _ydataFakultas = {!! json_encode($by_nama_fakultas) !!};
        var _xdataFakultas_memuaskan = {!! json_encode($by_jumlah_fakultas_memuaskan) !!};
        var _xdataFakultas_cukup = {!! json_encode($by_jumlah_fakultas_cukup) !!};
    </script>
    <script src="{{ asset('js/olap_chart.js')}}" type="text/javascript"></script>
    
</body>

</html>
