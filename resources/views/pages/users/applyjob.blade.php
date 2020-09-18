@extends('.pages.layout')
@section('content')

    <div class="tr-profile section-padding">
        <div class="container">
            <div class="row">
                @include('pages.users.siderbar-user')
                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in show active account-info" id="account-info">
                            <div class="tr-fun-fact">
                            </div>
                            @foreach ($listapplyjob as $value)
                                <div role="tabpanel" class="tab-pane apply-job active show" id="archived">
                                    <div class="job-item remove-item">
                                        <div class="job-info">
                                            <div class="left-content">
                                                <div class="clearfix">
                                                    <div class="company-logo">
                                                        @foreach ($company as $com )
                                                        @if ($value->applyjob->company_user_id == $com['id'])
                                                        <img src="{{ $com->avatar }}" width="50" height="50" alt="images"
                                                        class="img-fluid">
                                                        @endif
                                                        @endforeach

                                                    </div>
                                                    <span class="tr-title">
                                                        <a style="text-transform: capitalize"
                                                            href="{{ route('detail', ['id' => $value->applyjob->id]) }}">{{ $value->applyjob->job_name }}</a><span>{{ $value->companyuser->name }}</span>
                                                    </span>
                                                    <span class="btn btn-primary">{{ $value->applyjob->formality }}</span>
                                                </div>
                                                <ul class="tr-list job-meta">
                                                    <li><span><i class="fa fa-map-signs"
                                                                aria-hidden="true"></i></span>{{ $value->applyjob->address }}
                                                    </li>
                                                    <li><span><i class="fa fa-briefcase"
                                                                aria-hidden="true"></i></span>{{ $value->applyjob->experience }}
                                                    </li>
                                                    @if ($value->applyjob->salary_type == 'Từ')
                                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>
                                                            {{ $value->applyjob->salary_from }}tr
                                                        </li>
                                                    @elseif($value->applyjob->salary_type == "Trong Khoảng")
                                                        <li><span><i class="fa fa-money"
                                                                    aria-hidden="true"></i></span>{{ $value->applyjob->salary_from }}-{{ $value->applyjob->salary_to }}tr
                                                        </li>
                                                    @else
                                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>
                                                            Lên đến:{{ $value->applyjob->salary_from }}tr
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="right-content">
                                                <a href="{{ route('unapplyjob', $value->applyjob->id) }}"
                                                    class="btn btn-danger">Hủy ứng tuyển</a>
                                                <span class="applied"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
