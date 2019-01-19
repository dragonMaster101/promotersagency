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
    <section class="signup-screen-sec">
        <div class="container">
            <div class="signup-screen">
                <a href="{{url('/')}}"><img src="{{asset('img/darklogo.png')}}" class="img-responsive" alt=""></a>
                {{-- <form>
                     <input type="text" class="form-control" placeholder="Your Name" required>
                     <input type="email" class="form-control" placeholder="Your Email" required>
                     <input type="text" class="form-control" placeholder="Useraname" required>
                     <input type="password" class="form-control" placeholder="Password" required>
                     <button class="btn btn-login" type="submit" >Sign Up</button>
                     <span>Have You Account? <a href="{{url('/signin')}}"> Login</a></span>
                 </form>--}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control reg {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control reg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control reg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control reg" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group  mb-0">
                        <div class="col-md-12 ">
                            <br>
                            <button type="submit" class="btn btn-primary fullbtn">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
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