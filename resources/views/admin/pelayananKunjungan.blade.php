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
                                <h5 class="mb-1"><b><a href="#">1125 <small>Total Kunjungan</small></a></b></h5>
                                <small class="text-muted">3 Kunjungan Hari ini</small>
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
                                <h5 class="mb-1"><b><a href="#">903 <small>Total Pasien</small></a></b></h5>
                                <small class="text-muted">1 Sedang Dilayani</small>
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
                                <h5 class="mb-1"><b><a href="#">270 <small>Total Tindakan</small></a></b></h5>
                                <small class="text-muted">7654 Penindakan</small>
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
                                <h5 class="mb-1"><b><a href="#">2458 <small>Transaksi Obat</small></a></b></h5>
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
                                <h4 class="card-title">Daftar Pasien | 01 Januari 2025</h4>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No. RM</th>
                                            <th>Pasien</th>
                                            <th>Waktu Konsul</th>
                                            <th><center>Status</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>No. RM</th>
                                            <th>Pasien</th>
                                            <th>Waktu Konsul</th>
                                            <th><center>Status</center></th>
                                            <th><center>Action</center></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>00-00-90-33</td>
                                            <td>MINAMI HAMABE</td>
                                            <td><center>09:17:58</center></td>
                                            <td class="bg-success" style="color: white"><center>Sedang Dilayani</center></td>
                                            <td>
												<div class="form-button-action">
                                                    <center>
                                                    <a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-paper-plane"></i>
													</button>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
                                                    </center>
												</div>
											</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>00-00-90-42</td>
                                            <td>ALFIAN RAHMAN</td>
                                            <td><center>08:12:02</center></td>
                                            <td class="bg-info" style="color: white"><center>Selesai Dilayani</center></td>
                                            <td>
												<div class="form-button-action">
                                                    <center>
                                                    <a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-paper-plane"></i>
													</button>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
                                                    </center>
												</div>
											</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>00-00-87-12</td>
                                            <td>BAYU SUPRIATNA</td>
                                            <td><center>08:00:43</center></td>
                                            <td class="bg-danger" style="color: white"><center>Dibatalkan</center></td>
                                            <td>
												<div class="form-button-action">
                                                    <center>
                                                    <a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-paper-plane"></i>
													</button>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
                                                    <button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
                                                    </center>
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