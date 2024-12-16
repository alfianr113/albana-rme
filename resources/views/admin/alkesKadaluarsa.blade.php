@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
                        
            @include('admin.partials.partialsAlkes')

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Alat Kesehatan Kadaluarsa (Stok Tersedia) | 1 Januari 2025</h4>
                                <a class="ml-auto" href="#"><button class="btn btn-primary btn-border ">Export Excel</button></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                Data Transaksi
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="02-Jul-2024">
                                                        <label for="inputFloatingLabel" class="placeholder">Tanggal Transaksi</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="KF/INV/2024/001">
                                                        <label for="inputFloatingLabel" class="placeholder">No Faktur</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="PT. Kimia Farma">
                                                        <label for="inputFloatingLabel" class="placeholder">Nama Supplier Obat</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="Rihana Ananda Lestari">
                                                        <label for="inputFloatingLabel" class="placeholder">Nama Penanggung Jawab</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="0812-7584-8467">
                                                        <label for="inputFloatingLabel" class="placeholder">Nomor HP</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="kimiafar@gmail.com">
                                                        <label for="inputFloatingLabel" class="placeholder">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="Jl. Veteran NO. 9. Jakarta Pusat - 10110">
                                                        <label for="inputFloatingLabel" class="placeholder">Alamat</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="Citra Rahayu">
                                                        <label for="inputFloatingLabel" class="placeholder">Nama Penerima</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="pengadaan tahunan 2024">
                                                        <label for="inputFloatingLabel" class="placeholder">Keterangan</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group form-floating-label">
                                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" value="0221-1244-2345">
                                                        <label for="inputFloatingLabel" class="placeholder">Nomor Telp Klinik</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Alkes</th>
                                            <th>Tanggal Kadaluarsa</th>
                                            <th>Nama Alkes</th>
                                            <th>Merek</th>
                                            <th>Tipe/Model</th>
                                            <th>Kategori</th>
                                            <th>Jumlah/Stok</th>
                                            <th>Satuan</th>
                                            <th>Kondisi</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Supplier/Pemasok</th>
                                            <th>Harga Beli</th>
                                            <th>Kerugian</th>
                                            <th>Keterangan</th>
                                            <th>Detail Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Alkes</th>
                                            <th>Tanggal Kadaluarsa</th>
                                            <th>Nama Alkes</th>
                                            <th>Merek</th>
                                            <th>Tipe/Model</th>
                                            <th>Kategori</th>
                                            <th>Jumlah/Stok</th>
                                            <th>Satuan</th>
                                            <th>Kondisi</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Supplier/Pemasok</th>
                                            <th>Harga Beli</th>
                                            <th>Kerugian</th>
                                            <th>Keterangan</th>
                                            <th>Detail Transaksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                        <tr>
                                            <td>1</td>
                                            <td>ALK-006</td>
                                            <td><span style="color: red">01-Dec-2023</span></td>
                                            <td>Glukometer (Alat Ukur Gula Darah)</td>
                                            <td>Accu-Chek</td>
                                            <td>AccuCheck-Plus</td>
                                            <td>Habis Pakai</td>
                                            <td>50</td>
                                            <td>Unit</td>
                                            <td>Baru</td>
                                            <td>01-Nov-2022</td>
                                            <td>PT Global Health</td>
                                            <td>Rp200.000</td>
                                            <td><span style="color: red">Rp10.000.000</span></td>
                                            <td>Untuk pemeriksaan gula darah pasien</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>ALK-007</td>
                                            <td><span style="color: red">10-Nov-2023</span></td>
                                            <td>Alat Tes Kehamilan</td>
                                            <td>ClearBlue</td>
                                            <td>ClearBlue-1</td>
                                            <td>Habis Pakai</td>
                                            <td>30</td>
                                            <td>Box</td>
                                            <td>Baru</td>
                                            <td>15-Sep-2022</td>
                                            <td>PT Medica Sehat</td>
                                            <td>Rp50.000</td>
                                            <td><span style="color: red">Rp1.500.000</span></td>
                                            <td>Untuk tes kehamilan di klinik</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
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
</div>

@endsection
