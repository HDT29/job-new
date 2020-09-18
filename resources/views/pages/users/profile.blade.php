@extends('.pages.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="user-image">
                    <img src="images/users/{{ $nguoidung->avatar }}" alt="Image" class="img-fluid">
                </div>
                <div class="user-title">
                    <h1 style="text-transform: capitalize">{{ $nguoidung->name }}</h1>
                </div>
                <ul class="job-meta tr-list list-inline">
                    <li style="text-transform: capitalize"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $nguoidung->address }}</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>{{ $nguoidung->phone_number }}</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span class="__cf_email__"
                                data-cfemail="711b191e1f151e1431161c10181d5f121e1c">{{ $nguoidung->email }}</span></a></li>
                    <!-- <li><i class="fa fa-briefcase" aria-hidden="true"></i>UI & UX Designer</li> -->

            </div>
        </div>
    </div>
    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.users.siderbar-user')
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in show active account-info" id="account-info">
                            <div class="tr-fun-fact">
                            </div>
                            <div class="section resume-last-updated">
                                <span class="icon pull-left"><img src="frontend/images/icons/1.png" alt="Icon"
                                        class="img-fluid"></span>
                                <div class="updated-info">
                                    <span class="pull-left">Cập nhật lần cuối vào</span>
                                    <span class="pull-right">{{ $nguoidung->updated_at }}</span>
                                </div>
                            </div>
                            <div class="section display-information">
                                <div class="title title-after">
                                    <div class="icon"><img src="frontend/images/icons/2.png" alt="Icon" class="img-fluid">
                                    </div>
                                    <span>Thông tin của bạn</span>
                                </div>
                                <div class="change-photo">
                                    <div class="user-image">
                                        <img src="images/users/{{ $nguoidung->avatar }}" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="upload-photo">
                                    </div>
                                </div>
                                <ul class="tr-list account-details">
                                    <li>Tên hiển thị<span>{{ $nguoidung->name }}</span></li>
                                    <li>Địa chỉ<span>{{ $nguoidung->address }}</span></li>
                                    <li>Số điện thoại<span>{{ $nguoidung->phone_number }}</span></li>
                                    <li>Địa chỉ email<span><a href="#"><span class="__cf_email__"
                                                    data-cfemail="244e4c4b4a404b41644349454d480a474b49">{{ $nguoidung->email }}</span></a></span>
                                    </li>
                                    <li>ngày sinh<span>{{ $nguoidung->birthday }}</span></li>
                                    <li>Ngôn ngữ<span>{{ $nguoidung->language }}</li>
                                    <li>
                                        Khu vực
                                        <span>
                                            @foreach ($zones as $zo)
                                                @if ($nguoidung['id_zone'] == $zo['id'])
                                                    {{ $zo['name_zone'] }}
                                                @endif
                                            @endforeach
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
