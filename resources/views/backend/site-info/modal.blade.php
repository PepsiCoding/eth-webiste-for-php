<!--Social Media Insert Modal Start-->
<div class="modal fade" id="social-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-left">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Social Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="category_name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}"id="name" placeholder=" Name">
                    <p class="error_name"></p>
                </div>
                <div class="form-group">
                    <label for="category_name">Url</label>
                    <input type="text" name="url" id="url" class="form-control" value="{{old('url')}}"  placeholder="url" >
                    <p class="error_url"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="confirm">Store</button>
            </div>
        </div>
    </div>
</div>
<!--Social Media Insert Modal End-->

<!--Social Media edit Modal Start-->
<div class="modal fade" id="social-modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-left">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Social Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="hidden" id="id_edit">
                <div class="form-group">
                    <label for="category_name">Name</label>
                    <input type="text" id="name_edit" name="name" class="form-control" >
                    <p class="error_name"></p>
                </div>
                <div class="form-group">
                    <label for="category_name">Url</label>
                    <input type="text" name="url" id="url_edit" class="form-control" >
                    <p class="error_url"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="edit_confirm">Save Change</button>
            </div>
        </div>
    </div>
</div>
<!--Social Media edit Modal End-->

<!--Social Modal delete Start-->
<div class="modal fade" id="social-modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Social Media Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{csrf_field()}}
                <input type="hidden" id="delete_id" name="cat_id">
                <h3 class="text text-danger"><strong>Are Your Sure To Delete This Social Media Item ?</strong></h3>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn red" id="delete_confirm" data-dismiss="modal">Confirm Delete</button>
            </div>
        </div>
    </div>
</div>
<!--Social Modal delete End-->