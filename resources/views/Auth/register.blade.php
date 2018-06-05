@extends('layouts.master')

@section('title')
	::Register
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
                                    	<form class="sidebar-login" action="{{route('register')}}" method="post" enctype="multipart/form-data">
                                    	<div class="row">
                                    		<div class="col-md-4">
                                    			<input type="text" name="fname" class="form-control" placeholder="First Name" value="{{Request::old('fname')}}">
                                    		</div>
                                    		<div class="col-md-4">
                                    			<input type="text" name="lname" class="form-control" placeholder="Last Name" value="{{Request::old('lname')}}">
                                    		</div>
                                    	</div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="password" name="confpassword" class="form-control" placeholder="Confirm Password">
                                            </div>
                                        </div>

                                    	<div class="row">
                                    		<div class="col-md-4">
                                    			<input type="text" name="username" class="form-control" placeholder="Username" value="{{Request::old('username')}}">
                                    		</div>
                                    		<div class="col-md-4">
                                    			<input type="email" name="email" class="form-control" placeholder="Email" >
                                    		</div>
                                    	</div>


                                    	<div class="row">
                                    		<div class="col-md-4">
                                    			<input type="text" name="age" class="form-control" placeholder="Age" value="{{Request::old('age')}}">
                                    		</div>
                                    		<div class="col-md-4">
                                    			<input type="text" name="state" class="form-control" placeholder="State" value="{{Request::old('state')}}">
                                    		</div>
                                    	</div>

                                    	<div class="row">
                                    		<div class="col-md-4">
                                    			<input type="text" name="nationality" class="form-control" placeholder="Nationality" value="{{Request::old('nationality')}}">
                                    		</div>
                                    		<div class="col-md-7">
                                    			<input type="text" name="location" class="form-control" placeholder="Location" value="{{Request::old('location')}}">
                                    		</div>
                                    	</div>

                                    	<div class="row">
                                    		<div class="col-md-4">
                                    			<input type="text" name="phonenumber" class="form-control" placeholder="Tel:" value="{{Request::old('phonenumber')}}">
                                    		</div>
                                    	</div>

                                    	<div class="row">
                                    		<div class="col-md-4">
                                    			<label>Upload profile pix</label>
                                    			<input type="file" name="image">
                                    		</div>
                                    	</div>
                                        
                                            {{ csrf_field() }}
                                            </div>
                                            
                                            <input type="submit" name="" class="btn btn-raised btn-info gr" value="Create Account">
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