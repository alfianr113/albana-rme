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
                                <div class="modal fade" id="tambahPoli" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                    <b>Tambah Poli</b>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">   
                                                <form action="#" method="POST">
                                                    <div class="card-body">
                                                      <div class="form-group row">
                                                          <label for="inputPassword3" class="col-sm-4 col-form-label">Nama Poli</label>
                                                          <div class="col-sm-8">
                                                              <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Nama Poliklinik" name="no_rekam_medis" required>
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label for="inputPassword3" class="col-sm-4 col-form-label">Kategori</label>
                                                          <div class="col-sm-8">
                                                              <input type="text" class="form-control" id="inputPassword3" name="no_bpjs" placeholder="Masukan Kategori">
                                                          </div>
                                                      </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Spesialis</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="inputPassword3" name="no_bpjs" placeholder="Masukan Spesialis">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Kepemilikan</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="inputPassword3" name="no_bpjs" placeholder="Mitra Klinik" value="Mitra Klinik">
                                                            </div>
                                                        </div>
                                                    <!-- /.card-body -->
                                                    </div>
                                                    <div class="card-footer">
                                                      <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                                      
                                                    </div>
                                                  </form>
                                                
                                            </div>	
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="ubahPoli" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                    <b>Ubah Poli</b>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">   
                                                <form action="#" method="POST">
                                                    <div class="card-body">
                                                      <div class="form-group row">
                                                          <label for="inputPassword3" class="col-sm-4 col-form-label">Nama Poli</label>
                                                          <div class="col-sm-8">
                                                              <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Nama Poliklinik" name="no_rekam_medis" value="Poli Gigi" required>
                                                          </div>
                                                      </div>
                                                      <div class="form-group row">
                                                          <label for="inputPassword3" class="col-sm-4 col-form-label">Kategori</label>
                                                          <div class="col-sm-8">
                                                              <input type="text" class="form-control" id="inputPassword3" name="no_bpjs" placeholder="Masukan Kategori" value="Rawat Jalan">
                                                          </div>
                                                      </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Spesialis</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="inputPassword3" name="no_bpjs" placeholder="Masukan Spesialis" value="Gigi">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Kepemilikan</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="inputPassword3" name="no_bpjs" placeholder="Mitra Klinik" value="Mitra Klinik">
                                                            </div>
                                                        </div>
                                                    <!-- /.card-body -->
                                                    </div>
                                                    <div class="card-footer">
                                                      <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                                      
                                                    </div>
                                                  </form>
                                                
                                            </div>	
                                        </div>
                                    </div>
                                </div>
                                <h4 class="card-title col-sm-10">Daftar Poliklinik</h4>
                                <button class="btn btn-primary btn-border col-sm-2 mr-1" data-toggle="modal" data-target="#tambahPoli">
                                    Tambah Poliklinik
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Poliklinik</th>
                                            <th>Kategori / Spesialis</th>
                                            <th>Status</th>
                                            <th>Kepemilikan</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Poliklinik</th>
                                            <th>Kategori / Spesialis</th>
                                            <th>Status</th>
                                            <th>Kepemilikan</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Poli Gigi</td>
                                            <td>Rawat Jalan (Gigi)</td> 
                                            <td><input type="checkbox" class="col-sm-2" data-toggle="toggle" data-on="AKTIF" data-off="NON AKTIF" checked data-onstyle="success" data-offstyle="danger"></td>
                                            <td>Mitra Klinik</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button class="btn btn-link btn-primary btn-lg" data-toggle="modal" data-target="#ubahPoli">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-link" id="alert_demo_10">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Poli Imunisasi</td>
                                            <td>Rawat Jalan (Umum)</td> 
                                            <td><input type="checkbox" class="col-sm-2" data-toggle="toggle" data-on="AKTIF" data-off="NON AKTIF" checked data-onstyle="success" data-offstyle="danger"></td>
                                            <td>Mitra Klinik</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button class="btn btn-link btn-primary btn-lg" data-toggle="modal" data-target="#ubahPoli">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-link" id="alert_demo_10">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Poli KIA</td>
                                            <td>Rawat Jalan (Umum)</td> 
                                            <td><input type="checkbox" class="col-sm-2" data-toggle="toggle" data-on="AKTIF" data-off="NON AKTIF" checked data-onstyle="success" data-offstyle="danger"></td>
                                            <td>Mitra Klinik</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button class="btn btn-link btn-primary btn-lg" data-toggle="modal" data-target="#ubahPoli">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-link" id="alert_demo_10">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Poli Telekonsultasi</td>
                                            <td>Telemedis (Umum)</td> 
                                            <td><input type="checkbox" class="col-sm-2" data-toggle="toggle" data-on="AKTIF" data-off="NON AKTIF" data-onstyle="success" data-offstyle="danger"></td>
                                            <td>Mitra Klinik</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button class="btn btn-link btn-primary btn-lg" data-toggle="modal" data-target="#ubahPoli">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-link" id="alert_demo_10">
                                                        <i class="fa fa-times"></i>
                                                    </button>
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