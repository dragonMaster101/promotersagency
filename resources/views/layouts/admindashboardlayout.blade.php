<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PromotersAgency - Admin Dashboard</title>

    <!-- All Plugins Css -->
    <link rel="stylesheet" href="{{asset('userdashboard/assets/plugins/css/plugins.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('userdashboard/assets/css/style.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper" class="">
    <div class="fakeLoader"></div>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top"  style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{asset('img/logo5.png')}}" class="img-responsive" alt="Logo"></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-left header-search-form hidden-xs">
            <li><a class="menu-brand" id="menu-toggle"><span class="ti-view-grid"></span></a></li>
            <li class="hidden-sm hidden-xs">
                <div class="header-search-form input-group">
                    <span class="input-group-addon"><span class="ti-search"></span></span>
                    <input type="text" class="form-control" placeholder="Search & Enter">
                </div>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <!-- Sidebar Navigation -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li class="active"><a href="{{url('/admin/home')}}"><i class="fa fa-bullseye"></i>Dashboard</a></li>


                    <li><a href=""><i class="ti ti-email"></i>Messages <b class="badge bg-purple pull-right"></b></a></li>


                    <li>
                        <a href="javascript:void(0)"><i class="ti ti-ruler-pencil"></i>My Resume<span class="fa arrow"></span> <b class="badge bg-success pull-right"></b></a>
                        <ul class="nav nav-second-level">
                            {{--  <li>
                                  <a href="bookmarked-jobs.html">Bookmarked Jobs</a>
                              </li>--}}
                            <li>
                                <a href="">Manage Resumes</a>
                            </li>
                            {{--    <li>
                                    <a href="saved-company.html">Saved Company</a>
                                </li>--}}
                            <li>
                                <a href="{{route('createresume')}}">Create Resume</a>
                            </li>

                        </ul>
                    </li>

                    <li><a href="{{route('userprofile')}}"><i class="ti ti-folder"></i>My Profile</a></li>



                    <li><a class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti ti-shift-right"></i>
                            Log Out
                        </a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
    </nav>
    <!-- Sidebar Navigation -->

    <div id="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Home</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>


        </div>
    </div>
    <!-- /#page-wrapper -->

    <footer class="footer"> ©Copyright 2019 Promotersagency </footer>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('userdashboard/assets/plugins/js/jquery.min.js')}}"></script>
<script src="{{asset('userdashboard/assets/plugins/js/bootstrap.min.js')}}"></script>
<script src="{{asset('userdashboard/assets/plugins/js/metisMenu.min.js')}}"></script>
<script src="{{asset('userdashboard/assets/plugins/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('userdashboard/assets/plugins/js/sweetalert.js')}}"></script>
<script src="{{asset('userdashboard/assets/plugins/js/datepicker.js')}}"></script>
<script src="{{asset('userdashboard/assets/plugins/js/ckeditor.js')}}"></script>
<script src="{{asset('userdashboard/assets/plugins/js/select2.min.js')}}"></script>
<script src="{{asset('userdashboard/assets/js/loader.js')}}"></script>

<!-- Morris.js charts -->
<script src="{{asset('userdashboard/assets/plugins/js/raphael.min.js')}}"></script>
{{--<script src="{{asset('userdashboard/assets/plugins/js/morris.min.js')}}"></script>--}}{{--<script src="{{asset('userdashboard/assets/plugins/js/morris.min.js')}}"></script>--}}

<!-- Custom Theme JavaScript -->
<script src="{{asset('userdashboard/assets/js/custom.js')}}"></script>
{{--<script src="{{asset('userdashboard/assets/js/dashboard-4.js')}}"></script>--}}

</body>
</html>


