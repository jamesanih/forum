 <div id="LoginModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login Account</h4>
                    </div>
                    <div class="modal-body">
                        <div class="widget clearfix">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                   

                                    <form class="sidebar-login" action="{{route('signin')}}" method="post">
                                        <input type="text" class="form-control" placeholder="Username" name="username">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> &nbsp;&nbsp;Remember me
                                            </label>
                                        </div>
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-raised btn-info gr">Login</button>
                                    </form> 
                                </div>
                            </div>
                            <small>No account? <a href="{{route('register')}}">Register</a></small>
                        </div><!-- end widget -->
                    </div> <!-- end modal body -->
                </div><!-- end modal content -->
            </div><!-- end modal-dialog -->
        </div><!-- end LoginModal -->