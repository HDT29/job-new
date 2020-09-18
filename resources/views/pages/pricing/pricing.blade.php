@extends('pages.layout-company')
@section('title','Thêm Công Việc')
@section('content')



<div class="tr-pricing section-padding">
    <div class="container" id="backpricing">
        <br>
        <span style="font-size: 18px">- Bạn đang sử dụng <strong>Tài khoản thường</strong>.</span><br>
        <span style="font-size: 18px">- Hãy nâng cấp tài khoản để được sử dụng đầy đủ tính năng.</span>
        <br><br>

        <div class="row" id="backpricing2">
            <div class="col-md-12 col-lg-4"></div>
            <div class="col-md-12 col-lg-4">
                <div class="pricing">
                    <div class="most-popular">
                        <span>Tiếm kiệm 83%</span>
                    </div>
                    <span style="text-transform: uppercase;font-weight: bold">Tài Khoản Vip</span>
                    <h1><sup>$</sup>25<span>(575.000đ)/<span style="font-size:25px;">6</span> Tháng</span></h1>
                    <div class="pricing-list">
                        <ul class="tr-list">
                            <li><i class="fa fa-check" aria-hidden="true"></i>Đăng tin tuyển dụng không giới hạn</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Xem hồ sơ ứng viên không giới hạn</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Sử dụng tất cả các dịch vụ cao cấp</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Hiển thị 2 Việc làm trên Top</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Hỗ trợ 24/7</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>Tặng Bộ Tài Liệu sử dụng exel</li>


                        </ul>


                       <CEnter><form action="{{route('charge')}}" method="post">
                            <input type="text" name="amount" value="25" hidden>
                            {{ csrf_field() }}
                            <input type="submit" id="btnpricing" class="btn btn-primary" name="submit" value="Nâng Cấp Ngay">
                        </form></CEnter>



                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4"></div>
        </div>
        <hr>
        <span style="color: crimson"> <i class="fa fa-volume-control-phone" aria-hidden="true"></i> : Nếu có vấn đề về thanh toán và nâng cấp tài khoản vui lòng liên hệ: <span style="color: darkcyan">hotro@jdn.vn</span> hoặc hotline: <span style="color: darkcyan">(024) 6680 5588</span> (Giờ hành chính)</span>
        <br><br>
    </div>
</div>
    @endsection
