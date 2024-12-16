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
                                <h4 class="card-title">Kunjungan Lokal</h4>
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
                                            <td>1</td>
                                            <td>00-00-04-68</td>
                                            <td>Tn. Abdullah Sukron</td>
                                            <td>01 - 01 - 2025</td>
                                            <th>Umum</th>
                                            <th>Dr. Rafael Widya</th>
                                            <th>BPJS</th>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>00-00-00-34</td>
                                            <td>Nn. Shafa Putri Kirana</td>
                                            <td>01 - 01 - 2025</td>
                                            <th>Umum</th>
                                            <th>Dr. Rafael Widya</th>
                                            <th>BPJS</th>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>00-00-05-56</td>
                                            <td>Nn. Elly Rusiati</td>
                                            <td>01 - 01 - 2025</td>
                                            <th>Gigi</th>
                                            <th>Dr. Citra Kirana</th>
                                            <th>BPJS</th>
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
