@extends('backend.master')

@section('site-title')
    ロジとら
@endsection
@section('main-content')
    @if(Session::has('msg'))
        <script>
            $(document).ready(function(){
                swal("{{Session::get('msg')}}","", "success");
            });
        </script>
    @endif
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            @if (Session::has('message'))
                <div class="alert alert-danger">{{ Session::get('message') }}</div>
             @endif
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> 管理者画面
                <small>管理者画面 & 統計</small>
            </h3>
            <div class="row" style="margin-top:120px;">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{$total_user}}">0</span>
                            </div>
                            <div class="desc"> 会員数 </div>
                        </div>
                        <a class="more" href="{{route('employee.list')}}"> その他
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
            </div>
            <div class="row" style="margin-top:50px;">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{$total_emptycar}}"></span></div>
                            <div class="desc"> 空車数 </div>
                        </div>
                        <a class="more" href="{{route('emptycar.list')}}"> その他
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
            </div>
            <div class="row" style="margin-top:50px;">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="{{$total_luggage}}"></span>
                            </div>
                            <div class="desc"> 貨物数 </div>
                        </div>
                        <a class="more" href="{{route('luggage.list')}}"> その他
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
@endsection
