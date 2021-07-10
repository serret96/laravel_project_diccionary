
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> Admin Panel
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="/src/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="/src/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css" type="text/css">

    <!-- Theme style -->
    <link href="/src/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    {{--DataTables--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>


    <link href="/src/css/skin-blue.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/src/css/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/src/js/html5shiv.min.js"></script>
    <script src="/src/js/respond.min.js"></script>
    <![endif]-->

    <script src={{asset('src/js/jquery-3.1.0.js')}}></script>

</head>

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="{{url('/admin')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini" src="/src/img/photo-1103597_960_720.png"><b>D</b>IC</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>EbreDIC </span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav"></ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/src/img/photo-1103597_960_720.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Admin  {{Auth::user()->name}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">Inici</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="/admin/home"><i class='fa fa-home'></i> <span>Home</span></a></li>
                <li><a href="/admin/api/insertar"><i class='fa fa-tags'></i> <span>Insertar paraula</span></a></li>
                <li><a href="/admin/register"><i class='fa fa-book'></i> <span>Nou Usuari</span></a></li>

                <li class="treeview">
                    <a href="#">
                        <i class='fa fa-table'></i> <span>Taules</span>
                        <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/panel"><i class="fa fa-file"></i>Paraules</a></li>
                        {{--<li><a href="/admin/api/Translate">Traduccions</a></li>--}}
                        <li><a href="/admin/api/suggest"><i class="fa fa-file-text"></i>Propostes</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><span>Desconectat</span></a></li>
            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background: #F7F7F7">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            {{--<h1>--}}
                {{--Page Header here        <small></small>--}}
            {{--</h1>--}}


        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->




    <div class='control-sidebar-bg'></div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <strong>Desenvolupat per <a href="http://www.ticplace.es/" target="_blank">TICPlace&reg;</a></strong>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 EbreDIC TICPlace&reg;</strong>
    </footer>


</div>




<!-- REQUIRED JS SCRIPTS -->
<!-- Bootstrap 3.3.2 JS -->
<script src="/src/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="/src/js/app.min.js" type="text/javascript"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
</body>
</html>