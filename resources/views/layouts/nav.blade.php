<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            {{-- Toggle icon | Brand --}}
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <i class="material-icons">DTW</i> {{ config('app.name', 'DTW') }}
            </a>
        </div>

        <div class="row navbar-collapse collapse navbar-responsive-collapse">
            {{-- Navbar right --}}
            <div class="col-sm-2 nopadding">
                <ul class="nav navbar-nav">
                    {{--<li class="active"><a href="{{url('/')}}"  style="border: solid 1px greenyellow; padding: 30px 15px;">Home</a></li>--}}
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/')}}">Chat Room</a></li>
                    {{--  <li class="dropdown hasmenu">
                        <a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Site Map
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="faqs.html">FAQS</a></li>
                            <li><a href="single-topic.html">Single Topic</a></li>
                            <li><a href="single-knowlegde-base.html">Single Knowledge</a></li>
                            <li><a href="single-forum.html">Single Forum</a></li>
                            <li><a href="login.html">Login Page</a></li>
                            <li><a href="contact.html">Contact Page</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>  --}}
                    
                </ul>
            </div>

           

            {{-- Navbar left --}}
            <div class="">
                 <ul class="nav navbar-nav navbar-right">
                                @if(Auth::user())
                                
                                <li><a href="{{route('new_topic')}}">New Topic</a></li>
                                <li><a href="{{route('logout')}}"><i class="material-icons">lock</i>Logout</a></li>
                                @else
                               
                                 <li><a href="{{route('register')}}"><i class="material-icons">lock</i>Register</a></li>
                                <li><a href="javascript:void(0)" data-toggle="modal" data-target="#LoginModal"><i class="material-icons">lock</i>Login</a></li>
                                @endif
                            </ul>

            </div>
            
        </div>
    </div>
</nav>