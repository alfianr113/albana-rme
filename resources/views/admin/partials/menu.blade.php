<div class="nav-bottom">
    <div class="container">
        <h3 class="title-menu d-flex d-lg-none">
            Menu
            <div class="close-menu"> <i class="flaticon-cross"></i></div>
        </h3>
        <ul class="nav page-navigation page-navigation-info bg-white">

            <li class="nav-item submenu {{ ($amenu === "dashboard") ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="link-icon icon-home"></i>
                    <span class="menu-title">Pendaftaran</span>
                </a>
                <div class="navbar-dropdown animated fadeIn">
                    <ul>
                        <li>
                            <a href="/admin/pasien" class="{{ ($bmenu === "pasien") ? 'text-info' : '' }}">Pasien</a>
                        </li>
                        <li>
                            <a href="/admin/pendaftaran" class="{{ ($bmenu === "pendaftaran") ? 'text-info' : '' }}">Pendaftaran</a>
                        </li>
                        <li>
                            <a href="/admin/antrianKunjungan" class="{{ ($bmenu === "antriankunjungan") ? 'text-info' : '' }}">Antrian Kunjungan</a>
                        </li>
                        <li>
                            <a href="/admin/pelayananKunjungan" class="{{ ($bmenu === "pelayanankunjungan") ? 'text-info' : '' }}">Pelayanan Kunjungan</a>
                        </li>
                        
                    </ul>
                </div>
            </li>
            
            
            <li class="nav-item submenu mega-menu dropdown">
                <a class="nav-link" href="#">
                    <i class="link-icon icon-film"></i>
                    <span class="menu-title">Manajemen</span>
                </a>
                <div class="navbar-dropdown animated fadeIn">
                    <div class="col-group-wrapper row">
                        <div class="col-group col-md-4">
                            <div class="row">
                                <div class="col-12">
                                    <p class="category-heading">Bridging Data</p>
                                    <div class="submenu-item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li><a href="integrasiBPJS.html">Integrasi BPJS</a>
                                                    </li>
                                                    <li><a href="integrasiSatuSehat.html">Integrasi SatuSehat</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-group col-md-4">
                            <p class="category-heading">Kasir</p>
                            <ul class="submenu-item">
                                <li><a href="transaksiKasir.html">Transaksi Kunjungan</a></li>
                                <li><a href="serahTerimaObat.html">Transaksi Obat</a></li>
                            </ul>
                        </div>
                        <div class="col-group col-md-4">
                            <p class="category-heading">Farmasi</p>
                            <ul class="submenu-item">
                                <li><a href="daftarObat.html">Daftar Obat</a></li>
                                <li><a href="transaksiObat.html">Daftar Alkes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item submenu {{ ($amenu === "masterdata") ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="link-icon icon-disc"></i>
                    <span class="menu-title">Master Data</span>
                </a>
                <div class="navbar-dropdown animated fadeIn">
                    <ul>
                        
                        <li>
                            <a href="/admin/informasiKlinik" class="{{ ($bmenu === "informasiklinik") ? 'text-info' : '' }}">Informasi Klinik</a>
                        </li>
                        <li>
                            <a href="/admin/daftarPengguna" class="{{ ($bmenu === "pengguna") ? 'text-info' : '' }}">Pengguna Aplikasi</a>
                        </li>
                        <li>
                            <a href="/admin/daftarPenjamin" class="{{ ($bmenu === "penjamin") ? 'text-info' : '' }}">Jaminan Kesehatan</a>
                        </li>
                        <li>
                            <a href="/admin/daftarPoliklinik" class="{{ ($bmenu === "poli") ? 'text-info' : '' }}">Poliklinik</a>
                        </li>
                        <li>
                            <a href="/admin/tenagaKesehatan" class="{{ ($bmenu === "nakes") ? 'text-info' : '' }}">Tenaga Kesehatan</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item submenu">
                <a class="nav-link" href="#">
                    <i class="link-icon icon-book-open"></i>
                    <span class="menu-title">Laporan</span>
                </a>
                <div class="navbar-dropdown animated fadeIn">
                    <ul>
                        <li>
                            <a href="#">Laporan Pendapatan</a>
                        </li>
                        <li>
                            <a href="#">Laporan Kunjungan</a>
                        </li>
                        <li>
                            <a href="#">Laporan Penyakit</a>
                        </li>
                        <li>
                            <a href="#">Laporan Obat & Alkes</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item submenu">
                <a class="nav-link" href="#">
                    <i class="link-icon icon-pie-chart"></i>
                    <span class="menu-title">Grafik</span>
                </a>
                <div class="navbar-dropdown animated fadeIn">
                    <ul>
                        <li>
                            <a href="#">Grafik Pendapatan</a>
                        </li>
                        <li>
                            <a href="#">Grafik Kunjungan</a>
                        </li>
                        <li>
                            <a href="#">Grafik Penyakit</a>
                        </li>
                        <li>
                            <a href="#">Grafik Obat & Alkes</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item submenu {{ ($amenu === "klinikpintar") ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="link-icon icon-grid"></i>
                    <span class="menu-title">Klinik Pintar</span>
                </a>
                <div class="navbar-dropdown animated fadeIn">
                    <ul>
                        <li><a href="kamusObat.html">Kamus Obat Elektronik</a></li>
                        <li><a href="programPelatihan.html">Pelatihan Integrasi</a></li>
                        <li><a href="programPelatihan.html">Pelatihan Pengguna Aplikasi</a></li>
                        <li><a href="programPelatihan.html">Riwayat Versi Sistem</a></li>
                        <li><a href="/admin/jadwalDokter" class="{{ ($bmenu === "jadwaldokter") ? 'text-info' : '' }}">Jadwal Dokter</a></li>
                        <li><a href="{{ url('https://wa.me/087878789429') }}"  target="_blank">Customer Service</a></li>
                        
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>