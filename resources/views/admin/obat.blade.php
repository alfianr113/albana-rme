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
                                <h4 class="card-title">Daftar Obat Tersedia | 1 Januari 2025</h4>
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
                                            <th>Harga beli</th>
                                            <th>Harga Jual</th>
                                            <th>Profit</th>
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
                                            <th>Harga beli</th>
                                            <th>Harga Jual</th>
                                            <th>Profit</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Detail Transaksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>CAPTROPIL 12,5 MG</td>
                                            <td>09-Sep-2028</td>
                                            <td>CAPTROPIL 12,5 MG</td>
                                            <td>Tablet</td>
                                            <td>Obat Generik</td>
                                            <td>980</td>
                                            <td>Tablet</td>
                                            <td>Rp800,00</td>
                                            <td>Rp1.000,00</td>
                                            <td>Rp200,00</td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>OMEDOM SYR</td>
                                            <td>07-Jul-2026	</td>
                                            <td>OMEDOM SIRUP</td>
                                            <td>Cair</td>
                                            <td>Obat Keras</td>
                                            <td>12</td>
                                            <td>Botol</td>
                                            <td>Rp12.000,00</td>
                                            <td>Rp15.000,00</td>
                                            <td>Rp3.000,00</td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>PARACETAMOL 500 MG</td>
                                            <td>20-Jul-2026</td>
                                            <td>PARACETAMOL 500 MG</td>
                                            <td>Tablet</td>
                                            <td>Obat Generik</td>
                                            <td>1200</td>
                                            <td>Tablet</td>
                                            <td>Rp500,00</td>
                                            <td>Rp700,00</td>
                                            <td>Rp200,00</td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>RANITIDINE 150 MG</td>
                                            <td>10-Jan-2026</td>
                                            <td>RANITIDINE 150 MG</td>
                                            <td>Tablet</td>
                                            <td>Obat Generik</td>
                                            <td>750</td>
                                            <td>Tablet</td>
                                            <td>Rp900,00</td>
                                            <td>Rp1.200,00</td>
                                            <td>Rp300,00</td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>VITAMIN C 100 MG</td>
                                            <td>05-May-2027</td>
                                            <td>VITAMIN C 100 MG</td>
                                            <td>Tablet</td>
                                            <td>Suplemen</td>
                                            <td>1500</td>
                                            <td>Tablet</td>
                                            <td>Rp300,00</td>
                                            <td>Rp500,00</td>
                                            <td>Rp200,00</td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>AMOXICILLIN 500 MG</td>
                                            <td>18-Feb-2029</td>
                                            <td>AMOXICILLIN 500 MG</td>
                                            <td>Kapsul</td>
                                            <td>Obat Generik</td>
                                            <td>600</td>
                                            <td>Kapsul</td>
                                            <td>Rp1.200,00</td>
                                            <td>Rp1.800,00</td>
                                            <td>Rp600,00</td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>CETIRIZINE 10 MG</td>
                                            <td>22-Aug-2028</td>
                                            <td>CETIRIZINE 10 MG</td>
                                            <td>Tablet</td>
                                            <td>Obat Generik</td>
                                            <td>900</td>
                                            <td>Tablet</td>
                                            <td>Rp1.000,00</td>
                                            <td>Rp1.400,00</td>
                                            <td>Rp400,00</td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>IBUPROFEN 200 MG</td>
                                            <td>17-Apr-2026</td>
                                            <td>IBUPROFEN 200 MG</td>
                                            <td>Tablet</td>
                                            <td>Obat Generik</td>
                                            <td>1100</td>
                                            <td>Tablet</td>
                                            <td>Rp800,00</td>
                                            <td>Rp1.100,00</td>
                                            <td>Rp300,00</td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>SALBUTAMOL 2 MG</td>
                                            <td>03-Nov-2027</td>
                                            <td>SALBUTAMOL 2 MG</td>
                                            <td>Tablet</td>
                                            <td>Obat Generik</td>
                                            <td>400</td>
                                            <td>Tablet</td>
                                            <td>Rp1.300,00</td>
                                            <td>Rp1.700,00</td>
                                            <td>Rp400,00</td>
                                            <td>02-Jul-2024</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm btn-border ml-1" data-toggle="modal" data-target="#detail">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>OMEPRAZOLE 20 MG</td>
                                            <td>12-Jan-2028</td>
                                            <td>OMEPRAZOLE 20 MG</td>
                                            <td>Kapsul</td>
                                            <td>Obat Generik</td>
                                            <td>850</td>
                                            <td>Kapsul</td>
                                            <td>Rp1.500,00</td>
                                            <td>Rp2.100,00</td>
                                            <td>Rp600,00</td>
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
