@extends('.pages.layout')
@section('content')


    <div class="tr-job-posted section-padding">
        <div class="container">
            @foreach ($job as $j)

                <div role="tabpanel" class="tab-pane apply-job active show" id="archived">
                    <div class="job-item remove-item">
                        <div class="job-info">
                            <div class="left-content">
                                <div class="clearfix">
                                    <div class="company-logo">
                                        <img src="{{ $j->images }}" width="100px" alt="images" class="img-fluid">
                                    </div>
                                    <span class="tr-title">
                                        <a href="{{ route('detail', ['id' => $j->id]) }}">{{ $j->job_name }}</a>
                                        <span>
                                            {{ $j->companyuser->name }}
                                        </span>
                                    </span>
                                    <span class="btn btn-primary">{{ $j->formality }}</span>
                                </div>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>{{ $j->address }}
                                    </li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>{{ $j->experience }}
                                    </li>
                                    @if ($j->salary_type == 'Từ')
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>
                                            {{ $j->salary_from }}tr
                                        </li>
                                    @elseif($j->salary_type == "Trong Khoảng")
                                        <li><span><i class="fa fa-money"
                                                    aria-hidden="true"></i></span>{{ $j->salary_from }}-{{ $j->salary_to }}tr
                                        </li>
                                    @else
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>
                                            Lên đến:{{ $j->salary_from }}tr
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="right-content">

                                <span class="applied"></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
