@extends('.pages.layout')
@section('content')
    <script>
        window.onload = function() {
            document.getElementById('exampleModal');
        };

    </script>
    <style>
        #image_company {
            border-radius: 50%;
        }

    </style>
    <div class="tr-banner section-before bg-image">
        <div class="container">
            <div class="banner-content text-center">
                <h1 style="font-size: 28px; text-transform: capitalize;">TÌM VIỆC LÀM IT NHANH NHẤT VIỆT NAM</h1>

                <div class="banner-form">
                    <form method="POST" action="{{ route('search') }}">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" id="search" name="Tìm kiếm công việc">
                        <div class="dropdown tr-change-dropdown">
                            <select style=" border: 0;
                                outline: 1px solid #CCC;
                                background-color: white;
                                font-size: 18px;
                           }

                              " name="zone" class="form-control" class="dropdown-menu tr-change">
                                <option value="">Tất cả</option>
                                @foreach ($zones as $zo)
                                    <option value="{{ $zo->id }}">{{ $zo->name_zone }}</option>

                                @endforeach

                            </select>


                        </div>
                        <button type="submit" class="btn btn-primary" value="Search">Search</button>
                    </form>
                    {{-- <form method="POST" action="{{ route('search') }}">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" id="search" name="search">
                        <div class="dropdown tr-change-dropdown">
                            <!-- <a data-toggle="dropdown" href="#" aria-expanded="false"><span
                                        class="change-text">Location</span><i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu tr-change">
                                    for
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Location 1</a></li>
                                    <li><a href="#">Location 2</a></li>
                                    <li><a href="#">Location 3</a></li>
                                </ul> -->
                            <select name="zone" class="form-control">

                                @foreach ($zones as $zo)

                                    <option value="{{ $zo->id }}">{{ $zo->name_zone }}</option>

                                @endforeach

                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" value="Search">Search</button>
                    </form> --}}
                    <!-- <div id="search-suggest" class="s-suggest"></div> -->
                </div>
            </div>
        </div>
    </div>




    <!--     <div class="tr-category section-padding">
            <div class="container">
                <div class="section-title">
                    <h1>Browse Jobs By Category</h1>
                </div>
                <ul class="category-list tr-list">
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category1.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Accounting/Finance</span>
                            <span class="category-quantity">(1298)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category2.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Education/Training</span>
                            <span class="category-quantity">(76212)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category3.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Engineer/Architects</span>
                            <span class="category-quantity">(212)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category4.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Garments/Textile</span>
                            <span class="category-quantity">(972)</span>
                        </a>
                    </li>
                </ul>
                <ul class="category-list tr-list">
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category5.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">HR/Org. Development</span>
                            <span class="category-quantity">(1298)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category6.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Design/Creative</span>
                            <span class="category-quantity">(76212)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category7.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Research/Consultancy</span>
                            <span class="category-quantity">(1298)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category8.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Medical/Pharma</span>
                            <span class="category-quantity">(76212)</span>
                        </a>
                    </li>
                </ul>
                <ul class="category-list category-list-bottom tr-list">
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category9.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Music & Arts</span>
                            <span class="category-quantity">(212)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category10.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Marketing/Sales</span>
                            <span class="category-quantity">(972)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category11.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Production/Operation</span>
                            <span class="category-quantity">(212)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
    <span class="icon">
    <img src="frontend/images/icons/category12.png" alt="Icon" class="img-fluid">
    </span>
                            <span class="category-title">Miscellaneous</span>
                            <span class="category-quantity">(972)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> -->
    <!--     <div class="tr-cta">
            <div class="container">
                <div class="cta-content section">
                    <div class="cta-info">
                        <div class="pull-left">
                            <h1>Add your resume and let your next job find you.</h1>
                        </div>
                        <a href="#" class="btn btn-primary pull-right">Add Your Resume</a>
                    </div>
                </div>
            </div>
        </div> -->
    <div class="tr-job-posted section-padding">
        <div class="container">
            <div class="section-title">
                <h2 class="text_ellipsis uppercase"><i class="fa fa-certificate" aria-hidden="true"></i> TIN TUYỂN DỤNG,
                    VIỆC LÀM TỐT NHẤT
                    <span class="pull-right feature-job-link"><a href="#">» Xem tất cả</a></span></h2><br>
            </div>
            <div class="job-tab text-center">
                <!-- <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li role="presentation" class="active">
                            <a class="active" href="#hot-jobs" aria-controls="hot-jobs" role="tab" data-toggle="tab">Hot
                                Jobs</a>
                        </li>
                        <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab"
                                                   data-toggle="tab">Recent
                                Jobs</a></li>
                        <li role="presentation"><a href="#popular-jobs" aria-controls="popular-jobs" role="tab"
                                                   data-toggle="tab">Popular Jobs</a></li>
                    </ul> -->
                <div class="tab-content text-left">
                    <div role="tabpanel" class="tab-pane fade show active" id="hot-jobs">
                        <div class="row">
                            @foreach ($job as $item)
                                <div class="col-md-6 col-lg-3">
                                    <div class="job-item">
                                        <div class="item-overlay">
                                            <div class="job-info">
                                                <span class="tr-title">
                                                    <a style="text-transform: capitalize;"
                                                        href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->job_name }}</a>
                                                    @foreach ($company as $com)
                                                        @if ($item['company_user_id'] == $com['id'])
                                                            <span><a href="#">{{ $com->name }}</a></span>
                                                        @endif
                                                    @endforeach
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                                        @foreach ($zones as $zo)
                                                            @if ($item['id_zone'] == $zo['id'])
                                                                <span>{{ $zo->name_zone }}</span>
                                                            @endif
                                                        @endforeach
                                                    </li>
                                                    <li><i class="fa fa-briefcase"
                                                            aria-hidden="true"></i>{{ $item->experience }}</li>
                                                    <li><i class="fa fa-money"
                                                            aria-hidden="true"></i>{{ $item->salary_type }} :
                                                        {{ $item->salary_from }}tr
                                                        @if ($item['salary_to'] != null)
                                                            <span>-</span>
                                                        @endif
                                                        {{ $item->salary_to }}
                                                        @if ($item['salary_to'] != null)
                                                            <span>tr</span>
                                                        @endif
                                                    </li>
                                                    <li><i class="fa fa-street-view"
                                                            aria-hidden="true"></i>{{ $item->address }}</li>

                                                </ul>

                                                <ul class="job-social tr-list">

                                                    <li><a href="{{ route('detail', ['id' => $item->id]) }}"><i
                                                                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="job-info">
                                            <div class="company-logo">
                                                @foreach ($company as $com)
                                                    @if ($item['company_user_id'] == $com['id'])
                                                        <center><img src="{{ $com->avatar }}" alt="images"
                                                                id="image_company" height="140" width="140"
                                                                onerror="this.style.display='none'"></center>
                                                    @endif
                                                @endforeach

                                            </div>
                                            <span class="tr-title">
                                                <a id="maxname" style="text-transform: capitalize;"
                                                    href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->job_name }}</a>
                                                @foreach ($company as $com)
                                                    @if ($item['company_user_id'] == $com['id'])
                                                        <span><a href="#" id="maxname">{{ $com->name }}</a></span>
                                                    @endif
                                                @endforeach
                                            </span>
                                            <ul class="tr-list job-meta">
                                                <li><span><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                                        @foreach ($zones as $zo)
                                                            @if ($item['id_zone'] == $zo['id'])
                                                                {{ $zo->name_zone }}
                                                            @endif
                                                        @endforeach
                                                </li>
                                                <li><span><i class="fa fa-briefcase"
                                                            aria-hidden="true"></i></span>{{ $item->experience }}</li>
                                                <li><span><i class="fa fa-money"
                                                            aria-hidden="true"></i></span>{{ $item->salary_type }} :
                                                    {{ $item->salary_from }}tr
                                                    @if ($item['salary_to'] != null)
                                                        <span>-</span>
                                                    @endif
                                                    {{ $item->salary_to }}
                                                    @if ($item['salary_to'] != null)
                                                        <span>tr</span>
                                                    @endif
                                                </li>

                                            </ul>
                                            @if ($item->formality == 'Full Time')
                                                <div class="time">
                                                    <a href="#"><span>{{ $item->formality }}</span></a>
                                                </div>
                                            @elseif($item->formality == 'Part Time')
                                                <div class="time">
                                                    <a href="#"><span class="part-time">{{ $item->formality }}</span></a>
                                                </div>
                                            @else
                                                <div class="time">
                                                    <a href="#"><span class="freelance">{{ $item->formality }}</span></a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="tr-job-posted section-padding">
        <div class="container">
            <div class="section-title">
                <h2 class="text_ellipsis uppercase"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> VIỆC LÀM HẤP DẪN
                    <span class="pull-right feature-job-link"><a href="#">» Xem tất cả</a></span></h2><br>
            </div>
            <div class="job-tab text-center">
                <!-- <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li role="presentation" class="active">
                            <a class="active" href="#hot-jobs" aria-controls="hot-jobs" role="tab" data-toggle="tab">Hot
                                Jobs</a>
                        </li>
                        <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab"
                                                   data-toggle="tab">Recent
                                Jobs</a></li>
                        <li role="presentation"><a href="#popular-jobs" aria-controls="popular-jobs" role="tab"
                                                   data-toggle="tab">Popular Jobs</a></li>
                    </ul> -->
                <div class="tab-content text-left">
                    <div role="tabpanel" class="tab-pane fade show active" id="hot-jobs">


                        <div class="row">
                            @if (Auth::check())

                                @foreach ($jobzone as $item)
                                    <div class="col-md-6 col-lg-3">
                                        <div class="job-item">
                                            <div class="item-overlay">
                                                <div class="job-info">
                                                    <a href="#" class="btn btn-primary">{{ $item->formality }}</a>
                                                    <span class="tr-title">






                                                        <a
                                                            href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->job_name }}</a>
                                                        <span><a
                                                                href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->company_name }}</a></span>
                                                    </span>
                                                    <ul class="tr-list job-meta">
                                                        <li><i class="fa fa-map-signs"
                                                                aria-hidden="true"></i>{{ $item->address }}
                                                        </li>
                                                        <li><i class="fa fa-briefcase"
                                                                aria-hidden="true"></i>{{ $item->experience }}</li>
                                                        <li><i class="fa fa-money"
                                                                aria-hidden="true"></i>{{ $item->salary_from }}</li>
                                                    </ul>
                                                    <!-- <ul class="job-social tr-list">
                                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="job-details.html"><i class="fa fa-long-arrow-right"
                                                                                      aria-hidden="true"></i></a></li>
                                                </ul> -->
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="company-logo">
                                                    <img src="{{ $item->images }}" alt="images" class="img-fluid">
                                                </div>
                                                <span class="tr-title">
                                                    <a
                                                        href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->job_name }}</a>
                                                    <span><a
                                                            href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->company_name }}</a></span>
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><span><i class="fa fa-map-signs"
                                                                aria-hidden="true"></i></span>{{ $item->address }}
                                                    </li>
                                                    <li><span><i class="fa fa-briefcase"
                                                                aria-hidden="true"></i></span>{{ $item->experience }}
                                                    </li>
                                                    <li><span><i class="fa fa-money"
                                                                aria-hidden="true"></i></span>{{ $item->salary_from }}
                                                    </li>
                                                </ul>
                                                <div class="time">
                                                    <a href="#"><span>{{ $item->formality }}</span></a>
                                                    <!-- <span class="pull-right">Posted 23 hours ago</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            @else

                                @foreach ($job as $item)
                                    <div class="col-md-6 col-lg-3">
                                        <div class="job-item">
                                            <div class="item-overlay">
                                                <div class="job-info">
                                                    <a href="#" class="btn btn-primary">{{ $item->formality }}</a>
                                                    <span class="tr-title">
                                                        <a
                                                            href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->job_name }}</a>
                                                        <span><a
                                                                href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->company_name }}</a></span>
                                                    </span>
                                                    <ul class="tr-list job-meta">
                                                        <li><i class="fa fa-map-signs"
                                                                aria-hidden="true"></i>{{ $item->address }}
                                                        </li>
                                                        <li><i class="fa fa-briefcase"
                                                                aria-hidden="true"></i>{{ $item->experience }}</li>
                                                        <li><i class="fa fa-money"
                                                                aria-hidden="true"></i>{{ $item->salary_from }}</li>
                                                    </ul>
                                                    <!-- <ul class="job-social tr-list">
                                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="job-details.html"><i class="fa fa-long-arrow-right"
                                                                                      aria-hidden="true"></i></a></li>
                                                </ul> -->
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="company-logo">
                                                    <img src="{{ $item->images }}" alt="images" class="img-fluid">
                                                </div>
                                                <span class="tr-title">
                                                    <a
                                                        href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->job_name }}</a>
                                                    <span><a
                                                            href="{{ route('detail', ['id' => $item->id]) }}">{{ $item->company_name }}</a></span>
                                                </span>
                                                <ul class="tr-list job-meta">
                                                    <li><span><i class="fa fa-map-signs"
                                                                aria-hidden="true"></i></span>{{ $item->address }}
                                                    </li>
                                                    <li><span><i class="fa fa-briefcase"
                                                                aria-hidden="true"></i></span>{{ $item->experience }}
                                                    </li>
                                                    <li><span><i class="fa fa-money"
                                                                aria-hidden="true"></i></span>{{ $item->salary_from }}
                                                    </li>
                                                </ul>
                                                <div class="time">
                                                    <a href="#"><span>{{ $item->formality }}</span></a>
                                                    <!-- <span class="pull-right">Posted 23 hours ago</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- <div class="tr-steps bg-image section-padding section-before">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="step">
                            <div class="step-image">
                                <img src="frontend/images/icons/step1.png" alt="images" class="img-fluid">
                            </div>
                            <h1>01 Steps</h1>
                            <h2>Register an account</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="step">
                            <div class="step-image">
                                <img src="frontend/images/icons/step2.png" alt="images" class="img-fluid">
                            </div>
                            <h1>02 Steps</h1>
                            <h2>search your desired job</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="step">
                            <div class="step-image">
                                <img src="frontend/images/icons/step3.png" alt="images" class="img-fluid">
                            </div>
                            <h1>03 Steps</h1>
                            <h2>Send your resume to employers</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tr-recent-news section-padding">
            <div class="container">
                <div class="section-title">
                    <h1>Recent News Articles</h1>
                </div>
                <div class="blog-content">
                    <div class="tr-post media">
                        <div class="entry-header pull-left">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="frontend/images/blog/1.jpg" alt="images" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content media-body">
                            <h2 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                            </h2>
                            <ul class="entry-meta tr-list">
                                <li><i class="fa fa-user"></i>By <a href="#">owen williams </a></li>
                                <li><i class="fa fa-clock-o"></i> <a href="#">Aug 1, 2017</a></li>
                                <li><i class="fa fa-comment-o"></i> <a href="#">189 Comments</a></li>
                            </ul>
                        </div>
                        <div class="blog-post">
                        </div>
                    </div>
                    <div class="tr-post media">
                        <div class="entry-header pull-left">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="frontend/images/blog/2.jpg" alt="images" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content media-body">
                            <h2 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                            </h2>
                            <ul class="entry-meta tr-list">
                                <li><i class="fa fa-user"></i>By <a href="#">owen williams </a></li>
                                <li><i class="fa fa-clock-o"></i> <a href="#">Aug 1, 2017</a></li>
                                <li><i class="fa fa-comment-o"></i> <a href="#">189 Comments</a></li>
                            </ul>
                        </div>
                        <div class="blog-post">
                        </div>
                    </div>
                    <div class="tr-post media">
                        <div class="entry-header pull-left">
                            <div class="entry-thumbnail">
                                <a href="#"><img src="frontend/images/blog/3.jpg" alt="images" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="entry-content media-body">
                            <h2 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                            </h2>
                            <ul class="entry-meta tr-list">
                                <li><i class="fa fa-user"></i>By <a href="#">owen williams </a></li>
                                <li><i class="fa fa-clock-o"></i> <a href="#">Aug 1, 2017</a></li>
                                <li><i class="fa fa-comment-o"></i> <a href="#">189 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tr-testimonial">
            <div class="container">
                <div class="testimonial-content">
                    <div class="testimonial-slider">
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <img src="frontend/images/others/testimonial.png" alt="images" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <p>‘’ Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor
                                        incididunt
                                        ut labore. ‘’</p>
                                    <div class="testimonial-title">
                                        <h2>Stive Frankman</h2>
                                        <p>CEO, Frakman Inc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <img src="frontend/images/others/testimonial.png" alt="images" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <p>‘’ Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor
                                        incididunt
                                        ut labore. ‘’</p>
                                    <div class="testimonial-title">
                                        <h2>Stive Frankman</h2>
                                        <p>CEO, Frakman Inc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="media">
                                <div class="media-left">
                                    <img src="frontend/images/others/testimonial.png" alt="images" class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <p>‘’ Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor
                                        incididunt
                                        ut labore. ‘’</p>
                                    <div class="testimonial-title">
                                        <h2>Stive Frankman</h2>
                                        <p>CEO, Frakman Inc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


    <!-- <div class="tr-fun-fact section-padding">
            <div class="container">
                <div class="fun-fact-content">
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <div class="fun-fact">
                                <img src="frontend/images/icons/fun-fact1.png" alt="images" class="img-fluid">
                                <h1 class="counter">3,412</h1>
                                <span>Live Jobs</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fun-fact">
                                <img src="frontend/images/icons/fun-fact2.png" alt="images" class="img-fluid">
                                <h1 class="counter">12,043</h1>
                                <span>Total Company</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fun-fact">
                                <img src="frontend/images/icons/fun-fact3.png" alt="images" class="img-fluid">
                                <h1 class="counter">5,798,298</h1>
                                <span>Total Candidate</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tr-download-app bg-image section-padding section-before">
            <div class="container text-center">
                <h1>Download on App Store</h1>
                <div class="app-content">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="download-app">
                                <a href="#">
                                    <div class="download-image">
                                        <img src="frontend/images/icons/app1.png" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="download-info">
                                        <span>available on</span>
                                        <strong>Google Play</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="download-app">
                                <a href="#">
                                    <div class="download-image">
                                        <img src="frontend/images/icons/app2.png" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="download-info">
                                        <span>available on</span>
                                        <strong>App Store</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="download-app">
                                <a href="#">
                                    <div class="download-image">
                                        <img src="frontend/images/icons/app3.png" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="download-info">
                                        <span>available on</span>
                                        <strong>Windows Store</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- <script type="text/javascript">
       $('#header-search').on('keyup', function() {
           var search = $(this).serialize();
           if ($(this).find('.m-input').val() == '') {
               $('#search-suggest div').hide();
           } else {
               $.ajax({
                   url: '/search',
                   type: 'POST',
                   data: search,
               })
               .done(function(res) {
                   $('#search-suggest').html('');
                   $('#search-suggest').append(res)
               })
           };
       });
    </script> -->

@endsection
