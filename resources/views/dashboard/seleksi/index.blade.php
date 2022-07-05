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
                    <h4 class="mb-sm-0 font-size-18">Seleksi Siswa</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Seleksi</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIM</th>
                                        <th>Nilai Raport</th>
                                        <th>Perilaku</th>
                                        <th>Penghasilan Orang Tua</th>
                                        <th>Tanggungan Orang Tua</th>
                                        <th>Pekerjaan Orang Tua</th>
                                        <th>Kondisi Orang Tua</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['siswa'] as $siswa)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $siswa->nim }}</td>
                                                <td>{{ $siswa->nilai_raport }}</td>
                                                <td>{{ $siswa->perilaku }}</td>
                                                <td>{{ $siswa->penghasilan_orang_tua }}</td>
                                                <td>{{ $siswa->tanggungan_orang_tua }}</td>
                                                <td>{{ $siswa->pekerjaan_orang_tua }}</td>
                                                <td>{{ $siswa->kondisi_orang_tua }}</td>
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
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Konversi ke bobot nilai</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIM</th>
                                        <th>Nilai Raport</th>
                                        <th>Perilaku</th>
                                        <th>Penghasilan Orang Tua</th>
                                        <th>Tanggungan Orang Tua</th>
                                        <th>Pekerjaan Orang Tua</th>
                                        <th>Kondisi Orang Tua</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data['kriteria'] as $kriteria)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $kriteria->nim }}</td>
                                                <td>{{ $kriteria->nilai_raport }}</td>
                                                <td>{{ $kriteria->perilaku }}</td>
                                                <td>{{ $kriteria->penghasilan_orang_tua }}</td>
                                                <td>{{ $kriteria->tanggungan_orang_tua }}</td>
                                                <td>{{ $kriteria->pekerjaan_orang_tua }}</td>
                                                <td>{{ $kriteria->kondisi_orang_tua }}</td>
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
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Normalisasi</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIM</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['kriteria'] as $key => $a)
                                    <form action="{{ route('seleksi.save') }}" method="post">
                                        @csrf
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td name="nim">{{ $data['siswa'][$key]->nim }}</td>
                                            <td name="nilai_raport">{{ $data['benefit_nilai_raport'][$key] }}</td>
                                            <td name="perilaku">{{ $data['cost_perilaku'][$key] }}</td>
                                            <td name="penghasilan_orang_tua">{{ $data['cost_penghasilan_orang_tua'][$key] }}</td>
                                            <td name="tanggungan_orang_tua">{{ $data['benefit_tanggungan_orang_tua'][$key] }}</td>
                                            <td name="pekerjaan_orang_tua">{{ $data['benefit_pekerjaan_orang_tua'][$key] }}</td>
                                            <td name="kondisi_orang_tua">{{ $data['cost_kondisi_orang_tua'][$key] }}</td>
                                            <td name="total">{{ $data['total'][$key] }}</td>
                                            <td><button type="submit" class="btn btn-info waves-effect waves-light">Simpan</button></td>
                                        </tr>
                                    </form>
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
