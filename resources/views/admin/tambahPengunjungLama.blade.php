@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pendaftaran Kunjungan Pasien Lama</div>
                        </div>
                        <div class="card-body">
                            <form action="/admin/cariPasien">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="Masukkan NIK" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="Masukkan No Rekam Medis" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <span style="color:red">*Minimal Isi Salah Satu</span>
                                </div>
                            </div>
                            

                        </div>
                        <div class="card-footer">
                            <a href="/admin/pendaftaran" class="btn btn-danger" >Kembali</a>
                            <button type="submit" class="btn btn-primary float-right">Cari Pasien</button>
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