@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-with-nav">
                        <div class="card-header">
                            <div class="row row-nav-line">
                                <ul class="nav nav-tabs nav-line nav-color-secondary w-100 pl-4" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Detail Pasien</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#pelayanan" role="tab" aria-selected="false">Status Pelayanan</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pills-home-tab">
                                
                                <div class="container">
                                    <div class="page-inner">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body pt-2">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="avatar avatar-lg m-2">
                                                                    <img src="{{ asset('img/user.png') }}" alt="..." class="avatar-img rounded">
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <h4 class="bg-info" style="color: white"><center>Tn. Ricky Togu Haholongan Gultom</center></h4>
                                                                <center>
                                                                <a href="#Print"><button type="button" class="btn btn-icon btn-round btn-primary">
                                                                    <i class="fas fa-print"></i>
                                                                </button></a>
                                                                <a href="#GeneralConsent"><button type="button" class="btn btn-icon btn-round btn-info">
                                                                    <i class="fas fa-file-signature"></i>
                                                                </button></a>
                                                                <a href="/admin/ubahPasien"><button type="button" class="btn btn-icon btn-round btn-success">
                                                                    <i class="fas fa-edit"></i>
                                                                </button></a>
                                                                <a href="#Delete"><button type="button" class="btn btn-icon btn-round btn-danger">
                                                                    <i class="fas fa-times"></i>
                                                                </button></a> <br>
                                                                </center>
                                                                
                                                            </div>
                                                            <div class="col-12">
                                                            <hr>
                                                            </div>
                                                            

                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Nomor Rekam Medis</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 00-00-90-33</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Nomor BPJS</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 8945784521025894</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Satu Sehat ID</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 2145087965874512</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">NIK</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 3578115202960003</p>
                                                            </div>

                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Tanggal Lahir</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 12-06-1996</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Tempat Lahir</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Bandung</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Jenis Kelamin</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Laki-Laki</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">No Telepon</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: +62008765678</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Pendidikan Terakhir</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: S1 (Sarjana)</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Agama</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Islam</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Email</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: togu@gmail.com</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Pekerjaan</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Wirausaha</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Status Pernikahan</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Menikah</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Suku</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Sunda</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Bahasa</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Indonesia</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body pt-2">
                                                        <div class="row">
                                                            
                                                            <div class="col-12">
                                                                <h4 class="bg-success" style="color: white"><center>Penanggung Jawab</center></h4>
                                                            </div>
                                                            <div class="col-12">
                                                            <hr>
                                                            </div>
                                                        
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Nama Lengkap</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Tn. Mochamad Aji Adi</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Hubungan Pasien</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Saudara Kandung</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Telepon</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: +620234765678</p>
                                                            </div>
                                                                                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body pt-2">
                                                        <div class="row">
                                                            
                                                            <div class="col-12">
                                                                <h4 class="bg-success" style="color: white"><center>Alamat Pasien</center></h4>
                                                            </div>
                                                            <div class="col-12">
                                                            <hr>
                                                            </div>
                                                            <div class="col-12">
                                                                <p class="text-muted mb-2"><b>Alamat Tinggal</b></p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Nama Jalan</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Wonosari Mulyo 11</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">No Rumah</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 30</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">RT/RW</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 021/007</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Desa/Kelurahan</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Wonokusumo</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Kecamatan</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Semampir</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Kota</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Kota Surabaya</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Provinsi</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Jawa Timur</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Kode Pos</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 60154</p>
                                                            </div>
                                                            
                                                            <div class="col-12">
                                                                <hr>
                                                                <p class="text-muted mb-2"><b>Alamat Tinggal</b></p>
                                                                
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Nama Jalan</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Wonosari Mulyo 11</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">No Rumah</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 30</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">RT/RW</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 021/007</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Desa/Kelurahan</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Wonokusumo</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Kecamatan</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Semampir</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Kota</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Kota Surabaya</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Provinsi</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: Jawa Timur</p>
                                                            </div>
                                                            <div class="col-5">
                                                                <p class="text-muted small mb-2">Kode Pos</p>
                                                            </div>
                                                            <div class="col-7">
                                                                <p class="text-muted small mb-2">: 60154</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pelayanan" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="container">
                                        <div class="page-inner">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body pt-2">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <center><b><p class=" bg-info" style="color: white">Kunjungan Tanggal 01/05/2024</p></b></center>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Pukul</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: 08:25:63 WIB</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Tujuan</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Konsultasi</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Poliklinik</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Umum</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Dokter</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Dr. Imanuel Sabas</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Status</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Sedang Dilayani</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Keterangan</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Pasien Asuransi BPJS</p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <center><a href="/admin/anamnesis" type="button" class="btn btn-info">Detail</a></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body pt-2">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <center><b><p class=" bg-info" style="color: white">Kunjungan Tanggal 25/04/2024</p></b></center>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Pukul</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: 08:25:63 WIB</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Tujuan</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Konsultasi</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Poliklinik</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Umum</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Dokter</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Dr. Imanuel Sabas</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Status</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Sedang Dilayani</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Keterangan</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Pasien Asuransi BPJS</p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <center><a href="/admin/anamnesis" type="button" class="btn btn-info">Detail</a></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body pt-2">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <center><b><p class=" bg-info" style="color: white">Kunjungan Tanggal 25/03/2024</p></b></center>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Pukul</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: 08:25:63 WIB</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Tujuan</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Konsultasi</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Poliklinik</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Umum</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Dokter</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Dr. Imanuel Sabas</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Status</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Sedang Dilayani</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Keterangan</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Pasien Asuransi BPJS</p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <center><a href="/admin/anamnesis" type="button" class="btn btn-info">Detail</a></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body pt-2">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <center><b><p class=" bg-info" style="color: white">Kunjungan Tanggal 25/02/2024</p></b></center>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Pukul</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: 08:25:63 WIB</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Tujuan</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Konsultasi</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Poliklinik</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Umum</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Dokter</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Dr. Imanuel Sabas</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Status</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Sedang Dilayani</p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <p class="text-muted small mb-2">Keterangan</p>
                                                                </div>
                                                                <div class="col-7">
                                                                    <p class="text-muted small mb-2">: Pasien Asuransi BPJS</p>
                                                                </div>
                                                                <div class="col-12">
                                                                    <center><a href="/admin/anamnesis" type="button" class="btn btn-info">Detail</a></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection