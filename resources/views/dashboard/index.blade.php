@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-12 lh-1 d-block text-truncate">Notification</span>
                                <h6 class="mb-3">
                                    Selamat datang di halaman dashboard! Gunakan web ini dengan bijak.
                                </h6>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
        </div><!-- end row-->

            {{-- <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Recent Activity</h4>
                            <div class="flex-shrink-0">
                                <select class="form-select form-select-sm mb-0 my-n1">
                                    <option value="Today" selected="">Today</option>
                                    <option value="Yesterday">Yesterday</option>
                                    <option value="Week">Last Week</option>
                                    <option value="Month">Last Month</option>
                                </select>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body px-0">
                            <div class="px-3" data-simplebar style="max-height: 352px;">
                                <ul class="list-unstyled activity-wid mb-0">

                                    <li class="activity-list activity-border">
                                        <div class="activity-icon avatar-md">
                                            <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                <i class="bx bx-bitcoin font-size-24"></i>
                                            </span>
                                        </div>
                                        <div class="timeline-list-item">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 overflow-hidden me-4">
                                                    <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                    <p class="text-truncate text-muted font-size-13">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end me-3">
                                                    <h6 class="mb-1">+0.5 BTC</h6>
                                                    <div class="font-size-13">$178.53</div>
                                                </div>

                                                <div class="flex-shrink-0 text-end">
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-24" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="activity-list activity-border">
                                        <div class="activity-icon avatar-md">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="mdi mdi-ethereum font-size-24"></i>
                                            </span>
                                        </div>
                                        <div class="timeline-list-item">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 overflow-hidden me-4">
                                                    <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                    <p class="text-truncate text-muted font-size-13">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end me-3">
                                                    <h6 class="mb-1">-20.5 ETH</h6>
                                                    <div class="font-size-13">$3541.45</div>
                                                </div>

                                                <div class="flex-shrink-0 text-end">
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-24" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="activity-list activity-border">
                                        <div class="activity-icon avatar-md">
                                            <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                <i class="bx bx-bitcoin font-size-24"></i>
                                            </span>
                                        </div>
                                        <div class="timeline-list-item">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 overflow-hidden me-4">
                                                    <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                    <p class="text-truncate text-muted font-size-13">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end me-3">
                                                    <h6 class="mb-1">+0.5 BTC</h6>
                                                    <div class="font-size-13">$5791.45</div>
                                                </div>

                                                <div class="flex-shrink-0 text-end">
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-24" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="activity-list activity-border">
                                        <div class="activity-icon avatar-md">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="mdi mdi-litecoin font-size-24"></i>
                                            </span>
                                        </div>
                                        <div class="timeline-list-item">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 overflow-hidden me-4">
                                                    <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                    <p class="text-truncate text-muted font-size-13">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end me-3">
                                                    <h6 class="mb-1">-1.5 LTC</h6>
                                                    <div class="font-size-13">$5791.45</div>
                                                </div>

                                                <div class="flex-shrink-0 text-end">
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-24" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="activity-list activity-border">
                                        <div class="activity-icon avatar-md">
                                            <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                <i class="bx bx-bitcoin font-size-24"></i>
                                            </span>
                                        </div>
                                        <div class="timeline-list-item">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 overflow-hidden me-4">
                                                    <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                    <p class="text-truncate text-muted font-size-13">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end me-3">
                                                    <h6 class="mb-1">+0.5 BTC</h6>
                                                    <div class="font-size-13">$5791.45</div>
                                                </div>

                                                <div class="flex-shrink-0 text-end">
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-24" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="activity-list">
                                        <div class="activity-icon avatar-md">
                                            <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                <i class="mdi mdi-litecoin font-size-24"></i>
                                            </span>
                                        </div>
                                        <div class="timeline-list-item">
                                            <div class="d-flex">
                                                <div class="flex-grow-1 overflow-hidden me-4">
                                                    <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                    <p class="text-truncate text-muted font-size-13">
                                                        0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                    </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end me-3">
                                                    <h6 class="mb-1">+.55 LTC</h6>
                                                    <div class="font-size-13">$91.45</div>
                                                </div>

                                                <div class="flex-shrink-0 text-end">
                                                    <div class="dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-24" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else
                                                                here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div><!-- end row --> --}}
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



    <!-- end main content-->
@include('dashboard.layout.footer')
