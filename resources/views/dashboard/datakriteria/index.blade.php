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
                    <h4 class="mb-sm-0 font-size-18">Data Kriteria</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Kriteria</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="nilairatarataModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Nilai rata-rata raport</h4>
                            </div>
                            {{-- <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" data-target="#nilairatarataModal" style="float:right;">Tambah Kriteria</button>
                            </div> --}}
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead>
                                    <tr>
                                        <th>Kondisi</th>
                                        <th>Bobot</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($C1 as $item)
                                        <tr>
                                            <th scope="row">{{ $item->kondisi }}</th>
                                            <td>{{ $item->bobot }}</td>
                                            <td>{{ $item->nilai }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="perilakusiswaModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Perilaku Siswa</h4>
                            </div>
                            {{-- <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" data-target="#perilakusiswaModal" style="float:right;">Tambah Kriteria</button>
                            </div> --}}
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead>
                                    <tr>
                                        <th>Kondisi</th>
                                        <th>Bobot</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($C2 as $item)
                                        <tr>
                                            <th scope="row">{{ $item->kondisi }} alfa</th>
                                            <td>{{ $item->bobot }}</td>
                                            <td>{{ $item->nilai }}</td>
                                        </tr>
                                    @endforeach
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

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="penghasilanorangtuaModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Penghasilan Orang Tua</h4>
                            </div>
                            {{-- <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" data-target="#penghasilanorangtuaModal" style="float:right;">Tambah Kriteria</button>
                            </div> --}}
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead>
                                    <tr>
                                        <th>Kondisi</th>
                                        <th>Bobot</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($C3 as $item)
                                        <tr>
                                            <th scope="row">{{ $item->kondisi }}</th>
                                            <td>{{ $item->bobot }}</td>
                                            <td>{{ $item->nilai }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="jumlahtanggunganorangtuaModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Jumlah Tanggungan Orang Tua</h4>
                            </div>
                            {{-- <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" data-target="#jumlahtanggunganorangtuaModal" style="float:right;">Tambah Kriteria</button>
                            </div> --}}
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead>
                                    <tr>
                                        <th>Kondisi</th>
                                        <th>Bobot</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($C4 as $item)
                                        <tr>
                                            <th scope="row">{{ $item->kondisi }} orang</th>
                                            <td>{{ $item->bobot }}</td>
                                            <td>{{ $item->nilai }}</td>
                                        </tr>
                                    @endforeach
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

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="pekerjaanorangtuaModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Pekerjaan Orang Tua</h4>
                            </div>
                            {{-- <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" data-target="#pekerjaanorangtuaModal" style="float:right;">Tambah Kriteria</button>
                            </div> --}}
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead>
                                    <tr>
                                        <th>Kondisi</th>
                                        <th>Bobot</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($C5 as $item)
                                        <tr>
                                            <th scope="row">{{ $item->kondisi }}</th>
                                            <td>{{ $item->bobot }}</td>
                                            <td>{{ $item->nilai }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="kondisiorangtuaModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
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
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Kondisi Orang Tua</h4>
                            </div>
                            {{-- <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg" data-target="#kondisiorangtuaModal" style="float:right;">Tambah Kriteria</button>
                            </div> --}}
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">

                                <thead>
                                    <tr>
                                        <th>Kondisi</th>
                                        <th>Bobot</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($C6 as $item)
                                        <tr>
                                            <th scope="row">{{ $item->kondisi }}</th>
                                            <td>{{ $item->bobot }}</td>
                                            <td>{{ $item->nilai }}</td>
                                        </tr>
                                    @endforeach
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
