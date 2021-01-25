@extends('backend.master')
@section('site-title')
    Menu Management
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
            <h3 class="page-title">Menu Management
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->
            <div class="row">
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-cc-paypal" aria-hidden="true"></i> Header Menu Management </div>
                            <div class="actions">
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('menu.management')}}" method="POST" enctype="multipart/form-data" id="general_settings_form">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body" id="menu_select">
                                            <div id="input-box">
                                                @php $c = 1; @endphp
                                                @foreach($all_pages as $pages)
                                                    <div class="form-group clearfix">
                                                        <label class="col-md-6 control-label" id="page_label-{{$pages->id}}">{{$pages->name}}</label>
                                                        <div class="col-md-3">
                                                            <div class="input-group">
                                                                <select name="page_status[{{$pages->id}}]" class="form-control" id="page-status[{{$pages->id}}]">

                                                                    <option value="0" @if($pages->status == 0) selected @endif>Hide</option>
                                                                    <option value="1" @if($pages->status == 1) selected @endif>Show</option>

                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="input-group">
                                                                <input type="number" name="menu_order[{{$pages->id}}]" value="{{$c}}">
                                                                <p class="text text-danger small">set menu order</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $c++; @endphp
                                                @endforeach
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="col-md-9">
                                                            <input type="submit" class="btn green custom-class-for-btn-2`" value="Save Change">
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
                <div class="col-md-6">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="fa fa-cc-paypal" aria-hidden="true"></i> Create New Page </div>
                            <div class="actions">
                                    <a class="dt-button buttons-print  btn dark" download=""  data-toggle="modal" data-target="#page_create"><span>Create New Page</span></a>
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>

                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-scrollable">
                                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="table-4" role="grid" aria-describedby="sample_2_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Rendering engine : activate to sort column descending" style="width: 165px;"> id </th>
                                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Browser : activate to sort column ascending" style="width: 207px;"> Categories Name </th>

                                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Engine version : activate to sort column ascending" style="width: 380px;"> Action </th>
                                                </tr>
                                                </thead>
                                                <tbody id="page_data_table">
                                                @foreach($all_pages as $page)
                                                    <tr role="row" class="odd" id="table-row-{{$page->id}}">
                                                        <td class="sorting_1"> {{$page->id}} </td>
                                                        <td id="page_name-{{$page->id}}"> {{$page->name}}</td>
                                                        <td>
                                                            <a href="#" class="btn yellow page_edit_btn btn-xs" id="page_edit_btn_{{$page->id}}" data-id="{{$page->id}}" data-name="{{$page->name}}" data-toggle="modal" data-target="#page_edit"
                                                            ><i class="fa fa-edit"></i> Edit</a>
                                                            <a href="#" class="btn red page_delete_btn btn-xs" data-toggle="modal" data-id="{{$page->id}}"  data-target="#page_delete"><i class="fa fa-trash"></i> Delete</a>
                                                            <a href="{{route('page-management.edit',$page->id)}}" class="btn blue btn-xs"><i class="fa fa-info-circle"></i> Manage</a>
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
    </div>
    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

    @include('backend.menu-management.modal')
    @include('backend.menu-management.script')
    @include('backend.template-part.alert');
@endsection