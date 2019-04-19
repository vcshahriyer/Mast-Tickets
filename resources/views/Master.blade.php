<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Mast || Ticket</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @yield("css")
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/mast-ticket.png')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    @yield("preloader")
    <!-- header-start -->
    <header class="header-3">
    @if (Route::has('login'))
    <div class="login">
        @auth
        <a href="{{route('dashboard')}}">{{str_limit(Auth::user()->name,15)}}</a>
        <a href="{{route("logout")}}">Log Out</a>
        @else
        <a href="{{ route('register') }}">Sign Up</a>
        <a href="{{ route('login') }}">Sign In</a>
        @endauth
    </div>
    @endif
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="h3-logo">
                        <a href="{{route("Home")}}"><img src="{{asset("svg/edited.svg")}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-10 hidden-sm hidden-xs">
                    <div class="menu-area-3 main-menu">
                        <nav>
                            <ul class="menu">
                                <li class="active"><a href="{{route("Home")}}">Home</a></li>
                                <li><a href="{{route("my-tickets")}}">My Tickets</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="{{ route("Company") }}">Companies</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- mobile-menu-start -->
    <div class="mobile-menu-area visible-xs visible-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile_menu">
                        <nav id="mobile_menu_active">
                            <ul class="menu">
                                <li><a href="{{route("Home")}}">Home</a></li>
                                <li><a href="{{route("my-tickets")}}">My Tickets</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Companies</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">About Us</a></li>
                                <li class="active"><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-end -->
    @yield("content")


    <!-- Scripts -->
    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/countdown.js')}}"></script>
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    @yield("script")
</body>

</html>