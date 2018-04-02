@extends('layouts.master')

@section('title')
	::INDEX
@endsection

@section('section')
	
		
		<!-- Banner -->
		 <section class="section welcome bg1">
            <div class="container">
                <div class="row">
                    <div class="content col-md-8">
                        <div class="welcome-text">
                            <h1>Dating2Wed <strong>is met for all seeking for patner</strong> all around the world</h1>
                            <p>Welcome to the Helper Support Portal! Search your answers with the search box above, or if you're stuck you can create a support ticket.</p>
                             <a class="btn btn-raised btn-info gr" href="javascript:void(0)"><i class="material-icons">chat</i>&nbsp;&nbsp; Visit Topics</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end container -->
            </div><!-- end container -->
        </section><!-- end section -->


       <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="widget nopadding clearfix">
                            <div class="panel panel-primary nopadding">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Search For Popular Help Topics</h3>
                                </div>
                                <div class="panel-body">
                                    <form class="site-search">
                                        <div class="form-group label-floating">
                                            <label class="control-label" for="focusedInput2">How may I help you today?</label>
                                            <input class="form-control" id="focusedInput2" type="text">
                                        </div>
                                        <div class="form-group clearfix"> <!-- inline style is just to demo custom css to put checkbox below input above -->
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
                                    </form><!-- end well -->
                                </div>
                            </div>
                        </div><!-- end widget -->


                        <div class="home-tab clearfix">
                        	<ul class="nav nav-tabs">
                                <li class="active"><a href="#knowledge_tab"> Topic ({{App\Topic::count()}})</a></li>
                                
                            </ul>



                            <!-- Topics -->
                            <div class="tab-content">
                                <div id="knowledge_tab" class="tab-pane fade in active">
                                    <aside class="topic-list">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">

                                            	@foreach($topics as $topic)
                                                <article class="well btn-group-sm clearfix">
                                                     
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <div class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$topic->id}}" aria-expanded="false" aria-controls="collapseTwo">
                                                                <header class="topic-title clearfix">
                                                                    <h3>{{$topic->name}}</h3>
                                                                    
                                                                    <small><strong>Posted: {{$topic->created_at->diffForHumans()}}</strong></small>
                                                                </header>
                                                            </a>
                                                        </div>
                                                    </div>
                                               		
                                               		<div id="collapse{{$topic->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <div class="topic-meta clearfix">
                                                                <div class="pull-left">
                                                                    <a class="btn btn-default btn-fab btn-fab-mini" href="#" data-toggle="tooltip" data-placement="bottom" title="Like">
                                                                        <i class="material-icons">thumb_up</i>
                                                                    </a>
                                                                    <a class="btn btn-default btn-fab btn-fab-mini" href="#" data-toggle="tooltip" data-placement="bottom" title="Un Like">
                                                                        <i class="material-icons">thumb_down</i>
                                                                    </a>
                                                                </div><!-- end left -->

                                                                <div class="pull-right">
                                                                    <a class="btn btn-default btn-fab btn-fab-mini" href="#" data-toggle="tooltip" data-placement="bottom" title="12 comments">
                                                                        <i class="material-icons">comment</i>
                                                                    </a>
                                                                    <a class="btn btn-default btn-fab btn-fab-mini" href="#" data-toggle="tooltip" data-placement="bottom" title="Bookmark">
                                                                        <i class="material-icons">bookmark_border</i>
                                                                    </a>
                                                                </div><!-- end right -->
                                                            </div><!-- end topic-meta -->

                                                            <div class="topic-desc row-fluid clearfix">
                                                                <div class="col-sm-2">
                                                                    <img src="{{url('assets/images/uploads/team_02.jpg')}}" alt="" class="avatar img-circle img-responsive">
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <h4>{{$topic->name}}</h4>
                                                                    
                                                                    <p> <strong>{{$topic->desc}}</strong></p>
                                                                    <a href="{{url('topic')}}/{{$topic->name}}/{{$topic->id}}" class="readmore" title="">Continue reading →</a>
                                                                </div>
                                                            </div><!-- end tpic-desc -->

                                                            <footer class="topic-footer clearfix">
                                                                <!-- <div class="pull-left">
                                                                    <ul class="list-inline tags">
                                                                        <li><a href="#">Bootstrap</a></li>
                                                                        <li><a href="#">Web Design</a></li>
                                                                        <li><a href="#">Framework</a></li>
                                                                    </ul>
                                                                </div> -->

                                                                <div class="pull-right">
                                                                    <div class="customshare">
                                                                         <div class="list">
                                                                            <div class="btn btn-default btn-fab btn-fab-mini"><i class="material-icons">share</i>
                                                                                <ul class="list-inline">
                                                                                    <li><a href="#" class="tw"><i class="fa fa-twitter"></i></a></li>
                                                                                    <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                                                                                    <li><a href="#" class="gp"><i class="fa fa-google-plus"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </footer><!-- end topic -->
                                                        </div><!-- end panel-body -->
                                                    </div><!-- end panel-collapse -->
                                                </article><!-- end article well -->
                                            </div><!-- end panel -->
                                            @endforeach
                                            {{$topics->links()}}


                                            <!-- second topic -->

                                              <article class="well clearfix">
                                            <ul class="pagination">
                                                <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a href="javascript:void(0)">&raquo;</a></li>
                                            </ul>
                                        </article>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                            <!-- End of topics -->

                            

                            <div class="widget clearfix">
                            <div class="banner-widget col-lg-4">
                                <a href="javascript:void(0)" target="new"><img src="{{url('assets/images/uploads/banner.jpg')}}" alt="" class="img-responsive img-thumbnail"></a>
                            </div>
                            <div class="banner-widget col-lg-4">
                                <a href="javascript:void(0)" target="new"><img src="{{url('assets/images/uploads/banner.jpg')}}" alt="" class="img-responsive img-thumbnail"></a>
                            </div>
                            <div class="banner-widget col-lg-4">
                                <a href="javascript:void(0)" target="new"><img src="{{url('assets/images/uploads/banner.jpg')}}" alt="" class="img-responsive img-thumbnail"></a>
                            </div>
                        </div><!-- end widget -->

                           
                        	
                        </div>
						<div class="sidebar col-md-3">
		                    	<!-- Advert one -->
		                        <div class="widget clearfix">
		                            <div class="banner-widget">
		                                <a href="javascript:void(0)" target="new"><img src="{{url('assets/images/uploads/banner.jpg')}}" alt="" class="img-responsive img-thumbnail"></a>
		                            </div>
		                        </div><!-- end widget -->

		                        
		                       <!-- categories -->
		                        <div class="widget">
                            <div class="custom-module">
                                <h4 class="module-title"><i class="material-icons">list</i> Topic Categories</h4>
                                @foreach(App\Forums::all() as $forums)
                                <ul class="categories">
                                    <li><a href="{{url('forum')}}/{{$forums->name}}/{{$forums->id}}">{{$forums->name}}</a></li>
                                </ul><!-- end cats -->
                               @endforeach
                            </div><!-- end custom-module -->
                        </div><!-- end widget -->



		                    </div><!-- end col -->


                    </div>

                    
                </div>
            </div>
        </section>



@endsection