@extends('pages.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1>Reset mật khẩu </h1>
                    <span>Đặt lại mật khẩu của bạn</span>
                </div>
            </div>
        </div>
    </div>
    <div class="tr-account section-padding">
        <div class="container text-center">
            <div class="user-account">
                <div class="account-content">
                    <form method="post">
                        @if(session('danger'))
                            <div class="red-text" style="color: blue;padding-bottom: 10px">{{session('danger')}}</div>
                        @endif
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password"
                                   name="password">
                            @if($errors->has('password'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('password')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirm">
                            @if($errors->has('password_confirm'))
                                <div class="error-text" style="color: red">
                                    {{$errors->first('password_confirm')}}
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

