@extends('pages.layout-company')
@section('title','Thêm Công Việc')
@section('content')
    <div class="tr-breadcrumb bg-image section-before">
        <div class="container">
            <div class="breadcrumb-info text-center">
                <div class="page-title">
                    <h1 style="color: aliceblue">Liên hệ</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.html">Trang chủ</a></li>
                    <li class="active">Liên Hệ</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">

            <div class="contact-section">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section">
                            <span class="tr-title">Liên Hệ</span>
                            @if(session('done'))
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{session('done')}}
                                </div>
                            @endif
                            <p>Liên hệ với đội ngũ nhân viên của chúng tôi ngay</p>
                            <form method="post" action="{{route('contact.post.form')}}" class="tr-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="fullname" class="form-control" required="required" placeholder="Họ Và Tên">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" required="required" placeholder="Email liên hệ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" required="required" placeholder="Tiêu đề">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="status" value="0">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" required="required" rows="5" placeholder="Nội dung muốn gửi"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>

                            </form>
                        </div>
                        @if (count($errors) >0)

                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}<br>
                                </div>
                                @endforeach

                        @endif
                    </div>
                    <div class="col-md-4">
                        <div class="section">
                            <span class="tr-title">Thông tin liên hệ</span>
                            <p>Hãy liên lạc với chúng tôi khi bạn gặp các vấn đề thắc mắc cần giải đáp.</p>
                            @foreach($websetting as $webset)
                            <ul class="tr-list info-list">
                                <li class="media"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i> <span class="media-body">{{$webset->address}}</span></li>
                                <li class="media"><i class="fa fa-phone fa-lg" aria-hidden="true"></i> <span class="media-body">{{$webset->phone}}</span></li>
                                <li class="media"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> <span class="media-body">{{$webset->email}}</span></li>
                                <li class="media"><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> <span class="media-body">Làm việc :{{$webset->time_working}}</span></li>
                            </ul>
                            @endforeach
                            <span class="tr-title">Trang mạng xã hội</span>
                            <div class="social">
                                <ul class="tr-list">
                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function xoaSanPham(){
            var conf=confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không?");
            return conf;
        }
        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 3000);
    </script>


@endsection