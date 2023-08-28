<html>

<head>
    <meta charset="UTF-8">
    <title>User Data Page</title>
    <link rel="icon" href="{{ asset('images/icon_title.png')}}" type="image/x-icon">
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Table Scroll -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/table_style.css')}}">
</head>

<body class="skin-blue">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo"><b>Wisudawan</b></a>
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
                                <span class="hidden-xs">{{$acc_name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('dist/img/avatar-not-found 160x160.jpeg')}}" class="img-circle"
                                        alt="User Image" />
                                    <p>
                                        {{$acc_name}} - {{$acc_email}}
                                        <small>Role: {{$role_name[0]}}</small>
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
                                        <a href="/404-not-found" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
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
                        <img src="{{ asset('dist/img/avatar-not-found 160x160.jpeg')}}" class="img-circle"
                            alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>{{$acc_name}}</p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
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
                    @can('create role')
                    <li class="active treeview">
                        <a href="/user-data">
                            <i class="fa fa-user-plus"></i> <span>User</span>
                        </a>
                    </li>
                    @endcan
                    <li class="treeview">
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
                    Data User
                    <small>K-Means Clustering</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data User</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->
                @if(session())
                @if(session()->exists('message'))
                <div class="alert alert-success" id="success-alert" role="alert">
                    {{session('message')}}
                </div>

                @elseif(session()->exists('message_delete'))
                <div class="alert alert-primary" id="success-alert" role="alert"
                    style="background-color: #cce5ff !important">
                    {{session('message_delete')}}
                </div>
                @endif
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border" style="margin-left: 10px;">
                                <a href="/user-data/add" class="btn btn-sm btn-success" style="padding: 8px;"><b> Tambah Data </b></a>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="dataTables_wrapper">
                                        <table id="dtHorizontalVerticalExample-user"
                                            class="dataTable display compact hover nowrap table-bordered order-column row-border stripe"
                                            cellspacing="0" width="100%">
                                            <thead style="font-size: 14px">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Status</th>
                                                    <th>Created At</th>
                                                    <th>Update At</th>
                                                    <th>Change Status</ßth>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody style="font-size: 14px">
                                                @foreach($user_data as $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->password}}</td>
                                                    @if($user->status == 1)
                                                        <td style="color: green;">Active</td>
                                                    @else
                                                        <td style="color: red;">Deactive</td>
                                                    @endif
                                                    <td>{{$user->created_at}}</td>
                                                    <td>{{$user->updated_at}}</td>
                                                    <td style="text-align: center; padding: 15px 3px 0 3px"">
                                                    @if($user->status == 1)
                                                    <form action="/user-data/update/{{$user->id}}" method="post">
                                                        {{ csrf_field() }}
                                                        <button class="btn btn-sm btn-primary" type="submit" disabled>
                                                            <i class="fa fa-check-square" style="font-size: 20px;"></i>
                                                        </button>

                                                        <button class="btn btn-sm btn-danger" type="submit" value="0" name="status">
                                                            <i class="fa fa-times-circle" style="font-size: 20px;"></i>
                                                        </button>
                                                    </form>
                                                    @else
                                                    <form action="/user-data/update/{{$user->id}}" method="post">
                                                        {{ csrf_field() }}
                                                        <button class="btn btn-sm btn-primary" type="submit" value="1" name="status">
                                                            <i class="fa fa-check-square" style="font-size: 20px;"></i>
                                                        </button>

                                                        <button class="btn btn-sm btn-danger" type="submit" disabled>
                                                            <i class="fa fa-times-circle" style="font-size: 20px;"></i>
                                                        </button>
                                                    </form>
                                                    @endif
                                                    </td>
                                                    <td class="" style="text-align: center; padding: 15px 3px 0 3px">
                                                        <form onsubmit="" method="POST">
                                                            <a href="/user-data/edit/{{$user->id}}" class="btn btn-sm btn-primary"><b>EDIT</b></a>

                                                            <a href="/user-data/delete/{{$user->id}}" class="btn btn-sm btn-danger"><b>HAPUS</b></a>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- ./box-body -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <canvas id="myChart"></canvas>
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
    <!-- Table Scrollable -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#dtHorizontalVerticalExample-user').DataTable({
                scrollX: true,
                scrollY: 410,
                ordering: true,
                searching: false
            });
        });
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{ asset('plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/app.min.js')}}" type="text/javascript"></script>
    <!--Alert Function-->
    <script>
        $(document).ready(function () {
            $("#success-alert").fadeTo(3000, 500).slideUp(500, function () {
                $("#success-alert").slideUp(500);
            });
        });

    </script>
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

    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- this is chartJS -->

</body>

</html>
