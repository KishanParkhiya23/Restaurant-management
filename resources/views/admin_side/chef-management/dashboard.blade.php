@extends('layouts.contentNavbarLayout')

@section('title', 'Chef Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('extraa-css')
<meta http-equiv="refresh" content="5">
@endsection
@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>

<script type="text/javascript">
    function AutoRefresh(t) {
        setTimeout("location.reload(true);", t);
    }
</script>

@endsection


@section('content')
<div onload="JavaScript:AutoRefresh(1000);">
    <div class="row">
        <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body" style="padding: 1.25rem 1.5rem ;">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{asset('assets/img/icons/unicons/pending.png')}}" alt="chart success" class="rounded">
                        </div>
                    </div>

                    <span class="fw-semibold d-block mb-1">Pending Orders...</span>
                    <h3 class="card-title mb-2">{{count($pending)}}</h3>
                    <a href="{{route('admin.chef-management.pending.show')}}"><small class="text-success fw-semibold"><i class='bx bx-right-arrow-alt'></i> View More</small></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body" style="padding: 1.25rem 1.5rem ;">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{asset('assets/img/icons/unicons/progress.png')}}" alt="chart success" class="rounded">
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">In-process Orders</span>
                    <h3 class="card-title mb-2">{{count($process)}}</h3>
                    <a href="{{route('admin.chef-management.processing.show')}}"><small class="text-success fw-semibold"><i class='bx bx-right-arrow-alt'></i> View More</small></a>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body" style="padding: 1.25rem 1.5rem ;">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{asset('assets/img/icons/unicons/done.png')}}" alt="chart success" class="rounded">
                        </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Completed Orders</span>
                    <h3 class="card-title mb-2">{{count($completed)}}</h3>
                    <a href="{{route('admin.chef-management.completed.show')}}"><small class="text-success fw-semibold"><i class='bx bx-right-arrow-alt'></i> View More</small></a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection