<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->


<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Metas -->
    <title>DTW  || @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{url('assets/images/apple-touch-icon.png')}}">
    
    <!-- Material Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-material-design.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/ripples.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
    
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('assets/style.css')}}">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{url('assets/css/colors.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="">

    
    
    <div id="wrapper">
        

        <header class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('/')}}"><i class="material-icons">announcement</i> Helper</a>
                        </div>
                        <div class="navbar-collapse collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li class="dropdown hasmenu">
                                    <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="faqs.html">FAQS</a></li>
                                        <li><a href="single-topic.html">Single Topic</a></li>
                                        <li><a href="single-knowlegde-base.html">Single Knowledge</a></li>
                                        <li><a href="single-forum.html">Single Forum</a></li>
                                        <li><a href="login.html">Login Page</a></li>
                                        <li><a href="contact.html">Contact Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="knowledge-base.html">Knowledge Base</a></li>
                                <li><a href="topics.html">Topics</a></li>
                                <li><a href="forums.html">Forums</a></li>
                                <li><a href="documentation.html">Documentation</a></li> -->
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" data-toggle="modal" data-target="#LoginModal"><i class="material-icons">lock</i>Register</a></li>
                                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#LoginModal"><i class="material-icons">lock</i>Login</a></li>
                                @if(Auth::user())
                                <li><a href="{{route('new_topic')}}">New Topic</a></li>
                                <li><a href="{{route('logout')}}"><i class="material-icons">lock</i>Logout</a></li>

                                @endif
                            </ul>


                        </div>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->


        @yield('section')



         <div class="stickyfooter">
            <div id="sitefooter" class="container">
                <div id="copyright" class="row">
                    <div class="col-md-6 col-sm-12 text-left">
                        <p>DTW ® is a designed and registered trademark of <a href="javascript:void(0)">James Dev</a> INC.</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul class="list-inline text-right">
                            <li><a href="#">Terms of Usage</a></li>
                            <li><a href="#">Copyrights</a></li>
                            <li><a href="#">License</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <!-- Login Modal -->
        <div id="LoginModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login Account</h4>
                    </div>
                    <div class="modal-body">
                        <div class="widget clearfix">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                   

                                    <form class="sidebar-login" action="{{route('signin')}}" method="post">
                                        <input type="text" class="form-control" placeholder="Username" name="name">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> &nbsp;&nbsp;Remember me
                                            </label>
                                        </div>
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-raised btn-info gr">Login</button>
                                    </form> 
                                </div>
                            </div>
                            <small>No account? <a href="login.html">Register</a></small>
                        </div><!-- end widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->

    <script src="{{url('assets/js/jquery.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.js')}}"></script>
    <script src="{{url('assets/js/ripples.min.js')}}"></script>
    <script src="{{url('assets/js/material.min.js')}}"></script>
    <script src="{{url('assets/js/custom.js')}}"></script>

</body>


</html>
