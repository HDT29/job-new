<div class="col-md-4 col-lg-3">
    <div class="tr-sidebar">
        <ul class="nav nav-tabs profile-tabs section" role="tablist">
            <li role="presentation"><a href="{{ route('userprofile') }}" aria-controls="account-info"
                    role="tab"><i class="fa fa-life-ring" aria-hidden="true"></i> Thông tin tài khoản</a>
            </li>
            <!-- <li role="presentation"><a href="#resume" aria-controls="resume" role="tab"><span><i class="fa fa-user-o" aria-hidden="true"></i></span> My Resume</a></li> -->
            <li role="presentation"><a href="{{ route('edit-profile') }}"><span><i
                            class="fa fa-pencil-square-o" aria-hidden="true"></i></span> Cập nhật tài
                    khoản</a></li>
            <li role="presentation"><a href="{{ route('changepass') }}"><span><i class="fa fa-pencil "
                            aria-hidden="true"></i></span> Đổi mật khẩu</a></li>
            <li role="presentation"><a href="{{ route('userbookmark') }}" aria-controls="bookmark"
                    role="tab"><span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span> Bài viết đã
                    lưu</a></li>
            <li role="presentation"><a href="{{ route('userapplyjob') }}" aria-controls="archived"><span><i
                            class="fa fa-clone" aria-hidden="true"></i></span> Tin đã ứng tuyển</a></li>
            <!-- <li role="presentation"><a href="#close-account" aria-controls="close-account" role="tab" ><span><i class="fa fa-scissors" aria-hidden="true"></i></span> Close Account</a></li> -->
        </ul>
        <a href="#" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i>
            <span>Tải xuống CV</span></a>
    </div>
</div>
