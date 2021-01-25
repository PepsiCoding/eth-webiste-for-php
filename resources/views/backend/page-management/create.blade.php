@extends('backend.master')
@section('site-title')
    Create A New Page
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
            <h3 class="page-title">Create A New Page
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->
            <div class="row">

                <!--create a new page-->
                <div class="col-md-12">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa" aria-hidden="true"></i> Create a new page </div>
                            <div class="actions">
                                    <a href="{{route('page-management.index')}}" class="dt-button buttons-print  btn dark"><span>Manage All Page</span></a>
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('page-management.create.manual')}}" method="POST" enctype="multipart/form-data" id="create_new_page_form">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label"> Page Name</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <input type="text" name="name" class="form-control page_name_input_field" id="page_name" value="{{old('page_name')}}" placeholder="Enter Page Name">
                                                    </div>
                                                    @if($errors->has('name') )
                                                        <p class="alert alert-danger">{{$errors->first('name')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12 control-label"> Page Content</label>
                                                        <textarea name="page_content" style="width: 100% !important; display: inherit;" id="page_content" rows="20">{{old('page_content')}}</textarea>

                                                    @if($errors->has('page_content') )
                                                        <p class="alert alert-danger">{{$errors->first('page_content')}}</p>
                                                    @endif
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="submit" class="btn green" value="Create Page">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                <!--create a new page-->
            </div>
        </div>

    </div>
    </div>
    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @include('backend.template-part.alert')
    @include('backend.page-management.create-script')
    @include('backend.footer-management.script')
    @include('backend.page-management.create-script')
    <script>
        $('.nicEdit-main').css({
            width: '500px'
        });
    </script>
@endsection