@extends('backend.master')
@section('site-title')
    Advertisement Management
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
                        <a href="index.html">Home</a>
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
            <h3 class="page-title">Advertisement Management
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->
            <div class="row">
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Google Advertisement Mangement </div>
                            <div class="actions">
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('advertisement.store.one')}}" method="POST" id="google_add_one">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="google_add">Google Ad 728X90</label>
                                    <textarea name="google_ad_728" id="google_ad_728" class="form-control" cols="30" rows="10">{{$add_field_one->add_code}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update Advertisement" class="btn green">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Google Advertisement Mangement </div>
                            <div class="actions">
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('advertisement.store.two')}}" method="POST" id="google_add_two">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="google_add">Google Ad 300X250</label>
                                    <textarea name="google_ad_300" id="google_ad_300" class="form-control" cols="30" rows="10">{{$add_field_two->add_code}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update Advertisement" class="btn green">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @include('backend.template-part.alert')
@include('backend.advertisement.script')
@endsection

