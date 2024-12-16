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
                                <h4 class="card-title">Daftar Obat</h4>
                                <a class="ml-auto" href="/admin/pTambahObat"><button type="button" class="btn btn-primary btn-sm btn-border">
                                    Tambah Obat
                                </button></a>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Aturan Pakai</th>
                                            <th>Total</th>
                                            <th>Harga</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Aturan Pakai</th>
                                            <th>Total</th>
                                            <th>Harga</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>VIT B COMPLEX</td>
                                            <td>VIT B COMPLEX</td>
                                            <td>2x1</td>
                                            <td>6 Tablet</td>
                                            <td>Rp25.000,00</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>OMEPRAZOLE 20MG</td>
                                            <td>OMEPRAZOLE 20MG</td>
                                            <td>2x1</td>
                                            <td>6 Tablet</td>
                                            <td>Rp30.000,00</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>DEXAMETHASONE</td>
                                            <td>IFIDEX 0,5</td>
                                            <td>2x1</td>
                                            <td>6 Tablet</td>
                                            <td>Rp31.000,00</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
                                                        <i class="fas fa-trash"></i>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Daftar Alkes</h4>
                                <a class="ml-auto" href="/admin/pTambahAlkes"><button type="button" class="btn btn-primary btn-sm btn-border">
                                    Tambah Alkes
                                </button></a>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Alkes</th>
                                            <th>Nama Alkes</th>
                                            <th>Aturan Pakai</th>
                                            <th>Total</th>
                                            <th>Harga</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Alkes</th>
                                            <th>Nama Alkes</th>
                                            <th>Aturan Pakai</th>
                                            <th>Total</th>
                                            <th>Harga</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Plester</td>
                                            <td>Plester</td>
                                            <td>tempel pada luka</td>
                                            <td>2 pcs</td>
                                            <td>Rp3.000,00</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Perban</td>
                                            <td>Perban</td>
                                            <td>gulung tutup luka</td>
                                            <td>1 pcs</td>
                                            <td>Rp10.000,00</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
                                                        <i class="fas fa-trash"></i>
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