@extends('pages.layout-company')
@section('title','Thông Tin Công Ty')
@section('content')
        <div class="tr-breadcrumb bg-image section-before">
            <div class="container">
                <div class="breadcrumb-info text-center">
                    <div class="breadcrumb-logo">
                        <img src="{{(Auth::guard('company_user')->user()->avatar)}}" alt="Logo" class="img-fluid">
                    </div>
                    <div class="page-title">
                        <h1 style="text-transform: capitalize; font-size: 35px;color:#ffff;">{{(Auth::guard('company_user')->user()->name)}}</h1>
                    </div>
                    <ul class="job-meta tr-list list-inline">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{(Auth::guard('company_user')->user()->address)}}</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>{{(Auth::guard('company_user')->user()->phone)}}</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>{{(Auth::guard('company_user')->user()->email)}}</li>
                        <li><i class="fa fa-black-tie" aria-hidden="true"></i>{{(Auth::guard('company_user')->user()->scales)}}</li>
                    </ul>
                </div>
            </div>
        </div>
s
        <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.company_users.siderbar')
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in show active account-info" id="account-info">
                            <div class="tr-fun-fact">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="fun-fact media">
                                            <div class="fun-fact-icon">
                                                <img src="frontend/images/icons/fun-fact4.png" alt="images" class="img-fluid">
                                            </div>
                                            <div class="media-body">
{{--                                                @foreach($jobs as $job)--}}
{{--                                                <h1 class="counter" style="text-align: center">{{$job->count()}}</h1>--}}
{{--                                                @endforeach--}}
{{--                                                @endforeach--}}
                                                <span style="text-align: center">Công Việc</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="fun-fact media">
                                            <div class="fun-fact-icon">
                                                <img src="frontend/images/icons/fun-fact5.png" alt="images" class="img-fluid">
                                            </div>
                                            <div class="media-body">
                                                <h1 class="counter">23,563</h1>
                                                <span>Ứng Viên</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="fun-fact media">
                                            <div class="fun-fact-icon">
                                                <img src="frontend/images/icons/fun-fact6.png" alt="images" class="img-fluid">
                                            </div>
                                            <div class="media-body">
                                                <h1 class="counter">27</h1>
                                                <span>Call for interview</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section display-information">
                                <div class="title title-after">
                                    <div class="icon"><img src="frontend/images/icons/2.png" alt="Icon" class="img-fluid"></div>
                                    <span>Thông Tin công ty</span>
                                </div>
                                <div class="change-photo">
                                    <div class="user-image">
                                        <img src="{{(Auth::guard('company_user')->user()->avatar)}}" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="upload-photo">
                                        <a href="{{route('company.get.editprofile',(Auth::guard('company_user')->user()->id))}}"><label class="btn btn-primary" for="upload-photo">
                                                Chỉnh sửa thông tin
                                            </label></a>
                                    </div>
                                </div>

                                <ul class="tr-list account-details">

                                    <label for="">Tên Công Ty:</label><br>
                                    <span style="font-weight: bold">{{(Auth::guard('company_user')->user()->name)}}</span>
                                    <hr>
                                    <label for="">Mô tả công ty</label><br>
                                    <span>{!!(Auth::guard('company_user')->user()->desc) !!}</span>
                                    <hr>
                                    <label for="">Email:</label><br>
                                    <span style="font-weight: bold">{{(Auth::guard('company_user')->user()->email)}}</span>
                                    <hr>
                                    <label for="">Số điện thoại:</label><br>
                                    <span style="font-weight: bold">{{(Auth::guard('company_user')->user()->phone)}}</span>
                                    <hr>
                                    <label for="">Quy mô công ty:</label><br>
                                    <span style="font-weight: bold">{{(Auth::guard('company_user')->user()->scales)}}</span>
                                    <hr>
                                    <label for="">Khu vực:</label><br>
                                    <span style="font-weight: bold">
                                        @foreach($zones as $zo)
                                            @if((Auth::guard('company_user')->user()->id_zone) == $zo['id'])
                                    {{$zo['name_zone']}}@endif
                                    @endforeach

                                    </span>
                                    <hr>
                                    <label for="">Địa Chỉ:</label><br>
                                    <span style="font-weight: bold">{{(Auth::guard('company_user')->user()->address)}}</span>
                                    <hr>
                                    <label for="">Website:</label><br>
                                    <span style="color: #1d75b3">{{(Auth::guard('company_user')->user()->website)}}</span>
                                    <hr>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection