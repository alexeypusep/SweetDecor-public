<?php
$protocol = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on'))?'https://':'http://';
if ($protocol != 'http://'){
    $public = '/public';
    $publiclogo = '/public/';
}
else {
    $public = '';
    $publiclogo = '';
}
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <script>
        window.alert = function() {
            debugger;
        }
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Админ-панель</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="icon" href="{{ asset($publiclogo.'img/logotip.png') }}" type="image/x-icon">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/summernote/summernote-bs4.min.css">
    <link href="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/css/colorbox.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background-color: white">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset($publiclogo.'img/logotip2.png') }}" height="60" width="60">
        <br>
        <h2>Секундочку</h2>
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item">
                <a class="btn" target="_blank" href="{{ route('home') }}" role="button">На сайт
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
            <img src="{{ asset($publiclogo.'img/logotip2.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin-Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://cdn-icons-png.flaticon.com/512/1256/1256220.png?w=826" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a class="d-block">{{ session('firstName').' '.session('lastName') }}</a>
                    <a class="blue-grey-text text-center pr-5" href="{{ route('exit') }}"> Выход <i class="fas fa-sign-out-alt black-text"></i></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('adminpanel') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Главная
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('adminclients.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Таблица "Клиенты"
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('adminorders.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Таблица "Заказы"
                            </p>
                        </a>
                    </li>

                    <li hidden class="nav-item">
                        <a href="{{ route('adminbasket.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Таблица "Корзина"
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Таблица "Товары"
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admintovars.index') }}" class="nav-link">
                                    <p>Все товары</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admintovars.create') }}" class="nav-link">
                                    <p>Добавить товар</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://sweetdecor.spb.ru/downloadcsv.php" class="nav-link">
                                    <p>Скачать CSV-файл</p>
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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: white;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('head')</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; {{ date('Y') }} <a href="https://zelevik.ru">SweetDecor</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
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
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/moment/moment.min.js"></script>
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/js/pages/dashboard.js"></script>
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/admin.js"></script>
<script type="text/javascript" src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/dist/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
<script src="{{ $protocol }}{{ $_SERVER['HTTP_HOST'] }}{{ $public }}/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>

</body>
</html>
