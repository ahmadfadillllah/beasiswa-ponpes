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
                    <h4 class="mb-sm-0 font-size-18">Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm order-2 order-sm-1">
                                <div class="d-flex align-items-start mt-3 mt-sm-0">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xl me-3">
                                            <img src="{{ asset('admin') }}/assets/images/users/avatar-1.jpg" alt="" class="img-fluid rounded-circle d-block">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div>
                                            <h5 class="font-size-16 mb-1">{{ Auth::user()->name }}</h5>
                                            <p class="text-muted font-size-13">{{ Auth::user()->role }}</p>

                                            <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                                <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{ Auth::user()->email }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ganti Password</h4>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div>
                            <form action="{{ route('profile.updatepassword') }}" method="POST">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="choices-single-default" class="form-label font-size-13 text-muted">Password Lama</label>
                                            <input class="form-control" type="password" name="password_lama" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="choices-single-default" class="form-label font-size-13 text-muted">Password Baru</label>
                                            <input class="form-control" type="text" name="password_baru" required>
                                        </div>
                                    </div>
                                </div>
                            <!-- end row -->

                            <button type="submit" class="btn btn-dark waves-effect waves-light">
                                <i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> Update Password
                            </button>
                            </form>
                        </div>
                        <!-- Single select input Example -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    <!-- end main content-->
@include('dashboard.layout.footer')
