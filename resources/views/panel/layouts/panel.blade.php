<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <title>{{ env("APP_NAME") }} | @yield('title', 'Inicio')</title>

        <!-- Font Awesome Icons -->
        <link
            rel="stylesheet"
            href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}"
        />
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}" />
        <!-- Google Font: Source Sans Pro -->
        <link
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
            rel="stylesheet"
        />
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav
                class="main-header navbar navbar-expand navbar-white navbar-light"
            >
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge"
                                >3</span
                            >
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                        >
                            <a href="#" class="dropdown-item"> </a>

                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer"
                                >See All Messages</a
                            >
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge"
                                >15</span
                            >
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                        >
                            <span class="dropdown-header"
                                >15 Notifications</span
                            >
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new
                                messages
                                <span class="float-right text-muted text-sm"
                                    >3 mins</span
                                >
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend
                                requests
                                <span class="float-right text-muted text-sm"
                                    >12 hours</span
                                >
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm"
                                    >2 days</span
                                >
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer"
                                >See All Notifications</a
                            >
                        </div>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            data-widget="control-sidebar"
                            data-slide="true"
                            href="#"
                            role="button"
                            ><i class="fas fa-th-large"></i
                        ></a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <img
                        src="{{ asset('img/alquilaclic-logo.png') }}"
                        class="brand-image img-circle"
                    />
                    <span class="brand-text font-weight-light"
                        >Alquilaclic</span
                    >
                </a>

                @include('panel.layouts.sidebar')
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">
                                    @yield('subtitle', 'Inicio')
                                </h1>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Alquilaclic
                </div>
                <!-- Default to the left -->

                <strong
                    >Programado por:
                    <a href="https://omarmonrroy.com">Omar Monrroy</a></strong
                >
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{
                asset('plugins/bootstrap/js/bootstrap.bundle.min.js')
            }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
    </body>
</html>
