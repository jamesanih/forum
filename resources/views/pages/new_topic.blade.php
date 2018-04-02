@extends('layouts.master')

@section('title')
	::New Topic
@endsection

@section('section')
	
 <section class="section">
            <div class="container">
                <div class="page-title text-center">
                    <h1>Create New Topic</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">New Topic</li>
                    </ul>
                </div><!-- end title -->
            </div><!-- end container -->
        </section><!-- end section -->


         <section class="section lb">
            <div class="container">
                <div class="row">
                    

                    <div class="col-md-7">
                        <div class="widget">
                            <div class="custom-module">
                                <h4 class="module-title"> Create New Topic</h4>

                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <form class="sidebar-login" action="{{route('newTopic')}}" method="post">
                                            <input type="text" class="form-control" placeholder="Enter Topic Title" id="title" name="name">
                                             <input type="hidden" value="{{request()->route('id')}}" name="id">

                                              <div class="row">
                                            	
                                                <div class="form-group col-lg-6 col-md-6">
                                                	
                                                    <select name="forums" id="forum"  class="form-control" >
                                                    <option value="" disabled selected>Select Category</option>
                                                    @foreach(App\Forums::all() as $forums)
                                                        <option value="{{$forums->id}}">{{$forums->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    
                                                </div>
                                                
                                                <div class="form-group col-lg-6 col-md-6">
                                                    <select name="tags" id="tags"  class="form-control" >
                                                   <option value="" disabled selected>Select Subcategory</option>
                                                   @foreach(App\Tags::all() as $tags)
                                                        <option value="{{$tags->id}}">{{$tags->name}}</option>
                                                		  @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> &nbsp;&nbsp;Subscribe email newsletter
                                                </label>
                                            </div>
                                            {{ csrf_field()}}
                                            <button type="button" class="btn btn-raised btn-info gr">Create New Topic</button>
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