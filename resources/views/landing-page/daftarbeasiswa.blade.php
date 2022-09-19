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
                    <form id="contact-page-form" class="contact-form-three pt-35" action="{{ route('landing-page.prosesdaftarbeasiswa') }}" method="post">
                        @csrf()
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="number" name="nim" class="form-control" placeholder="NIM" required="">
                                    @error('nim')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password"
                                        required="">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password"
                                        required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nama_lengkap" class="form-control"
                                        placeholder="Nama Lengkap" required="">
                                        @error('nama_lengkap')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="tempat_lahir" class="form-control"
                                        placeholder="Tempat Lahir" required="">
                                        @error('tempat_lahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="date" name="tanggal_lahir" class="form-control"
                                        placeholder="Tanggal Lahir" required="">
                                        @error('tanggal_lahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example"
                                        name="jenis_kelamin">
                                        <option selected disabled>Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="agama" class="form-control" placeholder="Agama"
                                        required="">
                                        @error('agama')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nama_wali" class="form-control"
                                        placeholder="Nama Orang Tua / Wali" required="">
                                        @error('nama_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="number" name="no_hp" class="form-control" placeholder="No. Handphone"
                                        required="">
                                        @error('no_hp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="alamat" rows="4" class="form-control" placeholder="Alamat"
                                        required=""></textarea>
                                        @error('alamat')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button type="submit" class="theme-btn">
                                        Registrasi <i class="fas fa-arrow-right"></i>
                                      </button>
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
