@extends('.pages.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1>Đăng ký tài khoản tìm việc</h1>
                    <span>Hàng ngàn việc làm IT đang chờ đón bạn Apply</span>
                </div>
            </div>
        </div>
    </div>
    <div class="tr-account section-padding">
        <div class="container text-center">
            <div class="user-account">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="seeker">
                        <div class="account-content">
                            <form action="{{URL::to('/save-signup')}}" class="tr-form" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Họ Và Tên :</label>
                                    <input type="text" class="form-control" placeholder="..." name="user_name">
                                    @if($errors->has('user_name'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_name')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Số điện thoại :</label>
                                    <input type="text" class="form-control" placeholder="..." name="user_phone">
                                    @if($errors->has('user_phone'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_phone')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Email :</label>
                                    <input type="email" class="form-control" placeholder=" ..." name="user_email">
                                    @if($errors->has('user_email'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_email')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Mật khẩu :</label>
                                    <input type="password" class="form-control" placeholder="..."
                                           name="user_password">
                                    @if($errors->has('user_password'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_password')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Nhập lại mật khẩu :</label>
                                    <input type="password" class="form-control" placeholder="..." name="password_confirm">
                                    @if($errors->has('password_confirm'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('password_confirm')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Địa chỉ :</label>
                                    <input type="text" class="form-control" placeholder="..." name="address">
                                    @if($errors->has('address'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('address')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Sinh nhật :</label>
                                    <input type="date" class="form-control" placeholder="..." name="birthday">
                                    @if($errors->has('birthday'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('birthday')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Ngôn ngữ  :</label>
                                    <input type="text" class="form-control" placeholder="..." name="language">
                                    @if($errors->has('language'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('language')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Khu vực sinh sống :</label>
                                    <select class="form-control" name="id_zone">
                                        @foreach($zones as $zo)
                                        <option value="{{$zo->id}}">{{$zo->name_zone}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">ĐĂNG KÝ</button>
                            </form>
                            <div class="new-user text-center">
                                <span>Bạn đã có tài khoản? <a href="{{URL::to('/signin-user')}}" style="color: cornflowerblue;font-weight: bold">Đăng nhập</a> </span>
                            </div>
                        </div>
                    </div>

{{--                    End-from-user--}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endsection
