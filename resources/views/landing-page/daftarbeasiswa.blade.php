@include('landing-page.layout.header')
<section class="contact-page-section pt-130 rpt-100 pb-150 rpb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area wow fadeInRight delay-0-2s">
                    <div class="section-title">
                        <span class="sub-title">Daftar Beasiswa</span>
                        <h2>Daftarkan Dirimu Segera!!!</h2>
                        <h6>Harap mengisi semua form ini dengan jujur.</h6>
                        @if (session('notif'))
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <strong>Notification!</strong> {{ session('notif') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endif
                    </div>
                    <form id="contact-page-form" class="contact-form-three pt-35"
                        action="{{ route('landing-page.prosesdaftarbeasiswa') }}" method="post">
                        @csrf()
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nim" class="form-control" placeholder="NIM" required="">
                                </div>
                                @error('nim')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nama_lengkap" class="form-control"
                                        placeholder="Nama Lengkap" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        placeholder="Tempat Lahir" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        placeholder="Tanggal Lahir" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example"
                                        name="jenis_kelamin">
                                        <option selected>Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="agama" class="form-control" placeholder="Agama"
                                        required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nama_wali" class="form-control"
                                        placeholder="Nama Orang Tua / Wali" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="no_hp" class="form-control" placeholder="No. Handphone"
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="alamat" rows="4" class="form-control" placeholder="Alamat"
                                        required=""></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button type="button" class="theme-btn" data-toggle="modal" data-target="#exampleModal">
                                        Lanjut <i class="fas fa-arrow-right"></i>
                                      </button>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Kriteria</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <label>Rata-rata Nilai Rapor</label>
                                        <div class="form-group">
                                            <input type="text" name="nilai_rapor" class="form-control" placeholder="90.8"
                                                required="">
                                        </div>
                                        <label>Perilaku</label>
                                        <div class="form-group">
                                            <input type="number" name="perilaku" class="form-control" placeholder="2"
                                                required="">
                                        </div>
                                        <label>Penghasilan Orang Tua dalam 1 bulan</label>
                                        <div class="form-group">
                                            <input type="number" name="penghasilan_orang_tua" class="form-control" placeholder="2500000"
                                                required="">
                                        </div>
                                        <label>Tanggungan Orang Tua</label>
                                        <div class="form-group">
                                            <input type="number" name="tanggungan_orang_tua" class="form-control" placeholder="4"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@include('landing-page.layout.footer');
