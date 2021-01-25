<div class="kt-portlet__body bg-red">
    <div class="kt-current_info__wrapper">
        <div class="kt-current_info__text kt-align-center">
            <!-- 2019年05月30日（木）  12：19：31 現在 -->
            <p id="date"></p>
        </div>
        <div class="d-flex justify-content-center flex-wrap">
            <div class="kt-current_info__content kt-widget5 m-2">
                <div class="kt-widget5__item">
                    <div class="kt-widget5__content">
                        <div class="kt-widget5__pic">
                            <img class="kt-widget7__img" src="/media/img/package_icon.png" alt="">
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
                            <a href="#" class="kt-widget5__normal">
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
                            <img class="kt-widget7__img" src="/media/img/truck_icon_1.png" alt="">
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
                            <a href="#" class="kt-widget5__normal">
                                件
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-6">
        <div class="form-group">
            <div class="form-control kt-portlet__content bg-grey kt-align-center pt-5 pb-5" style="height: auto">
                <h2 class="font-weight-boldest text-dark">
                    荷物情報
                </h2>
                <div class="row">
                    <div class="col-sm-4 mb-2">
                        <a href="{{url('luggage_search')}}">
                            <button class="btn btn-block kt-font-xl custom_btn_orange">検 索</button>
                        </a>
                    </div>	
                    <div class="col-sm-4 mb-2">
                        <a href="{{url('luggage_create')}}">
                            <button class="btn btn-block kt-font-xl custom_btn_orange">登 錄</button>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{url('luggage_edit')}}">
                            <button class="btn btn-block kt-font-xl custom_btn_orange">修 正・削 除</button>
                        </a>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <div class="form-control kt-portlet__content bg-grey kt-align-center pt-5 pb-5" style="height: auto">
                <h2 class="font-weight-boldest text-dark">
                    空車情報
                </h2>
                <div class="row">
                    <div class="col-sm-4 mb-2">
                        <a href="{{url('emptyTruck_search')}}">
                            <button class="btn btn-block kt-font-xl custom_btn_blue">検 索</button>
                        </a>
                    </div>	
                    <div class="col-sm-4 mb-2">
                        <a href="{{url('emtpyTruck_create')}}">
                            <button class="btn btn-block kt-font-xl custom_btn_blue">登 錄</button>
                        </a>
                    </div>	
                    <div class="col-sm-4">
                        <a href="{{url('emptyTruck_edit')}}">
                            <button class="btn btn-block kt-font-xl custom_btn_blue">修 正・削 除</button>
                        </a>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>