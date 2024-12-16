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
                                <h4 class="card-title">Daftar Transaksi Obat Pasien | 01 Januari 2025</h4>
                                <a href="/admin/transaksiObatNonKunjungan" type="button" class="btn btn-primary btn-border ml-auto">
                                    Transaksi Obat (Non Kunjungan)
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="modal fade" id="print" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">Cetak Label</span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Tn. Alfian Rahman - (00-00-90-42)</label>
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
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Paracetamol 250 mg sanmol</td>
                                                                <td>3x1</td>
                                                                <td>10 Tablet</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
                            <div class="modal fade" id="asesmen" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><b>
                                                <span class="fw-mediumbold">
                                                    Asesmen Penyerahan Obat (Tuju Benar)</span>
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-6 col-form-label">1. Benar Pasien</label>
                                                <div class="col-sm-6">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-6 col-form-label">2. Benar Obat</label>
                                                <div class="col-sm-6">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-6 col-form-label">3. Benar Dosis</label>
                                                <div class="col-sm-6">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-6 col-form-label">4. Benar Waktu Pemberian</label>
                                                <div class="col-sm-6">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-6 col-form-label">5. Benar Cara Pemberian Obat</label>
                                                <div class="col-sm-6">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-6 col-form-label">6. Benar Kadaluarsa Obat</label>
                                                <div class="col-sm-6">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-6 col-form-label">7. Benar Dokumentasi</label>
                                                <div class="col-sm-6">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="addRowButton" class="btn btn-primary btn-border">Simpan</button>
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
                                            <td>00-00-90-42</td>
                                            <td>Tn. Alfian Rahman</td>
                                            <td><center>08:12:02</center></td>
                                            <td class="bg-info" style="color: white"><center>Pembayaran Selesai</center></td>
                                            <td>
												<div class="form-button-action">
                                                    <center>
                                                        <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#asesmen" >
                                                            <i class="fas fa-paper-plane"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-sm btn-border ml-1" data-toggle="modal" data-target="#print"  >
                                                            <i class="fas fa-print"></i>
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