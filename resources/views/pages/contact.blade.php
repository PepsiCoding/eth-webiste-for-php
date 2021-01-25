@extends('layouts.app')

@section('content')
  <!--begin:: Widgets/Blog-->
  <div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
    @include('includes.info')
    <div class="kt-portlet__body ask_sign">
            <div  class = "ask-sign-title kt-align-center">
                お問い合わせ
                    <img class="kt-widget7__img tooltip_sty" src="{{asset('media/img/contact-1.png')}}" alt="">
            </div>
            <div  class = "required-sign kt-align-right">
                <i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span>必須
            </div>
            <!--begin::Portlet-->
            <div class="ask-sign-body">

                <!--begin::Form-->
                <form class="kt-form">
                    <div class="kt-portlet__body form-check">

                        <div class="form-group">
                            <label>ご氏名</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                    <input type="text" class="form-control" placeholder="(例) 露地虎一郎" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                    <input type="text" class="form-control" placeholder="(例) ロジとら タロウ" aria-describedby="basic-addon1">
                                </div>
                                <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">御社名</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                <input type="text" class="form-control" placeholder="(例) 株式会社ロジとら" aria-describedby="basic-addon2">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                <input type="text" class="form-control" placeholder="(例) カブシキガイシャロジとら" aria-describedby="basic-addon2">
                            </div>
                            <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                        </div>

                        <div class="form-group">

                            <label> ご住所 </label>
                            <div class="input-group row">
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" placeholder="郵便番号（ハイフンなし）">
                                </div>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control address" placeholder="(例) 〒370-1207 群⾺県⾼崎市">

                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control address" placeholder="(例) 綿貫町 1475-4 ⾼南 F">
                            </div>
                            <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputMail">メールアドレス</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                                    <input type="text" class="form-control" placeholder="(例) sample@abcd.co.jp" aria-describedby="basic-addon2">
                            </div>
                            <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputMail">TEL</label>
                            <div class="input-group">
                                <input type="email" class="form-control address" placeholder="(例) 0120 - 050 - 570">
                            </div>
                            <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                        </div>

                        <div class="form-group form-group-last">
                            <label for="exampleTextarea">お問い合わせ内容</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="こちらにお問い合わせ内容をご記入ください。"></textarea>
                        </div>
                        <div style="border-top: 0px  #000000; margin-top: 46px"></div>
                        <div class="kt-form__actions kt-align-center">
                            <div class = "conculusion ">利用規約をご確認の上、「送信内容確認」を押してください。</div>
                            <div style="border-top: 0px  #000000; margin-top: 15px"></div>
                            <div><button type="reset" class="reset btn">送信内容確認</button></div>

                        </div>
                    </div>
                </form>

                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
        <!--end:: Widgets/Blog-->
    </div>
@endsection

@section('sidebar')
  @auth
    @include('includes.sidebar02')
  @else
    @include('includes.sidebar01')
  @endauth
@endsection
