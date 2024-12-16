@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            
            @include('admin.partials.partialsPemeriksaan')

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Pilih Daftar Obat</h4>                            
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Expired</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Jumlah Pesan</th>
                                            <th>Aturan Pakai</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Expired</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Jumlah Pesan</th>
                                            <th>Aturan Pakai</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>CAPTROPIL 12,5 MG</td>
                                            <td>09/08/2028</td>
                                            <td>Rp1.000,00</td>
                                            <td>60</td>
                                            <td><input type="number" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="jumlah"></td>
                                            <td><input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="aturan"></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="/admin/pemeriksaanObat" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>OMEDOM SIRUP</td>
                                            <td>12/07/2025</td>
                                            <td>Rp15.000,00</td>
                                            <td>21</td>
                                            <td><input type="number" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="jumlah"></td>
                                            <td><input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="aturan"></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="/admin/pemeriksaanObat" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>MIRACLOVEN 50MG	</td>
                                            <td>02/02/2025</td>
                                            <td>Rp500,00</td>
                                            <td>15</td>
                                            <td><input type="number" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="jumlah"></td>
                                            <td><input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="aturan"></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="/admin/pemeriksaanObat" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>NA DICLOFENAC 50MG</td>
                                            <td>021/09/2027</td>
                                            <td>Rp1.500,00</td>
                                            <td>44</td>
                                            <td><input type="number" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="jumlah"></td>
                                            <td><input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="aturan"></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="/admin/pemeriksaanObat" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                        <i class="fas fa-plus"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>HUFADINE 150MG</td>
                                            <td>12/04/2029</td>
                                            <td>Rp1.200,00</td>
                                            <td>65</td>
                                            <td><input type="number" class="form-control" name="nama_pasien" placeholder="jumlah"></td>
                                            <td><input type="text" class="form-control" name="nama_pasien" placeholder="aturan"></td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="/admin/pemeriksaanObat" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                        <i class="fas fa-plus"></i>
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