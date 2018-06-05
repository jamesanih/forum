@extends('layouts.master')

@section('title')
    ::Forum
@endsection

@section('section')
    
        
        <!-- Banner -->
         

       <section class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @include('components.search')

                        <div class="home-tab clearfix">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#knowledge_tab"> Topics</a></li>
                                
                            </ul>



                            <!-- Topics -->
                            <div class="tab-content">
                                <div id="knowledge_tab" class="tab-pane fade in active">
                                    <aside class="topic-list">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">

                                                @foreach($data as $topic)
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
                                                           @include('components.likes_dislikes')

                                                            <div class="topic-desc row-fluid clearfix">
                                                                <div class="col-sm-2">
                                                                    <img src="{{url('assets/images/uploads/team_02.jpg')}}" alt="" class="avatar img-circle img-responsive">
                                                                </div>
                                                                <div class="col-sm-10">
                                                                    <h4>{{$topic->name}}</h4>
                                                                    
                                                                    <p> <strong>{{str_limit($topic->desc, 3)}}</strong></p>
                                                                    <a href="{{url('topic')}}/{{$topic->name}}/{{$topic->id}}" class="readmore" title="">Continue reading →</a>
                                                                </div>
                                                            </div><!-- end tpic-desc -->

                                                            <footer class="topic-footer clearfix">
                                                                

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
                                            {{$data->links()}}


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
        </section>



@endsection