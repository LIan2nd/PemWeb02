<?php
$menus = [
    'Home' => 'index.php',
    'Produk' => 'produk/index.php',
    'Pelanggan' => 'pelanggan/index.php',
    'Kartu' => 'kartu/index.php'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
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
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
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

                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="index.php" class="d-block">Admin</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder=" Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                       with  font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Menu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <?php foreach ($menus as $title => $link): ?>
                                    <li class="nav-item">
                                        <a href="<?= $link ?>" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                <?= $title ?>
                                            </p>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>

                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon">

                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!--    ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>

                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!--         Main row -->
                    <div cla ss="row">
                        <!-- Lef t col -->
                        <section class="col-lg-7 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-chart-pie mr-1"></i>

                                        Sales
                                    </h3>
                                    <div class="card-tools">
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#revenue-chart"
                                                    data-toggle="tab">Area</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div><!-- /.card-header -->
                                <div class="card-body">

                                    <div class="tab-content p-0">

                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="revenue-chart"
                                            style="position: relative; height: 300px;">
                                            <canvas id="revenue-chart-canvas" height="300"
                                                style="height: 300px;"></canvas>
                                        </div>
                                        <div class="chart tab-pane" id="sales-chart"
                                            style="position: relative; height: 300px;">
                                            <canvas id="sales-chart-canvas" height="300"
                                                style="height: 300px;"></canvas>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!--    /.card -->
                            <!-- TO     DO List -->
                            <div cla ss="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="ion ion-clipboard mr-1"></i>
                                        To Do List
                                    </h3>

                                    <div class="card-tools">
                                        <ul class="pagination pagination-sm">
                                            <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    </di v>
                                    <!--     /.card-header -->
                                    <div cla ss="card-body">
                                        <ul class="todo-list" data-widget="todo-list">
                                            <li>
                                                <!-- drag handle -->
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>

                                                </span>
                                                <!-- checkbox -->
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                                    <label for="todoCheck1"></label>
                                                </div>
                                                <!-- todo text -->
                                                <span class="text">Design a nice theme</span>
                                                <!-- Emphasis label -->
                                                <small class="badge badge-danger"><i class="far fa-clock"></i> 2
                                                    mins</small>
                                                <!-- General tools such as edit or delete-->
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo2" id="todoCheck2"
                                                        checked>
                                                    <label for="todoCheck2"></label>
                                                </div>
                                                <span class="text">Make the theme responsive</span>
                                                <small class="badge badge-info"><i class="far fa-clock"></i> 4
                                                    hours</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>

                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                                    <label for="todoCheck3"></label>
                                                </div>
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="badge badge-warning"><i class="far fa-clock"></i> 1
                                                    day</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>

                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                                    <label for="todoCheck4"></label>
                                                </div>
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="badge badge-success"><i class="far fa-clock"></i> 3
                                                    days</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>

                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                                    <label for="todoCheck5"></label>
                                                </div>
                                                <span class="text">Check your messages and notifications</span>
                                                <small class="badge badge-primary"><i class="far fa-clock"></i> 1
                                                    week</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>

                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="handle">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </span>
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="to
                                         d  o6" id="todoCheck6">
                                                    <label for="todoCheck6"></label>
                                                </div>
                                                <span class="text">Let theme shine like a star</span>
                                                <small class="badge badge-secondary"><i class="far fa-clock"></i> 1
                                                    month</small>
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <button type="button" class="btn btn-primary float-right"><i
                                                class="fas fa-plus"></i> Add
                                            item</button>
                                    </div>
                                    </di v>

                                    <!-- /.c   ard -->
                                    </sectio n>
                                    <!-- /.L    eft col -->
                                    <!-- right c    ol (We are only adding the ID to make the widgets sortable)-->
                                    <section cla ss="col-lg-5 connectedSortable">

                                        <!-- Map card -->
                                        <div class="card bg-gradient-primary">
                                            <div class="card-header border-0">
                                                <h3 class="card-title">
                                                    <i class="fas fa-map-marker-alt mr-1"></i>
                                                    Visitors
                                                </h3>
                                                <!-- card tools -->
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-primary btn-sm daterange"
                                                        title="Date range">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-card-widget="collapse" title="Collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                                <!-- /.card-tools -->
                                            </div>
                                            <div class="card-body">
                                                <div id="world-map" style="height: 250px; width: 100%;"></div>
                                            </div>
                                            <!-- /.card-body-->
                                            <div class="card-footer bg-transparent">
                                                <div class="row">
                                                    <div class="col-4 text-center">
                                                        <div id="sparkline-1"></div>
                                                        <div class="text-white">Visitors</div>
                                                    </div>
                                                    <!-- ./col -->
                                                    <div class="col-4 text-center">
                                                        <div id="sparkline-2"></div>
                                                        <div class="text-white">Online</div>
                                                    </div>
                                                    <!-- ./col -->
                                                    <div class="col-4 text-center">
                                                        <div id="sparkline-3"></div>
                                                        <div class="text-white">Sales</div>
                                                    </div>
                                                    <!-- ./col -->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                        </div>
                                        <!-- /.card -->
                                    </section>
                                    <!-- right col -->
                                </div>
                                <!-- /.row (main row) -->
                            </div><!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
                    </div>
                </div>

                <footer class="main-footer">
                    <strong>Copyright &copy; 2014-2021 <a href="profile.php">Alfian Nur Usyaid</a>.</strong>
                    All rights reserved.
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Teknik Informatika</b> TI - 07
                    </div>
                </footer>

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>