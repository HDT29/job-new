@extends('pages.layout-company')
@section('title','Thêm Công Việc')
@section('content')
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.company_users.siderbar')
                <form action="{{route('post-userpass')}}" class="tr-form" method="post" enctype="multipart/form-data" novalidate>
                    {{ csrf_field() }}

                    <div class="section display-information">
                        <div class="title title-after">
                            <div class="icon"><img src="frontend/images/icons/2.png" alt="Icon" class="img-fluid"></div>
                            <span>Your display Information</span>
                        </div>

                        <ul class="tr-list account-details">

                            <div class="form-group">
                                <li>Mật khẩu cũ
                                    <input type="password" class="form-control" name="password" value="">
                                    @if( $errors->first('password'))
                                        <span class="text-danger">{{ $errors->first('password')}}</span>
                                    @endif
                                    @if(isset($mess))<span class="text-danger">{{ $mess }}</span>
                                    @endif
                                </li>
                            </div>
                            <div class="form-group">
                                <li>Mật khẩu mới
                                    <input type="password" class="form-control" name="newpass" value="">
                                    @if( $errors->first('newpass'))
                                        <span class="text-danger">{{ $errors->first('newpass')}}</span>
                                    @endif
                                </li>
                            </div>
                            <div class="form-group">
                                <li>Nhập lại mật khẩu
                                    <input type="password" class="form-control" name="repass_confirmation" value="">
                                    @if( $errors->first('repass_confirmation'))
                                        <span class="text-danger">{{ $errors->first('repass_confirmation')}}</span>
                                    @endif
                                </li>
                            </div>



                            <p>
                                <button  class="btn btn-primary" type="submit">Submit</button>
                            </p>


                        </ul>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection