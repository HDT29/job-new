<div class="col-md-4 col-lg-3">
    <div class="tr-sidebar">
        <ul class="nav nav-tabs profile-tabs section" role="tablist">
            <li role="presentation"><a class="active" href="{{route('company.get.index')}}"><i class="fa fa-info-circle" aria-hidden="true"></i>Thông tin công ty</a></li>

            <li role="presentation"><a href="{{route('job.get.list')}}"><span><i class="fa fa-list" aria-hidden="true"></i></span>Công Việc Đã Đăng</a></li>
            <li role="presentation"><a href="{{route('user.get.list')}}"><span><i class="fa fa-users" aria-hidden="true"></i></span>Danh Sách Ứng Viên</a></li>
            <li role="presentation"><a href="#open-role"><span><i class="fa fa-history" aria-hidden="true"></i></span>Lịch Sử Thanh Toán</a></li>
            <li role="presentation"><a href="{{route('company.get.changepass')}}" ><span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>Đổi Mật Khẩu</a></li>
            <li id="confirm" role="presentation"><a onclick="return xoaSanPham();" href="{{ route('logout-employer') }}"><span><i class="fa fa-sign-out" aria-hidden="true"></i></span>Đăng Xuất</a></li>
            <a href="{{route('pricing.get.list')}}" class="btn btn-primary"><i class="fa fa-diamond fa-lg" aria-hidden="true"></i>
                <span style="font-size: 12px; text-transform: uppercase">Tài khoản VIP</span></a>
        </ul>
    </div>
</div>
<script>
    function xoaSanPham(){
            var conf=confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không?");
            return conf;
        }

</script>
