@extends('pages.layout-company')
@section('title','Thêm Công Việc')
@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
                    <div class="promo pr-md-3 pr-lg-5">
                        <h1 class="headline mb-3">
                            Tìm kiếm ứng viên <br>Bất cứ ở đâu mà không tốn sức !
                        </h1><!--//headline-->
                        <div class="subheadline mb-4">
                            <P style="letter-spacing: 1px;"><i class="fa fa-check" aria-hidden="true" style="color:#008DEF"></i> Hồ sơ người tìm việc cập nhật liên tục theo từng phút. <br>
                                <i class="fa fa-check" aria-hidden="true"style="color:#008DEF" ></i> Mỗi tháng có hơn 100,000 ứng viên cập nhật qua Công cụ tạo CV jdneedyou.com.<br>
                                <i class="fa fa-check" aria-hidden="true" style="color:#008DEF" ></i> Hỗ trợ nhà tuyển dụng tìm kiếm ứng viên theo Quận/Huyện của Hà Nội, Hồ Chí Minh.<br>
                                <i class="fa fa-check" aria-hidden="true"style="color:#008DEF" ></i> CV tại JDN có kèm theo link Facebook, giúp NTD khai thác được nhiều thông tin hơn về ứng viên.<br>
                                <i class="fa fa-check" aria-hidden="true" style="color:#008DEF" ></i> Dễ dàng tìm kiếm ứng viên theo từng công ty đã làm.
                            </P>

                        </div><!--//subheading-->
                            <br>
                        <div class="cta-holder">
                            <a class="btn btn-primary mr-lg-2"
                               href="">KHÁM PHÁ NGAY</a>
{{--                            <a class="btn btn-secondary scrollto" href="#benefits-section">Learn More</a>--}}

                        </div><!--//cta-holder-->

                        <div class="hero-quotes mt-5">
                            <div id="quotes-carousel" class="quotes-carousel carousel slide carousel-fade mb-5"
                                 data-ride="carousel" data-interval="8000">
                                <ol class="carousel-indicators">
                                    <li data-target="#quotes-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#quotes-carousel" data-slide-to="1"></li>
                                    <li data-target="#quotes-carousel" data-slide-to="2"></li>
                                </ol>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <blockquote class="quote p-4 theme-bg-light">
                                            "Chúng tôi luôn không ngừng cải thiệt chất lượng website để đưa đến cho bạn trải nghiệm tốt nhất"
                                        </blockquote><!--//item-->
                                        <div class="source media flex-column flex-md-row align-items-center">
                                            <img class="source-profile mr-md-3"
                                                 src="https://demos.onepagelove.com/html/devbook/assets/images/profiles/profile-1.png"
                                                 alt="">
                                            <div class="source-info media-body text-center text-md-left">
                                                <div class="source-name">Nam Văn</div>
                                                <div class="soure-title">Co-Founder, Startup Week</div>
                                            </div>
                                        </div><!--//source-->
                                    </div><!--//carousel-item-->
                                    <div class="carousel-item">
                                        <blockquote class="quote p-4 theme-bg-light">
                                            "Highly recommended consectetur adipiscing elit. Proin et auctor dolor, sed
                                            venenatis massa. Vestibulum ullamcorper lobortis nisi non placerat praesent
                                            mauris neque"
                                        </blockquote><!--//item-->
                                        <div class="source media flex-column flex-md-row align-items-center">
                                            <img class="source-profile mr-md-3"
                                                 src="https://demos.onepagelove.com/html/devbook/assets/images/profiles/profile-2.png"
                                                 alt="">
                                            <div class="source-info media-body text-center text-md-left">
                                                <div class="source-name">Jean Doe</div>
                                                <div class="soure-title">Senior Developer, Ipsum Company</div>
                                            </div>
                                        </div><!--//source-->
                                    </div><!--//carousel-item-->
                                    <div class="carousel-item">
                                        <blockquote class="quote p-4 theme-bg-light">
                                            "Awesome! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                            euismod nunc porta urna facilisis tempor. Praesent mauris neque, viverra
                                            quis erat vitae."
                                        </blockquote><!--//item-->
                                        <div class="source media flex-column flex-md-row align-items-center">
                                            <img class="source-profile mr-md-3"
                                                 src="https://demos.onepagelove.com/html/devbook/assets/images/profiles/profile-3.png"
                                                 alt="">
                                            <div class="source-info media-body text-center text-md-left">
                                                <div class="source-name">Andy Doe</div>
                                                <div class="soure-title">Frontend Developer, Company Lorem</div>
                                            </div>
                                        </div><!--//source-->
                                    </div><!--//carousel-item-->
                                </div><!--//carousel-inner-->
                            </div><!--//quotes-carousel-->

                        </div><!--//hero-quotes-->
                    </div><!--//promo-->
                </div><!--col-->
                <div class="col-12 col-md-5 mb-5 align-self-center">
                    <div class="book-cover-holder">
                        <img class="img-fluid book-cover"
                             src="frontend/images/about1.png"
                             alt="book cover">

                    </div><!--//book-cover-holder-->
                </div><!--col-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//hero-section-->

    <section id="benefits-section" class="benefits-section theme-bg-light-gradient py-5">
        <div class="container py-5">
            <h2 class="section-heading text-center mb-3" style="text-transform: capitalize">Tại sao doanh nghiệp chọn JD Need you ?</h2>
{{--            <div class="section-intro single-col-max mx-auto text-center mb-5">Section intro goes here. Lorem ipsum--}}
{{--                dolor sit amet, consectetur adipiscing elit. Integer blandit consequat consequat. Orci varius natoque--}}
{{--                penatibus et magnis.--}}
{{--            </div>--}}
            <div class="row text-center">
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fa fa-mouse-pointer" aria-hidden="true"></i></div>
                            <h3 class="item-heading">3,000,000+</h3>
                        </div><!--//item-heading-->
                        <div class="item-desc">
                            Lượt ứng viên truy cập hàng tháng
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                            <h3 class="item-heading">70%</h3>
                        </div><!--//item-heading-->
                        <div class="item-desc">
                            1+ năm kinh nghiệm
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                            <h3 class="item-heading">30%</h3>
                        </div><!--//item-heading-->
                        <div class="item-desc">
                            Sinh viên mới tốt nghiệp
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fa fa-dropbox" aria-hidden="true"></i></div>
                            <h3 class="item-heading">95%</h3>
                        </div><!--//item-heading-->
                        <div class="item-desc">
                            Chủ động tìm việc
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fa fa-address-book-o"></i></div>
                            <h3 class="item-heading">800+</h3>
                        </div><!--//item-heading-->
                        <div class="item-desc">
                            CV ứng tuyển mỗi ngày
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-12 col-md-6 col-lg-4">
                    <div class="item-inner p-3 p-lg-4">
                        <div class="item-header mb-3">
                            <div class="item-icon"><i class="fa fa-comments-o" aria-hidden="true"></i>
                            <h3 class="item-heading">100,000</h3>
                        </div><!--//item-heading-->
                        <div class="item-desc">
                            Phản hồi tích cực về ứng viên
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//benefits-section-->
<br><br>
    <section class="content-section">
        <div class="container">
            <div class="single-col-max mx-auto">
                <h2 class="section-heading text-center mb-5">Ưu điểm Của JD Need You ?</h2>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="figure-holder mb-5">
                            <img class="img-fluid"
                                 src="frontend/images/about3.png"
                                 alt="image">
                        </div><!--//figure-holder-->
                    </div><!--//col-->
                    <div class="col-12 col-md-6 mb-5">
                        <div class="key-points mb-4 text-center">
                            <ul class="key-points-list list-unstyled mb-4 mx-auto d-inline-block text-left">
                                <li><img src="frontend/images/ico/plus.png" width="20" height="20"> Dễ dàng tìm kiếm ứng viên</li>
                                <li><img src="frontend/images/ico/plus.png" width="20" height="20"> Tặng ngay 3 tin tuyển dụng miễn phí</li>
                                <li><img src="frontend/images/ico/plus.png" width="20" height="20"> Hỗ trợ nhiệt tình 24/7</li>
                                <li><img src="frontend/images/ico/plus.png" width="20" height="20"> Thông tin ứng viên rõ ràng</li>
                                <li><img src="frontend/images/ico/plus.png" width="20" height="20"> Đăng tin dễ dàng, không quá 1 phút</li>
                            </ul>
                            <div class="text-center"><a class="btn btn-primary"
                                                        href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devbook-free-bootstrap-4-book-ebook-landing-page-template-for-developers/">
                                                        Trải nghiệm ngay thôi
                                    </a></div>
                        </div><!--//key-points-->

                    </div><!--//col-12-->
                </div><!--//row-->
            </div><!--//single-col-max-->
        </div><!--//container-->
    </section><!--//content-section-->

    <section class="audience-section py-5">
        <div class="container">
            <h2 class="section-heading text-center mb-4">Who This Book Is For</h2>
            <div class="section-intro single-col-max mx-auto text-center mb-5">
                List your target readers in this section and back up with reviews. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Proin sodales sit amet neque sit amet molestie. Vivamus hendrerit nisi
                condimentum erat tempus, vitae accumsan odio euismod.
            </div><!--//section-intro-->
            <div class="audience mx-auto">
                <div class="item media">
                    <div class="item-icon mr-3"><i class="fas fa-user-check"></i></div>
                    <div class="media-body">
                        <h4 class="item-title">Software Developers</h4>
                        <div class="item-desc">Learn lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                            sodales sit amet neque sit amet molestie.
                        </div>
                    </div><!--//media-body-->
                </div><!--//item-->
                <div class="item media">
                    <div class="item-icon mr-3"><i class="fas fa-user-check"></i></div>
                    <div class="media-body">
                        <h4 class="item-title">App Developers</h4>
                        <div class="item-desc">Learn lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                            sodales sit amet neque sit amet molestie.
                        </div>
                    </div><!--//media-body-->
                </div><!--//item-->
                <div class="item media">
                    <div class="item-icon mr-3"><i class="fas fa-user-check"></i></div>
                    <div class="media-body">
                        <h4 class="item-title">Web Developers</h4>
                        <div class="item-desc">Learn lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                            sodales sit amet neque sit amet molestie.
                        </div>
                    </div><!--//media-body-->
                </div><!--//item-->
                <div class="item media">
                    <div class="item-icon mr-3"><i class="fas fa-user-check"></i></div>
                    <div class="media-body">
                        <h4 class="item-title">Product Designers</h4>
                        <div class="item-desc">Learn lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                            sodales sit amet neque sit amet molestie.
                        </div>
                    </div><!--//media-body-->
                </div><!--//item-->
            </div><!--//audience-->
        </div><!--//container-->
    </section><!--//audience-section-->

    <section class="form-section">
        <div class="container">
            <div class="lead-form-wrapper single-col-max mx-auto theme-bg-light rounded p-5">
                <h2 class="form-heading text-center">Get A Free Preview</h2>
                <div class="form-intro text-center mb-3">Sign up to get a free preview of the book. <br>You can offer
                    visitors free book previews to generate leads.
                </div>
                <div class="form-wrapper">
                    <form class="form-inline justify-content-center flex-wrap">
                        <div class="form-group mr-md-2 mb-3 mb-md-0">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control " id="email" placeholder="Your Email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-submit mb-3 mb-md-0">Send</button>
                    </form>
                </div><!--//form-wrapper-->
            </div><!--//lead-form-wrapper-->
        </div><!--//container-->
    </section><!--//form-section-->

    <section id="reviews-section" class="reviews-section py-5">
        <div class="container">
            <h2 class="section-heading text-center">Book Reviews</h2>
            <div class="section-intro text-center single-col-max mx-auto mb-5">See what our readers are saying.</div>
            <div class="row justify-content-center">
                <div class="item col-12 col-lg-4 p-3 mb-4">
                    <div class="item-inner theme-bg-light rounded p-4">

                        <blockquote class="quote">
                            "Excellent Book! Add your book review here consectetur adipiscing elit. Aliquam euismod nunc
                            porta urna facilisis tempor. "
                        </blockquote><!--//item-->
                        <div class="source media flex-column flex-md-row align-items-center">
                            <img class="source-profile mr-md-3"
                                 src="https://demos.onepagelove.com/html/devbook/assets/images/profiles/profile-1.png"
                                 alt="">
                            <div class="source-info media-body text-center text-md-left">
                                <div class="source-name">James Doe</div>
                                <div class="soure-title">Co-Founder, Startup Week</div>
                            </div>
                        </div><!--//source-->
                        <div class="icon-holder"><i class="fas fa-quote-right"></i></div>
                    </div><!--//inner-->
                </div><!--//item-->
                <div class="item col-12 col-lg-4 p-3 mb-4">
                    <div class="item-inner theme-bg-light rounded p-4">
                        <blockquote class="quote">
                            "Great Book! Add your book review here consectetur adipiscing elit. Aliquam euismod nunc
                            porta urna facilisis tempor. Praesent mauris neque."
                        </blockquote><!--//item-->
                        <div class="source media flex-column flex-md-row align-items-center">
                            <img class="source-profile mr-md-3"
                                 src="https://demos.onepagelove.com/html/devbook/assets/images/profiles/profile-2.png"
                                 alt="">
                            <div class="source-info media-body text-center text-md-left">
                                <div class="source-name">Jean Doe</div>
                                <div class="soure-title">Co-Founder, Company Tristique</div>
                            </div>
                        </div><!--//source-->
                        <div class="icon-holder"><i class="fas fa-quote-right"></i></div>
                    </div><!--//inner-->
                </div><!--//item-->
                <div class="item col-12 col-lg-4 p-3 mb-4">
                    <div class="item-inner theme-bg-light rounded p-4">
                        <blockquote class="quote">
                            "Excellent Book! Add your book review here consectetur adipiscing elit. Pellentesque ac leo
                            turpis. Phasellus imperdiet id ligula tempor imperdiet."
                        </blockquote><!--//item-->
                        <div class="source media flex-column flex-md-row align-items-center">
                            <img class="source-profile mr-md-3"
                                 src="https://demos.onepagelove.com/html/devbook/assets/images/profiles/profile-3.png"
                                 alt="">
                            <div class="source-info media-body text-center text-md-left">
                                <div class="source-name">Tom Doe</div>
                                <div class="soure-title">Product Designer, Company Lorem</div>
                            </div>
                        </div><!--//source-->
                        <div class="icon-holder"><i class="fas fa-quote-right"></i></div>
                    </div><!--//inner-->
                </div><!--//item-->
                <div class="item col-12 col-lg-4 p-3 mb-4">
                    <div class="item-inner theme-bg-light rounded p-4">
                        <blockquote class="quote">
                            "Another book review here consectetur adipiscing elit. Pellentesque ac leo turpis. Phasellus
                            imperdiet id ligula tempor imperdiet."
                        </blockquote><!--//item-->
                        <div class="source media flex-column flex-md-row align-items-center">
                            <img class="source-profile mr-md-3"
                                 src="https://demos.onepagelove.com/html/devbook/assets/images/profiles/profile-4.png"
                                 alt="">
                            <div class="source-info media-body text-center text-md-left">
                                <div class="source-name">Alice Doe</div>
                                <div class="soure-title">App Developer, Company Ipsum</div>
                            </div>
                        </div><!--//source-->
                        <div class="icon-holder"><i class="fas fa-quote-right"></i></div>
                    </div><!--//inner-->
                </div><!--//item-->
                <div class="item col-12 col-lg-4 p-3 mb-4">
                    <div class="item-inner theme-bg-light rounded p-4">
                        <blockquote class="quote">
                            "Another book review here consectetur adipiscing elit. Pellentesque ac leo turpis. Phasellus
                            imperdiet id ligula tempor imperdiet."
                        </blockquote><!--//item-->
                        <div class="source media flex-column flex-md-row align-items-center">
                            <img class="source-profile mr-md-3"
                                 src="https://demos.onepagelove.com/html/devbook/assets/images/profiles/profile-5.png"
                                 alt="">
                            <div class="source-info media-body text-center text-md-left">
                                <div class="source-name">Sam Doe</div>
                                <div class="soure-title">Co-Founder, Company Integer</div>
                            </div>
                        </div><!--//source-->
                        <div class="icon-holder"><i class="fas fa-quote-right"></i></div>
                    </div><!--//inner-->
                </div><!--//item-->
            </div><!--//row-->
            <div class="text-center">
                <a class="btn btn-primary"
                   href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devbook-free-bootstrap-4-book-ebook-landing-page-template-for-developers/">Get
                    Your Copy Today</a>
            </div>
        </div><!--//container-->
    </section><!--//reviews-section-->


@endsection