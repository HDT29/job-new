@extends('pages.layout-company')
@section('title', 'Thêm Công Việc')
@section('content')
    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.company_users.siderbar')
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        @if (session('deletedone'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                {{ session('deletedone') }}
                            </div>
                        @endif
                        <div role="tabpanel" class="tab-pane bookmark active show" id="bookmark">
                            <div class="row">
                                @foreach ($userapply as $list)
                                    @foreach ($users as $us)
                                        @if ($list['user_id'] == $us['id'])
                                            <div class="col-md-4 remove-item">

                                                <div class="job-item">
                                                    <span id="confirm" class="remove-icon"><i class="fa fa-times"
                                                                aria-hidden="true"></i></span>
                                                    <div class="job-info">
                                                        <div class="company-logo">
                                                            <center><img src="images/users/{{ $us->avatar }}"
                                                                    style="border-radius: 20px;" width="200" height="150">
                                                            </center>
                                                        </div>
                                                        <span class="tr-title">
                                                            <a href="#"
                                                                style="text-transform: capitalize">{{ $us->name }}</a>

                                                        </span>
                                                        <ul class="tr-list job-meta">
                                                            <li><span><i class="fa fa-map-signs"
                                                                        aria-hidden="true"></i></span>{{ $us->birthday }}
                                                            </li>
                                                            <li><span><i class="fa fa-briefcase"
                                                                        aria-hidden="true"></i></span>Mid Level
                                                            </li>
                                                            <li><span><i class="fa fa-money"
                                                                        aria-hidden="true"></i></span>$5,000 -
                                                                $6,000</li>
                                                        </ul>

                                                        <a href="" id="btndetailcompany">Xem Hồ Sơ</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                var confirm = document.getElementById("confirm");
                                                confirm.addEventListener("click", () => {
                                                    cuteAlert({
                                                        type: "question",
                                                        title: "Confirm Title",
                                                        message: "Confirm Message",
                                                        link: "{{ route('company.get.deleteuser', $list->id) }}",
                                                        confirmText: "Okay",
                                                        cancelText: "Cancel"
                                                    }).then((e) => {
                                                        if (e == ("Thanks")) {} else {

                                                        }
                                                    })
                                                })

                                            </script>
                                        @endif

                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function xoaSanPham() {
            var conf = confirm("Bạn có chắc chắn muốn xóa sản phẩm này hay không?");
            return conf;
        }
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);
        //confirm//
        var toast = document.getElementById("toast");
        toast.addEventListener(true, ()=>{
        cuteToast({
      type: "success",
      message: "Info Message",
      timer: 5000
  })
})
    </script>

@endsection
