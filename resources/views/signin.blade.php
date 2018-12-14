<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('plugins/css/plugins.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">


</head>

<body class="simple-bg-screen">
<div class="Loader"></div>
<div class="wrapper">

    <!-- Title Header Start -->
    <section class="login-screen-sec">
        <div class="container">
            <div class="login-screen">
                <a href="{{url('/')}}"><img src="{{asset('img/darklogo.png')}}" class="img-responsive" alt=""></a>
                <form>
                    <input type="text" class="form-control" placeholder="Useraname" required>
                    <input type="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-login" type="submit">Login</button>
                    <span>You Have No Account? <a href="{{url('/signup')}}"> Create An Account</a></span>
                    <span><a href="lost-password.html"> Forget Password</a></span>
                </form>
            </div>
        </div>
    </section>

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

</div>
</body>
</html>