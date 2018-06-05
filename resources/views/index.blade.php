@extends('layouts.master')

@section('title')
	INDEX
@endsection

@section('section')
	
		
		<!-- Banner -->
		{{--  @include('components.bigheader')  --}}


        <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @include('components.search')

                        <div class="home-tab clearfix">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#knowledge_tab"> Topic ({{App\Topic::count()}})</a></li>
                                
                            </ul>

                            <div class="tab-content">
                                <div id="knowledge_tab" class="tab-pane fade in active">
                                    <aside class="topic-list">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                @foreach($topics as $topic)
                                                <article class="well btn-group-sm clearfix">
                                                     <input type="hidden" value="{{request()->route('id')}}" name="id" id="id">
                                                   
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <div class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$topic->id}}" aria-expanded="true" aria-controls="collapseOne">
                                                               <header class="topic-title clearfix">
                                                                    <h3>{{$topic->name}}</h3>
                                                                    
                                                                    <small><strong>Posted: {{$topic->created_at->diffForHumans()}}</strong></small>
                                                                </header>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="collapse{{$topic->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                        <div class="topic-meta clearfix">

                                                        <input type="hidden" value="{{request()->route('id')}}" name="id" id="id">
 
                                                            <div class="pull-left">
                                                            
                                                            <strong>{{$topic->likes}} Likes</strong> |
                                                            <strong>{{$topic->dislike}} disLikes</strong>
                                                        </div><!-- end left -->
                                                         <div class="pull-right">
                                                                    <a class="btn btn-default btn-fab btn-fab-mini" href="#" data-toggle="tooltip" data-placement="bottom" title="12 comments">
                                                                        <i class="material-icons">comment</i>
                                                                    </a>
                                                                    <a class="btn btn-default btn-fab btn-fab-mini" href="#" data-toggle="tooltip" data-placement="bottom" title="Bookmark">
                                                                        <i class="material-icons">bookmark_border</i>
                                                                    </a>
                                                                </div><!-- end right -->
                                                            
                                                            </div>

                                                             <div class="topic-desc row-fluid clearfix">
                                                                <div class="col-sm-2">
                                                                    <img src="{{url('profilePix')}}/{{$topic->image}}" alt="" class="avatar img-circle img-responsive">
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <h4>{{$topic->name}}</h4>
                                                                    
                                                                    <p> <strong>{{str_limit($topic->desc, 12)}}</strong></p>
                                                                    <a href="{{url('topic')}}/{{$topic->title_slug}}/{{$topic->id}}" class="readmore" title="">Continue reading →</a>
                                                                </div>
                                                            </div><!-- end tpic-desc -->
                                                             <footer class="topic-footer clearfix">
                                                            @include('components.fa-fa-footers')
                                                            </footer>
                                                        </div><!-- end panel-body -->
                                                    </div><!-- end panel-collapse -->
                                                </article><!-- end article well -->
                                            </div><!-- end panel -->
                                             @endforeach
                                            {{$topics->links()}}
                                           
                            </div><!-- end tab-content -->
                        </div><!-- end home-tab -->

                        
                    </div><!-- end col -->

                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->


        



@endsection