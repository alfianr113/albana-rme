@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            @include('admin.partials.partialsSatusehat')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Pemeriksaan</h4>
                                <a class="ml-auto"><button type="button" class="btn btn-primary btn-sm btn-border" data-toggle="modal" data-target="#tambahAlergi">
                                    Kirim
                                </button></a>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No RM</th>
                                            <th>Nama Pasien</th>
                                            <th>Tgl Kunjungan</th>
                                            <th>Poli</th>
                                            <th>Dokter</th>
                                            <th>Cara Bayar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>No RM</th>
                                            <th>Nama Pasien</th>
                                            <th>Tgl Kunjungan</th>
                                            <th>Poli</th>
                                            <th>Dokter</th>
                                            <th>Cara Bayar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <th></th>
                                            <th></th>
                                            <th></th>
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
