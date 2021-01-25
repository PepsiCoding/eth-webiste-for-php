<!--plan Modal Insert Start-->
<div class="modal fade" id="plan-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create A Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('plan-management.store')}}" id="plan_insert_form" method="POST" enctype="multipart/form-data" >
                <div class="modal-body">

                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Plan Name</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" placeholder="Plan Name">
                                    <span class="input-group-addon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>

                                </div>
                                @if($errors->has('name') )
                                    <p class="alert alert-danger">{{$errors->first('name')}}</p>
                                    <script>
                                        $(document).ready(function(){
                                            $('#plan-modal').modal({
                                                backdrop: 'static',
                                                keyboard: false
                                            });
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Plan Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="tel" class="form-control" name="price" placeholder="Plan Price">
                                    <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i>
                                             </span>
                                </div>
                                @if($errors->has('price') )
                                    <p class="alert alert-danger">{{$errors->first('price')}}</p>
                                    <script>
                                        $(document).ready(function(){
                                            $('#plan-modal').modal({
                                                backdrop: 'static',
                                                keyboard: false
                                            });
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Featured Day </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="tel" class="form-control" name="days" placeholder="Featured Day">
                                    <span class="input-group-addon "><i class="fa fa-clock-o" aria-hidden="true"></i>
                                             </span>
                                </div>
                                @if($errors->has('days') )
                                    <p class="alert alert-danger">{{$errors->first('days')}}</p>
                                    <script>
                                        $(document).ready(function(){
                                            $('#plan-modal').modal({
                                                backdrop: 'static',
                                                keyboard: false
                                            });
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Plan Status  </label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="checkbox" name="status" class="make-switch" checked data-size="small" data-on-color="success" data-off-color="danger">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="confirm">Create Plan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--plan Modal Insert End-->

<!--plan Modal Edit Start-->
<div class="modal fade" id="plan-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Category Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="plan_edit_form" method="POST" enctype="multipart/form-data" >
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" id="plan-id" >
                    <div class="form-body">
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Plan Name</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Plan Name">
                                    <span class="input-group-addon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>

                                </div>
                                @if($errors->has('name') )
                                    <p class="alert alert-danger">{{$errors->first('name')}}</p>
                                    <script>
                                        $(document).ready(function(){
                                            $('#plan_edit_form').modal({
                                                backdrop: 'static',
                                                keyboard: false
                                            });
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Plan Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="tel" id="price" class="form-control" name="price" placeholder="Plan Price">
                                    <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i>
                                             </span>
                                </div>
                                @if($errors->has('price') )
                                    <p class="alert alert-danger">{{$errors->first('price')}}</p>
                                    <script>
                                        $(document).ready(function(){
                                            $('#plan_edit_form').modal({
                                                backdrop: 'static',
                                                keyboard: false
                                            });
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Featured Day </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input type="tel" id="days" class="form-control" name="days" placeholder="Featured Day">
                                    <span class="input-group-addon "><i class="fa fa-clock-o" aria-hidden="true"></i>
                                             </span>
                                </div>
                                @if($errors->has('days') )
                                    <p class="alert alert-danger">{{$errors->first('days')}}</p>
                                    <script>
                                        $(document).ready(function(){
                                            $('#plan_edit_form').modal({
                                                backdrop: 'static',
                                                keyboard: false
                                            });
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <label class="col-md-3 control-label">Plan Status  </label>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <select name="status" class="form-control custom-select" id="status">
                                            <option value="0">ON</option>
                                            <option value="1">OFF</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn  green" id="confirm">Update Plan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<!--plan Modal Edit End-->