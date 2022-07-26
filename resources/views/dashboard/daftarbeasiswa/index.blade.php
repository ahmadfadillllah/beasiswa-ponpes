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
                    <h4 class="mb-sm-0 font-size-18">Daftar siswa yang telah lolos kriteria</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Daftar Beasiswa</li>
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
                                        <th>Nama</th>
                                        <th>Tempat & Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nama Wali</th>
                                        <th>Status</th>
                                        @if (Auth::user()->role == 'stafsekolah' || Auth::user()->role == 'kepalasekolah')
                                        <th>Aksi</th>
                                        @endif
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
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->nama_wali }}</td>
                                        <td>{{ $item->status }}</td>
                                        @if (Auth::user()->role == 'stafsekolah' || Auth::user()->role == 'kepalasekolah')
                                        <td>
                                            <a href="{{route('daftarbeasiswa.show', $item->id) }}" class="btn btn-info waves-effect waves-light">Proses</a>
                                        </td>
                                        @endif
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
