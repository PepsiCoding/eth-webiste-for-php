@extends('backend.master')
@section('site-title')
    Home Page Section Management
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
                        <a href="{{route('home.page')}}">Home</a>
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
            <h3 class="page-title">Home Page Section Management
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->
            <div class="row">
                <!--homepage management-->
                <div class="col-md-4">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-web" aria-hidden="true"></i> Home Page Section Management </div>

                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('section.management.home')}}" method="POST" enctype="multipart/form-data" id="home_section_manage_form">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Header Area  </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="header_section" @if($home_page_manage->header_section == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Featured Section  </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="featured_section" @if($home_page_manage->featured_section == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Category Section  </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="category_section" @if($home_page_manage->category_section == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label">Recent items  </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="recent_items" @if($home_page_manage->recent_items == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Team Section  </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="team_section" @if($home_page_manage->team_section == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Countdown Section  </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="countdown_section" @if($home_page_manage->countdown_section == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Popular Items</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="popular_items" @if($home_page_manage->popular_items == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
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
                        </div>
                        </form>
                    </div>
                </div>
                <!--Category page management-->
                <div class="col-md-4">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-web" aria-hidden="true"></i> Sidebar Widget Management </div>

                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('sidebar.management')}}" method="POST" enctype="multipart/form-data" id="sidebar_widget_manage_form">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Search Widget</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="search" @if($widget_management->search == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Category Widget </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="category" @if($widget_management->category == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label">Recent Post Widget </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="recent_post" @if($widget_management->recent_post == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label"> Tag Widget </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="tag" @if($widget_management->tag == "on")  checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-6 control-label">Advertise Section </label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="checkbox" name="advertisement" @if($widget_management->advertisement == "on") checked @endif class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">
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
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @include('backend.template-part.alert')
    @include('backend.section-management.script')
@endsection