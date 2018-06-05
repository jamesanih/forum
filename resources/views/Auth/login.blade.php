@extends('layouts.master')

@section('title')
	::Login
@endsection

@section('section')

 <section class="section lb">
            <div class="container">
                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                      <ul>
                                         @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                         @endforeach
                                         </ul>
                                </div>
                     @endif
                <div class="row">
                     @if (Session::has('message'))
                         <div class="alert bg-blue alert-warning alert-dismissible" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        {{ Session::get('message') }}
                        </div>
                        @endif

                    <div class="col-md-9">
                        <div class="widget">
                            <div class="custom-module">
                                <h4 class="module-title"><i class="material-icons">lock</i> Create Account</h4>

                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                    	<form class="sidebar-login" action="{{route('loginPage')}}" method="post">
                                    	

                                        

                                    	   <input type="text" class="form-control" name="username" placeholder="Username"  value="{{Request::old('username')}}">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> &nbsp;&nbsp;Remember me
                                                </label>
                                            </div>


                                    	
                                    	

                                    	

                                    	
                                            {{ csrf_field() }}
                                            </div>
                                            <button type="submit" class="btn btn-raised btn-info gr">Login</button>
                                        </form> 

                                    </div>
                                </div>
                            </div><!-- end custom-module -->
                        </div><!-- end widget -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->


@endsection