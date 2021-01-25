<!--Location Modal Insert Start-->
<div class="modal fade" id="location-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('location.store')}}" id="locatin_entry_form" method="POST" enctype="multipart/form-data" data-parsley-validate >
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="category_name">Location Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" required="" id="location_name" placeholder="Enter Location Name" required>
                        @if($errors->has('name') )
                            <p class="alert alert-danger">{{$errors->first('name')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#location-modal').modal({
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
                    <button type="submit" class="btn btn-primary" id="confirm">Add Location</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--location Modal Insert End-->

<!--Location Modal Edit Start-->
<div class="modal fade" id="location-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Location Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="location_edit_form" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="category_name">Location Name</label>
                        <input type="text" name="name" id="loc_name" class="form-control" value="{{old('name')}}" required="" id="category_name" placeholder="Category Name" required>
                        @if($errors->has('name') )
                            <p class="alert alert-danger">{{$errors->first('name')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#location-edit').modal({
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
<div class="modal fade" id="location-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Location Remove</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="location_delete_form" method="POST" enctype="multipart/form-data" data-parsley-validate >
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