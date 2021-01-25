@extends('backend.master')
@section('site-title')
    Location Management
@endsection
@section('main-content')
    @include('backend.template-part.data-table')
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
            <h3 class="page-title"> Location
                <small>Insert / Delete / Edit </small>
            </h3>
            <div class="create-btn">
                <a class="dt-button buttons-print  btn dark" data-toggle="modal" data-target="#location-modal"><span>Add New Location</span></a>
            </div>
        <!-- END PAGE TITLE-->
            <!--category table start-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Location List
                    </div>
                    <div class="tools"> </div>

                </div>
                <div class="portlet-body">

                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> Location Name </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $c=1; @endphp
                        @foreach($all_location as $all_loc)
                            <tr role="row" class="odd" id="table-row-{{$all_loc->id}}">
                                <td class="sorting_1">{{$c}}</td>
                                <td>{{$all_loc->name}}</td>
                                <td>
                                    <a href="#" class="btn yellow location_edit_btn" data-toggle="modal" data-target="#location-edit"
                                       data-id="{{$all_loc->id}}" data-name="{{$all_loc->name}}"
                                    ><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn red location_delete_btn" data-toggle="modal" data-id="{{$all_loc->id}}" data-target="#location-delete"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            @php $c++; @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
            <!--category table end-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

@include('backend.template-part.alert')
@include('backend.location.modal')
@include('backend.location.script')

@endsection
