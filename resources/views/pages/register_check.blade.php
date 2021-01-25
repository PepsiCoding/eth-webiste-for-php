@extends('layouts.app')

@section('content')
<!--begin:: Widgets/Blog-->
    <div class="kt-current_info__wrapper" style="padding-top: 50px;">
        <div class="kt-current_info__text1 kt-align-center">
            無料会員登録
                <img alt="Logo" style= "vertical-align: sub;" src="{{asset('media/img/arrow-man.png')}}" class="kt-header__brand-logo-sticky" />
            <p class="kt-font-xl kt-font-boldest"> 会員登録すると、明日以降の全ての情報が閲覧可能</p>
        </div>
    </div>
    <div class="kt-portlet pl-5" style="background-color: #efefef; color: #000;font-size: 15px;font-weight: bold;border-radius: 5px;">
        <div class="kt-space-50"></div>

        <div class="row mt-5 mb-5">

            <div>
                <span>データに同意する場合は、ボタンをクリックしてください。</span>
            </div>
        </div>
        <br>
        <div class="kt-space-50"></div>
        <div class="row">

            <div class="col-4">
                <label>会員ID:</label>
                <span>{{$userdata->member_id}}</span>
            </div>
            <div class="col-4">
                <label>御社名:</label>
                <span>{{$userdata->corp_name}}</span>
            </div>
            <div>
                <label>フリガナ:</label>
                <span>{{$userdata->second_input}}</span>
            </div>
        </div>
        <div class="kt-space-50"></div>
        <div class="row">

            <div class="col-4">
                <label>ご住所郵便番号:</label>
                <span>{{$userdata->post_address}}</span>
            </div>
            <div class="col-4">
                <label>ご担当者様:</label>
                <span>{{$userdata->hello}}</span>
            </div>
            <div>
                <label>フリガナ:</label>
                <span>{{$userdata->third_input}}</span>
            </div>
        </div>
        <div class="kt-space-50"></div>
        <div class="row">

            <div class="col-4">
                <label>Tel:</label>
                <span>{{$userdata->tel}}</span>
            </div>
            <div class="col-4">
                <label>FAX:</label>
                <span>{{$userdata->fax}}</span>
            </div>
            <div>
                <label>メールアドレス:</label>
                <span>{{$userdata->email_address}}</span>
            </div>
        </div>
        <div class="kt-space-100"></div>
        <div class="row">

            <div class="col-4">
                <label>パスワード:</label>
                <span>{{$userdata->register_pwd}}</span>
            </div>
            <div class="col-4">
                <label>紹介先:</label>
                <span>{{$userdata->contact_address}}</span>
            </div>
            <div>
                <label>「ロジとら」をどこで知りましたか？:</label>
                <span>{{$userdata->meeting_part}}</span>
            </div>
        </div>
        <a href="/">
            <div class="kt-portlet__foot">
                <div class="kt-form__actions d-flex justify-content-center flex-wrap">
                    <button class="btn first_time_btn">同意する</button>
                </div>
            </div>
        </a>
    </div>
<!--end:: Widgets/Blog-->
@endsection

@section('sidebar')
  @auth
    @include('includes.sidebar02')
  @else
    @include('includes.sidebar01')
  @endauth
@endsection
