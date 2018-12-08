<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="description" content="Mast Ticket admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('img/mast-ticket.png')}}">
    <link rel="shortcut icon" href="{{asset('img/mast-ticket.png')}}">

    <link rel="stylesheet" href="{{asset('dashboard/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/pe-icon-7-filled.css')}}">


    <link rel="stylesheet" href="{{asset('dashboard/assets/css/style.css')}}">
    <link href="{{asset('dashboard/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">
</head>
<body>


<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('Home')}}"><i class="menu-icon fa fa-home"></i>Visit Home </a>
                </li>
                <li class="menu-title">{{$user->company}}</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="#">Buttons</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="#">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="#">Tabs</a></li>

                        <li><i class="fa fa-id-card-o"></i><a href="#">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="#">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="#">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="#">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="#">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="#">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="#">Typography</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Views</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{route('view-bus')}}">View Bus</a></li>
                        <li><i class="fa fa-table"></i><a href="#">Data Table</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Insertions</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{route('Insert-bus')}}">Insert Bus</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="#">Advanced Form</a></li>
                    </ul>
                </li>

                <li class="menu-title">Icons</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="#">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="#">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="#">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="#">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="#">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-map-marker"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="#">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="#">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="menu-title">Extras</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="#">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="#">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="#">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
<!-- Left Panel -->



<!-- Right Panel -->
<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('dashboard')}}"><img src="{{asset('dashboard/images/logo.png')}}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{asset('dashboard/images/logo2.png')}}" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">2</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 2 Notification</p>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-check"></i>
                                <p>1 New Ticket booked</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-info"></i>
                                <p>3 New Ticket booked</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="count bg-primary">4</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('dashboard/images/avatar/1.jpg')}}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('dashboard/images/avatar/2.jpg')}}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('dashboard/images/avatar/3.jpg')}}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('dashboard/images/avatar/4.jpg')}}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{asset($user->image)}}" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                        <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- /header -->
    <!-- Header-->
    @yield('breadcrumbs')
    @yield('content')
    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Raghib Shahriyer.
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://vcshahriyer.com">Rahgib Shahriyer</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->


<script src="{{asset('dashboard/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/popper.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/plugins.js')}}"></script>
<script src="{{asset('dashboard/assets/js/main.js')}}"></script>

<script>
    jQuery(document).ready(function($) {
        "use strict";


    });  // End of Document Ready
</script>




<div id="container">



</div>



</body>
</html>
