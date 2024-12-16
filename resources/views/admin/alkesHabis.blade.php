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
                                <h4 class="card-title">Alat Kesehatan Stok Habis | 1 Januari 2025</h4>
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
                                            <th>Harga Jual</th>
                                            <th>Profit</th>
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
                                            <th>Harga Jual</th>
                                            <th>Profit</th>
                                            <th>Keterangan</th>
                                            <th>Detail Transaksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                          
                                        <tr>
                                            <td>1</td>
                                            <td>ALK-008</td>
                                            <td>15-Apr-2026</td>
                                            <td>Alat Tes COVID-19</td>
                                            <td>Medisafe</td>
                                            <td>Medisafe-COVID-1</td>
                                            <td>Habis Pakai</td>
                                            <td>0</td>
                                            <td>Box</td>
                                            <td>Baru</td>
                                            <td>05-Jan-2024</td>
                                            <td>PT Sehat Abadi</td>
                                            <td>Rp 100.000</td>
                                            <td>Rp 150.000</td>
                                            <td>Rp 50.000</td>
                                            <td>Untuk tes rapid COVID-19</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>ALK-009</td>
                                            <td>30-Sep-2025</td>
                                            <td>Masker N95</td>
                                            <td>3M</td>
                                            <td>3M-1860</td>
                                            <td>Habis Pakai</td>
                                            <td>0</td>
                                            <td>Box</td>
                                            <td>Baru</td>
                                            <td>12-Feb-2024</td>
                                            <td>PT Apotek Sehat</td>
                                            <td>Rp 500.000</td>
                                            <td>Rp 650.000</td>
                                            <td>Rp 150.000</td>
                                            <td>Untuk perlindungan pernapasan di ruang medis</td>
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
