@include('landing-page.layout.header')
<section class="blog-standard-area pt-130 pb-160 rpt-100 rpb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-standard-wrap rmb-75">
                    <div class="blog-standard-item wow fadeInUp delay-0-2s">
                        <h2>Pengumuman Peraih Beasiswa</h2>
                        <ol>
                            @foreach ($siswa as $item)
                                <li>{{ $loop->iteration }}. {{ $item->nim }} - {{ $item->name }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('landing-page.layout.footer');
