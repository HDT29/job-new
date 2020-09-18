@extends('.pages.layout-company')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1 style="font-size: 35px;">ĐĂNG KÝ TÀI KHOẢN DOANH NGHIỆP</h1>
                    <span>Lorem Ipsum is simply dummy text of the printing pesetting.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="tr-account section-padding">
        <div class="container text-center">
            <div class="user-account">

                    <div role="tabpanel" class="tab-pane" id="employers">
                        <div class="account-content">
                            <form action="{{URL::to('/save-employer')}}" class="tr-form" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Tên Công Ty :</label>
                                    <input type="text" class="form-control"  name="user_name">
                                    @if($errors->has('user_name'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_name')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Số điện thoại :</label>
                                    <input type="text" class="form-control" name="user_phone">
                                    @if($errors->has('user_phone'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_phone')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Email :</label>
                                    <input type="email" class="form-control" name="user_email">
                                    @if($errors->has('user_email'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_email')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Mật khẩu :</label>
                                    <input type="password" class="form-control"
                                           name="user_password">
                                    @if($errors->has('user_password'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('user_password')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label style="float: left;color: #000000">Xác nhân mật khẩu :</label>
                                    <input type="password" class="form-control" name="password_confirm">
                                    @if($errors->has('password_confirm'))
                                        <div class="error-text" style="color: red">
                                            {{$errors->first('password_confirm')}}
                                        </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">TẠO TÀI KHOẢN</button>
                            </form>
                            <div class="new-user text-center">
                                <span>Bạn đã có tài khoản? <a href="{{URL::to('/signin-employer')}}">Đăng nhập</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
