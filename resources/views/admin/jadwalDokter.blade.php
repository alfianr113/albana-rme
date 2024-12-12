@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-secondary mr-3">
                                <i class="fas fa-notes-medical"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">28436 <small>Total Kunjungan</small></a></b></h5>
                                <small class="text-muted">240 Kunjungan Hari ini</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-success mr-3">
                                <i class="fas fa-user-friends"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">9035 <small>Pasien</small></a></b></h5>
                                <small class="text-muted">12 Sedang Dilayani</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-danger mr-3">
                                <i class="fa fa-stethoscope"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">27 <small>Tindakan</small></a></b></h5>
                                <small class="text-muted">9035 Penindakan</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-warning mr-3">
                                <i class="fa fa-mortar-pestle"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">24580 <small>Transaksi Obat</small></a></b></h5>
                                <small class="text-muted">166 Jenis Obat</small>
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
                                <h4 class="card-title">Jadwal Dokter</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Nama Dokter</th>
                                            <th>Senin</th>
                                            <th>Selasa</th>
                                            <th>Rabu</th>
                                            <th>Kamis</th>
                                            <th>Jumat</th>
                                            <th>Sabtu</th>
                                            <th>Minggu</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Dokter</th>
                                            <th>Senin</th>
                                            <th>Selasa</th>
                                            <th>Rabu</th>
                                            <th>Kamis</th>
                                            <th>Jumat</th>
                                            <th>Sabtu</th>
                                            <th>Minggu</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Dr. Citra Kirana</td>
                                            <td align="center">10:00 - 15:00</td>
                                            <td align="center">-</td>
                                            <td align="center">10:00 - 15:00</td>
                                            <td align="center">10:00 - 15:00</td>
                                            <td align="center">-</td>
                                            <td align="center">13:00 - 18:00</td>
                                            <td align="center">-</td>
                                        </tr>
                                        <tr>
                                            <td>Dr. Rafael Gustaf</td>
                                            <td align="center">07:00 - 12:00</td>
                                            <td align="center">-</td>
                                            <td align="center">07:00 - 12:00</td>
                                            <td align="center">-</td>
                                            <td align="center">07:00 - 12:00</td>
                                            <td align="center">-</td>
                                            <td align="center">10:00 - 15:00</td>
                                        </tr>
                                        <tr>
                                            <td>Dr. Meilani Rianti</td>
                                            <td align="center">12:00 - 18:00</td>
                                            <td align="center">12:00 - 18:00</td>
                                            <td align="center">12:00 - 18:00</td>
                                            <td align="center">-</td>
                                            <td align="center">07:00 - 12:00</td>
                                            <td align="center">07:00 - 12:00</td>
                                            <td align="center">07:00 - 12:00</td>
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