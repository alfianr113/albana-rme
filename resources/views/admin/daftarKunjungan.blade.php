@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-1 mr-3">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('img/user.png') }}" alt="..." class="avatar-img rounded">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <label class="col-sm-4">Nomor Rekam Medis</label>
                                        <label class="col-sm-8">: 00-00-90-33</label>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4">Nomor BPJS</label>
                                        <label class="col-sm-8">: 8945784521025894</label>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4">Satu Sehat ID</label>
                                        <label class="col-sm-8">: 2145087965874512</label>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-4">Nama</label>
                                        <label class="col-sm-8">: Tn. Ricky Togu Haholongan Gultom</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 ml-auto">
                                    <div class="row ml-auto">
                                        <label class="col-sm-5">Terdaftar Sejak</label>
                                        <label class="col-sm-7">: 20/02/2024</label>
                                    </div>
                                    <div class="row ml-auto">
                                        <label class="col-sm-5">Tanggal Lahir</label>
                                        <label class="col-sm-7">: 03/07/2000</label>
                                    </div>
                                    <div class="row ml-auto">
                                        <label class="col-sm-5">Jenis Kelamin</label>
                                        <label class="col-sm-7">: Laki - laki</label>
                                    </div>
                                    <div class="row ml-auto">
                                        <label class="col-sm-5">NIK</label>
                                        <label class="col-sm-7">: 3217061611990005</label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Daftar Kunjungan</div>
                        </div>
                        <div class="card-body">
                            <form action="/admin/pendaftaran">
                                
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <center>Tanggal Kunjungan</center>
                                </div>
                                <div class="col-sm-3">
                                    <center>Poli Tuju</center>
                                </div>
                                <div class="col-sm-3">
                                    <center>Jaminan Kesehatan</center>
                                </div>
                                <div class="col-sm-3">
                                    <center>Cara Bayar</center>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="inputPassword3" name="#" value="<?php echo date('d/m/Y');?>" required readonly>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control" name="status_pasien" required>
                                        <option value="">-- Pilih Poli --</option>
                                        <option value="umum">Poli Gigi</option>
                                        <option value="gigi">Poli Umum</option>
                                        <option value="anak">Poli Imunisasi</option>
                                        <option value="anak">Poli KIA</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control" name="status_pasien" required>
                                        <option value="">-- Pilih Jaminan Kesehatan --</option>
                                        <option value="umum">BPJS</option>
                                        <option value="gigi">JKN</option>
                                        <option value="anak">Jamkesmas</option>
                                        <option value="anak">Jamkesda</option>
                                        <option value="anak">Tanpa Jaminan Kesehatan</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control" name="status_pasien" required>
                                        <option value="">-- Pilih Cara Bayar --</option>
                                        <option value="umum">BPJS</option>
                                        <option value="gigi">Tunai</option>
                                        <option value="anak">Asuransi</option>
                                    </select>
                                </div>
                            </div>
                            
                            

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Daftar</button>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection