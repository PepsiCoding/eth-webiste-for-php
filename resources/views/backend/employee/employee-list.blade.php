@extends('backend.master')
@section('site-title')
    ロジとら
@endsection
@section('main-content')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            @if(Session::has('msg'))
                <script>
                    $(document).ready(function(){
                        swal("{{Session::get('msg')}}","", "success");
                    });
                </script>
            @endif
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title bold">メンバー管理
                <hr>
            </h3>
            <!-- END PAGE TITLE-->
            <div class="col-md-8">
                <form method="post" class="form-inline" action="{{route('employee.search')}}">
                    {{csrf_field()}}
                    <input style="color: blue" class="input-small form-control" value="{{$search}}" type="text" name="search" placeholder="検索語を入力">
                    <button class="btn dark" name="filter">検索</button>
                </form>
            </div>
            <br>
            <hr>
            <br>

            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">

                    <div class="portlet box dark">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-users"></i>メンバーリスト
                            </div>

                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_employees">
                                <thead>
                                <tr>
                                    <th class="text-center">
                                        会員ID
                                    </th>
                                    <th class="text-center">
                                        御社名
                                    </th>
                                    <th class="text-center">
                                        ご住所郵便番号
                                    </th>
                                    <th class="text-center">
                                        TEL
                                    </th>
                                    <th class="text-center">
                                        FAX
                                    </th>
                                    <th class="text-center">
                                        メールアドレス
                                    </th>
                                    <th class="text-center">
                                        紹介先
                                    </th>
                                    <th class="text-center">
                                        動作
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employee as $data)
                                <tr id="row">
                                    <td class="text-center">
                                        {{$data->member_id}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->corp_name}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->post_address}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->tel}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->fax}}
                                    </td>
                                    <td class="text-center">
                                        {{$data->email_address}}
                                    </td>

                                    <td class="text-center">
                                        {{$data->contact_address}}
                                    </td>
                                    <td class="text-center">
                                        <a class="btn bg-dark bg-font-dark" data-toggle="modal" href="{{route('employee.update', $data->id)}}" data-target="#myModal{{$data->id}}"><i class="fa fa-edit"></i> 表示/編集</a>

                                        <a class="btn red" style="width: 105px;" href="{{route('employee.delete', $data->id)}}"><i class="fa fa-trash"></i> 削除</a>

                                                        <!-- Modal -->
                                                        <div class="modal fade text-left" id="myModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <form action="{{route('employee.update', $data->id)}}" method="post" class="form-horizontal">
                                                                            {{csrf_field()}}
                                                                            {{method_field('put')}}
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                                                            <h4 class="modal-title">更新</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                                <div class="form-body">
                                                                                    会員ID: <input type="text" value="{{$data->member_id}}" name="member_id" class="form-control"><br>
                                                                                    御社名: <input type="text" value="{{$data->corp_name}}" name="corp_name" class="form-control"><br>
                                                                                    ご住所郵便番号: <input type="text" value="{{$data->post_address}}" name="post_address" class="form-control"><br>
                                                                                    TEL: <input type="text" value="{{$data->tel}}" name="tel" class="form-control"><br>
                                                                                    FAX: <input type="text" value="{{$data->fax}}" name="fax" class="form-control"><br>
                                                                                    メールアドレス: <input type="text" value="{{$data->email_address}}" name="email_address" class="form-control"><br>
                                                                                    紹介先: <input type="text" value="{{$data->contact_address}}" name="contact_address" class="form-control"><br>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">閉める</button>
                                                                                        <button type="submit" class="btn blue-sharp">変更保管</button>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </form>

                                                                    </div>
                                                                    <!-- /.modal-content -->
                                                                </div>
                                                                <!-- /.modal-dialog -->
                                                            </div>                             



                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12 text-center">{{ $employee->links() }}</div>
                            </div>
                        </div>


                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>

        </div>
    </div>
@endsection
