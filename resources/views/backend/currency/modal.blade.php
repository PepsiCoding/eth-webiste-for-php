<!--Location Modal Insert Start-->
<div class="modal fade" id="currency-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Currency</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('currency.store')}}" id="currency_entry_form" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="currency_name">Currency Name </label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" required="" id="currency_name" placeholder="Enter Currency Name" required>
                        @if($errors->has('name') )
                            <p class="alert alert-danger">{{$errors->first('name')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#currency-modal').modal({
                                        backdrop: 'static',
                                        keyboard: false
                                    });
                                });
                            </script>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="currency_name">Conversion Rate </label>
                        <input type="number" name="rate" class="form-control" value="{{old('rate')}}" required="" id="currency_rate" placeholder="1 USD = How Much?" required>
                        @if($errors->has('rate') )
                            <p class="alert alert-danger">{{$errors->first('rate')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#currency-modal').modal({
                                        backdrop: 'static',
                                        keyboard: false
                                    });
                                });
                            </script>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="confirm">Add Currency</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--location Modal Insert End-->

<!--Location Modal Edit Start-->
<div class="modal fade" id="currency-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Currency Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="currency_edit_form" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="currency_name">Currency Name </label>
                        <input type="text" name="name" class="form-control"  id="currency_name_edit" required>
                        @if($errors->has('name') )
                            <p class="alert alert-danger">{{$errors->first('name')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#currency-edit').modal({
                                        backdrop: 'static',
                                        keyboard: false
                                    });
                                });
                            </script>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="currency_name">Conversion Rate </label>
                        <input type="number" name="rate" class="form-control"  id="currency_rate_edit" required>
                        @if($errors->has('rate') )
                            <p class="alert alert-danger">{{$errors->first('rate')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#currency-edit').modal({
                                        backdrop: 'static',
                                        keyboard: false
                                    });
                                });
                            </script>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="confirm">Save Change</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--location Modal Edit End-->

<!--location Modal delete Start-->
<div class="modal fade" id="currency-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Currency Remove</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="currency_delete_form" method="POST" enctype="multipart/form-data" data-parsley-validate >
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" id="id" name="cat_id">
                    <h3 class="text text-danger"><strong>Are Your Sure To Delete This Category ?</strong></h3>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn red" id="delete_confirm">Confirm Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--location Modal delete End-->
