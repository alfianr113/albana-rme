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
                                
                                <h4 class="card-title col-sm-10">Daftar Tenaga Kesehatan</h4>
                                <a href="/admin/tambahNakes" class="btn btn-primary btn-border col-sm-2 mr-1">
                                    Tambah Nakes
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode STR</th>
                                            <th>Nama Nakes</th>
                                            <th>Unit Kerja</th>
                                            <th>Kategori Nakes</th>
                                            <th>No Telepon</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode STR</th>
                                            <th>Nama Nakes</th>
                                            <th>Unit Kerja</th>
                                            <th>Kategori Nakes</th>
                                            <th>No Telepon</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1758694</td>
                                            <td>Citra Kirana</td>
                                            <td>Poli Umum</td>
                                            <td>Dokter Gigi</td>
                                            <td>0816-9132-9831</td>
                                            <td>
                                                <div class="form-button-action">
                                                    
                                                    <a href="/admin/tambahNakes" type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-edit"></i>
													</a>
                                                    <a id="alert_demo_11" type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fa fa-times"></i>
													</a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1752144</td>
                                            <td>Kirana Citra</td>
                                            <td>Poli Umum</td>
                                            <td>Dokter Umum</td>
                                            <td>0816-9132-9831</td>
                                            <td>
                                                <div class="form-button-action">
                                                    
                                                    <a href="/admin/tambahNakes" type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-edit"></i>
													</a>
                                                    <a id="alert_demo_11" type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fa fa-times"></i>
													</a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>8619341</td>
                                            <td>Amelia Nuraini</td>
                                            <td>Pendaftaran</td>
                                            <td>Pendaftaran</td>
                                            <td>0871-1897-8181</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="/admin/tambahNakes" type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-edit"></i>
													</a>
                                                    <a id="alert_demo_11" type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fa fa-times"></i>
													</a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>0888774</td>
                                            <td>Dian Wahyuni</td>
                                            <td>Farmasi</td>
                                            <td>Apoteker</td>
                                            <td>0853-5729-5988</td>
                                            <td>
                                                <div class="form-button-action">
                                                    
                                                    <a href="/admin/tambahNakes" type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-edit"></i>
													</a>
                                                    <a id="alert_demo_11" type="button" class="btn btn-danger btn-sm btn-border ml-1" >
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