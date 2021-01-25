<!--page create modal Start-->
<div class="modal fade" id="page_create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create a new page</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="page_create_form" method="POST" enctype="multipart/form-data" data-parsley-validate >
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="page_name">Page Name</label>
                        <input type="text" name="page_name" id="page_name_modal" class="form-control" id="page_name" placeholder="Page Name" required>
                        @if($errors->has('page_name') )
                            <p class="alert alert-danger">{{$errors->first('page_name')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#page_create').modal({
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
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" id="create_page_btn">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--page Create Modal End-->

<!--Page edit Modal  Start-->
<div class="modal fade" id="page_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Page Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="page_create_form" method="POST" enctype="multipart/form-data" data-parsley-validate >
                <div class="modal-body">
                    {{csrf_field()}}
                    {{method_field("PUT")}}
                    <input type="hidden" id="page_edit_id">
                    <div class="form-group">
                        <label for="page_name">Page Name</label>
                        <input type="text" name="page_name" id="page_edit_name" class="form-control" value="{{old('name')}}" required="" id="page_name" placeholder="Page Name" required>
                        @if($errors->has('page_name') )
                            <p class="alert alert-danger">{{$errors->first('page_name')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#page_edit').modal({
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
                    <button type="submit" class="btn btn-primary" data-dismiss="modal" id="edit_page_confirm_btn">Save Change</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--page edit Modal  End-->

<!--page delete modal Start-->
<div class="modal fade" id="page_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Page Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="page_delete_form" method="POST" enctype="multipart/form-data" >
                <div class="modal-body">
                    {{csrf_field()}}
                    {{method_field("DELETE")}}
                    <input type="hidden" id="page_delete_id" name="page_id">
                    <h3 class="text text-danger"><strong>Are Your Sure To Delete This Page With All The Content ?</strong></h3>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn red" id="page_delete_confirm">Confirm Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--page delete modal End-->