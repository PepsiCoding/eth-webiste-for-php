@extends('backend.master')
@section('site-title')
   Sub Category Management
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
            <h3 class="page-title">Sub Category
                <small>Insert / Delete / Update / Edit </small>
            </h3>
            <div class="create-btn">
                <a class="dt-button buttons-print  btn dark" download=""  data-toggle="modal" data-target="#sub-category-modal"><span>Add New Sub Category</span></a>
            </div>
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>All Sub Category
                    </div>
                    <div class="tools"> </div>

                </div>
                <div class="portlet-body">

                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Rendering engine : activate to sort column descending" style="width: 100px;"> id </th>
                            <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Browser : activate to sort column ascending" style="width: 207px;">Sub Categories Name </th>
                            <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Platform(s) : activate to sort column ascending" style="width: 185px;">Sub Categories Icon </th>
                            <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Platform(s) : activate to sort column ascending" style="width: 185px;"> Categories  </th>
                            <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Engine version : activate to sort column ascending" style="width: 140px;"> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $c = 1; @endphp
                        @foreach($all_sub_category as $sub_cat)
                            <tr role="row" class="odd" id="table-row-{{$sub_cat->sid}}">
                                <td class="sorting_1"> {{$c}} </td>
                                <td> {{$sub_cat->sname}}</td>
                                <td>
                                    <i class="fa {{$sub_cat->icon}}"></i>
                                </td>
                                <td>
                                    {{$sub_cat->cname}}
                                </td>
                                <td>
                                    <a href="#" class="btn yellow sub_cat_edit_btn" data-toggle="modal" data-target="#category-edit"
                                       data-id="{{$sub_cat->sid}}" data-name="{{$sub_cat->sname}}" data-iconcode="{{$sub_cat->icon}}" data-cid="{{$sub_cat->cid}}"
                                    ><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" class="btn red sub_cat_delete_btn" data-id="{{$sub_cat->sid}}" data-toggle="modal" data-target="#category-delete"><i class="fa fa-trash"></i> Delete</a>
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
    <!--all modal code of this page-->
    @include('backend.sub-category.modal')
<!--all script code of this page-->
    @include('backend.sub-category.script')

@endsection
