@extends('.pages.layout')
@section('content')
    {{-- <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="user-image">
                    <img src="images/users/{{ $nguoidung->avatar }}" alt="Image" class="img-fluid">
                </div>
                <div class="user-title">
                    <h1>{{ $nguoidung->name }}</h1>
                </div>
                <ul class="job-meta tr-list list-inline">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $nguoidung->address }}</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>{{ $nguoidung->phone_number }}</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span class="__cf_email__"
                                data-cfemail="711b191e1f151e1431161c10181d5f121e1c">{{ $nguoidung->email }}</span></a></li>


            </div>
        </div>
    </div> --}}

    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.users.siderbar-user')
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

                                <form action="{{ route('post-userpass') }}" class="tr-form" method="post"
                                    enctype="multipart/form-data" novalidate>
                                    {{ csrf_field() }}

                                    <div class="section display-information">
                                        <div class="title title-after">
                                            <div class="icon"><img src="frontend/images/icons/2.png" alt="Icon"
                                                    class="img-fluid"></div>
                                            <span>Your display Information</span>
                                        </div>

                                        <ul class="tr-list account-details">

                                            <div class="form-group">
                                                <li>Mật khẩu cũ
                                                    <input type="password" class="form-control" name="password" value="">
                                                    @if ($errors->first('password'))
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
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
                                                        <span class="text-danger">{{ $errors->first('newpass') }}</span>
                                                    @endif
                                                </li>
                                            </div>
                                            <div class="form-group">
                                                <li>Nhập lại mật khẩu
                                                    <input type="password" class="form-control" name="repass_confirmation"
                                                        value="">
                                                    @if ($errors->first('repass_confirmation'))
                                                        <span
                                                            class="text-danger">{{ $errors->first('repass_confirmation') }}</span>
                                                    @endif
                                                </li>
                                            </div>



                                            <p>
                                                <button class="btn btn-primary" type="submit">Đổi mật khẩu</button>
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
</div>
@endsection
