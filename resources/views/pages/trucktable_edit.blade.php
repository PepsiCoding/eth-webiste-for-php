@extends('layouts.app')

@section('content')
<div class="kt-portlet kt-portlet--height-fluid kt-current_info">
    <div class="kt-portlet__body">
        <div class="kt-widget5__content">
            <div class="row">
                <div class="col-4 text-right"></div>
                <div class="col-4 text-center">
                    <h2 class="kt-widget5__normal text-dark"><img src="{{asset('media/img/freight.png')}}" class="mr-3">
                        空車情報新規修正</h2>
                </div>
                <div class="col-4 text-right mt-4">

                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body bg-grey text-dark">
        <div class="kt-form mt-5">
            <div class="kt-portlet__body">
                <form class="kt-form form_style" action="/emptyTruck/{{$edit_data->id}}/update" method="post">
                    @csrf
                    <input type="hidden" name="emptyplaceSpec" value="{{$edit_data->emptycar_space}}">
                    <input type="hidden" name="beginplace" value="{{$edit_data->land_pos_loading}}">
                    <input type="hidden" name="endplace" value="{{$edit_data->land_pos_drop}}">
                    <div class="form-group">
                        <label class="kt-checkbox kt-checkbox--brand kt-font-xl text-dark">
                            <input type="checkbox" name="emergency_case">緊急案件
                            <span class="bg-white border-dark"></span>
                        </label>
                        <label class="form-group kt-font-xl text-dark ml-5">
                            ※大至急手配しなくてはいけない案件の場合はチェックしてください。
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group mr-xl-5">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl"><i class="fa fa-circle icon mt-n3" style="font-size:11px; color:#ff6600"></i>空車日時
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="col form-control kt-font-xl input_style" data-date-format="yyyy-mm-dd" id="kt_datepicker_1" name="emptycar_date" value="{{$edit_data->emptycar_date}}">
                                                @if ($errors->has("emptycar_date"))
                                                <h5 style="color:#e96565">{{$errors->first("emptycar_date")}}</h5>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl">時間
                                            </label>
                                            <select class="col form-control input_style kt-font-xl" id="emtp" name="emptycar_time">
                                                <option value="0" {{$edit_data->emptycar_time === '0' ? 'selected' : '' }}>0時</option>
                                                <option value="1" {{$edit_data->emptycar_time === '1' ? 'selected' : '' }}>1時</option>
                                                <option value="2" {{$edit_data->emptycar_time === '2' ? 'selected' : '' }}>2時</option>
                                                <option value="3" {{$edit_data->emptycar_time === '3' ? 'selected' : '' }}>3時</option>
                                                <option value="4" {{$edit_data->emptycar_time === '4' ? 'selected' : '' }}>4時</option>
                                                <option value="5" {{$edit_data->emptycar_time === '5' ? 'selected' : '' }}>5時</option>
                                                <option value="6" {{$edit_data->emptycar_time === '6' ? 'selected' : '' }}>6時</option>
                                                <option value="7" {{$edit_data->emptycar_time === '7' ? 'selected' : '' }}>7時</option>
                                                <option value="8" {{$edit_data->emptycar_time === '8' ? 'selected' : '' }}>8時</option>
                                                <option value="9" {{$edit_data->emptycar_time === '9' ? 'selected' : '' }}>9時</option>
                                                <option value="10" {{$edit_data->emptycar_time === '10' ? 'selected' : '' }}>10時</option>
                                                <option value="11" {{$edit_data->emptycar_time === '11' ? 'selected' : '' }}>11時</option>
                                                <option value="12" {{$edit_data->emptycar_time === '12' ? 'selected' : '' }}>12時</option>
                                                <option value="13" {{$edit_data->emptycar_time === '13' ? 'selected' : '' }}>13時</option>
                                                <option value="14" {{$edit_data->emptycar_time === '14' ? 'selected' : '' }}>14時</option>
                                                <option value="15" {{$edit_data->emptycar_time === '15' ? 'selected' : '' }}>15時</option>
                                                <option value="16" {{$edit_data->emptycar_time === '16' ? 'selected' : '' }}>16時</option>
                                                <option value="17" {{$edit_data->emptycar_time === '17' ? 'selected' : '' }}>17時</option>
                                                <option value="18" {{$edit_data->emptycar_time === '18' ? 'selected' : '' }}>18時</option>
                                                <option value="19" {{$edit_data->emptycar_time === '19' ? 'selected' : '' }}>19時</option>
                                                <option value="20" {{$edit_data->emptycar_time === '20' ? 'selected' : '' }}>20時</option>
                                                <option value="21" {{$edit_data->emptycar_time === '21' ? 'selected' : '' }}>21時</option>
                                                <option value="22" {{$edit_data->emptycar_time === '22' ? 'selected' : '' }}>22時</option>
                                                <option value="23" {{$edit_data->emptycar_time === '23' ? 'selected' : '' }}>23時</option>
                                                <option value="30" {{$edit_data->emptycar_time === '午前' ? 'selected' : '' }}>午前</option>
                                                <option value="31" {{$edit_data->emptycar_time === '午後' ? 'selected' : '' }}>午後</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mr-xl-5">
                                    <label class="kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>積可能地
                                    </label>
                                    <div class="input-group">
                                        <div class="box_left form-control kt-font-xl input_style" id="box_left">
                                            @php
                                            $first_filter_place = substr($edit_data->land_pos_loading, 0, -1);
                                            $landPosLoadingArray = explode(',' , $first_filter_place);
                                            @endphp
                                            @foreach($landPosLoadingArray as $arraydata)
                                            <input type="button" id="{{'pref' . $loop->iteration }}" value="{{$arraydata}}" class="btn btn-danger mb-3 mr-3">
                                            @endforeach
                                        </div>
                                    </div>
                                    @if ($errors->has("beginplace"))
                                        <h5 style="color:#e96565">{{$errors->first("beginplace")}}</h5>
                                    @endif
                                </div>
                                <div class="form-group mr-xl-5">
                                    <div class="row mt-5">
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl"><i class="fa fa-circle icon mt-n3" style="font-size:11px; color:#ff6600"></i>降日時
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="col form-control kt-font-xl input_style" data-date-format="yyyy-mm-dd" id="kt_datepicker_2" name="drop_date" value="{{$edit_data->drop_date}}">
                                                @if ($errors->has("drop_date"))
                                                    <h5 style="color:#e96565">{{$errors->first("drop_date")}}</h5>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl">時間
                                            </label>
                                            <select class="col form-control input_style kt-font-xl" id="emptycar_time" name="emptycar_time">
                                                <option value="0" {{$edit_data->emptycar_time === '0' ? 'selected' : '' }}>0時</option>
                                                <option value="1" {{$edit_data->emptycar_time === '1' ? 'selected' : '' }}>1時</option>
                                                <option value="2" {{$edit_data->emptycar_time === '2' ? 'selected' : '' }}>2時</option>
                                                <option value="3" {{$edit_data->emptycar_time === '3' ? 'selected' : '' }}>3時</option>
                                                <option value="4" {{$edit_data->emptycar_time === '4' ? 'selected' : '' }}>4時</option>
                                                <option value="5" {{$edit_data->emptycar_time === '5' ? 'selected' : '' }}>5時</option>
                                                <option value="6" {{$edit_data->emptycar_time === '6' ? 'selected' : '' }}>6時</option>
                                                <option value="7" {{$edit_data->emptycar_time === '7' ? 'selected' : '' }}>7時</option>
                                                <option value="8" {{$edit_data->emptycar_time === '8' ? 'selected' : '' }}>8時</option>
                                                <option value="9" {{$edit_data->emptycar_time === '9' ? 'selected' : '' }}>9時</option>
                                                <option value="10" {{$edit_data->emptycar_time === '10' ? 'selected' : '' }}>10時</option>
                                                <option value="11" {{$edit_data->emptycar_time === '11' ? 'selected' : '' }}>11時</option>
                                                <option value="12" {{$edit_data->emptycar_time === '12' ? 'selected' : '' }}>12時</option>
                                                <option value="13" {{$edit_data->emptycar_time === '13' ? 'selected' : '' }}>13時</option>
                                                <option value="14" {{$edit_data->emptycar_time === '14' ? 'selected' : '' }}>14時</option>
                                                <option value="15" {{$edit_data->emptycar_time === '15' ? 'selected' : '' }}>15時</option>
                                                <option value="16" {{$edit_data->emptycar_time === '16' ? 'selected' : '' }}>16時</option>
                                                <option value="17" {{$edit_data->emptycar_time === '17' ? 'selected' : '' }}>17時</option>
                                                <option value="18" {{$edit_data->emptycar_time === '18' ? 'selected' : '' }}>18時</option>
                                                <option value="19" {{$edit_data->emptycar_time === '19' ? 'selected' : '' }}>19時</option>
                                                <option value="20" {{$edit_data->emptycar_time === '20' ? 'selected' : '' }}>20時</option>
                                                <option value="21" {{$edit_data->emptycar_time === '21' ? 'selected' : '' }}>21時</option>
                                                <option value="22" {{$edit_data->emptycar_time === '22' ? 'selected' : '' }}>22時</option>
                                                <option value="23" {{$edit_data->emptycar_time === '23' ? 'selected' : '' }}>23時</option>
                                                <option value="30" {{$edit_data->emptycar_time === '午前' ? 'selected' : '' }}>午前</option>
                                                <option value="31" {{$edit_data->emptycar_time === '午後' ? 'selected' : '' }}>午後</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mr-xl-5">
                                    <label class="kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>降可能地
                                    </label>
                                    <div class="input-group">
                                        <div class="box_right form-control kt-font-xl input_style" id="box_right">
                                            @php
                                            $second_filter_place = substr($edit_data->land_pos_drop, 0, -1);
                                            $landPosDropArray = explode(',' , $second_filter_place);
                                            @endphp
                                            @foreach($landPosDropArray as $arraydata)
                                                <input type="button" id="{{'area' . $loop->iteration }}" value="{{$arraydata}}" class="btn btn-danger mb-3 mr-3">
                                            @endforeach
                                        </div>
                                    </div>
                                    @if ($errors->has("endplace"))
                                        <h5 style="color:#e96565">{{$errors->first("endplace")}}</h5>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group ml-xl-5">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl"><i class="fa fa-circle icon mt-n3" style="font-size:11px; color:#ff6600"></i>空車地
                                            </label>
                                            <div class="input-group">
                                                <div class="box_empty_spec form-control kt-font-xl input_style" id="box_empty_spec" style="height:60px">
                                                    <input type="button" id="emptyspec" class="btn btn-danger" value="{{$edit_data->emptycar_space}}">
                                                </div>
                                            </div>
                                            @if ($errors->has("emptyplaceSpec"))
                                                    <h5 style="color:#e96565">{{$errors->first("emptyplaceSpec")}}</h5>
                                                @endif
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="kt-font-xl">市区町村
                                            </label>
                                            <div class="input-group">
                                                <input type="text" class="col form-control kt-font-xl input_style" name="emptycar_city" value="{{$edit_data->emptycar_city}}">
                                            </div>
                                                @if ($errors->has("emptycar_city"))
                                                    <h5 style="color:#e96565">{{$errors->first("emptycar_city")}}</h5>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('includes.map')
                    <div class="kt-portlet__content text-dark">
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>降可能地</label>
                            <div class="col-10 mt-3">
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_inf" value="指定なし" {{$edit_data->vehicle_inf === '指定なし' ? "checked='checked'" : ''}}>指定なし
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" {{$edit_data->vehicle_inf === '15t' ? "checked='checked'" : ''}} name="vehicle_inf" value="15t">15t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_inf" {{$edit_data->vehicle_inf === '10t' ? "checked='checked'" : ''}} value="10t">10t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_inf" {{$edit_data->vehicle_inf === '7t' ? "checked='checked'" : ''}} value="7t">7t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_inf" {{$edit_data->vehicle_inf === '4t' ? "checked='checked'" : ''}} value="4t">4t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_inf" {{$edit_data->vehicle_inf === '2t' ? "checked='checked'" : ''}} value="2t">2t
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_inf" {{$edit_data->vehicle_inf === '軽' ? "checked='checked'" : ''}} value="軽">軽
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_inf" {{$edit_data->vehicle_inf === 'トレーラー' ? "checked='checked'" : ''}} value="トレーラー">トレーラー
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>種類1</label>
                            <div class="col-10 mt-3">
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type1" value="指定なし" {{$edit_data->vehicle_type1 === '指定なし' ? "checked='checked'" : ''}}>指定なし
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" checked="checked" name="vehicle_type1" value="ウイング" {{$edit_data->vehicle_type1 === 'ウイング' ? "checked='checked'" : ''}}>ウイング
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type1" value="箱" {{$edit_data->vehicle_type1 === '箱' ? "checked='checked'" : ''}}>箱
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type1" value="平" {{$edit_data->vehicle_type1 === '平' ? "checked='checked'" : ''}}>平
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type1" value="ユニック" {{$edit_data->vehicle_type1 === 'ユニック' ? "checked='checked'" : ''}}>ユニック
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type1" value="ウイング・箱" {{$edit_data->vehicle_type1 === 'ウイング・箱' ? "checked='checked'" : ''}}>ウイング・箱
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                                        <input type="radio" name="vehicle_type1" value="ウイング・平" {{$edit_data->vehicle_type1 === 'ウイング・平' ? "checked='checked'" : ''}}>ウイング・平
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type1" value="平・ユニック" {{$edit_data->vehicle_type1 === '平・ユニック' ? "checked='checked'" : ''}}>平・ユニック
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type1" value="その他" {{$edit_data->vehicle_type1 === 'その他' ? "checked='checked'" : ''}}>その他
                                        <span></span>
                                    </label>
                                    <label class="kt-text kt-text--brand kt-font-lg">
                                        <input type="text" class="form-control kt-font-xl input_style" name="typeOther" value="{{$edit_data->vehicle_type1_content}}">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl">種類2</label>
                            <div class="col-10">
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type2" {{$edit_data->vehicle_type2 === '指定なし' ? "checked = 'checked'": ''}} value="指定なし">指定なし
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" checked="checked" name="vehicle_type2" {{$edit_data->vehicle_type2 === '高床' ? "checked = 'checked'": ''}} value="高床">高床
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type2" {{$edit_data->vehicle_type2 === '中低床' ? "checked = 'checked'": ''}} value="中低床">中低床
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type2" {{$edit_data->vehicle_type2 === '低床' ? "checked = 'checked'": ''}} value="低床">低床
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type2" {{$edit_data->vehicle_type2 === 'フルワイド' ? "checked = 'checked'": ''}} value="フルワイド">フルワイド
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type2" {{$edit_data->vehicle_type2 === 'セミワイド' ? "checked = 'checked'": ''}} value="セミワイド">セミワイド
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                                        <input type="radio" name="vehicle_type2" {{$edit_data->vehicle_type2 === '標準' ? "checked = 'checked'": ''}} value="標準">標準
                                        <span></span>
                                    </label><br>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type2" {{$edit_data->vehicle_type2 === 'ロング' ? "checked = 'checked'": ''}} value="ロング">ロング
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type2" {{$edit_data->vehicle_type2 === 'ショート' ? "checked = 'checked'": ''}} value="ショート">ショート
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl">種類3</label>
                            <div class="col-10">
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === '指定なし' ? "checked = 'checked'" : ''}} value="指定なし">指定なし
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" checked="checked" name="vehicle_type3" {{$edit_data->vehicle_type3 === '総輪エアサス' ? "checked = 'checked'" : ''}} value="総輪エアサス">総輪エアサス
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === '後輪エアサス' ? "checked = 'checked'" : ''}} value="後輪エアサス">後輪エアサス
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === 'エアサスゲート' ? "checked = 'checked'" : ''}} value="エアサスゲート">エアサスゲート
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === 'アルミ' ? "checked = 'checked'" : ''}} value="アルミ">アルミ
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === '幌' ? "checked = 'checked'" : ''}} value="幌">幌
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg mb-4">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === 'パワーゲート' ? "checked = 'checked'" : ''}} value="パワーゲート">パワーゲート
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === 'フラット' ? "checked = 'checked'" : ''}} value="フラット">フラット
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === 'スタンション' ? "checked = 'checked'" : ''}} value="スタンション">スタンション
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === 'ジョルダー' ? "checked = 'checked'" : ''}} value="ジョルダー">ジョルダー
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === '冷凍' ? "checked = 'checked'" : ''}} value="冷凍">冷凍
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--brand kt-font-lg">
                                        <input type="radio" name="vehicle_type3" {{$edit_data->vehicle_type3 === '冷蔵' ? "checked = 'checked'" : ''}} value="冷蔵">冷蔵
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl">備考</label>
                            <div class="col-10 mt-3">
                                <textarea class="form-control kt-font-lg input_style" spellcheck="true" rows="7" name="bigo">{{isset($edit_data->bigo) ? $edit_data->bigo : ''}}</textarea>
                                <label class="col-form-label kt-font-xl" style="color: #ff6600">※備考には金額、連絡先等は明記しないでください</label>
                            </div>
                        </div>
                        <!--end::Form-->
                        <!--begin::Form-->
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>電話番号</label>
                            <div class="col-10 mt-2">
                                <input class="col form-control kt-font-xl input_style" name="phone_number" value="{{$edit_data->phone_number}}">
                                @if ($errors->has("phone"))
                                    <h5 style="color:#e96565">{{$errors->first("phone_number")}}</h5>
                                @endif
                            </div>
                        </div>
                        <!--end::Form-->
                        <!--begin::Form-->
                        <div class="form-group row">
                            <label class="col-2 col-form-label kt-font-xl"><i class="fa fa-circle icon" style="font-size:11px; color:#ff6600"></i>担当者</label>
                            <div class="col-10 mt-2">
                                <input class="col form-control kt-font-xl input_style" name="person_charge" value="{{$edit_data->person_charge}}">
                                @if ($errors->has("person_charge"))
                                    <h5 style="color:#e96565">{{$errors->first("person_charge")}}</h5>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-5 mt-5">
                            <button class="btn btn-primary first_time_btn custom-btn" style="max-width: 300px; height: 80px; border-radius: 10px 10px">登錄内容確認</button>
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
