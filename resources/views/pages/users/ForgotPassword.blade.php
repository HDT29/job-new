@extends('pages.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1>Lấy lại mật khẩu </h1>
                    <span>Nhập email của bạn để lấy lại mật khẩu</span>
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
                    <form action="" class="tr-form" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Please Enter Your Email" name="email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('email')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
