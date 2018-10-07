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
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @yield("css")
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/icon/favicon.ico">
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
        <a href="#">{{str_limit(Auth::user()->name,15)}}</a>
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
                                <li><a href="{{route("Booking")}}">Booking</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Companies</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Hanif</a></li>
                                        <li><a href="#">Ena</a></li>
                                        <li><a href="#">S.R Travel</a></li>
                                    </ul>
                                </li>
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
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home One</a>
                                        </li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                        <li><a href="index-3.html">Home Three</a></li>
                                        <li><a href="index-4.html">Home Four</a>
                                            <ul>
                                                <li><a href="#">Demo</a></li>
                                                <li><a href="#">Demo</a></li>
                                                <li><a href="#">Demo</a></li>
                                                <li><a href="#">Demo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog-standard.html">Blog</a>
                                    <ul>
                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                        <li><a href="blog-standard-2.html">Blog Standard 2</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery-standard.html">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-standard.html">Gallery Standard</a></li>
                                        <li><a href="gallery-masonary.html">Gallery Masonary</a></li>
                                        <li><a href="gallery-full-width.html">Gallery Full Width</a></li>
                                        <li><a href="gallery-details.html">Gallery Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="rooms.html">Rooms</a>
                                    <ul>
                                        <li><a href="rooms.html">Rooms</a></li>
                                        <li><a href="rooms-2.html">Rooms 2</a></li>
                                        <li><a href="rooms-details.html">Rooms Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="service.html">Service</a>
                                    <ul>
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="staff.html">Staff</a>
                                    <ul>
                                        <li><a href="staff.html">Staff</a></li>
                                        <li><a href="staff-details.html">Staff Details</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="choose-date.html">Choose Date</a></li>
                                        <li><a href="choose-room.html">Choose Room</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="contact-2.html">Contact 2</a></li>
                                        <li><a href="make-payment.html">Make Payment</a></li>
                                        <li><a href="make-payment-confirmation.html">Make Payment Confrimation</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
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
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.scrollUp.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>
    @yield("script")
</body>

</html>