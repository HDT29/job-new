@extends('.pages.layout')
@section('content')





    <div class="tr-breadcrumb bg-image section-before" style="color:#fff;padding:100px 0;overflow:hidden;background:url({{ $job->images }})  repeat 0 0 ;background-size: cover; background-position: center;
                 background-repeat: no-repeat;">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="breadcrumb-logo">
                    <img src="{{ $company['avatar'] }}" alt="Logo" class="img-fluid">
                    {{-- @foreach ($company as $com2)
                        @if ($job['company_user_id'] == $com2['id'])
                            <img src="{{ $com2['avatar'] }}" alt="Logo" class="img-fluid">
                        @endif
                    @endforeach --}}

                </div>
                <div class="page-title">
                    <h1 style="font-size: 30px;color:#ffffff;">{{ $job->job_name }}</h1>
                </div>
                <ul class="tr-list job-meta list-inline">

                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $job->formality }}</li>
                    <li><i class="fa fa-money" aria-hidden="true"></i><span>Mức Lương : </span> {{ $job->salary_type }}
                        : {{ $job->salary_from }}tr
                        @if ($job['salary_to'] != null)
                            <span>-</span>
                        @endif
                        {{ $job->salary_to }}
                        @if ($job['salary_to'] != null)
                            <span>tr</span>
                        @endif
                    </li>
                    <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Hạn Nộp: {{ $job->deadline_job }}</li>
                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>{{ $job->address }}</li>
                </ul>
                <div class="buttons">
                    @if (Auth::check())


                        @if ($recruitment == null || $user->id != $recruitment->user_id)

                            <a href="{{ route('applyjob', $job->id) }}" onclick="myFunction()" class="btn btn-primary"><i
                                    class="fa fa-briefcase" aria-hidden="true"></i>Ứng tuyển ngay</a>


                        @elseif($recruitment->job_id == $job->id || $recruitment->user_id == $user->id )




                            <a href="{{ route('unapplyjob', $job->id) }}" class="btn btn-danger"><i class="fa fa-briefcase"
                                    aria-hidden="true"></i>Hủy ứng tuyển</a>

                        @endif


                    @else

                        <a href="{{ route('signin-user') }}" class="btn btn-primary"> Ứng tuyển ngay</a>

                    @endif

                    <!-- <a href="#" class="btn button-bookmark"><i class="fa fa-bookmark" aria-hidden="true"></i>Bookmark</a>
    <span class="btn button-share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></span></span>
    </div> -->
                    @if (Auth::check())

                        @if ($savetjob == null || $user->id != $savetjob->user_id)


                            <a href="{{ route('savejob', $job->id) }}" class="btn button-bookmark"><i class="fa fa-bookmark"
                                    aria-hidden="true"></i>Lưu Công Việc</a>

                        @elseif($savetjob->job_id == $job->id || $savetjob->user_id == $user->id )

                            <a href="{{ route('unsavejob', $job->id) }}" class="btn btn-danger">Hủy Lưu</a>
                        @endif
                    @else
                        <a href="{{ route('signin-user') }}" class="btn button-bookmark"><i class="fa fa-bookmark"
                                aria-hidden="true"></i>Lưu Công Việc</a>
                    @endif

                    <span class="btn button-share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share <span><a
                                href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i
                                    class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i
                                    class="fa fa-google-plus" aria-hidden="true"></i></a></span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="job-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="job-summary section">
                        <span style="font-weight: bold;font-size: 25px;padding: 10px;border-radius: 5px;">MÔ TẢ CÔNG
                            VIỆC</span>
                        <p>{!! $job->job_desc !!}</p>
                        <span style="font-weight: bold;font-size: 25px;padding: 10px;border-radius: 5px;">YÊU CẦU ỨNG
                            VIÊN</span>
                        <p>{!! $job->request !!}</p>
                        <span style="font-weight: bold;font-size: 25px;padding: 10px;border-radius: 5px;">QUYỀN LỢI ĐƯỢC
                            HƯỞNG</span>
                        <p>{!! $job->interest !!}</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="tr-sidebar">
                        <div class="widget-area">
                            <div class="widget short-info">
                                <h3 class="widget_title">Thông Tin Công Việc</h3>
                                <ul class="tr-list">
                                    <li class="media">
                                        <div class="pull-left"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                        <div class="media-body"><span>Hạn Nộp:</span>{{ $job->deadline_job }}</div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
                                        <div class="media-body"><span>Kinh nghiệm:</span>{{ $job->experience }}</div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left"><i class="fa fa-industry" aria-hidden="true"></i></div>
                                        <div class="media-body"><span>Số người cần tuyển:</span>{{ $job->amount_people }}
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
                                        <div class="media-body"><span>Mức Lương:</span>
                                            {{ $job->salary_type }}
                                            {{ $job->salary_from }}tr
                                            @if ($job['salary_to'] != null)
                                                <span>-</span>
                                            @endif
                                            {{ $job->salary_to }}
                                            @if ($job['salary_to'] != null)
                                                <span>tr</span>
                                            @endif

                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="pull-left"><i class="fa fa-key" aria-hidden="true"></i></div>
                                        <div class="media-body"><span>Địa chỉ làm việc:</span>{{ $job->address }}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget cmpany-info">
                                <h3 class="widget_title">Thông Tin Công Ty</h3>
                                <span>{{ $company->name }}</span>
                                <ul class="tr-list">
                                    <li><span>Địa chỉ:</span><br>{{ $company->address }}</li>
                                    <li><span>Quy mô công ty:</span><br>{{ $company->scales }}</li>
                                    <li><span>Điện thoại:</span><br>{{ $company->phone }}</li>
                                    <li><span>Email:</span><br> <a href="#"><span class="__cf_email__"
                                                data-cfemail="acc5c2cac3ecc8dec3dccec3d482cfc3c1">{{ $company->email }}</span></a>
                                    </li>
                                    <li><span>Website:</span> <a href="#">{{ $company->website }}</a></li>
                                    <li><span></span></li>
                                </ul>
                                <div class="widget-social">
                                    <ul class="tr-list">
                                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tr-cta">
                <div class="cta-content section">
                    <div class="cta-info">
                        <div class="pull-left">
                            <h1>Add your resume and let your next job find you.</h1>
                        </div>
                        <a href="#" class="btn btn-primary pull-right">Add Your Resume</a>
                    </div>
                </div>
            </div>
            <div class="tr-job-posted similar-jobs">
                <span class="tr-title">Similar Jobs Post</span>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="job-item">
                            <div class="item-overlay">
                                <div class="job-info">
                                    <a href="#" class="btn btn-primary">Full Time</a>
                                    <span class="tr-title">
                                        <a href="#">Project Manager</a>
                                        <span><a href="#">Dig File</a></span>
                                    </span>
                                    <ul class="tr-list job-meta">
                                        <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                        <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                        <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                    </ul>
                                    <ul class="job-social tr-list">
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-info">
                                <div class="company-logo">
                                    <img src="images/job/1.png" alt="images" class="img-fluid">
                                </div>
                                <span class="tr-title">
                                    <a href="#">Project Manager</a>
                                    <span><a href="#">Dig File</a></span>
                                </span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco,
                                        CA, US
                                    </li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                                <div class="time">
                                    <a href="#"><span>Full Time</span></a>
                                    <span class="pull-right">Posted 23 hours ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="job-item">
                            <div class="item-overlay">
                                <div class="job-info">
                                    <a href="#" class="btn btn-primary">Part Time</a>
                                    <span class="tr-title">
                                        <a href="#">Design Associate</a>
                                        <span><a href="#">Loop</a></span>
                                    </span>
                                    <ul class="tr-list job-meta">
                                        <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                        <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                        <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                    </ul>
                                    <ul class="job-social tr-list">
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-info">
                                <div class="company-logo">
                                    <img src="images/job/2.png" alt="images" class="img-fluid">
                                </div>
                                <span class="tr-title">
                                    <a href="#">Design Associate</a>
                                    <span><a href="#">Loop</a></span>
                                </span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco,
                                        CA, US
                                    </li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                                <div class="time">
                                    <a href="#"><span class="part-time">Part Time</span></a>
                                    <span class="pull-right">Posted 1 day ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="job-item">
                            <div class="item-overlay">
                                <div class="job-info">
                                    <a href="#" class="btn btn-primary">Freelance</a>
                                    <span class="tr-title">
                                        <a href="#">Graphic Designer</a>
                                        <span><a href="#">Humanity Creative</a></span>
                                    </span>
                                    <ul class="tr-list job-meta">
                                        <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                        <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                        <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                    </ul>
                                    <ul class="job-social tr-list">
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-info">
                                <div class="company-logo">
                                    <img src="images/job/3.png" alt="images" class="img-fluid">
                                </div>
                                <span class="tr-title">
                                    <a href="#">Graphic Designer</a>
                                    <span><a href="#">Humanity Creative</a></span>
                                </span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco,
                                        CA, US
                                    </li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                                <div class="time">
                                    <a href="#"><span class="freelance">Freelance</span></a>
                                    <span class="pull-right">Posted 10 day ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="job-item">
                            <div class="item-overlay">
                                <div class="job-info">
                                    <a href="#" class="btn btn-primary">Full Time</a>
                                    <span class="tr-title">
                                        <a href="#">Design Consultant</a>
                                        <span><a href="#">Families</a></span>
                                    </span>
                                    <ul class="tr-list job-meta">
                                        <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                        <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                        <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                    </ul>
                                    <ul class="job-social tr-list">
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-info">
                                <div class="company-logo">
                                    <img src="images/job/4.png" alt="images" class="img-fluid">
                                </div>
                                <span class="tr-title">
                                    <a href="#">Design Consultant</a>
                                    <span><a href="#">Families</a></span>
                                </span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco,
                                        CA, US
                                    </li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                                <div class="time">
                                    <a href="#"><span>Full Time</span></a>
                                    <span class="pull-right">Posted Oct 09, 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function myFunction() {
            alert("Ứng tuyển thành công");
        }

    </script>

@endsection
