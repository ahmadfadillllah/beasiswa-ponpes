
@include('landing-page.layout.header')
<section class="contact-page-section pt-130 rpt-100 pb-150 rpb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form-area wow fadeInRight delay-0-2s">
                    <div class="section-title">
                        <span class="sub-title">Daftar Beasiswa</span>
                        <h2>Daftarkan Dirimu Segera!!!</h2>
                    </div>
                    <form id="contact-page-form" class="contact-form-three pt-35" action="#" method="post">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="nim" class="form-control"
                                        placeholder="NIM" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="nama_lengkap" class="form-control"
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
                                    <input type="text" name="jenis_kelamin" class="form-control"
                                        placeholder="Jenis Kelamin" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="agama" class="form-control"
                                        placeholder="Agama" required="">
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
                                    <input type="email" name="no_hp" class="form-control"
                                        placeholder="No. Handphone" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="alamat" rows="4" class="form-control"
                                        placeholder="Alamat" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button class="theme-btn" type="submit">Kirim <i
                                            class="fas fa-arrow-right"></i></button>
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
