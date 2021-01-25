@extends('layouts.app')
@section('content')
    <div class="kt-portlet kt-portlet--height-fluid kt-current_info">
        <div class="kt-portlet__body bg-red">
            <div class="kt-current_info__wrapper">
                <div class="kt-current_info__text kt-align-center">
                    <p id="date"></p>
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="kt-current_info__content kt-widget5 m-2">
                        <div class="kt-widget5__item">
                            <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                    <img class="kt-widget7__img" src="{{asset('media/img/package_icon.png')}}" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                        <div class="kt-widget5__normal">
                                            荷物情報
                                        </div>
                                </div>
                            </div>
                            <div class="kt-widget5__content">
                                <div class="kt-widget5__section">
                                    <a href="javascript:void(0)" class="kt-widget5__amount">
                                        {{$luggage_num}}
                                    </a>
                                </div>
                            </div>
                            <div class="kt-widget5__content">
                                <div class="kt-widget5__section">
                                    <a href="javascript:void(0)" class="kt-widget5__normal">
                                        件
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-current_info__content kt-widget5 m-2">
                        <div class="kt-widget5__item">
                            <div class="kt-widget5__content">
                                <div class="kt-widget5__pic">
                                    <img class="kt-widget7__img" src="{{asset('media/img/truck_icon_1.png')}}" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                    <div class="kt-widget5__normal">
                                        空車情報
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget5__content">
                                <div class="kt-widget5__section">
                                    <a href="javascript:void(0)" class="kt-widget5__amount">
                                        {{$emptycar_num}}
                                    </a>
                                </div>
                            </div>
                            <div class="kt-widget5__content">
                                <div class="kt-widget5__section">
                                    <a href="javascript:void(0)" class="kt-widget5__normal">
                                        件
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body pl-0 pr-0">
            <div class="kt-current_info__wrapper">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="kt-widget5 kt-action_wrapper left-widget flex-fill rounded-sm">
                        <div class="kt-widget5__item">
                            <div class="kt-widget5__content package-left-widget">
                                <div class="kt-widget5__pic">
                                    <img class="kt-widget6__img" src="{{asset('media/img/package01_icon.png')}}" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                    <div class="kt-widget5__normal">
                                        荷物情報
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-action_info__content kt-widget5 kt-align-center">
                            <div class="kt-widget5__content">
                                <a href="{{url('luggage_search')}}">
                                    <div class="kt-widget5_section-left">
                                        <button type="button" class="btn  btn-wide search-btn">検 索</button>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="kt-action_info__content">
                            <div class="package-search d-flex justify-content-around">
                                <div class="kt-widget5__content">
                                    <a href="{{url('luggage_create')}}">
                                        <div class="kt-widget5_section-left">
                                                <button type="button" class="btn  btn-wide package-manage-btn">登 錄</button>
                                        </div>
                                    </a>
                                </div>
                                <div class="kt-widget5__content">
                                    <a href="{{url('luggage_edit')}}">
                                        <div class="kt-widget5_section-left">
                                                <button type="button" class="btn  btn-wide package-manage-btn">修 正・削 除</button>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="kt-widget5 kt-action_wrapper right-widget flex-fill rounded-sm pb-3">
                        <div class="kt-widget5__item">
                            <div class="kt-widget5__content package-left-widget pb-3">
                                <div class="kt-widget5__pic">
                                    <img class="kt-widget6__img" src="{{asset('media/img/truck_icon-2.png')}}" alt="">
                                </div>
                                <div class="kt-widget5__section">
                                    <div class="kt-widget5__normal">
                                        空車情報
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="kt-action_info__content kt-widget5 kt-align-center">
                            <div class="kt-widget5__content">
                                <a href="{{url('emptyTruck_search')}}">
                                    <div class="kt-widget5_section-right">
                                        <button type="button" class="btn  btn-wide search-btn">検 索</button>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="kt-action_info__content">
                            <div class="empty-truck-search d-flex justify-content-around">
                                <div class="kt-widget5__content">
                                    <a href="{{url('emtpyTruck_create')}}">
                                        <div class="kt-widget5_section-right">
                                                <button type="button" class="btn  btn-wide empty-truck-mange-btn">登 錄</button>
                                        </div>
                                    </a>
                                </div>
                                <div class="kt-widget5__content">
                                    <a href="{{url('emptyTruck_edit')}}">
                                        <div class="kt-widget5_section-right">
                                                <button type="button" class="btn  btn-wide empty-truck-mange-btn">修 正・削 除</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end:: Widgets/Notifications-->
            </div>
        </div>
        <div class="kt-portlet__body construct">
            <img alt="construct" src="/media/img/constuct.png" class="kt-construct" />
        </div>
    </div>
@endsection

@section('sidebar')
  @auth
    @include('includes.sidebar02')
  @else
    @include('includes.sidebar01')
  @endauth
@endsection
