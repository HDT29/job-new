<header class="tr-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>
                <a class="navbar-brand" href="{{URL::to('/index')}}"><img  src="frontend/images/logo.png" width="120" height="40" ></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    </li>
                    <li><a href="{{route('get.all.jobs')}}">Việc Làm <span style="color:#ffffff;background:orangered;padding: 2px;border-radius: 5px;text-transform: none">HOT</span></a></li>
                    <li><a href="listing.html">Quản Lý CV</a></li>
                    <li><a href="{{route('companys')}}">Công Ty</a></li>
                    </li>
                </ul>
            </div>
            <div class="navbar-right">

                <ul class="sign-in tr-list">
                    @if(Auth::check())
                        <li><i class="fa fa-user"></i><a href="{{route('userprofile')}}">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('logout')}}">Đăng Xuất </a></li>
                    @else
                        <li><a href="{{route('signin-user')}}"></i> Đăng Nhập</a></li>

                        <li><a href="{{route('add-signup')}}">Đăng Ký</a></li>
                    @endif
                </ul>
                <a href="{{URL::to('/2')}}" class="btn btn-primary">NHÀ TUYỂN DỤNG <br>
                    <span>Đăng tuyển & tìm hồ sơ</span>
                </a>

            </div>
        </div>
    </nav>
</header>
