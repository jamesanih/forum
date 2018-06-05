<!DOCTYPE html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->


<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Metas -->
    <title>{{config('app.name')}} || @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{url('assets/images/apple-touch-icon.png')}}">
    
    <!-- Material Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    {{--  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  --}}
     <link rel="stylesheet" href="{{url('assets/fonts/material-icons/font-material-icons.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-material-design.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/ripples.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
    
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{url('assets/style.css')}}">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{url('assets/css/colors.css')}}">
    <script src="{{url('assets/js/jquery.js')}}"></script>
   

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="">

    
    
    <div id="wrapper">
        

        <header class="header">
            <div class="container-fluid">
                @include('layouts.nav')
            </div><!-- end container -->
        </header><!-- end header -->


        @yield('section')



         @include('layouts.footer')


        <!-- Login Modal -->
       @include('layouts.modal')
    </div>
    <!-- end wrapper -->
<!-- 
    <script src="{{url('assets/js/jquery.js')}}"></script> -->
    <script src="{{url('assets/js/bootstrap.js')}}"></script>
    <script src="{{url('assets/js/ripples.min.js')}}"></script>
    <script src="{{url('assets/js/material.min.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function(){
             $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                })
         });

        var token = '{{ Session::token()}}';
        var urllike = '{{ route('like')}}';
        var urlDislike = '{{route('dislike')}}';
        
    </script>

</body>


</html>
