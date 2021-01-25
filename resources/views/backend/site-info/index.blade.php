@extends('backend.master')
@section('site-title')
    Site Info Management
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
            <h3 class="page-title">Site Info Management
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->
            <div class="row">
                <div class="col-md-7">

                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-caret-square-o-up" aria-hidden="true"></i> Choose Color For Your Site </div>
                            <div class="actions">
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        @foreach($site_info_all_query[0] as $color)
                        <div class="portlet-body" style="height: auto;">
                            <input type="hidden" id="color_code" value="{{$color->color_code}}">
                            <form action="#" method="POST">
                                {{csrf_field()}}
                            <p id="color-picker">
                                <input type="button" class="btn green custom-class-for-btn-2 btn-xs color" id="change_color" value="Save Change">
                            </p><br/>
                            </form>
                        @endforeach
                    </div>
                </div>
                </div>
                <!--site info mangement-->
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-globe" aria-hidden="true"></i> General Setup </div>
                            <div class="actions">
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('site.info.store')}}" method="POST" enctype="multipart/form-data" id="general_settings_form">
                                {{csrf_field()}}
                                @foreach($site_info_all_query[1] as $site_info)
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 text-left control-label">Site Title</label>
                                                <div class="col-md-12">
                                                        <input type="text" class="form-control" name="site_title" value="{{$site_info->title}}">


                                                    @if($errors->has('site_title') )
                                                        <p class="alert alert-danger">{{$errors->first('site_title')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 text-left control-label">Meta Keyword</label>
                                                <div class="col-md-12">
                                                        <textarea name="meta_keyword" style="width: 100%;" id="meta_keyword" cols="30" rows="5" class="custom_text_box form-control">{{$site_info->meta_keyword}}</textarea>

                                                    <p class="text-left">enter meta keyword separate by commas</p>
                                                    @if($errors->has('meta_keyword') )
                                                        <p class="alert alert-danger">{{$errors->first('meta_keyword')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 text-left control-label">Meta Description</label>
                                                <div class="col-md-12">
                                                        <textarea name="meta_description" style="width: 100%;" id="meta_description" cols="30" rows="5" class="custom_text_box form-control">{{$site_info->meta_description}}</textarea>

                                                    @if($errors->has('meta_description') )
                                                        <p class="alert alert-danger">{{$errors->first('meta_description')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 text-left control-label">Copyright Text</label>
                                                <div class="col-md-12">
                                                        <input type="text" class="form-control" name="copyright_text" value="{{$site_info->copyright_text}}">
                                                    @if($errors->has('copyright_text') )
                                                        <p class="alert alert-danger">{{$errors->first('copyright_text')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group text-left">
                                                <lable for="logo_picture " class="text-left">Logo Picture</lable>
                                                <input type="file" name="logo_picture" id="logo_picture">
                                                <p class="help-text ">Please Upload only png format and 100px by 300px width photo</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="logo_preview_box"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="image_logo">
                                                            @if(file_exists("assets/frontend/upload/images/site-info/logo.{$site_info->logo}"))
                                                                <img src="{{url('/')}}/assets/frontend/upload/images/site-info/logo.{{$site_info->logo}}" alt="Logo Image">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-left">
                                                <lable for="logo">Fevicon Picture</lable>
                                                <input type="file" name="fevicon_picture" id="fevicon_picture">
                                                <p class="help-text">Please Upload only png format and 20px by 20px width photo</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="favicon_preview_box"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="image_favicon">
                                                            @if(file_exists("assets/frontend/upload/images/site-info/favicon.{$site_info->fevicon}"))
                                                                <img src="{{url('/')}}/assets/frontend/upload/images/site-info/favicon.{{$site_info->fevicon}}" alt="fevicon">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="submit" class="btn green custom-class-for-btn" value="Save Change">
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
                <!--support bar management-->
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-globe" aria-hidden="true"></i> Support Bar Setup </div>
                            <div class="actions">
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>

                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('site.info.supportbar.store')}}" method="POST" enctype="multipart/form-data" id="support_bar_form">
                                {{csrf_field()}}
                                @foreach($site_info_all_query[2] as $support_bar)
                                <div class="row">
                                    <div class="col-md-12 text-left">
                                        <div class="form-body">
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 control-label">Contact Icon</label>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">fa fa-</span>
                                                        <input type="text" class="form-control" name="contact_icon" value="{{$support_bar->contact_icon}}">

                                                    </div>
                                                    <p class="help-text">Please only icon code
                                                        <a href="http://fontawesome.io/icons/" class="btn btn-info btn-xs" target="_blank">Icon List</a> </p>
                                                    @if($errors->has('contact_icon') )
                                                        <p class="alert alert-danger">{{$errors->first('contact_icon')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 control-label">Phone Number</label>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i>
                                                                    </span>
                                                        <input type="tel" class="form-control" name="phone_number" value="{{$support_bar->phone_number}}">

                                                    </div>
                                                    <p>Please enter number without 0 like this 12345678910</p>
                                                    @if($errors->has('phone_number') )
                                                        <p class="alert alert-danger">{{$errors->first('phone_number')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 control-label">Service Time Icon</label>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">fa fa-</span>
                                                        <input type="text" class="form-control" name="service_time_icon" value="{{$support_bar->service_time_icon}}">

                                                    </div>
                                                    <p class="help-text">Please only icon code
                                                        <a href="http://fontawesome.io/icons/" class="btn btn-info btn-xs" target="_blank">Icon List</a> </p>
                                                    @if($errors->has('service_time_icon') )
                                                        <p class="alert alert-danger">{{$errors->first('service_time_icon')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 control-label">Service Time</label>
                                                <div class="col-md-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="service_time" value="{{$support_bar->service_time}}">
                                                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                    </span>
                                                    </div>
                                                    @if($errors->has('service_time') )
                                                        <p class="alert alert-danger">{{$errors->first('service_time')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 control-label"> Show/Hide Support Bar  </label>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" @if($support_bar->status == "on") checked @endif name="status" class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
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
                <!--Social management-->
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-globe" aria-hidden="true"></i> Social Media Management </div>
                            <div class="actions">
                                <a href="#" class="btn dark" data-toggle="modal" data-target="#social-modal">Add New</a>
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                            <div class="portlet box green">
                                <div class="portlet-body">

                                    <table class="table table-striped font_color_black table-bordered table-hover" id="sample_2">
                                        <thead>
                                        <tr>
                                            <th style="width: 5%"> ID </th>
                                            <th style="width: 20%"> Name </th>
                                            <th style="width: 20%"> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($site_info_all_query[3] as $social)
                                            <tr role="row" class="odd" id="table-row-{{$social->id}}">
                                                <td class="sorting_1">{{$social->id}}</td>
                                                <td class="social_name_{{$social->id}}">{{$social->name}}</td>
                                                <td>
                                                    <a href="#" class="btn yellow social_edit_btn" id="social_edit_btn_{{$social->id}}" data-toggle="modal" data-target="#social-modal-edit"
                                                        data-id="{{$social->id}}" data-name="{{$social->name}}" data-url="{{$social->url}}"
                                                    ><i class="fa fa-edit"></i></a>
                                                    <a href="#" class="btn red social_delete_btn" data-id="{{$social->id}}" data-toggle="modal" data-target="#social-modal-delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <script type="text/javascript" src="{{url('/')}}/assets/backend/custom/js/colorpicker/colorpicker.js"></script>
    <!--custom stylesheet register-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/backend/custom/css/colorpicker/colorpicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/backend/custom/css/colorpicker/layout.css')}}" />

    @include('backend.template-part.alert')
    @include('backend.template-part.alert')
    @include('backend.site-info.script')
    @include('backend.site-info.modal')

@endsection