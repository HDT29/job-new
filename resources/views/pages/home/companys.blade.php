@extends('.pages.layout')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1>Tra cứu thông tin công ty</h1>
                </div>
                <div class="banner-form">
                    <form action="#">
                        <input type="text" class="form-control" id="searchcompany" placeholder="Nhập vào tên công ty bạn muốn tìm kiếm">
                        <button type="submit" class="btn btn-primary" value="Search">Tìm kiếm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="jobs-listing section-padding">
        <div class="container">
            <div class="job-topbar">
                </ul>
            </div>
            <div class="list-menu text-center clearfix">
                </li>
                </ul>
            </div>
            <div class="tab-content tr-job-posted">
                <div role="tabpanel" class="tab-pane fade show active" id="four-colum">
                    <div class="row">
                        @foreach ($company as $item)
                            <div class="col-md-6 col-lg-3">
                                <div class="job-item">

                                    <div class="job-info">
                                        <div class="company-logo">
                                            <center><img src="{{ $item->avatar }}" alt="images" width="150" height="150">
                                            </center>
                                        </div>
                                        <span class="tr-title">
                                            <a href="#" id="maxname">{{ $item->name }}</a>

                                        </span>
                                        <ul class="tr-list job-meta">
                                            <li><span><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                                    @foreach ($zones as $zo)
                                                        @if ($item['id_zone'] == $zo['id'])
                                                            {{ $zo['name_zone'] }}
                                                        @endif
                                                    @endforeach</li>
                                            <li><span><i class="fa fa-users fa-lg"
                                                        aria-hidden="true"></i>{{ $item->scales }}</li>
                                        </ul>

                                        <a href="{{ route('detailc', ['id' => $item->id]) }}" id="btndetailcompany">Xem chi
                                            tiết</a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
 @endsection
