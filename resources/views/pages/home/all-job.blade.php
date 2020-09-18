@extends('pages.layout')
@section('title','Thêm Công Việc')
@section('content')
<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1>Graphics Designer</h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Graphics Design</li>
            </ol>
            <div class="banner-form">
                <form action="#">
                    <input type="text" class="form-control" placeholder="Job Keyword">
                    <div class="dropdown tr-change-dropdown">
                        <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Location</span><i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu tr-change">
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Location 1</a></li>
                            <li><a href="#">Location 2</a></li>
                            <li><a href="#">Location 3</a></li>
                        </ul>
                    </div>
                    <button type="submit" class="btn btn-primary" value="Search">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="jobs-listing section-padding">
    <div class="container">
        <div class="job-topbar">
            <span class="pull-left">Filter jobs by</span>
            <ul class="nav nav-tabs job-tabs" role="tablist">
                <li>235 Total jobs</li>
                <li role="presentation" class="active"><a href="#four-colum" aria-controls="four-colum" role="tab" data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a></li>
                <li role="presentation"><a href="#two-column" aria-controls="two-column" role="tab" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="list-menu text-center clearfix">
            <ul class="tr-list">
                <li class="dropdown tr-change-dropdown">
                    Category:
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Designer</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">Designer</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Developement</a></li>
                    </ul>
                </li>
                <li class="dropdown tr-change-dropdown">
                    Level:
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Mid</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">Top Level</a></li>
                        <li><a href="#">Mid Level</a></li>
                        <li><a href="#">Entry Level</a></li>
                    </ul>
                </li>
                <li class="dropdown tr-change-dropdown">
                    Org Type:
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Private</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">Private</a></li>
                        <li><a href="#">public</a></li>
                    </ul>
                </li>
                <li class="dropdown tr-change-dropdown">
                    Location:
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">USA</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">USA</a></li>
                        <li><a href="#">London</a></li>
                        <li><a href="#">New York</a></li>
                    </ul>
                </li>
                <li class="dropdown tr-change-dropdown">
                    Salary:
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">0 - 50K</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">0 - 50K</a></li>
                        <li><a href="#">50k - 70K</a></li>
                        <li><a href="#">70k - 85K</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="tab-content tr-job-posted">
            <div role="tabpanel" class="tab-pane fade show active" id="four-colum">
                <div class="row">
                    @foreach($jobs as $item)
                    <div class="col-md-6 col-lg-3">
                        <div class="job-item">
                            <div class="item-overlay">
                                <div class="job-info">
                                    <a href="#" class="btn btn-primary">{{$item->formality}}</a>
                                    <span class="tr-title">
                                                    <a href="{{route('detail', ['id' => $item->id])}}">{{$item->job_name}}</a>
                                                    @foreach($company as $com)
                                            @if($item['company_user_id'] == $com['id'])
                                                <span><a href="#">{{$com->name}}</a></span>
                                            @endif
                                        @endforeach
                                                    </span>
                                    <ul class="tr-list job-meta">
                                        <li><i class="fa fa-map-signs" aria-hidden="true"></i>
                                            @foreach($zones as $zo)
                                                @if($item['id_zone'] == $zo['id'])
                                                    <span>{{$zo->name_zone}}</span>
                                                @endif
                                            @endforeach
                                        </li>
                                        <li><i class="fa fa-briefcase" aria-hidden="true"></i>{{$item->experience}}</li>
                                        <li><i class="fa fa-money" aria-hidden="true"></i>{{$item->salary_type}} : {{$item->salary_from}}tr
                                            @if($item['salary_to'] != null)
                                                <span>-</span>
                                            @endif
                                            {{$item->salary_to}}@if($item['salary_to'] != null)
                                                <span>tr</span>
                                            @endif </li>
                                    </ul>

                                    <ul class="job-social tr-list">
                                        {{--                                                    @if(Auth::check())--}}
                                        {{--                                                        @if($savetjob == null || $user->id != $savetjob->user_id  )--}}
                                        {{--                                                    <li><a href="{{ route('savejob',$item->id)}}"><i class="fa fa-heart" aria-hidden="true"></i></a></li>--}}
                                        {{--                                                        @elseif($savetjob->job_id == $item->id || $savetjob->user_id == $user->id )--}}
                                        {{--                                                            <li><a href="{{ route('unsavejob',$item->id)}}"><i class="fa fa-gratipay" aria-hidden="true"></i></a></li>--}}
                                        {{--                                                            @endif--}}
                                        {{--                                                    @else--}}
                                        {{--                                                        <li><a href="{{ route('savejob',$item->id)}}"><i class="fa fa-heart" aria-hidden="true"></i></a></li>--}}
                                        {{--                                                    @endif--}}
                                        <li><a href="{{route('detail', ['id' => $item->id])}}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-info">
                                <div class="company-logo">
                                    @foreach($company as $com)
                                        @if($item['company_user_id'] == $com['id'])
                                            <center><img src="{{$com->avatar}}" alt="images" height="100" width="120" onerror="this.style.display='none'"></center>
                                            {{--                                                        @elseif($com->avatar == null)--}}
                                            {{--                                                        <img src="images/images-job/images_8b1Ccompany_logo_blank.png" alt="images" class="img-fluid">--}}
                                            {{--                                                        @else--}}
                                        @endif
                                    @endforeach

                                </div>
                                <span class="tr-title">
                                                                 <a href="{{route('detail', ['id' => $item->id])}}">{{$item->job_name}}</a>
                                                                @foreach($company as $com)
                                        @if($item['company_user_id'] == $com['id'])
                                            <span><a href="#">{{$com->name}}</a></span>
                                        @endif
                                    @endforeach
                                                                </span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span> @foreach($zones as $zo)
                                            @if($item['id_zone'] == $zo['id'])
                                                <span>{{$zo->name_zone}}</span>
                                            @endif
                                        @endforeach</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>{{$item->experience}}</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>{{$item->salary_type}} : {{$item->salary_from}}tr
                                        @if($item['salary_to'] != null)
                                            <span>-</span>
                                        @endif
                                        {{$item->salary_to}}@if($item['salary_to'] != null)
                                            <span>tr</span>
                                        @endif</li>
                                </ul>
                                @if($item->formality == 'Full Time')
                                <div class="time">
                                    <a href="#"><span>{{$item->formality}}</span></a>
                                </div>
                                    @elseif($item->formality == 'Part Time')
                                    <div class="time">
                                        <a href="#"><span class="part-time">{{$item->formality}}</span></a>
                                    </div>
                                    @else
                                    <div class="time">
                                        <a href="#"><span class="freelance">{{$item->formality}}</span></a>
                                    </div>
                                 @endif
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>

            </div>
            <div role="tabpanel" class="tab-pane fade two-column" id="two-column">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/1.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/2.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/3.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/4.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/5.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/6.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/7.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/8.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/1.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/2.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/3.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/4.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/5.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/6.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/7.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="images/job/8.png" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
<a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
</span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection