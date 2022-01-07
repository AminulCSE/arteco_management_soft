<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arteco Metallic</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('public/backend/libraries\assets\images\favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/libraries\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="{{asset('public/backend/libraries\assets\pages\chart\radial\css\radial.css')}}" type="text/css" media="all">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/libraries\assets\icon\feather\css\feather.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/libraries\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/libraries\assets\pages\data-table\css\buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/libraries\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/libraries\assets\pages\data-table\extensions\responsive\css\responsive.dataTables.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/libraries\assets\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/libraries\assets\css\jquery.mCustomScrollbar.css')}}">
</head>
<!-- Menu sidebar static layout -->
<body>
    <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}
                    @if (Route::has('login'))
                        <div class="text-md-right">
                            @auth
                                <a href="{{ url('/home') }}" style="color: red">Home</a>||
                            @else
                                <a href="{{ route('login') }}">Login</a>||

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>



                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('public/backend/libraries\bower_components\jquery\js\jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/libraries\bower_components\jquery-ui\js\jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/libraries\bower_components\popper.js\js\popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/libraries\bower_components\bootstrap\js\bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('public/backend/libraries\bower_components\jquery-slimscroll\js\jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('public/backend/libraries\bower_components\modernizr\js\modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/libraries\bower_components\modernizr\js\css-scrollbars.js')}}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{asset('public/backend/libraries\bower_components\chart.js\js\Chart.js')}}"></script>
    <!-- Google map js -->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js')}}"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{asset('public/backend/libraries\assets\pages\google-maps\gmaps.js')}}"></script>



    <!-- data-table js -->
    <script src="{{asset('public/backend/libraries\bower_components\datatables.net\js\jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\pages\data-table\js\jszip.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\pages\data-table\js\pdfmake.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\pages\data-table\js\vfs_fonts.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\pages\data-table\extensions\responsive\js\dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\bower_components\datatables.net-buttons\js\buttons.print.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\bower_components\datatables.net-buttons\js\buttons.html5.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js')}}"></script>

    <script src="{{asset('public/backend/libraries\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')}}"></script>

    <!-- Custom js -->
    <script src="{{asset('public/backend/libraries\assets\pages\data-table\extensions\responsive\js\responsive-custom.js')}}"></script>
    
    <!-- gauge js -->
    <script src="{{asset('public/backend/libraries\assets\pages\widget\gauge\gauge.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\pages\widget\amchart\amcharts.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\pages\widget\amchart\serial.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\pages\widget\amchart\gauge.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\pages\widget\amchart\pie.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\pages\widget\amchart\light.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('public/backend/libraries\assets\js\pcoded.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\js\vartical-layout.min.js')}}"></script>
    <script src="{{asset('public/backend/libraries\assets\js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/libraries\assets\pages\dashboard\crm-dashboard.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/libraries\assets\js\script.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
