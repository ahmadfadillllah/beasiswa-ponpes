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
                                        <th>Jumlah Saudara</th>
                                        <th>Pekerjaan Orang Tua</th>
                                        <th>Kondisi Orang Tua</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach ($siswa as $item)
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->nilai_raport }}</td>
                                        <td>{{ $item->perilaku }} kali alfa</td>
                                        <td>Rp{{ $item->penghasilan_orang_tua }}</td>
                                        <td>{{ $item->tanggungan_orang_tua }} orang</td>
                                        <td>{{ $item->jumlah_saudara }} orang</td>
                                        <td>{{ $item->pekerjaan_orang_tua }}</td>
                                        <td>{{ $item->kondisi_orang_tua }}</td>
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
                                        <th>Jumlah Saudara</th>
                                        <th>Pekerjaan Orang Tua</th>
                                        <th>Kondisi Orang Tua</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach ($siswa as $item)
                                    @if ($item->nilai_raport >= 90)
                                        {{$kriteria->nilai}}
                                    @endif
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $kriteria->nilai }}</td>
                                        <td>{{ $item->perilaku }}</td>
                                        <td>{{ $item->penghasilan_orang_tua }}</td>
                                        <td>{{ $item->tanggungan_orang_tua }}</td>
                                        <td>{{ $item->jumlah_saudara }}</td>
                                        <td>{{ $item->pekerjaan_orang_tua }}</td>
                                        <td>{{ $item->kondisi_orang_tua }}</td>
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
