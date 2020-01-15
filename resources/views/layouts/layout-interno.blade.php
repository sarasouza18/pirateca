<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pirateca</title>
    <!-- Styles -->
    <!-- Bootstrap -->
    <link href="{{asset("vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset("vendors/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset("vendors/nprogress/nprogress.css")}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset("vendors/iCheck/skins/flat/green.css")}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset("vendors/jqvmap/dist/jqvmap.min.css" )}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset("vendors/bootstrap-daterangepicker/daterangepicker.css")}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset("build/css/custom.min.css")}}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link href="{{asset("css/icons.css")}}" rel="stylesheet">
</head>
<body class="nav-md">
<div  class="container body">
    <div class="main_container">
        <!-- Right Side Of Navbar -->
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/documentos/index" class="site_title"> <span>Pirateca</span></a>
                </div>
                <div class="clearfix"></div>
                <br/>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/documentos/index">Listagem</a></li>
                                </ul>
                            </li>

                            <li><a><i class="fa fa-desktop"></i> Documentos <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/documentos/create">adicionar material</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
        <footer>
            <div class="pull-right">
            </div>
            <div class="clearfix"></div>
        </footer>
    </div>
    @yield('content')
</div>
{{--<!-- Scripts -->--}}
<script src="{{asset("vendors/jquery/dist/jquery.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{asset("vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset("vendors/fastclick/lib/fastclick.js")}}"></script>
<!-- NProgress -->
<script src="{{asset("vendors/nprogress/nprogress.js")}}"></script>
<!-- gauge.js -->
<script src="{{asset("vendors/gauge.js/dist/gauge.min.js")}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js")}}"></script>
<!-- iCheck -->
<script src="{{asset("vendors/iCheck/icheck.min.js")}}"></script>
<!-- Skycons -->
<script src="{{asset("vendors/skycons/skycons.js")}}"></script>
<!-- Flot -->
<script src="{{asset("vendors/Flot/jquery.flot.js")}}"></script>
<script src="{{asset("vendors/Flot/jquery.flot.pie.js")}}"></script>
<script src="{{asset("vendors/Flot/jquery.flot.time.js")}}"></script>
<script src="{{asset("vendors/Flot/jquery.flot.stack.js")}}"></script>
<script src="{{asset("vendors/Flot/jquery.flot.resize.js")}}"></script>
<!-- Flot plugins -->
<script src="{{asset("vendors/flot.orderbars/js/jquery.flot.orderBars.js")}}"></script>
<script src="{{asset("vendors/flot-spline/js/jquery.flot.spline.min.js")}}"></script>
<script src="{{asset("vendors/flot.curvedlines/curvedLines.js")}}"></script>
<!-- DateJS -->
<script src="{{asset("vendors/DateJS/build/date.js")}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset("vendors/moment/min/moment.min.js")}}"></script>
<script src="{{asset("vendors/bootstrap-daterangepicker/daterangepicker.js")}}"></script>
<!-- Custom Theme Scripts -->
<script src="{{asset("build/js/custom.min.js")}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
<script>
    $(document).ready(function() {
        $($("#summernote").summernote("code")).text()
    });
    $('#summernote').summernote({
        fontNames: ['Helvetica']
    });
    $('#summernote').summernote('justifyLeft');
</script>
</body>
</html>
