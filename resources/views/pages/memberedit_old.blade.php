@extends('layouts.app')

@section('content')
<div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">
    @include('includes.info')
    <div class="kt-portlet__body ask_sign">
    <div  class = "ask-sign-title kt-align-center">
        会員情報修正登録
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
                <div class="form-group">
                    <label>問合番号</label>
                    <div class="input-group row">
                        <div class="col-lg-3">
                            <input type="text" name="number" id="inquiry_number" class="form-control" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>御社名</label>
                        <div class="input-group row">
                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                            <input type="text" name="first_corpName" id="first_corpName" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group row">
                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                            <input type="text" name="second_corpName" id="second_corpName" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                </div>

                <div class="form-group">
                    <label>ご住所</label>
                    <div class="input-group row">
                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                        <input type="text" name="fist_address" id="first_address" class="col-3 form-control" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group row">
                        <span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span>
                        <div class = "col">
                            <div class="row ml-n4">
                                <div class = "col-6">
                                    <select class="form-control" id="second_address" name="second_address">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                                <div class = "col-6">
                                    <input type="text" class="form-control" name="third_address" id="third_address" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-group row">
                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                        <input type="text" class="form-control" name="furth_address" id="furth" aria-describedby="basic-addon1">
                    </div>
                    <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                </div>
                <div class="form-group">
                    <label>ご担当者様</label>
                        <div class="input-group row">
                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                            <input type="text" class="form-control" id="first_hello" name="first_hello" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group row">
                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                            <input type="text" class="form-control" id="first_hello" name="first_hello" aria-describedby="basic-addon1">
                        </div>
                        <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                </div>

                <div class="form-group">
                    <label>TEL</label>
                    <div class="input-group row">
                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                        <input type="text" class="form-control" id="tel" name="tel" aria-describedby="basic-addon1">
                    </div>
                    <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                    <div class="kt-space-40"></div>
                    <label>FAX</label>
                    <div class="input-group row">
                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                        <input type="text" class="form-control" id="fax" name="fax" aria-describedby="basic-addon1">
                    </div>
                    <div style="border-top: 1px solid #000000; margin-top: 26px"></div>
                </div>

                <div class="form-group">
                    <label>メールアドレス</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="(例) sample@abcd.co.jp" aria-describedby="basic-addon2">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <label>パスワード</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <label class="">パスワード（確認用</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span><i class="fa fa-circle icon" style="font-size:11px;color:#ff6600"></i></span></div>
                            <input type="password" id="confirm_pwd" name="confirm_pwd" class="form-control">
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <label>紹介先</label>
                        <select class="form-control" id="contact_us" name="contact_us">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label class="">ロジとらをどこで知りましたか？</label>
                            <select class="form-control" id="meeted_place" name="meeted_place">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                    </div>
                </div>

                <div class="kt-form__actions kt-align-center">
                    <div><button type="submit" class="reset btn">登錄內容確認</button></div>

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
