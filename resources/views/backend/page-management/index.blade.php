@extends('backend.master')
@section('site-title')
    Page Management
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

            <h3 class="page-title"> All Pages</h3>
            <div class="create-btn">
                <a class="dt-button buttons-print  btn dark" data-toggle="modal" data-target="#page_create"><span>Add New Page</span></a>
            </div>
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Pages List
                    </div>
                    <div class="tools"> </div>

                </div>
                <div class="portlet-body">

                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th width="30%"> ID </th>
                            <th width="30%"> Name </th>
                            <th width="30%"> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_pages as $page)
                            <tr role="row" class="odd" id="table-row-{{$page->id}}">
                                <td class="sorting_1"> {{$page->id}} </td>
                                <td id="page_name-{{$page->id}}"> {{$page->name}}</td>
                                <td>
                                    <a href="#" class="btn yellow page_edit_btn btn-xs" id="page_edit_btn_{{$page->id}}" data-id="{{$page->id}}" data-name="{{$page->name}}" data-toggle="modal" data-target="#page_edit"
                                    ><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn red page_delete_btn btn-xs" data-toggle="modal" data-id="{{$page->id}}"  data-target="#page_delete"><i class="fa fa-trash"></i> Delete</a>
                                    <a href="{{route('page-management.edit',$page->id)}}" class="btn blue btn-xs"> <i class="fa fa-info-circle"></i> Manage</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @include('backend.template-part.alert')
    @include('backend.page-management.modal')
    @include('backend.page-management.script')

@endsection
