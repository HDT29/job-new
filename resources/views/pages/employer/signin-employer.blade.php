@extends('.pages.layout-company')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1 style="color: cornsilk">ĐĂNG NHẬP DOANH NGHIỆP</h1>
                    <span>Hàng ngàn ứng viên tiềm năng đang tìm kiếm việc làm</span>
                </div>
            </div>
        </div>
    </div>
    <div class="tr-account section-padding">
        <div class="container text-center">
            <div class="user-account">
                @if(session('success'))
                    <div class="red-text" style="color: blue;padding-bottom: 10px">{{session('success')}}</div>
                @endif
                <div class="account-content">
                    @if(session('dkuser'))
                            <div class="alert alert-success" role="alert" >
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="fa fa-check-circle fa-lg" aria-hidden="true"></i> {{session('dkuser')}}
                            </div>
                        @endif
                    @if(session('errorlogin'))
                            <div class="alert alert-danger" role="alert" >
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <i class="fa fa-ban fa-lg" aria-hidden="true"></i> {{session('errorlogin')}}
                            </div>
                        @endif
                    <form action="{{ route('login-employer')}}" class="tr-form" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Vui lòng nhập email của bạn" name="email"value="{{old('email')}}">
                            @if($errors->has('email'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password" value="{{old('password')}}">
                            @if($errors->has('password'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert"  style="color: red">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        </div>
                        <div class="user-option">
                            <div class="checkbox">
                                <label for="remmember"><input type="checkbox" name="remember" id="logged" value="Remember" checked>Nhớ mật khẩu</label>
                            </div>
                            <div class="forgot-password">
                                <a href="{{route('forgot-password-employer')}}">Quên mật khẩu ?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                    </form>
                    <div class="new-user text-center">
                        <span><a href="{{route('add-employer')}}">Tạo tài khoản mới</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
