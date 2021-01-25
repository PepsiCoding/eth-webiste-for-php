
@extends('backend.master')

@section('site-title')
    Category Management
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
            <h3 class="page-title"> Category
                <small>Insert / Delete / Update / Edit </small>
            </h3>
            <div class="create-btn">
                <a class="dt-button buttons-print  btn dark" download=""  data-toggle="modal" data-target="#category-modal"><span>Add New Category</span></a>
            </div>
            <!-- END PAGE TITLE-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>All Category
                    </div>
                    <div class="tools"> </div>

                </div>
                <div class="portlet-body">

                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th> ID </th>
                            <th> Categories Name </th>
                            <th> Categories Icon </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $c = 1; @endphp
                        @foreach($all_category as $category)
                            <tr role="row" class="odd" id="table-row-{{$category->id}}">
                                <td class="sorting_1"> {{$c}} </td>
                                <td> {{$category->name}}</td>
                                <td>
                                    <i class="fa {{$category->icon}}"></i>
                                </td>
                                <td>
                                    <a href="#" class="btn yellow cat_edit_btn" data-toggle="modal" data-target="#category-edit"
                                       data-id="{{$category->id}}" data-iconcode="{{$category->icon}}" data-name="{{$category->name}}"

                                    ><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn red cat_delete_btn" data-toggle="modal" data-id="{{$category->id}}" data-target="#category-delete"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            @php $c++; @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

    @include('backend.template-part.data-table')
    @include('backend.template-part.alert')
    @include('backend.category.modal')
    @include('backend.category.script')

@endsection