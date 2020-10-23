<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">SIMS 0.2</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="icon-x d-block d-xl-none font-medium-4 primary toggle-icon feather icon-disc"></i><i
                        class="toggle-icon font-medium-4 d-none d-xl-block primary collapse-toggle-icon feather icon-disc"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>

    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ Request::is('/')?'active':''}}"><a href="{{url ('/')}}"><i class="feather icon-home"></i><span class="menu-title"
                        data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-box"></i><span class="menu-title"
                        data-i18n="Starter kit">Master Data</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('guru')?'active':''}}"><a href="{{ url ('guru')}}"><i></i><span
                                class="menu-item" data-i18n="2 columns">Master Guru</span></a>
                    </li>
                    <li class="{{ Request::is('siswa')?'active':''}}"><a href="{{ url ('siswa')}}"><i></i><span
                                class="menu-item" data-i18n="Fixed navbar">Master Siswa</span></a>
                    </li>
                    <li class="{{ Request::is('kelas')?'active':''}}"><a href="{{ url ('kelas')}}"><i></i><span
                                class="menu-item" data-i18n="Fixed layout">Master Kelas</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-grid"></i><span class="menu-title"
                        data-i18n="Starter kit">Data Mata Pelajaran</span></a>
                <ul class="menu-content"> 
                    {{-- <li class="{{Request::is(isset($setting->url) ? $setting->url:'kelompok_mapel')?'active':''}}"><a
                        href="{{ url ('kelompok_mapel')}}"><i></i><span class="menu-item"
                        data-i18n="2 columns">Kelompok Pelajaran</a>
                    </li>                    --}}
                    <li class="{{isset($setting->url) ? ($setting->url=='kelompok_mapel' ? 'active':''):( Request::is('kelompok_mapel')?'active':'')}}"><a
                        href="{{ url ('kelompok_mapel')}}"><i></i><span class="menu-item"
                        data-i18n="2 columns">Kelompok Pelajaran</a>
                    </li>
                    <li class="{{isset($setting->url) ? ($setting->url=='mapel' ? 'active':''):( Request::is('mapel')?'active':'')}}"><a href="{{ url ('mapel')}}"><i></i><span
                                class="menu-item" data-i18n="Fixed navbar">Mata Pelajaran</span></a>
                    </li>
                    <li class="{{isset($setting->url) ? ($setting->url=='jadwal' ? 'active':''):( Request::is('jadwal_pelajaran')?'active':'')}}"><a
                            href="{{ url ('jadwal_pelajaran')}}"><i></i><span class="menu-item"
                                data-i18n="Floating navbar">Jadwal Pelajaran</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title"
                        data-i18n="Starter kit">Data Kehadiran</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('kehadiran')?'active':''}}"><a href="{{ url ('kehadiran')}}"><i></i><span
                                class="menu-item" data-i18n="2 columns">Kehadiran</a>
                    </li>
                    <li class="{{ Request::is('presinsi_siswa')?'active':''}}"><a
                            href="{{ url ('presinsi_siswa')}}"><i></i><span class="menu-item"
                                data-i18n="Fixed navbar">Presensi Siswa</span></a>
                    </li>
                    <li class="{{ Request::is('presensi_guru')?'active':''}}"><a
                            href="{{ url ('jadwal_pelajaran')}}"><i></i><span class="menu-item"
                                data-i18n="Floating navbar">Presinsi Guru</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-credit-card"></i><span class="menu-title"
                        data-i18n="Starter kit">Data Keuangan</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('keuangan_jenis')?'active':''}}"><a
                            href="{{ url ('keuangan_jenis')}}"><i></i><span class="menu-item"
                                data-i18n="2 columns">Jenis Keuangan</a>
                    </li>
                    <li class="{{ Request::is('keuangan_transaksi')?'active':''}}"><a
                            href="{{ url ('keuangan_transaksi')}}"><i></i><span class="menu-item"
                                data-i18n="Fixed navbar">Transsaksi Keuangan</span></a>
                    </li>

                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title"
                        data-i18n="Starter kit">Data Penilainan</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('kompetensi_dasar')?'active':''}}"><a
                            href="{{ url ('kompetensi_dasar')}}"><i></i><span class="menu-item"
                                data-i18n="2 columns">Kompetensi Dasar</a>
                    </li>
                    <li class="{{ Request::is('indikastor')?'active':''}}"><a
                            href="{{ url ('indikastor')}}"><i></i><span class="menu-item"
                                data-i18n="Fixed navbar">Indikastor</span></a>
                    </li>
                    <li class="{{ Request::is('evaluasi')?'active':''}}"><a href="{{ url ('evaluasi')}}"><i></i><span
                                class="menu-item" data-i18n="2 columns">Evaluasi</a>
                    </li>
                    <li class="{{ Request::is('ketrampilan')?'active':''}}"><a
                            href="{{ url ('ketrampilan')}}"><i></i><span class="menu-item"
                                data-i18n="Fixed navbar">Ketrampilan</span></a>
                    </li>
                    <li class="{{ Request::is('pengetahuan')?'active':''}}"><a
                            href="{{ url ('pengetahuan')}}"><i></i><span class="menu-item"
                                data-i18n="Fixed navbar">Pengetahuan</span></a>
                    </li>
                    <li class="{{ Request::is('nilai_sosial')?'active':''}}"><a
                            href="{{ url ('nilai_sosial')}}"><i></i><span class="menu-item" data-i18n="2 columns">Nilai
                                Sosial</a>
                    </li>
                    <li class="{{ Request::is('nilai_spiritual')?'active':''}}"><a
                            href="{{ url ('nilai_spiritual')}}"><i></i><span class="menu-item"
                                data-i18n="Fixed navbar">Nilai Spiritual</span></a>
                    </li>
                    <li class="{{ Request::is('uts')?'active':''}}"><a href="{{ url ('uts')}}"><i></i><span
                                class="menu-item" data-i18n="Fixed navbar">Nilai UTS</span></a>
                    </li>
                    <li class="{{ Request::is('uas')?'active':''}}"><a href="{{ url ('uas')}}"><i></i><span
                                class="menu-item" data-i18n="2 columns">Nilai Uas</a>
                    </li>
                    <li class="{{ Request::is('catatan')?'active':''}}"><a href="{{ url ('catatan')}}"><i></i><span
                                class="menu-item" data-i18n="Fixed navbar">Catatan Guru</span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-settings"></i><span class="menu-title"
                        data-i18n="Starter kit">Data Setting</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('profil_sekolah')?'active':''}}"><a
                            href="{{ url ('profil_sekolah')}}"><i></i><span class="menu-item"
                                data-i18n="2 columns">Profil Sekolah</a>
                    </li>
                    <li class="{{ Request::is('akademik')?'active':''}}"><a
                        href="{{ url ('akademik')}}"><i></i><span class="menu-item"
                            data-i18n="2 columns">Tahun Akademik</a>
                </li>
                    <li class="{{ Request::is('catatan')?'active':''}}"><a href="{{ url ('catatan')}}"><i></i><span
                                class="menu-item" data-i18n="Fixed navbar">Catatan</span></a>
                    </li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-server"></i><span class="menu-title"
                        data-i18n="Starter kit">Data lain</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('agama')?'active':''}}"><a
                            href="{{ url ('agama')}}"><i></i><span class="menu-item"
                                data-i18n="2 columns">Agama</a>
                    </li>
                    <li class="{{ Request::is('negara')?'active':''}}"><a
                            href="{{ url ('negara')}}"><i></i><span class="menu-item"
                                data-i18n="Fixed navbar">Kewarganegraan</span></a>
                    </li>
                    <li class="{{ Request::is('jenis_ptk')?'active':''}}"><a
                            href="{{ url ('jenis_ptk')}}"><i></i><span class="menu-item"
                                data-i18n="2 columns">Jenis PTK</a>
                    </li>
                   

                </ul>
            </li>

            <li class=" nav-item"><a
                    href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"><i
                        class="feather icon-folder"></i><span class="menu-title"
                        data-i18n="Documentation">Documentation</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span
                        class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
            </li>
        </ul>
    </div>
</div>