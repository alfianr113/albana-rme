@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-secondary mr-3">
                                <i class="fas fa-notes-medical"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">28436 <small>Total Kunjungan</small></a></b></h5>
                                <small class="text-muted">240 Kunjungan Hari ini</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-success mr-3">
                                <i class="fas fa-user-friends"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">9035 <small>Pasien</small></a></b></h5>
                                <small class="text-muted">12 Sedang Dilayani</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-danger mr-3">
                                <i class="fa fa-stethoscope"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">27 <small>Tindakan</small></a></b></h5>
                                <small class="text-muted">9035 Penindakan</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-warning mr-3">
                                <i class="fa fa-mortar-pestle"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">24580 <small>Transaksi Obat</small></a></b></h5>
                                <small class="text-muted">166 Jenis Obat</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="modal fade" id="tambahPenjamin" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                    <b>Tambah Penjamin</b>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">   
                                                <form action="daftarPenjamin.html" method="POST">
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Nama Penjamin</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Nama Penjamin" name="noPenjamin" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Tipe Penjaminan</label>
                                                            <div class="col-sm-8">
                                                                <div class="selectgroup w-100">
                                                                    <label class="selectgroup-item">
                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Perusahaan</span>
                                                                    </label>
                                                                    <label class="selectgroup-item">
                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Penjamin</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                                </form>
                                                
                                            </div>	
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="ubahPenjamin" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                    <b>Ubah Penjamin</b>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">   
                                                <form action="daftarPenjamin.html" method="POST">
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Nama Penjamin</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Nama Penjamin" name="noPenjamin" value="JKN" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Tipe Penjaminan</label>
                                                            <div class="col-sm-8">
                                                                <div class="selectgroup w-100">
                                                                    <label class="selectgroup-item">
                                                                        <input type="radio" name="value" value="50" class="selectgroup-input" checked>
                                                                        <span class="selectgroup-button">Perusahaan</span>
                                                                    </label>
                                                                    <label class="selectgroup-item">
                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Penjamin</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                                </form>
                                                
                                            </div>	
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title col-sm-10">Daftar Penjamin</h4>
                                <button class="btn btn-primary btn-border col-sm-2 mr-1" data-toggle="modal" data-target="#tambahPenjamin">
                                    Tambah Penjamin
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Aktifasi</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Aktifasi</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>JKN</td>
                                            <td>Aktif</td> 
                                            <td><input type="checkbox" class="col-sm-2" data-toggle="toggle" data-on="AKTIF" data-off="NON AKTIF" checked data-onstyle="success" data-offstyle="danger"></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#ubahPenjamin" >
														<i class="fas fa-edit"></i>
													</a>
                                                    <a id="alert_demo_9" type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fa fa-times"></i>
													</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>BPJS</td>
                                            <td>Aktif</td> 
                                            <td><input type="checkbox" class="col-sm-2" data-toggle="toggle" data-on="AKTIF" checked data-off="NON AKTIF" data-onstyle="success" data-offstyle="danger"></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#ubahPenjamin" >
														<i class="fas fa-edit"></i>
													</a>
                                                    <a id="alert_demo_9" type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fa fa-times"></i>
													</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Global Assistance Healthcare</td>
                                            <td>Tidak Aktif</td> 
                                            <td><input type="checkbox" class="col-sm-2" data-toggle="toggle" data-on="AKTIF" data-off="NON AKTIF" data-onstyle="success" data-offstyle="danger"></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#ubahPenjamin" >
														<i class="fas fa-edit"></i>
													</a>
                                                    <a id="alert_demo_9" type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fa fa-times"></i>
													</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Halodoc</td>
                                            <td>Aktif</td> 
                                            <td><input type="checkbox" class="col-sm-2" data-toggle="toggle" data-on="AKTIF" checked data-off="NON AKTIF" data-onstyle="success" data-offstyle="danger"></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#ubahPenjamin" >
														<i class="fas fa-edit"></i>
													</a>
                                                    <a id="alert_demo_9" type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fa fa-times"></i>
													</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection