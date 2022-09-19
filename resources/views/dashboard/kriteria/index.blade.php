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
            <div class="col-xl-12 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <span class="text-muted mb-12 lh-1 d-block text-truncate">Notification</span>
                                <h6 class="mb-3">
                                    Hai {{ Auth::user()->name }}, Selamat datang di halaman kriteria!
                                </h6>
                                <h6 class="mb-3">
                                    Status anda saat ini: <b>{{ Auth::user()->status }}</b>
                                </h6>
                                @if (Auth::user()->status == 'Belum Menginputkan Kriteria')
                                <h6 class="mb-12">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-alert-outline me-2"></i>
                                        Maaf anda belum mengisi kriteria, silahkan mengisi form dibawah ini...
                                    </div>
                                </h6>
                                @endif
                                @if (Auth::user()->status == 'Diterima')
                                <h6 class="mb-12">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-alert-outline me-2"></i>
                                        Selamat {{ Auth::user()->name }}, kamu berhak mendapatkan beasiswa... untuk info lebih lanjut silahkan menghubungi Staf Sekolah
                                    </div>
                                </h6>
                                @endif
                                @if (Auth::user()->status == 'Ditolak')
                                <h6 class="mb-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-alert-outline me-2"></i>
                                        Mohon maaf {{ Auth::user()->name }}, saat ini kamu belum diterima, jangan berkecil hati tetap semangat
                                    </div>
                                </h6>
                                @endif
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div>
            <!-- end row-->
            @if (Auth::user()->status == 'Belum Menginputkan Kriteria')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Input Kriteria</h4>
                        </div>
                        <!-- end card header -->

                        <div class="card-body">
                            <div>
                                <h5 class="font-size-14 mb-3">Isi dengan sejujur-jujurnya!</h5>
                                <form action="{{ route('kriteria.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">

                                        <div class="col-lg-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">ID Siswa</label>
                                                <input class="form-control" type="text" name="id_siswa" value="{{ $siswa->id }}" required readonly>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Rata - Rata Nilai Raport</label>
                                                <input class="form-control" type="text" name="nilai_raport" required>
                                                @error('nilai_raport')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Perilaku</label>
                                                <select class="form-control"
                                                    id="choices-single-default" name="perilaku"
                                                    placeholder="This is a search placeholder" required>
                                                    <option value="0" selected>Tidak ada alfa</option>
                                                    <option value="1">1 kali alfa</option>
                                                    <option value="2">2 kali alfa</option>
                                                    <option value="3">3 kali alfa</option>
                                                    <option value="4">4 kali alfa</option>
                                                    <option value="5">5 kali alfa</option>
                                                    <option value="6">6 kali alfa</option>
                                                    <option value="7">7 kali alfa</option>
                                                    <option value="8">8 kali alfa</option>
                                                    <option value="9">9 kali alfa</option>
                                                </select>
                                                @error('perilaku')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Penghasilan Orang Tua (Rp)</label>
                                                <input class="form-control" type="text" name="penghasilan_orang_tua" id="inputku" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Tanggungan Orang Tua</label>
                                                <select class="form-control"
                                                    id="choices-single-default" name="tanggungan_orang_tua"
                                                    placeholder="This is a search placeholder" required>
                                                    <option value="0" selected>Tidak ada tanggungan</option>
                                                    <option value="1">1 orang</option>
                                                    <option value="2">2 orang</option>
                                                    <option value="3">3 orang</option>
                                                    <option value="4">4 orang</option>
                                                    <option value="5">5 orang</option>
                                                    <option value="6">6 orang</option>
                                                    <option value="7">7 orang</option>
                                                    <option value="8">8 orang</option>
                                                    <option value="9">9 orang</option>
                                                </select>
                                                @error('tanggungan_orang_tua')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Pekerjaan Orang Tua</label>
                                                <select class="form-control"
                                                    id="choices-single-default" name="pekerjaan_orang_tua"
                                                    placeholder="This is a search placeholder" required>
                                                    <option value="Tidak Bekerja" selected>Tidak Bekerja</option>
                                                    <option value="Petani">Petani</option>
                                                    <option value="Guru">Guru</option>
                                                    <option value="Pedagang">Pedagang</option>
                                                    <option value="Lain-lain">Lain-lain</option>
                                                </select>
                                                @error('pekerjaan_orang_tua')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Kondisi Orang Tua</label>
                                                <select class="form-control"
                                                    id="choices-single-default" name="kondisi_orang_tua"
                                                    placeholder="This is a search placeholder" required>
                                                    <option value="Yatim Piatu" selected>Yatim Piatu</option>
                                                    <option value="Yatim">Yatim</option>
                                                    <option value="Piatu">Piatu</option>
                                                    <option value="Cerai">Cerai</option>
                                                    <option value="Lengkap">Lengkap</option>
                                                </select>
                                                @error('kondisi_orang_tua')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="col-lg-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Surat Keterangan Tidak Mampu</label>
                                                <input class="form-control" type="file" name="surat_keterangan_tidak_mampu" required>
                                                <p>File harus dalam bentuk gambar</p>
                                            </div>
                                            @error('surat_keterangan_tidak_mampu')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div> --}}
                                    </div>
                                <!-- end row -->

                                <button type="submit" class="btn btn-dark waves-effect waves-light">
                                    <i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> Kirim
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
            @endif
            <!-- end row -->




        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <!-- end main content-->
    <script type="text/javascript">
    function tandaPemisahTitik(b){
var _minus = false;
if (b<0) _minus = true;
b = b.toString();
b=b.replace(".","");
b=b.replace("-","");
c = "";
panjang = b.length;
j = 0;
for (i = panjang; i > 0; i--){
j = j + 1;
if (((j % 3) == 1) && (j != 1)){
c = b.substr(i-1,1) + "." + c;
} else {
c = b.substr(i-1,1) + c;
}
}
if (_minus) c = "-" + c ;
return c;
}

function numbersonly(ini, e){
if (e.keyCode>=49){
if(e.keyCode<=57){
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
ini.value = tandaPemisahTitik(b);
return false;
}
else if(e.keyCode<=105){
if(e.keyCode>=96){
//e.keycode = e.keycode - 47;
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
ini.value = tandaPemisahTitik(b);
//alert(e.keycode);
return false;
}
else {return false;}
}
else {
return false; }
}else if (e.keyCode==48){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==95){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==8 || e.keycode==46){
a = ini.value.replace(".","");
b = a.replace(/[^\d]/g,"");
b = b.substr(0,b.length -1);
if (tandaPemisahTitik(b)!=""){
ini.value = tandaPemisahTitik(b);
} else {
ini.value = "";
}

return false;
} else if (e.keyCode==9){
return true;
} else if (e.keyCode==17){
return true;
} else {
//alert (e.keyCode);
return false;
}

}
</script>
    @include('dashboard.layout.footer')
