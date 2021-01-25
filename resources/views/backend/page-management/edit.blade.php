@extends('backend.master')
@section('site-title')
    Edit Page Items
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
            <h3 class="page-title">Edit Page Items
                <small> </small>
            </h3>
            <!-- END PAGE TITLE-->
            <div class="row">

                <!--create a new page-->
                <div class="col-md-12">
                    <div class="portlet portlet-sortable box green">
                        <div class="portlet-title ui-sortable-handle">
                            <div class="caption">
                                <i class="" aria-hidden="true"></i> Edit Page Items </div>
                            <div class="actions">
                                    <a href="{{route('page-management.index')}}" class="dt-button buttons-print  btn dark"><span>Manage All Page</span></a>
                                    <a href="" data-toggle="modal" data-target="#template-modal" class="dt-button buttons-print  btn dark template_name_btn"><span>Choose Template</span></a>
                                <a class="btn btn-sm btn-icon-only btn-default fullscreen" href="javascript:;"></a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <form action="{{route('page-management.update.manual',$page->id)}}" method="POST" enctype="multipart/form-data" id="edit_page_form">
                                {{csrf_field()}}
                                <input type="hidden" name="page_id" id="page_id" value="{{$page->id}}">
                                <input type="hidden" name="template" id="template" value="{{$page->content}}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="form-group clearfix">
                                                <label class="col-md-3 control-label"> Page Name</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <input type="text" name="name" class="form-control page_name_input_field" id="page_name" value="{{$page->name}}" placeholder="Enter Page Name">
                                                    </div>
                                                    @if($errors->has('name') )
                                                        <p class="alert alert-danger">{{$errors->first('name')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="col-md-12 control-label"> Page Content</label>
                                                <div class="col-md-12">
                                                        <textarea name="page_content" id="page_content" style="width: 100%;" rows="20">
                                                        @if($page->content == "about")
                                                                @if(file_exists("assets/backend/upload/pages/about.txt"))
                                                                    {!! ViewFile("assets/backend/upload/pages/about.txt") !!}
                                                                @endif
                                                        @elseif($page->content == "contact")
                                                                @if(file_exists("assets/backend/upload/pages/contact.txt"))
                                                                    {!! ViewFile("assets/backend/upload/pages/contact.txt") !!}
                                                                @endif
                                                        @elseif($page->content == "faq")
                                                                @if(file_exists("assets/backend/upload/pages/faq.txt"))
                                                                    {!! ViewFile("assets/backend/upload/pages/faq.txt") !!}
                                                                @endif
                                                        @elseif($page->content == "pricing")
                                                                @if(file_exists("assets/backend/upload/pages/pricing.txt"))
                                                                    {!! ViewFile("assets/backend/upload/pages/pricing.txt") !!}
                                                                @endif
                                                        @elseif($page->content == "team")
                                                                @if(file_exists("assets/backend/upload/pages/team.txt"))
                                                                    {!! ViewFile("assets/backend/upload/pages/team.txt") !!}
                                                                @endif
                                                        @else
                                                                @if(file_exists("assets/backend/upload/pages/page-content-{$page->id}.txt"))
                                                                    {!! ViewFile("assets/backend/upload/pages/page-content-{$page->id}.txt") !!}
                                                                @endif
                                                        @endif
                                                        </textarea>
                                                    @if($errors->has('page_content') )
                                                        <p class="alert alert-danger">{{$errors->first('page_content')}}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <input type="submit" class="btn green" value="Save Changes">
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
                <!--create a new page-->
            </div>
        </div>

    </div>
    </div>
    <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    @include('backend.page-management.edit-modal')
    @include('backend.template-part.alert')
    @include('backend.page-management.create-script')
    @include('backend.footer-management.script')
    @include('backend.page-management.edit-script')
@endsection