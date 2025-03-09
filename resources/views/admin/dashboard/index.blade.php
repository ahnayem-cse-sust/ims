@extends('layouts.admin')
@section('content')

<!-- <div class="row row-sm justify-content-center">
    <div class="col-sm-8 col-lg-8 col-xl-8">
        <img src="{{ asset('assets/images/dashboard.jpg') }}" alt="" srcset="">
    </div>
</div> -->
<!-- END ROW -->
<style>
.form-block1 {
    padding: 10px;
}
</style>

<div class="row row-sm" id="dashboard">
    <div class="col-sm-12 col-lg-12 col-xl-12">
        <!--Row-->
        <div class="row row-sm justify-content-center">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card border custom-card">
                    <div class="form-block1">
                        <div class="card-item">
                            <div class="card-item-icon card-icon">
                                <svg class="text-primary wd-30 ht-30" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M8 16h8v2H8v-2zm0-4h8v2H8v-2zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-item-title  mb-2">
                                <label class="main-content-label tx-13 mb-1">
                                    <a href="javascript:void(0)">Total User</a>
                                </label>
                            </div>
                            <div class="card-item-body">
                                <div class="card-item-stat">
                                    <h4 class="font-weight-normal number-spinner">{{ $total_user}}</h4>
                                    <small><b class="badge1 rounded-pill1 bg-success1 fs-11">&nbsp;</b><span
                                            class="px-1">&nbsp;</span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card border custom-card">
                    <div class="form-block1">
                        <div class="card-item">
                            <div class="card-item-icon card-icon">
                                <svg class="text-primary wd-30 ht-30" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M8 16h8v2H8v-2zm0-4h8v2H8v-2zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-item-title mb-2">
                                <label class="main-content-label tx-13 mb-1"><a href="javascript:void(0)">Total
                                        Requisition</a></label>
                            </div>
                            <div class="card-item-body">
                                <div class="card-item-stat">
                                    <h4 class="font-weight-normal number-spinner">
                                        {{ $total_requisition }}
                                    </h4>
                                    <small><b class="badge1 rounded-pill1 bg-success1 fs-11">&nbsp;</b><span
                                            class="px-1">&nbsp;</span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card border custom-card">
                    <div class="form-block1">
                        <div class="card-item">
                            <div class="card-item-icon card-icon">
                                <svg class="text-primary wd-30 ht-30" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M8 16h8v2H8v-2zm0-4h8v2H8v-2zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-item-title mb-2">
                                <label class="main-content-label tx-13 mb-1"><a href="javascript:void(0)">Pending
                                        Requisition</a></label>
                            </div>
                            <div class="card-item-body">
                                <div class="card-item-stat">
                                    <h4 class="font-weight-normal number-spinner">
                                        {{ $total_pending_requisition }}
                                    </h4>
                                    <small><b class="badge1 rounded-pill1 bg-success1 fs-11">&nbsp;</b><span
                                            class="px-1">&nbsp;</span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <div class="card border custom-card">
                    <div class="form-block1">
                        <div class="card-item">
                            <div class="card-item-icon card-icon">
                                <svg class="text-primary wd-30 ht-30" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M8 16h8v2H8v-2zm0-4h8v2H8v-2zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                    </path>
                                </svg>
                            </div>
                            <div class="card-item-title mb-2">
                                <label class="main-content-label tx-13 mb-1"><a href="javascript:void(0)">Running
                                        Job</a></label>
                            </div>
                            <div class="card-item-body">
                                <div class="card-item-stat">
                                    <h4 class="font-weight-normal number-spinner">
                                        {{ $total_job }}
                                    </h4>
                                    <small><b class="badge1 rounded-pill1 bg-success1 fs-11">&nbsp;</b><span
                                            class="px-1">&nbsp;</span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->
    </div><!-- col end -->


</div>

@endsection
@section('scripts')
@parent
@endsection