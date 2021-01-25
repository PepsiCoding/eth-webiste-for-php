@extends('backend.master')
@section('site-title')
    Plan Management
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
            <h3 class="page-title"> Plan Management
                <small>Insert / Delete / Update / Edit </small>
            </h3>
            <div class="create-btn">
                <a class="dt-button buttons-print  btn dark" download=""  data-toggle="modal" data-target="#plan-modal"><span>Create A Plan</span></a>

            </div>
        <!-- END PAGE TITLE-->
            <!--category table start-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>All Category </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        @foreach($all_plan as $plan)
                            <div class="col-sm-4 text-center">
                                <div class="panel panel-success panel-pricing">
                                    <div class="panel-heading">
                                        <h3 style="font-size: 28px;"><b>{{$plan->name}}</b></h3>
                                    </div>
                                    <div style="font-size: 18px;padding: 18px;" class="panel-body text-center">
                                        <p><strong>USD - {{$plan->price}}</strong></p>
                                    </div>
                                    <ul style="font-size: 15px;" class="list-group text-center bold">
                                        <li style="border-top: 1px solid #eee;" class="list-group-item"> {{$plan->days}} - Days</li>
                                        <li class="list-group-item">
                                    <span class="aaaa">
                                        @if($plan->status == null)
                                            <p class="text text-danger">Inactive</p>
                                        @else
                                            <p class="text text-success">Active</p>
                                        @endif

                                    </span>
                                        </li>
                                    </ul>
                                    <div class="panel-footer" style="overflow: hidden">
                                        <div class="col-sm-12">
                                            <a href="#" class="btn yellow plan_edit_btn" data-toggle="modal" data-target="#plan-edit"
                                            data-id="{{$plan->id}}" data-name="{{$plan->name}}" data-price="{{$plan->price}}" data-days="{{$plan->days}}" data-switch="{{$plan->status}}"
                                            ><i class="fa fa-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!--category table end-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@include('backend.template-part.alert')
@include('backend.plan-management.modal')
@include('backend.plan-management.script')

@endsection
