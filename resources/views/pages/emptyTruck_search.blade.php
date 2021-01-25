@extends('layouts.app')

@section('content')
<div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
    @include('includes.info')
    	<!-- <div class="kt-portlet__body"> -->
        <div class="kt-portlet__body">
            <div class="kt-widget5__content">
                <div class="row">
                    <div class="col-4 text-right"></div>
                    <div class="col-4 text-center">
                        <h2 class="kt-widget5__normal text-dark"><img src="{{asset('media/img/freight-1.png')}}" class="mr-3">空車情報検索</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <div class="kt-portlet__body bg-grey text-dark">
            <div class="kt-form">
                <div class="kt-portlet__body">
                    <form class="kt-form form_style" action="/emptyTruck_search/info" method="post">
                        @csrf
                        <input type="hidden" name="beginplace" value="">
                        <input type="hidden" name="endplace" value="">
                        <input type="hidden" name="search_start" value="search_start">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="kt-font-xl">積日指定
                                        </label>
                                        <div class="row">
                                            <div class="col-xl-5">
                                                <div class="input-group">
                                                <input type="text" class="col form-control kt-font-xl input_style" data-date-format="yyyy-mm-dd" id="kt_datepicker_1" name="loading_start">
                                                </div>
                                            </div>
                                            <div class="col-xl-1 text-center kt-font-xl">
                                                <label class="kt-font-xl mt-3">~
                                                </label>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="input-group">
                                                <input type="text" class="col form-control kt-font-xl input_style" data-date-format="yyyy-mm-dd" id="kt_datepicker_1" name="loading_end">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-11">
                                                <label class="kt-font-xl">積地
                                                </label>
                                                <div class="box_left form-control kt-font-xl input_style" id="box_left">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="kt-font-xl ml-5">降日指定
                                        </label>
                                        <div class="row">
                                            <div class="col-xl-5 ml-5">
                                                <div class="input-group">
                                                <input type="text" class="col form-control kt-font-xl input_style" data-date-format="yyyy-mm-dd" id="kt_datepicker_1" name="drop_start">
                                                </div>
                                            </div>
                                            <div class="col-xl-1 text-center kt-font-xl">
                                                <label class="kt-font-xl mt-3">~
                                                </label>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="input-group">
                                                <input type="text" class="col form-control kt-font-xl input_style" data-date-format="yyyy-mm-dd" id="kt_datepicker_1" name="drop_end">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xl-11 ml-5">
                                                <label class="kt-font-xl">降地
                                                </label>
                                                <div class="box_right form-control kt-font-xl input_style" id="box_right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @include('includes.map')
                        <div class="kt-portlet__content text-dark">
                            <div class="form-group text-center mt-4">
                                <label class="form-label kt-font-xl">さらに詳しい条件を選択</label>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label kt-font-xl">車輌</label>
                                <div class="col-10 mt-1">
                                    <div class="kt-radio-inline">
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="truck" value="15t">15t
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="truck" value="10t">10t
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="truck" value="7t">7t
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="truck" value="4t">4t
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="truck" value="2t">2t
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="truck" value="small">軽
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="truck" value="trailer">トレーラー
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label kt-font-xl">種類</label>
                                <div class="col-10 mt-1">
                                    <div class="kt-radio-inline">
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="type" value="ウイング">ウイング
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="type" value="箱">箱
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="type" value="平">平
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="type" value="ユニック">ユニック
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="type" value="ウイング・箱">ウイング・箱
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg mb-4">
                                            <input type="radio" name="type" value="ウイング・平">ウイング・平
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="type" value="平・ユニック">平・ユニック
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="type" value="その他">その他
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-text kt-text--brand kt-font-lg">
                                            <input type="text" class="form-control kt-font-xl input_style" name="othertype">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-2 col-form-label kt-font-xl">指定条件1</label>
                                <div class="col-10">
                                    <div class="kt-radio-inline">
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond1" value="高床">高床
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond1" value="中低床">中低床
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond1" value="低床">低床
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond1" value="フルワイド">フルワイド
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond1" value="セミワイド">セミワイド
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond1" value="標準">標準
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond1" value="ロング">ロング
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond1" value="ショート">ショート
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!--end::Form-->
                            <!--begin::Form-->
                            <form class="kt-form mt-5">
                                <div class="form-group row">
                                    <label class="col-2 col-form-label kt-font-xl">指定条件2</label>
                                    <div class="col-10">
                                        <div class="kt-checkbox-inline">
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="総輪エアサス">総輪エアサス
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="後輪エアサス">後輪エアサス
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="エアサスゲート">エアサスゲート
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="アルミ">アルミ
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="幌">幌
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="パワーゲート">パワーゲート
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg mb-4">
                                            <input type="radio" name="spec_cond2" value="フラット">フラット
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="スタンション">スタンション
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="ジョルダー">ジョルダー
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="冷凍">冷凍
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        <label class="kt-checkbox kt-checkbox--brand kt-font-lg">
                                            <input type="radio" name="spec_cond2" value="冷蔵">冷蔵
                                            <span class="bg-white border-dark"></span>
                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                            <!--begin::Form-->

                            <div class="form-group row mb-5 mt-5">
                                <button class="btn btn-primary first_time_btn custom-btn" style="width: 300px; height: 80px; border-radius: 10px 10px">検 &nbsp 索</button>
                            </div>

                            <!--end::Form-->
                        </div>
                    </form>
                </div>
            </div>
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
