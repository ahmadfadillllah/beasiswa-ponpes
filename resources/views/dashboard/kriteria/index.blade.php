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
                    <h4 class="mb-sm-0 font-size-18">Kriteria</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kriteria</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">Tambah Kriteria</button>
                    </div>

                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Tambah Kriteria</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label">Nilai Rapor</label>
                                                    <input class="form-control" type="number" value="42" id="example-number-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Perilaku</label>
                                                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label">Penghasilan Orang Tua</label>
                                                    <input class="form-control" type="number" value="42" id="example-number-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label">Jumlah Tanggungan Orang Tua</label>
                                                    <input class="form-control" type="number" value="42" id="example-number-input">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-number-input" class="form-label">Jumlah Saudara</label>
                                                    <input class="form-control" type="number" value="42" id="example-number-input">
                                                </div>
                                                <button type="button" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bx-thumb-up label-icon"></i> Tambah</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nilai Rapor</th>
                                        <th>Perilaku</th>
                                        <th>Penghasilan Orang Tua</th>
                                        <th>Tanggungan Orang Tua</th>
                                        <th>Jumlah Saudara</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="button" class="btn btn-warning waves-effect waves-light">
                                                    <i class="bx bx-pencil font-size-16 align-middle me-2"></i>Edit
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                                    <i class="bx bx-trash font-size-16 align-middle me-2"></i>Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="button" class="btn btn-warning waves-effect waves-light">
                                                    <i class="bx bx-pencil font-size-16 align-middle me-2"></i>Edit
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                                    <i class="bx bx-trash font-size-16 align-middle me-2"></i>Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="button" class="btn btn-warning waves-effect waves-light">
                                                    <i class="bx bx-pencil font-size-16 align-middle me-2"></i>Edit
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                                    <i class="bx bx-trash font-size-16 align-middle me-2"></i>Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="button" class="btn btn-warning waves-effect waves-light">
                                                    <i class="bx bx-pencil font-size-16 align-middle me-2"></i>Edit
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                                    <i class="bx bx-trash font-size-16 align-middle me-2"></i>Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>Table cell</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="button" class="btn btn-warning waves-effect waves-light">
                                                    <i class="bx bx-pencil font-size-16 align-middle me-2"></i>Edit
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                                    <i class="bx bx-trash font-size-16 align-middle me-2"></i>Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    <!-- end main content-->
@include('dashboard.layout.footer')
