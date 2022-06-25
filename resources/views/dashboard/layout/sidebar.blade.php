<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>
                @if (Auth::user()->role == 'stafsekolah' || Auth::user()->role == 'kepalasekolah' || Auth::user()->role == 'siswa')
                    <li>
                        <a href="{{ route('dashboard.index') }}">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard">Dashboard</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'stafsekolah')
                    <li>
                        <a href="{{ route('datakriteria.index') }}">
                            <i data-feather="layout"></i>
                            <span data-key="t-horizontal">Data Kriteria</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'siswa')
                    <li>
                        <a href="{{ route('kriteria.index') }}">
                            <i data-feather="layout"></i>
                            <span data-key="t-horizontal">Kriteria</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'stafsekolah' || Auth::user()->role == 'kepalasekolah' || Auth::user()->role == 'siswa')
                    <li>
                        <a href="{{ route('daftarbeasiswa.index') }}">
                            <i data-feather="users"></i>
                            <span data-key="t-authentication">Daftar Beasiswa</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'stafsekolah' || Auth::user()->role == 'kepalasekolah')
                    <li>
                        <a href="{{ route('seleksi.index') }}">
                            <i data-feather="sliders"></i>
                            <span data-key="t-tables">Seleksi</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'stafsekolah' || Auth::user()->role == 'siswa')
                    <li>
                        <a href="{{ route('pengumuman.index') }}">
                            <i data-feather="pie-chart"></i>
                            <span data-key="t-charts">Pengumuman</span>
                        </a>
                    </li>
                @endif
                <li class="menu-title mt-2" data-key="t-components">Elements</li>

                <li>
                    <a href="{{ route('profile.index') }}">
                        <i data-feather="users"></i>
                        <span data-key="t-charts">Profil</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('logout') }}">
                        <i data-feather="log-out"></i>
                        <span data-key="t-charts">Keluar</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<div class="main-content">
