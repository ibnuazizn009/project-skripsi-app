<html>

<head>
    <meta charset="UTF-8">
    <title>Edit - Prodi</title>
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Date Bootstrap Picker -->
    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <?php
    use App\Http\Controllers\chart_controller;
    use App\Http\Controllers\DataSet;
    ?>
</head>

<body class="skin-blue sidebar-collapse sidebar-open">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo" style="background-color:#3c8dbc; !important"></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar" role="navigation">
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

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <section class="content-header">
                <h1>
                    <small>Edit Data Prodi</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Edit Data Prodi</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Info boxes -->
                @foreach($prodi as $prod)
                <form action="/prodi/update/{{$prod->kode_dikti}}" method="post">
                {{ csrf_field() }}
                    <div class="row" style="display: flex;">
                            <div class="col-md-11">
                                <div class="box" style="width: 50% !important">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-auto" style="padding: 5px;">
                                                <div class="form-group">
                                                    <input type="hidden" value="{{ $prod->kode_dikti }}" class="form-control" id="exampleInputEmail1" name="kode_dikti">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" value="{{ $prod->kode_fak }}" class="form-control" id="exampleInputEmail1" name="kode_fak">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" value="{{ $prod->id_fakultas }}" class="form-control" id="exampleInputEmail1" name="id_fakultas">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1" type="">Nama Resmi</label>
                                                    <input type="text" value="{{ $prod->nama_resmi }}" required="required" class="form-control" placeholder="Ushuluddin" name="nama_resmi">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1" type="">Nama Fakultas</label>
                                                    <input type="text" value="{{ $prod->nama_fakultas }}" required="required" class="form-control" placeholder="Ushuliddin" name="nama_fakultas">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1" type="">Nama Kajur</label>
                                                    <input type="text" value="{{ $prod->nama_kajur }}" required="required" class="form-control" placeholder="Budi S.Pd" name="nama_kajur">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1" type="">NIP Kajur</label>
                                                    <input type="text" value="{{ $prod->nip_kajur }}" required="required" class="form-control" placeholder="123456" name="nip_kajur">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" value="{{ $prod->kode_jur }}" class="form-control" id="exampleInputEmail1" name="kode_jur">
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" value="{{ $prod->id_jenjang }}" class="form-control" id="exampleInputEmail1" name="id_jenjang">
                                                </div>
                                                <div class="form-group">
                                                    <label for="status-aktif-periode">Jenjang</label>
                                                    <select class="form-control" id="status_aktif" name="jenjang">
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1" type="">Jurusan</label>
                                                    <input type="text" value="{{ $prod->jurusan }}" required="required" class="form-control" placeholder="S1-Hukum" name="jurusan">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1" type="">Nama Jurusan</label>
                                                    <input type="text" value="{{ $prod->nama_jurusan }}" required="required" class="form-control" placeholder="Hukum Tatanegara" name="nama_jurusan">
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                                </div>
                                                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                            </div>
                                            <!--/.col -->
                                        </div><!-- /.row -->
                                    </div><!-- ./box-body -->
                                </div><!-- /.box -->
                            </div><!-- /.col -->
                    </div><!-- /.row -->
                </form>
                @endforeach
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
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <!-- Date Function-->
    <script>
    $(document).ready(function(){
      var date_input=$('input[name="tgl_buka_daftar"]');
      var date_input2=$('input[name="tgl_tutup_daftar"]');
      var date_input3=$('input[name="tgl_tutup_perpanjangan"]');
      var date_input4=$('input[name="tgl_gladi"]');
      var date_input5=$('input[name="tgl_bagi_toga"]');
      var date_input6=$('input[name="tgl_pelaksanaan"]'); //our date input has the name "date"

      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm-dd-yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
      date_input2.datepicker(options);
      date_input3.datepicker(options);
      date_input4.datepicker(options);
      date_input5.datepicker(options);
      date_input6.datepicker(options);
    })
</script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{ asset('plugins/chartjs/Chart.min.js')}}" type="text/javascript"></script>

    <!-- this is chartJS -->

</body>

</html>
