<header class="tr-header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>
                <a class="navbar-brand" href="{{URL::to('/2')}}"><img  src="frontend/images/logo.png" width="120" height="40" ></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav">
                    </li>
                    <li><a href="{{URL::to('/2')}}">Giới thiệu</a></li>
                    {{-- <li><a href="{{route('pricing.get.list')}}">Dịch Vụ</a></li> --}}
                    <li><a href="{{ route('company.get.searchuser') }}">Tìm ỨNG VIÊN<span style="color:#ffffff;background:orangered;padding: 2px;border-radius: 5px;text-trasform: none;margin-left: 5px;">HOT</span></a></li>
                    <li><a href="{{route('contact.get.form')}}">Liên Hệ</a>
                    </li>
                </ul>

            </div>
            <div class="navbar-right">

                <ul class="sign-in tr-list" >
                    @if ( Auth::guard('company_user')->check())
                        <li><i class="fa fa-user"></i><a   href="{{route('company.get.index')}}">{{(Auth::guard('company_user')->user()->name)}}</a></li>
                        <li><a href="{{route('logout-employer')}}">Đăng Xuất</a></li>
                    @else
                        <li><a href="{{route('signin-employer')}}"></i> Đăng Nhập</a></li>

                        <li><a href="{{route('add-employer')}}">Đăng Ký</a></li>
                    @endif
                </ul>
                <a href="{{URL::to('/')}}" class="btn btn-primary">Người Tìm Việc<br>
                    <span style="text-transform: capitalize">Tìm Việc & Tạo Hồ Sơ</span>
                </a>
            </div>
        </div>
    </nav>
</header>
