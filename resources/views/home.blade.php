
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" id="app">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
            <img src="../../dist/img/AdminLTELogo.png"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('backend/images/user.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">LaVueLibrary</a>
                    <a style="color: #343a40" class="btn btn-primary" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>

            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <router-link to="/" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Dashboard
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </router-link>
                    </li>
                    <li class="nav-item has-treeview">
                        <router-link to="/category" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Category
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </router-link>
                    </li>
                    <li class="nav-item has-treeview">
                        <router-link to="/author" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Author
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </router-link>
                    </li>
                    <li class="nav-item has-treeview">
                        <router-link to="/user" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                User
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </router-link>
                    </li>
                    <li class="nav-item has-treeview">
                        <router-link to="/books" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Book
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </router-link>
                    </li>
                    <li class="nav-item has-treeview">
                        <router-link to="/borrows" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Borrow
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </router-link>
                    </li>
                    <li class="nav-item has-treeview">
                        <router-link to="/return" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                Return
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </router-link>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <admin-main></admin-main>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.0-alpha
        </div>
        <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
