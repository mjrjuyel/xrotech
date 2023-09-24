@extends('layouts.admin')
@section('content')
<h4> > RecycleBin :</h4>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="row">
            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">

                        <div class="float-end">
                            <i class="uil-envelope-alt widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Contact Message</h5>
                        @if($cm_msg->count() > 0)
                            <a href="{{ route ('dashboard.recycle.contact-message') }}"
                                class="mt-3 mb-3">
                                <h3>{{ $cm_msg->count() }}</h3>
                            </a>
                        @else
                            <h3 href="#" class="mt-3 mb-3">0</h3>
                        @endif
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">

                        <div class="float-end">
                            <i class="uil-envelope-alt widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Service</h5>
                        @if($service->count() > 0)
                            <a href="{{ route ('dashboard.recycle.service') }}" class="mt-3 mb-3">
                                <h3>{{ $service->count() }}</h3>
                            </a>
                        @else
                            <h3 href="#" class="mt-3 mb-3">0</h3>
                        @endif
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">

                        <div class="float-end">
                            <i class="uil-envelope-alt widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Ai Process Data</h5>
                        @if($process->count() > 0)
                            <a href="{{ route ('dashboard.recycle.process') }}" class="mt-3 mb-3">
                                <h3>{{ $process->count() }}</h3>
                            </a>
                        @else
                            <h3 href="#" class="mt-3 mb-3">0</h3>
                        @endif
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="row">
            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">

                        <div class="float-end">
                            <i class="uil-envelope-alt widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Technology</h5>
                        @if($technology->count() > 0)
                            <a href="{{ route ('dashboard.recycle.') }}" class="mt-3 mb-3">
                                <h3>{{ $technology->count() }}</h3>
                            </a>
                        @else
                            <h3 href="#" class="mt-3 mb-3">0</h3>
                        @endif
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">

                        <div class="float-end">
                            <i class="uil-envelope-alt widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Choose Us</h5>
                        @if($allchos->count() > 0)
                            <a href="{{ route ('dashboard.recycle.choose') }}" class="mt-3 mb-3">
                                <h3>{{ $allchos->count() }}</h3>
                            </a>
                        @else
                            <h3 href="#" class="mt-3 mb-3">0</h3>
                        @endif
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">

                        <div class="float-end">
                            <i class="uil-envelope-alt widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Portfolio Filter Type</h5>
                        @if($filter_type->count() > 0)
                            <a href="{{ route ('dashboard.recycle.fil_type') }}" class="mt-3 mb-3">
                                <h3>{{ $filter_type->count() }}</h3>
                            </a>
                        @else
                            <h3 href="#" class="mt-3 mb-3">0</h3>
                        @endif
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">

                        <div class="float-end">
                            <i class="uil-envelope-alt widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Portfolio Filter</h5>
                        @if($filter->count() > 0)
                            <a href="{{ route ('dashboard.recycle.filter') }}" class="mt-3 mb-3">
                                <h3>{{ $filter->count() }}</h3>
                            </a>
                        @else
                            <h3 href="#" class="mt-3 mb-3">0</h3>
                        @endif
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card widget-flat">
                    <div class="card-body">

                        <div class="float-end">
                            <i class="uil-envelope-alt widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Ai service</h5>
                        @if($allai->count() > 0)
                            <a href="{{ route ('dashboard.recycle.aiservice') }}" class="mt-3 mb-3">
                                <h3>{{ $allai->count() }}</h3>
                            </a>
                        @else
                            <h3 href="#" class="mt-3 mb-3">0</h3>
                        @endif
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
