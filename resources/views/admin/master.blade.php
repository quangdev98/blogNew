<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin - Quang Merce</title>
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <base href="{{ asset('') }}">
    <link type="text/css" href="{{ url('admins/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ url('admins/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ url('admins/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link type="text/css" href="{{ url('admins/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ url('admins/bower_components/datatables-responsive/css/dataTables.responsive.css')}}" rel="stylesheet">
    <link type="text/css" href="{{ url('admins/dist/css/sb-admin-2.css')}}" rel="stylesheet">
</head>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar_top navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fab fa-apple"></i>&nbsp; Admin Laravel</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="navUser nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="DateTime">
                    <span id="titmeDate">
                        <span id="getWeek"></span>,
                        <span id="getDay"></span>
                        <span id="getMonth"></span>
                        <span id="getYear"></span>
                    </span>&nbsp;||
                    <span class="" id="time_now"></span>
                </li>
                <li class="dropdown">
                    <a class="uuuuser dropdown-toggle" data-toggle="dropdown" href="#">
                        <div class="user">
                            <span class="interFaceUser">
                                <img src="{{ url('admins/dist/img/user.webp')}}" alt="">
                            </span>
                            <span class="nameUser">Quang Merce</span>
                        </div> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="far fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fal fa-cogs fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ Route('index') }}"><i class="fal fa-sign-out-alt fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="nav_control_left navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{ URL::route('admin') }}"><i class="fad fa-home fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fad fa-chart-line fa-fw"></i> Category<span class="fal arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="{{ URL::route('category-list') }}">List Category</a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('category-add') }}">Add Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fad fa-cubes fa-fw"></i> Author<span class="fal arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::route('author-list') }}">List Author</a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('author-add') }}">Add Author</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fad fa-cubes fa-fw"></i> Product<span class="fal arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::route('product-list') }}">List Product</a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('product-add') }}">Add Product</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="#"><i class="fad fa-blog fa-fw"></i> Blogs<span class="fal arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::route('post-list') }}">List Bogs</a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('post-add') }}">Add Blogs</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fad fa-users fa-fw"></i> User<span class="fal arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::route('user-list') }}">List User</a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('user-add') }}">Add User</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">


                   <!-- master_content -->
                    @yield('content')
                   <!-- end master_content -->


                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <script src="{{ url('admins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ url('admins/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('admins/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
    <script src="{{ url('admins/dist/js/sb-admin-2.js')}}"></script>
    <script src="{{ url('admins/bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('admins/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ url('admins/dist/js/getDate.js') }}"></script>
    <script src="{{ url('admins/dist/js/fix_tenkhongdau.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                    responsive: true
            });
        });
    </script>
</body>

</html>
