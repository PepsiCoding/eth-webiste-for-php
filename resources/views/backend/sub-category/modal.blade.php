<!--sub Category Modal Insert Start-->
<div class="modal fade" id="sub-category-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sub Category Insert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('sub-category.store')}}" id="sub_category_insert_form" method="POST" enctype="multipart/form-data" data-parsley-validate >
                <div class="modal-body">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="category_name">Sub Category Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" required="" id="category_name" placeholder="Sub Category Name" required>
                        @if($errors->has('name') )
                            <p class="alert alert-danger">{{$errors->first('name')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#sub-category-modal').modal({
                                        backdrop: 'static',
                                        keyboard: false
                                    });
                                });
                            </script>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category_name">Sub Category Icon</label>
                        <input type="text" name="icon" class="form-control" value="{{old('icon')}}" required="" id="sub_cat_icon" placeholder="Sub Category Icon">
                        <p>Please enter only like (fa-facebook) not this class="fa fa-facebook"
                            <a href="http://fontawesome.io/icons/" target="_blank">Icon List</a> </p>
                        @if($errors->has('icon') )
                            <p class="alert alert-danger">{{$errors->first('icon')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#sub-category-modal').modal({
                                        backdrop: 'static',
                                        keyboard: false
                                    });
                                });
                            </script>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category_select">Select Category</label>
                        <select name="category" id="category" class="form-control">
                            <option value="0">Choose Category</option>
                            @foreach($all_category as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('category') )
                            <p class="alert alert-danger">{{$errors->first('category')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#sub-category-modal').modal({
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
                    <button type="submit" class="btn btn-primary" id="confirm">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--sub Category Modal Insert End-->

<!--sub Category Modal Edit Start-->
<div class="modal fade" id="category-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sub Category Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="sub_category_edit_form" method="POST" enctype="multipart/form-data" data-parsley-validate >
                <div class="modal-body">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" id="sub_cat_id">
                    <div class="form-group">
                        <label for="category_name">Sub Category Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" required="" id="sub_category_name" placeholder="Sub Category Name" required>
                        @if($errors->has('name') )
                            <p class="alert alert-danger">{{$errors->first('name')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#sub-category-modal').modal({
                                        backdrop: 'static',
                                        keyboard: false
                                    });
                                });
                            </script>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category_name">Sub Category Icon</label>
                        <input type="text" name="icon" class="form-control" value="{{old('icon')}}" id="sub_cat_icon_edit">
                        <p>Please enter only like (fa-facebook) not this class="fa fa-facebook"
                            <a href="http://fontawesome.io/icons/" target="_blank">Icon List</a> </p>
                        @if($errors->has('icon') )
                            <p class="alert alert-danger">{{$errors->first('icon')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#sub-category-modal').modal({
                                        backdrop: 'static',
                                        keyboard: false
                                    });
                                });
                            </script>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category_select">Select Category</label>
                        <select name="category" id="category_select" class="form-control">
                            <option value="0">Choose Category</option>
                            @foreach($all_category as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('category') )
                            <p class="alert alert-danger">{{$errors->first('category')}}</p>
                            <script>
                                $(document).ready(function(){
                                    $('#sub-category-modal').modal({
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
<!--Sub Category Modal Edit End-->
<!--Sub Category Modal delete Start-->
<div class="modal fade" id="category-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sub Category Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="sub_category_delete_form" method="POST" enctype="multipart/form-data" data-parsley-validate >
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
<!--Sub Category Modal delete End-->