@extends('pages.layout-company')
@section('title', 'Thêm Công Việc')
@section('content')
    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.company_users.siderbar')
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in show active account-info" id="account-info">
                            <div class="tr-fun-fact">
                                @if (session('thongbao'))
                                    <div class="alert alert-success">
                                        {{ session('thongbao') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form action="{{ route('company.post.changepass') }}" class="tr-form" method="post"
                                    enctype="multipart/form-data" novalidate>
                                    {{ csrf_field() }}
                                    <div class="section display-information">
                                        <div class="title title-after">
                                            <div class="icon" style="font-size: 20px;color:royalblue"><i class="fa fa-unlock-alt fa-2x" aria-hidden="true"></i></div>
                                            <span  style="font-size: 25px;color:royalblue" >Thay đổi mật khẩu</span>
                                        </div>

                                        <ul class="tr-list account-details">

                                            <div class="form-group">
                                                <li>Mật khẩu cũ
                                                    <input type="password" class="form-control" name="password" value="">
                                                    @if ($errors->first('password'))
                                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                                    @endif
                                                    @if (isset($mess))<span
                                                            class="text-danger">{{ $mess }}</span>
                                                    @endif
                                                </li>
                                            </div>
                                            <div class="form-group">
                                                <li>Mật khẩu mới
                                                    <input type="password" class="form-control" name="newpass" value="">
                                                    @if ($errors->first('newpass'))
                                                        <p class="text-danger">{{ $errors->first('newpass') }}</p>
                                                    @endif
                                                </li>
                                            </div>
                                            <div class="form-group">
                                                <li>Nhập lại mật khẩu
                                                    <input type="password" class="form-control" name="repass_confirmation"
                                                        value="">
                                                    @if ($errors->first('repass_confirmation'))
                                                    <p class="text-danger">{{ $errors->first('repass_confirmation') }}</p>
                                                    @endif
                                                </li>
                                            </div>
                                            <p>
                                                <button class="btn btn-primary" type="submit">Đổi Mật Khẩu</button>
                                            </p>


                                        </ul>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 @endsection
