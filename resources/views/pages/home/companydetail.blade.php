@extends('.pages.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="breadcrumb-logo">
                    <img src="{{ $company->avatar }}" alt="Logo" class="img-fluid">
                </div>
                <div class="page-title">
                    <h1>{{ $company->name }}</h1>
                </div>
                <ul class="job-meta tr-list list-inline">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $company->address }}</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>{{ $company->phone }}</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>{{ $company->email }}</li>

                    <li><i class="fa fa-black-tie" aria-hidden="true"></i>Quy Mô : {{ $company->scales }}</li>
                </ul>
                <ul class="breadcrumb-social social-icon-bg  tr-list">

                    <li><a href="#"><i class="fa fa-google-plus"></i> <span>Gmail</span> </a></li>
                    <li><a href="#"><i class="fa fa-globe"></i> <span>Website</span> </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="all-view section-padding">
        <div class="container">
            <div class="section">
                <ul class="tr-list resume-info">
                    <li class="career-objective media">
                        <div class="icon">
                            <i class="fa fa-black-tie" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                            <span class="tr-title">Giới Thiệu Về Công Ty</span>
                            <p>{!! $company->desc !!}</p>
                        </div>
                    </li>


                </ul>
                <div class="buttons pull-right">
                    <a href="{{ route('rating', ['id' => $company->id]) }}" class="btn btn-success"><i class="fa fa-star-o" aria-hidden="true"></i></i>Đánh giá</a>
                    <a href="#" class="btn btn-primary"><i class="fa fa-briefcase" aria-hidden="true"></i>Tất Cả Công
                        Việc</a>
                </div>
            </div>
        </div>
    </div>



@endsection
