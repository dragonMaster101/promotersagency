<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Promoters Agency</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('plugins/css/plugins.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>
<div class="Loader"></div>
<div class="wrapper">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">

        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('img/logo5.png')}}" class="logo logo-display" alt="">
                    <img src="{{asset('img/logo5.png')}}" class="logo logo-scrolled" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                {{--<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="left-br"><a href="javascript:void(0)"  data-toggle="modal" data-target="#signup" class="signin">Sign In Now</a></li>
                </ul>--}}
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Home</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="{{url('/login')}}">Sign In</a></li>
                                                <li><a href="#search">Search Job</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">For Candidate</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="{{url('/browsejobs')}}">Browse Jobs</a></li>
                                                <li><a href="{{url('/register')}}">Sign Up</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->

                                    <div class="col-menu col-md-3">
                                        <h6 class="title">For Companies</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="{{url('/contact')}}">Contact Us</a></li>

                                            </ul>
                                        </div>
                                    </div>

                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    {{--      <li><a href="blog.html">Blog</a></li>--}}
                    <li><a href="{{url('/register')}}"><i class="fa fa-pencil" aria-hidden="true"></i>SignUp</a></li>
                    {{--   <li><a href="pricing.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Pricing</a></li>--}}
                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
    <div class="clearfix"></div>

    @yield('content')

    <!-- Footer Section Start -->
    <footer class="footer">
        <div class="row lg-menu">
            <div class="container">
                <div class="col-md-10 col-sm-10">
                    <img src="assets/img/footer-logo.png" class="img-responsive" alt="" />
                </div>
                <div class="col-md-8 co-sm-8 center">
                    <h2>Together We Can Achieve More</h2>
                </div>
            </div>
        </div>
        <div class="row no-padding">
            <div class="container">
                <div class="col-md-4 col-sm-12">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">PROMOTERSAGENCY</h3>
                        <div class="textwidget">
                            <p>We help you gain valuable career experience</p>
                            <p>7860 North Park Place<br>
                                San Francisco, CA 94120</p>
                            <p><strong>Email: </strong><span class="email">hr@promotersagency.com</span></p>
                            <p><strong>Call:</strong> <a href="tel:+15555555555">9000009</a></p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">Quick Links</h3>
                        <div class="textwidget">
                            <div class="textwidget">
                                <ul class="footer-navigation">
                                    <li><a href="{{url('/')}}" title="">Home</a></li>
                                    <li><a href="{{url('/signup')}}" title="">Sign Up</a></li>
                                    <li><a href="{{url('/signin')}}" title="">Sign In</a></li>
                                    <li><a href="{{url('/browsejobs')}}" title="">Jobs</a></li>
                                    <li><a href="{{url('/contact')}}" title="">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widgettitle widget-title">Connect With Us</h3>
                        <div class="textwidget">
                            <form class="footer-form">
                                <input type="text" class="form-control" placeholder="Your Name">
                                <input type="text" class="form-control" placeholder="Email">
                                <textarea class="form-control" placeholder="Message"></textarea>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="container">
                <p>Copyright Promotersagency © 2018. All Rights Reserved </p>
            </div>
        </div>
    </footer>
    <div class="clearfix"></div>
    <!-- Footer Section End -->

    <!-- Sign Up Window Code -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
                            <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content" id="myModalLabel2">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">
                                <img src="assets/img/logo.png" class="img-responsive" alt="" />
                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="email"  name="email" class="form-control" placeholder="Username" required="">
                                                <input type="password" name="password" class="form-control"  placeholder="Password" required="">
                                                <div class="center">
                                                    <button type="submit" id="login-btn" class="submit-btn"> Login </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="register">
                                <img src="assets/img/logo.png" class="img-responsive" alt="" />
                                <form class="form-inline" method="post">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text"  name="email" class="form-control" placeholder="Your Name" required="">
                                            <input type="email"  name="email" class="form-control" placeholder="Your Email" required="">
                                            <input type="email"  name="email" class="form-control" placeholder="Username" required="">
                                            <input type="password" name="password" class="form-control"  placeholder="Password" required="">
                                            <div class="center">
                                                <button type="submit" id="subscribe" class="submit-btn"> Create Account </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sign Up Window -->

    <!-- Scripts
    ================================================== -->
    <script type="text/javascript" src="{{asset('plugins/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/viewportchecker.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/bootsnav.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/wysihtml5-0.3.0.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/bootstrap-wysihtml5.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/datedropper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/dropzone.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/loader.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/js/gmap3.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('js/custom.js')}}"></script>

</div> {{--End of Wrapper--}}
</body>
</html>