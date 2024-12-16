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
                                <h4 class="card-title">Daftar Tindakan</h4>
                                <a class="ml-auto"><button type="button" class="btn btn-primary btn-sm btn-border"  data-toggle="modal" data-target="#periksaMata">
                                    Tambah Tindakan
                                </button></a>
                                <div class="modal fade" id="periksaMata" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                    Daftar Tindakan
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="table-responsive">
                                                            <table id="basic-datatables" class="display table table-striped table-hover" >
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Tindakan</th>
                                                                        <th>Harga</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Tindakan</th>
                                                                        <th>Harga</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>INJEKSI KETOROLAC</td>
                                                                        <td>Rp. 40.000,00</td>
                                                                        <td>
                                                                            <a href="/admin/pemeriksaanTindakan" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                                                <i class="fas fa-plus"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>INJEKSI MERSIBION</td>
                                                                        <td>Rp25.000,00</td>
                                                                        <td>
                                                                            <a href="/admin/pemeriksaanTindakan" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                                                <i class="fas fa-plus"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>INJEKSI RANITIDINE</td>
                                                                        <td>Rp30.000,00</td>
                                                                        <td>
                                                                            <a href="/admin/pemeriksaanTindakan" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                                                <i class="fas fa-plus"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>NEBU (DENGAN OBAT SAJA)	</td>
                                                                        <td>Rp100.000,00</td>
                                                                        <td>
                                                                            <a href="/admin/pemeriksaanTindakan" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                                                <i class="fas fa-plus"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>5</td>
                                                                        <td>NEBU ( PAKET LENGKAP )</td>
                                                                        <td>Rp140.000,00</td>
                                                                        <td>
                                                                            <a href="/admin/pemeriksaanTindakan" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                                                <i class="fas fa-plus"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>6</td>
                                                                        <td>LIDOCAIN ( DENGAN OBAT )</td>
                                                                        <td>Rp40.000,00</td>
                                                                        <td>
                                                                            <a href="/admin/pemeriksaanTindakan" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                                                <i class="fas fa-plus"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>7</td>
                                                                        <td>LIDOCAIN ( TANPA OBAT )</td>
                                                                        <td>Rp30.000,00</td>
                                                                        <td>
                                                                            <a href="/admin/pemeriksaanTindakan" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                                                <i class="fas fa-plus"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8</td>
                                                                        <td>EKSTRASI SERUMEN</td>
                                                                        <td>Rp115.000,00</td>
                                                                        <td>
                                                                            <a href="/admin/pemeriksaanTindakan" type="button" class="btn btn-primary btn-sm btn-border ml-1" >
                                                                                <i class="fas fa-plus"></i>
                                                                            </a>
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tindakan</th>
                                            <th>Harga</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tindakan</th>
                                            <th>Harga</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>INJEKSI KETOROLAC</td>
                                            <td>Rp40.000,00</td>
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
                                            <td>NEBU ( PAKET LENGKAP )</td>
                                            <td>Rp140.000,00</td>
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
                                            <td>EKSTRASI SERUMEN</td>
                                            <td>Rp115.000,00</td>
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