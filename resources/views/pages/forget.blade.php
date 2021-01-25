@extends('layouts.app')

@section('content')
<div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
    @include('includes.info')
    <div class="kt-portlet__body ask_sign">
    <div  class = "ask-sign-title kt-align-center">
        パスワードをお忘れの方
        <img class="kt-widget7__img member-icon" src="{{asset('media/img/member_icon.png')}}" alt="">
    </div>
    <div  class = "required-sign kt-align-right">
        <i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i>必須
    </div>
    <!--begin::Portlet-->
    <div class="ask-sign-body">

        <!--begin::Form-->
        <form class="kt-form" action="/forget" method="post">
            {{ csrf_field() }}
            <div class="kt-portlet__body form-check">
              @if($errors->any())
                  <h6 style="color:#e96565">入力した内容に不備がございます。</h6>
              @endif
                <div class="form-group">
                    <label>御社名</label>
                        <div class="input-group row">
                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                            <input type="text" name="corp_name" id="corp_name" class="form-control" aria-describedby="basic-addon1" value="{{old('corp_name')}}">
                        </div>
                        @if ($errors->has("corp_name"))
                          <h6 style="color:#e96565">
                          {{$errors->first("corp_name")}}
                          </h6>
                        @endif
                        <div style="border-top: 1px solid  #d9d9d9; margin-top: 26px"></div>
                </div>
                <div class="form-group">
                    <label>ご担当者様</label>
                    <div class="input-group row">
                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                        <input type="text" class="form-control" id="hello" name="hello" aria-describedby="basic-addon1" value="{{old('hello')}}">
                    </div>
                    @if ($errors->has("hello"))
                      <h6 style="color:#e96565">
                      {{$errors->first("hello")}}
                      </h6>
                    @endif
                    <div style="border-top: 1px solid  #d9d9d9; margin-top: 26px"></div>
                </div>

                <div class="form-group">
                    <label>TEL</label>
                    <div class="input-group row">
                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                        <input type="text" class="form-control" id="tel" name="tel" aria-describedby="basic-addon1" value="{{old('tel')}}">
                    </div>
                    @if ($errors->has("tel"))
                      <h6 style="color:#e96565">
                      {{$errors->first("tel")}}
                      </h6>
                    @endif
                    <div style="border-top: 1px solid  #d9d9d9; margin-top: 26px"></div>
                </div>

                <div class="form-group">
                    <label>メールアドレス</label>
                    <div class="input-group row">
                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                            <input type="email" class="form-control" id="email_address" name="email_address" placeholder="(例) sample@abcd.co.jp" aria-describedby="basic-addon2" value="{{old('email_address')}}">
                    </div>
                    @if ($errors->has("email_address"))
                      <h6 style="color:#e96565">
                      {{$errors->first("email_address")}}
                      </h6>
                    @endif
                </div>

                <div class="kt-form__actions kt-align-center">
                    <div><button type="submit" class="reset btn">送信内容確認</button></div>

                </div>
            </div>
        </form>

        <!--end::Form-->
    </div>
    <!--end::Portlet-->
<!--end::Portlet-->
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
