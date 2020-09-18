@extends('pages.layout-company')
@section('title', 'Thêm Công Việc')
@section('content')
    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.company_users.siderbar')
                <div class="col-md-8 col-lg-9">
                    <div role="tabpanel" class="tab-pane apply-job" id="archived">
                        @foreach ($jobs as $job)
                            <div class="job-item remove-item">
                                <div class="job-info">
                                    <div class="left-content">
                                        <div class="clearfix">
                                            <span class="tr-title">
                                                <a href="job-post.html">{{ $job->job_name }}</a>
                                            </span>
                                            <span>
                                                <a href="#" class="btn btn-primary">
                                                    {{ !isset($recruitment[$job->id]) ? '0' : count($recruitment[$job->id]) }}
                                                </a>
                                            </span>
                                        </div>
                                        <span class="deadline">Thời hạn nộp : {{ $job->deadline_job }}</span>
                                    </div>
                                    <div class="right-content">
                                        <a href="{{ route('company.get.detaillistuser', ['id' => $job->id]) }}" id="buttonall">Danh sách ứng viên</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

    </script>

@endsection
