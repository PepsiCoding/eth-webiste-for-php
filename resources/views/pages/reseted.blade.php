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
          <div class="kt-portlet__body form-check" style="font-size:22px">
            <div class="form-group">
                <label>問合番号</label>
                    <div class="input-group row">
                        {{$user->member_id}}
                    </div>
                    <div style="border-top: 1px solid  #d9d9d9; margin-top: 26px"></div>
            </div>
              <div class="form-group">
                  <label>御社名</label>
                      <div class="input-group row">
                          {{$user->corp_name}}
                      </div>
                      <div style="border-top: 1px solid  #d9d9d9; margin-top: 26px"></div>
              </div>
              <div class="form-group">
                  <label>ご担当者様</label>
                  <div class="input-group row">
                      {{$user->hello}}
                  </div>
                  <div style="border-top: 1px solid  #d9d9d9; margin-top: 26px"></div>
              </div>

              <div class="form-group">
                  <label>TEL</label>
                  <div class="input-group row">
                      {{$user->tel}}
                  </div>
                  <div style="border-top: 1px solid  #d9d9d9; margin-top: 26px"></div>
              </div>

              <div class="form-group">
                  <label>メールアドレス</label>
                  <div class="input-group row">
                      {{$user->email_address}}
                  </div>
                  <div style="border-top: 1px solid  #d9d9d9; margin-top: 26px"></div>
              </div>

              <div class="form-group">
                  <label>パスワード</label>
                  <div class="input-group row">
                      {{$password}}
                  </div>
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
