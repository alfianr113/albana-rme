@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
                        
            @include('admin.partials.partialsObat')

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Daftar Obat Kadaluarsa (stok tersedia) | 1 Januari 2025</h4>
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
                                            <th>Kode</th>
                                            <th>Tanggal Kadaluarsa</th>
                                            <th>Nama Obat</th>
                                            <th>Bentuk</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                            <th>Satuan</th>
                                            <th>Harga beli Satuan</th>
                                            <th>Kerugian Total</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Detail Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Tanggal Kadaluarsa</th>
                                            <th>Nama Obat</th>
                                            <th>Bentuk</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                            <th>Satuan</th>
                                            <th>Harga beli Satuan</th>
                                            <th>Kerugian Total</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Detail Transaksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>METFORMIN 500 MG</td>
                                            <td><span style="color: red">01-Mar-2023</span></td>
                                            <td>METFORMIN 500 MG</td>
                                            <td>Tablet</td>
                                            <td>Obat Generik</td>
                                            <td>300</td>
                                            <td>Tablet</td>
                                            <td>Rp700,00</td>
                                            <td><span style="color: red">Rp210.000,00</span></td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ATORVASTATIN 10 MG</td>
                                            <td><span style="color: red">15-Jul-2022</span></td>
                                            <td>ATORVASTATIN 10 MG</td>
                                            <td>Tablet</td>
                                            <td>Obat Generik</td>
                                            <td>150</td>
                                            <td>Tablet</td>
                                            <td>Rp1.000,00</td>
                                            <td><span style="color: red">Rp150.000,00</span></td>
                                            <td>02-Jul-2024</td>
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
