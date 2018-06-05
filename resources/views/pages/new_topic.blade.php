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
                	
                         <div class="alert bg-grey alert-warning alert-dismissible" role="alert" id="msg">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        
                        </div>
                        
                    

                    <div class="col-md-7">
                        <div class="widget">
                            <div class="custom-module">
                                <h4 class="module-title"> Create New Topic</h4>

                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <form class="sidebar-login" action="{{route('newTopic')}}" method="post" id="new_topic">
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
                                             <textarea class="form-control" rows="3" id="textArea" name="desc" id="desc" placeholder="Description"></textarea>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> &nbsp;&nbsp;Subscribe email newsletter
                                                </label>
                                            </div>
                                           <!--  {{ csrf_field()}} -->
                                            <button type="submit" class="btn btn-raised btn-info gr">Create New Topic</button>
                                        </form> 

                                    </div>
                                </div>
                            </div><!-- end custom-module -->
                        </div><!-- end widget -->
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->


         <script type="text/javascript">
				$(document).ready(function(){
					$('#msg').hide();
					//$('#post').load('<?php echo url('/getTopic');?>').fadeIn('fast');
					// $('#post').hide();
					$('#new_topic').on('submit', function(e){
						$('#msg').show();
						
						e.preventDefault();



						let data = $(this).serialize();
						let url = $(this).attr('action');
						$.post(url,data,function(response){
							console.log(response);
							$('#msg').html(response.message);
							//$('#msg').fadeOut(2000);
							// if(response.message == "Topic created"){
							// 	location.reload();
							// }else{
							// 	e.preventDefault();
							// }

							// $('#topic_title').append(response.name);
							// $('#topic_desc').append(response.desc);
							// getTime(); 
						});
						
					
					})

					

					

		
	})


				

					
</script>


@endsection