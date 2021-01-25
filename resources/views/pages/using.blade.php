@extends('layouts.app')

@section('content')
    <!--begin:: Widgets/Blog-->
    <div class="kt-portlet kt-portlet--height-fluid kt-current_info">
        <div class="kt-portlet__body">
            <div class="kt-current_info__wrapper">
                <div class="kt-current_info__text1 kt-align-center">
                    <p> はじめて「ロジとら」をご利用になる方はこちら</p>
                    ご利用方法

                        <img alt="Logo" style= "vertical-align: sub;" src="{{asset('media/img/arrow_mail.png')}}" class="kt-header__brand-logo-sticky" />
                </div>
            </div>
            <div class="kt-widget4">
            <div class="kt-widget4__item" style="padding:50px;background-color: #efefef;border-radius: 10px;">
                <div class="kt-widget4__pic kt-widget4__pic--logo kt-sty_widget4__round">
                    <p>Step1</p>
                </div>
                <div class="kt-widget4__info" style="margin-left: 5%;">
                    <a class="kt-widget4__title" style="color:#2c5aa0;font-size:30px;">
                        まずは無料会員登録
                    </a>
                    <p class="kt-widget4__text kt-sty-step1-text-title" style="color: #000;font-size: 18px;">
                        御社名・ご住所などを登録していただきますと、荷物情 <br>報・空車情報の検索、登録システムが無 <br>
                        料でご利用いただけます。
                    </p>
                </div>
                <span class="kt-widget4__number kt-font-brand" style="margin-right: 5%">

                <img src="{{asset('media/img/computer_short_icon.png')}}" style="width:100%" alt="">
                </span>
            </div>
            <div class="kt-widget4__item" style="padding:50px;">
                <div class="kt-widget4__pic kt-widget4__pic--logo kt-sty_widget4__round">
                    <p>Step2</p>
                </div>
                <div class="kt-widget4__info" style="margin-left: 5%;">
                    <a class="kt-widget4__title" style="color:#2c5aa0;font-size:30px;">
                        会員登録が完了すると情報が閲<br>
                        覧可能になります
                    </a>
                    <p class="kt-widget4__text kt-sty-step1-text-title" style="color: #000;font-size: 18px;">
                        荷物・空車の登録、検索が可能になります。
                    </p>
                </div>
                <span class="kt-widget4__number kt-font-brand" style="margin-right: 5%">

                <img src="{{asset('media/img/delivery_car_things.png')}}" style="width:100%" alt="">
                </span>
            </div>
            <div class="kt-widget4__item" style="padding:50px;background-color: #efefef;border-radius: 10px;">
                <div class="kt-widget4__pic kt-widget4__pic--logo kt-sty_widget4__round">
                    <p>Step3</p>
                </div>
                <div class="kt-widget4__info" style="margin-left: 5%;">
                    <a class="kt-widget4__title" style="color:#2c5aa0;font-size:30px;">
                        条件に合う荷物情報・空車情報が<br>
                        ありましたら配車担当者へ
                    </a>
                    <p class="kt-widget4__text kt-sty-step1-text-title" style="color: #000;font-size: 18px;">
                        「ロジとら」のオペレータースタッフが配備、丁寧に御社の<br>
                        御相談にお答え致します。
                    </p>
                </div>
                <span class="kt-widget4__number kt-font-brand" style="margin-right: 5%">

                <img src="{{asset('media/img/delivery_car_empty.png')}}" style="width:100%" alt="">
                </span>
            </div>
            <div class="kt-widget4__item" style="padding:50px;border: none;">
                <div class="kt-widget4__pic kt-widget4__pic--logo kt-sty_widget4__round">
                    <p>Step4</p>
                </div>
                <div class="kt-widget4__info" style="margin-left: 5%;">
                    <a class="kt-widget4__title" style="color:#2c5aa0;font-size:30px;">
                        操作方法がわからない時は、お気軽に<br>
                        ご相談してください。
                    </a>
                </div>
                <span class="kt-widget4__number kt-font-brand" style="margin-right: 5%">

                <img src="{{asset('media/img/communication_man.png')}}" style="width:100%" alt="">
                </span>
            </div>
            </div>
        </div>
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
