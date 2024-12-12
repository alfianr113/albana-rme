@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pendaftaran Akun Baru</div>
                        </div>
                        <form action="/admin/daftarPengguna">
                            <div class="card-body">
                                <center><b>Data Pengguna</b></h5></center>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Get Nama Dari Nakes (Dropdown)" name="no_rekam_medis" value="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" name="no_bpjs" placeholder="Masukan Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" name="no_bpjs" placeholder="Masukan Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">No. Telepon / HP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Isi 0 jika tidak ada" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label" required>Peran dan Hak Akses</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status_pasien" required>
                                        <option value="">-- Pilih Peran --</option>
                                        <option value="Tuan">Admin Klinik</option>
                                        <option value="Nyonya">Admin Pendaftaran</option>
                                        <option value="Anak">Admin Dokter</option>
                                        <option value="Anak">Admin Farmasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" name="no_telepon" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                              <a href="/admin/daftarPengguna" class="btn btn-danger" >Kembali</a>
                              <button type="submit" class="btn btn-primary float-right">Submit</button> 
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