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
                    <h4 class="mb-sm-0 font-size-18">Informasi Siswa</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Informasi Siswa</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-6">

                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('surat_keterangan_tidak_mampu') }}/{{ $data['surat_keterangan_tidak_mampu'] }}" alt="Card image cap">
                </div>

            </div><!-- end col -->
            <div class="col-md-6 col-xl-6">
                <form>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Skor</h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <input type="text" name="id_siswa" class="form-control" id="horizontal-firstname-input" hidden>
                        <input type="text" name="id_kriteria_siswa" class="form-control" id="horizontal-firstname-input" hidden>
                        <input type="text" name="id_users" class="form-control" id="horizontal-firstname-input" hidden>
                        <li class="list-group-item">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nim" class="form-control" id="horizontal-firstname-input" value="{{ $data['nim'] }}" readonly>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nilai Raport</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nilai_raport" class="form-control" id="horizontal-firstname-input" value="{{ $data['nilai_raport'] }}" readonly>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Penghasilan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="penghasilan_orang_tua" class="form-control" id="horizontal-firstname-input" value="{{ $data['penghasilan_orang_tua'] }}" readonly>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tanggungan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tanggungan_orang_tua" class="form-control" id="horizontal-firstname-input" value="{{ $data['tanggungan_orang_tua'] }}" readonly>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="pekerjaan_orang_tua" class="form-control" id="horizontal-firstname-input" value="{{ $data['pekerjaan_orang_tua'] }}" readonly>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Kondisi</label>
                                <div class="col-sm-9">
                                    <input type="text" name="kondisi_orang_tua" class="form-control" id="horizontal-firstname-input" value="{{ $data['kondisi_orang_tua'] }}" readonly>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Total</label>
                                <div class="col-sm-9">
                                    <input type="text" name="total" class="form-control" id="horizontal-firstname-input" value="{{ $data['total'] }}" readonly>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light">
                        <i class="bx bx-check-double font-size-16 align-middle me-2"></i> Terima
                    </button>
                    <button type="submit" class="btn btn-warning waves-effect waves-light">
                        <i class="bx bx-block font-size-16 align-middle me-2"></i> Tolak
                    </button>
            </form>

            </div><!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    <!-- end main content-->
@include('dashboard.layout.footer')
