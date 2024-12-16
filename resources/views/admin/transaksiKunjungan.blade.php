@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Daftar Transaksi Kunjungan Pasien | 01 Januari 2025</h4>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="modal fade" id="print" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">Transaksi Kunjungan | Print Pembayaran</span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Nn. Minami Hamabe - (00-00-90-33)</label>
                                                        <label class="col-sm-4 col-form-label">dr. Rafael Widiya</label>
                                                        <div class="col-sm-4 float-right">
                                                            <select class="form-control">
                                                                <option>Pembayaran Selesai</option>
                                                                <option>Menunggu Pembayaran</option>
                                                                <option>Dibatalkan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12" style="text-align: right;">
                                                            <label class="col-sm-6">Bandung Barat, 01 Januari 2025 - 16:12 WIB</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-sm-2">Umur</label>
                                                            <label class="col-sm-6">: 21 Tahun</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-sm-2">Berat Badan</label>
                                                            <label class="col-sm-6">: 55 Kg</label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-sm-2">Alamat</label>
                                                            <label class="col-sm-8">: Jalan Budi Utomo No. 7</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <table class="table table-striped mt-3">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">No</th>
                                                                <th scope="col">Obat</th>
                                                                <th scope="col">Catatan</th>
                                                                <th scope="col">Kuantitas</th>
                                                                <th scope="col">Harga</th>
                                                                <th scope="col">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Paracetamol 250 mg sanmol</td>
                                                                <td>3x1</td>
                                                                <td>10 Tablet</td>
                                                                <td>3.500</td>
                                                                <td>35.000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-sm-9">
                                                    
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="row">
                                                        <div class="col-12">            
                                                            <h4 class="card-title">Total 35.000</h4> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                                        <label for="inputFloatingLabel" class="placeholder">Tambahkan Catatan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/admin/pembayaranKunjungan"><button type="button" id="print" class="btn btn-primary">Print</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <td>Nn. Minami Hamabe</td>
                                            <td><center>09:17:58</center></td>
                                            <td class="bg-success" style="color: white"><center>Menunggu Pembayaran</center></td>
                                            <td>
												<div class="form-button-action">
                                                    <center>
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#print"  >
														<i class="fas fa-paper-plane"></i>
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
                                            <td>Tn. Alfian Rahman</td>
                                            <td><center>08:12:02</center></td>
                                            <td class="bg-info" style="color: white"><center>Pembayaran Selesai</center></td>
                                            <td>
												<div class="form-button-action">
                                                    <center>
                                                        <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#print" >
                                                            <i class="fas fa-paper-plane"></i>
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
                                            <td>Tn. Bayu Supriatna</td>
                                            <td><center>08:00:43</center></td>
                                            <td class="bg-danger" style="color: white"><center>Dibatalkan</center></td>
                                            <td>
												<div class="form-button-action">
                                                    <center>
                                                        <button type="button" class="btn btn-info btn-sm btn-border ml-1" >
                                                            <i class="fas fa-paper-plane"></i>
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