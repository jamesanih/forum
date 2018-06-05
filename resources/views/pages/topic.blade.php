@extends('layouts.master')

@section('title')
	::Topic
@endsection

@section('section')

  <section class="section">
            <div class="container">
                <div class="page-title text-center">
                    <h1>Single Forum</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="javascript:void(0)">Forums</a></li>
                        <li class="active">{{$topic}}</li>
                    </ul>
                    <form class="site-search b text-left">
                        <div class="form-group label-floating">
                            <label class="control-label" for="focusedInput2">How may I help you today?</label>
                            <input class="form-control" id="focusedInput2" type="text">
                        </div>
                        <div class="form-group clearfix">
                            <!-- inline style is just to demo custom css to put checkbox below input above -->
                            <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox"> &nbsp;Topics
                                </label>
                                <label>
                                    <input type="checkbox"> &nbsp;Forums
                                </label>
                                <label>
                                    <input type="checkbox"> &nbsp;Knowledge Base
                                </label>
                            </div>
                            <div class="submit-button pull-right">
                                <a class="btn btn-raised btn-info gr" href="#"><i class="material-icons">search</i> Search</a>
                            </div>
                        </div>
                    </form>
                </div><!-- end title -->
            </div><!-- end container -->
        </section><!-- end section -->



        <section class="section lb">


        	 <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <aside class="topic-page topic-list blog-list forum-list single-forum">
                            <article class="well btn-group-sm clearfix">
                                <div class="topic-meta clearfix">
                                    @include('components.likes_dislikes')

                                   @include('components.fa-fa-footers')
                                    <!-- end right -->
                                </div>
                                <!-- end topic-meta -->

                                @foreach($data as $topic)
                                <div class="topic-desc row-fluid clearfix">
                                    <div class="col-sm-2 text-center publisher-wrap">
                                        <img src="{{url('assets/images/uploads/team_01.jpg')}}" alt="" class="avatar img-circle img-responsive">
                                        <h5>Martin Martines</h5>
                                       
                                    </div>
                                    <div class="col-sm-10">

                                        <header class="topic-footer clearfix">
                                            <ul class="list-inline tags">
                                                <li class="verified"><a href="javascript:void(0)">Topic</a></li>
                                            </ul>
                                            <!-- end tags -->
                                        </header>
                                        <!-- end topic -->

                                        <h2 style="color: blue;">{{$topic->name}}</h2>
                                        <div class="blog-meta clearfix">
                                            <small><a href="javascript:void(0)">11 Views</a></small>
                                            <small>Posted {{$topic->created_at->diffForHumans()}}</small>
                                            
                                        </div>
                                        
                                        <p><strong>{{$topic->desc}}</strong></p>
                                        
                                    

                                      
                                    </div>
                                </div><!-- end tpic-desc -->
                                @endforeach


                                @foreach($comments as $comment)
                                
                                <div class="topic-desc row-fluid clearfix">
                                        @include('components.edit')
                                    <div class="col-sm-2 text-center publisher-wrap">
                                        <img src="{{url('assets/images/uploads/team_03.jpg')}}" alt="" class="avatar img-circle img-responsive">
                                        
                                            <h5>{{$comment->who_made_comment}}</h5>
                                        
                                    </div>
                                    <div class="col-sm-10">

                                        <header class="topic-footer clearfix">
                                            <ul class="list-inline tags">
                                                <li class="site_staff"><a href="javascript:void(0)">comment</a></li>
                                            </ul>
                                            <!-- end tags -->
                                        </header>
                                        <!-- end topic -->


                                        <p><strong>{{$comment->comment}}</strong></p>
                                       
                                            <img src="{{url('/private/uploadedImage')}}/{{$comment->image}}" width="100%">
                                       
                                       
                                        
                                    </div>
                                </div><!-- end tpic-desc -->

                                @endforeach
                                {{$comments->links()}}

                                

                                <div id="reply" class="forum-answer topic-desc clearfix">
                                    <div class="row">
                                        <div class="col-sm-2 text-center publisher-wrap">
                                        	 @if(Auth::user())
                                            
                                           
                                            <h5>{{Auth::user()->username}}</h5>
                                            <small class="online">Online</small>
                                            

                                            @endif



                                        </div>

                                        <div class="col-md-10">
                                        	<form action="{{route('comment')}}" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                            	
                                            	<input type="hidden" name="id" value="{{request()->route('id')}}">
                                            	<input type="hidden" name="topic_name" value="{{request()->route('topic')}}">
                                                <label for="textArea" class="col-md-2 control-label">Reply</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="3" id="textArea" name="comment"></textarea>
                                                </div>
                                                
                                                
                                                 @if(Auth::user())
                                                    <button type="submit" class="btn btn-raised btn-info gr">Reply</button>
                                                    @else
                                                    <a class="btn btn-raised btn-info gr" href="javascript:void(0)" data-toggle="modal" data-target="#LoginModal"">Reply</a>
                                                    @endif
                                            </div>

                                            <div class="col-md-10">
                                                    <input type="file" name="image" id="name">
                                                </div>

                                            {{csrf_field()}}
                                            </form>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end answer -->

                                <!-- end topic-meta -->
                            </article>

                            <ul class="pager">
                                <li><a class="withripple" href="javascript:void(0)"><i class="material-icons">chevron_left</i></a></li>
                                <li><a class="withripple" href="javascript:void(0)"><i class="material-icons">chevron_right</i></a></li>
                            </ul>
                        </aside>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        	
        </section>






@endsection