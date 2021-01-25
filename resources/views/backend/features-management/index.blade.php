@extends('backend.master')
@section('site-title')
    Feature Management
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
            <h3 class="page-title">Site Management
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->
            <!--category table start-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>FEATURES MANAGEMENT </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <div id="sample_2_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-12"><div class="dt-buttons"><a class="dt-button buttons-print btn default" tabindex="0" aria-controls="sample_2"><span>Print</span></a><a class="dt-button buttons-copy buttons-html5 btn default" tabindex="0" aria-controls="sample_2"><span>Copy</span></a><a class="dt-button buttons-pdf buttons-html5 btn default" tabindex="0" aria-controls="sample_2"><span>PDF</span></a>

                                    <a class="dt-button buttons-csv buttons-html5 btn default" tabindex="0" aria-controls="sample_2"><span>CSV</span></a>
                                </div></div></div><div class="row"><div class="col-md-6 col-sm-12"><div class="dataTables_length" id="sample_2_length"><label><select name="sample_2_length" aria-controls="sample_2" class="form-control input-sm input-xsmall input-inline"><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select> entries</label></div></div><div class="col-md-6 col-sm-12"><div id="sample_2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_2"></label></div></div></div><div class="table-scrollable"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_2" role="grid" aria-describedby="sample_2_info">
                                <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Rendering engine : activate to sort column descending" style="width: 165px;"> Rendering engine </th><th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Browser : activate to sort column ascending" style="width: 207px;"> Browser </th><th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Platform(s) : activate to sort column ascending" style="width: 185px;"> Platform(s) </th><th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" Engine version : activate to sort column ascending" style="width: 140px;"> Engine version </th><th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1" aria-label=" CSS grade : activate to sort column ascending" style="width: 99px;"> CSS grade </th></tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Firefox 1.0 </td>
                                    <td> Win 98+ / OSX.2+ </td>
                                    <td> 1.7 </td>
                                    <td> A </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Firefox 1.5 </td>
                                    <td> Win 98+ / OSX.2+ </td>
                                    <td> 1.8 </td>
                                    <td> A </td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Firefox 2.0 </td>
                                    <td> Win 98+ / OSX.2+ </td>
                                    <td> 1.8 </td>
                                    <td> A </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Firefox 3.0 </td>
                                    <td> Win 2k+ / OSX.3+ </td>
                                    <td> 1.9 </td>
                                    <td> A </td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Camino 1.0 </td>
                                    <td> OSX.2+ </td>
                                    <td> 1.8 </td>
                                    <td> A </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Camino 1.5 </td>
                                    <td> OSX.3+ </td>
                                    <td> 1.8 </td>
                                    <td> A </td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Netscape 7.2 </td>
                                    <td> Win 95+ / Mac OS 8.6-9.2 </td>
                                    <td> 1.7 </td>
                                    <td> A </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Netscape Browser 8 </td>
                                    <td> Win 98SE+ </td>
                                    <td> 1.7 </td>
                                    <td> A </td>
                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Netscape Navigator 9 </td>
                                    <td> Win 98+ / OSX.2+ </td>
                                    <td> 1.8 </td>
                                    <td> A </td>
                                </tr><tr role="row" class="even">
                                    <td class="sorting_1"> Gecko </td>
                                    <td> Mozilla 1.0 </td>
                                    <td> Win 95+ / OSX.1+ </td>
                                    <td> 1 </td>
                                    <td> A </td>
                                </tr></tbody>
                            </table></div><div class="row"><div class="col-md-5 col-sm-12"><div class="dataTables_info" id="sample_2_info" role="status" aria-live="polite">Showing 1 to 10 of 43 entries</div></div><div class="col-md-7 col-sm-12"><div class="dataTables_paginate paging_bootstrap_number" id="sample_2_paginate"><ul class="pagination" style="visibility: visible;"><li class="prev disabled"><a href="#" title="Prev"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#" title="Next"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
                </div>
            </div>
            <!--category table end-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

@endsection
@include('backend.template-part.data-table')