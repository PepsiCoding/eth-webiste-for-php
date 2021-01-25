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
    <div class="kt-portlet" style="background-color: #efefef; color: #000;font-size: 15px;font-weight: bold;border-radius: 5px;">
        <div class="text-center mt-5" style="color: #000;">
            <h3><b>入力フォーム</b></h3>
        </div>
        <!--begin::Form-->
        <form class="kt-form">
            <div class="kt-portlet__body">
                <div class="form-group ">
                    <label class="font-weight-bolder">御社名</label>
                    <input type="email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">フリガナ</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <div class="form-group">
                    <label class="font-weight-bolder">ご住所郵便番号</label>
                    <input type="email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">ご担当者様</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">フリガナ</label>
                    <input type="email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">TEL</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">FAX</label>
                    <input type="email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">メールアドレス</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder">パスワード</label>
                    <input type="email" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="exampleInputPassword1">パスワード確認用</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>


                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label class="font-weight-bolder">紹介先</label>
                            <input type="text" class="form-control" name="postcode" placeholder="" value="" aria-describedby="postcode-error" aria-invalid="false">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label class="font-weight-bolder">「ロジとら」をどこで知りましたか？</label>
                            <input type="text" class="form-control" name="city" placeholder="" value="" aria-describedby="city-error" aria-invalid="false">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-2" style="color: #000;">
                <h5><b>プルダウン電話営業・FAX営業・メール広告・紹介・新聞広告・その他利用規約をご確認の<br>上、「登録内容確認」を教えてください。登録内容確認のボタン</b></h5>
            </div>
            <div class="text-center mt-5" style="color: #000;">
                <h5><b>操作不明点がございましたら、お気軽にお問い合わせください。<br> 受付時間8:00〜18:00<br>0120-050-570</b></h5>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions d-flex justify-content-center flex-wrap">
                    <button class="btn first_time_btn">登録内容確認</button>
                </div>
            </div>
            <div class="kt-space-40"></div>
            <div class="kt-space-20"></div>
        </form>

        <!--end::Form-->
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
