@extends('backend.master')
@section('site-title')
    Footer Widget Management
@endsection
@section('main-content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{route('admin.dashboard')}}">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>{{$page_title}}</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>&nbsp;
                        <span class="thin uppercase hidden-xs"></span>&nbsp;
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">Footer Widget Management
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->
            <div class="row">

                <!--support bar management-->
                <div class="col-md-12">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i aria-hidden="true"></i> About us widget Manage </div>
                            <div class="actions">
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('about.widget')}}" method="POST" enctype="multipart/form-data" id="about_us_widget_form">
                                {{csrf_field()}}
                                @foreach($footer_data[0] as $about_widget)
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 control-label">About Widget Content</label>
                                                <div class="col-md-12">

                                                        <textarea style="width: 100%;" name="about_widget" id="about_widget" rows="20">{{$about_widget->content}}</textarea>

                                                    @if($errors->has('about_widget') )
                                                        <p class="alert alert-danger">{{$errors->first('about_widget')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label"> Show/Hide widget  </label>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="status" @if($about_widget->status == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="submit" class="btn green custom-class-for-btn-2" value="Save Change">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                        </div>
                        </form>
                    </div>
                </div>
                <!--site info mangement-->
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                 Useful Link Widget </div>
                            <div class="actions">
                                <a class="dt-button buttons-print  btn dark" download=""  data-toggle="modal" data-target="#useful-links-modal"><span>Add New Link</span></a>
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>

                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('useful.links.widget')}}" method="POST" enctype="multipart/form-data" id="general_settings_form">
                                        {{csrf_field()}}
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Rendering engine : activate to sort column descending" style="width: 80px;"> id </th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Browser : activate to sort column ascending" style="width: 207px;"> Name </th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Platform(s) : activate to sort column ascending" style="width: 185px;"> Url </th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Platform(s) : activate to sort column ascending" style="width: 50px;"> Icon </th>
                                                <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Engine version : activate to sort column ascending" style="width: 200px;"> Action </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($footer_data[1] as $links)
                                                <tr role="row" class="odd" id="table-row-{{$links->id}}">
                                                    <td class="sorting_1"> {{$links->id}} </td>
                                                    <td class="name-{{$links->id}}"> {{$links->name}}</td>
                                                    <td class="link-{{$links->id}}">
                                                        <a href="#">{{$links->url}}</a>
                                                    </td>
                                                    <td class="icon-{{$links->id}}">
                                                        <i class="fa fa-bookmark-o"></i>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn yellow useful_links_widget_edit_btn btn-xs " data-toggle="modal" id="link_edit_btn-{{$links->id}}" data-target="#useful-links-edit"
                                                           data-id="{{$links->id}}" data-name="{{$links->name}}" data-iconcode="{{$links->icon}}" data-usefulurl="{{$links->url}}"
                                                        ><i class="fa fa-edit"></i> </a>
                                                        <a href="#" class="btn red useful_links_widget_delete_btn btn-xs " data-toggle="modal" data-id="{{$links->id}}" data-target="#useful-links-delete"><i class="fa fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                        </form>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-cc-paypal" aria-hidden="true"></i> Recent Post Widget </div>
                            <div class="actions">
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('recent.post.widget')}}" method="POST" enctype="multipart/form-data" id="general_settings_form">
                                {{csrf_field()}}
                                @foreach($footer_data[2] as $recent_post )
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="category_name">How Many Post Showed In Widget</label>
                                                <input type="number" name="recent_post_count" id="recent_post_count" class="form-control" value="{{$recent_post->count}}" required="" id="category_name" placeholder="5" required>
                                                @if($errors->has('recent_post_count') )
                                                    <p class="alert alert-danger">{{$errors->first('recent_post_count')}}</p>
                                                @endif
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Show/Hide widget  </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="status" @if($recent_post->status == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="submit" class="btn green custom-class-for-btn-2" value="Save Change">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-cc-paypal" aria-hidden="true"></i> Feedback Widget </div>
                            <div class="actions">
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('feedback.widget')}}" method="POST" enctype="multipart/form-data" id="general_settings_form">
                                {{csrf_field()}}
                                @foreach( $footer_data[3] as  $feedback)
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Show/Hide widget  </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="status" @if($feedback->status == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="submit" class="btn green custom-class-for-btn-2" value="Save Change">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                        </form>
                    </div>
                </div>

        </div>

    </div>
    </div>
    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

    <!--useful links widget Modal Insert Start-->
    <div class="modal fade" id="useful-links-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Useful Links</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('useful.links.widget')}}" id="useful_links_insert_form" method="POST" enctype="multipart/form-data" >
                    <div class="modal-body">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="category_name"> Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}"id="name" placeholder="Name">
                            @if($errors->has('name') )
                                <p class="alert alert-danger">{{$errors->first('name')}}</p>
                                <script>
                                    $(document).ready(function(){
                                        $('#useful-links-modal').modal({
                                            backdrop: 'static',
                                            keyboard: false
                                        });
                                    });
                                </script>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category_name">Icon</label>
                            <input type="text" name="icon" class="form-control" value="{{old('icon')}}"  placeholder="Icon" >
                            <p>Please enter only like (fa-facebook) not this class="fa fa-facebook"
                                <a href="http://fontawesome.io/icons/" target="_blank">Icon List</a> </p>
                            @if($errors->has('icon') )
                                <p class="alert alert-danger">{{$errors->first('icon')}}</p>
                                <script>
                                    $(document).ready(function(){
                                        $('#useful-links-modal').modal({
                                            backdrop: 'static',
                                            keyboard: false
                                        });
                                    });
                                </script>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category_name">Url</label>
                            <input type="url" name="url" class="form-control" value="{{old('url')}}"  placeholder="http://google.com" >

                            @if($errors->has('url') )
                                <p class="alert alert-danger">{{$errors->first('url')}}</p>
                                <script>
                                    $(document).ready(function(){
                                        $('#useful-links-modal').modal({
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
                        <button type="submit" class="btn btn-primary" id="confirm">Add Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--useful links widget Modal Insert End-->

    <!--useful links widget Modal Insert Start-->
    <div class="modal fade" id="useful-links-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Useful Links</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" id="useful_links_edit_form">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <input type="text" id="link_id" >
                        <div class="form-group">
                            <label for="category_name"> Name</label>
                            <input type="text" name="name_edit" id="name_edit" class="form-control" value="{{old('name')}}" placeholder="Name">
                            <p class="name_errors"></p>
                        </div>
                        <div class="form-group">
                            <label for="category_name">Icon</label>
                            <input type="text" name="icon_edit" id="icon_edit" class="form-control" value="{{old('icon')}}"  placeholder="Icon" >
                            <p>Please enter only like (fa-facebook) not this class="fa fa-facebook"
                                <a href="http://fontawesome.io/icons/" target="_blank">Icon List</a> </p>
                            <p class="icon_errors"></p>
                        </div>
                        <div class="form-group">
                            <label for="category_name">Url</label>
                            <input type="url" name="url_edit" id="url_edit" class="form-control" value="{{old('url')}}"  placeholder="http://google.com" >
                            <p class="url_errors"></p>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="update_link_confirm">Add Link</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!--useful links widget Modal Insert End-->

    <!--Category Modal delete Start-->
    <div class="modal fade" id="useful-links-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Useful Links Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" id="category_delete_form" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <input type="hidden" id="del_id">
                        <h3 class="text text-danger"><strong>Are Your Sure To Delete This Link ?</strong></h3>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn red" id="delete_confirm">Confirm Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Category Modal delete End-->

    @include('backend.template-part.alert')
    @include('backend.footer-management.script')
@endsection