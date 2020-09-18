@extends('.pages.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1>Đăng Nhập</h1>
                    <span>Đăng nhập (Đăng ký tài khoản mới nếu bạn chưa từng sử dụng Jd Need You )</span>
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
                    <form action="{{ route('login-user')}}" class="tr-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Please Enter Your Email" name="email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
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
                                <label><input type="checkbox" name="remember_token" id="remember_token" value="Remember me"{{ old('remember_token') ? 'checked' : '' }}>Nhớ mật khẩu</label>
                            </div>
                            <div class="forgot-password">
                                <a href="{{route('forgot-password')}}">Quên mật khẩu</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng </button>
                        @csrf
                    </form>
                    <div class="new-user text-center">
                        <span><a href="{{route('add-signup')}}">Tạo tài khoản mới</a> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function xoaSanPham(){
            var conf=confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không?");
            return conf;
        }
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 2000);
    </script>
@endsection
