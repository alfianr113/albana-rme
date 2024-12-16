@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 mt--3">
                    <div class="card">
                        <div class="card-body">
                                <h1 class="text-center">Dashboard Grafik</h1>                        
                                <!-- Grafik -->
                                
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-info text-white">Pendaftaran Pasien</div>
                        <div class="card-body">
                            <canvas id="chartPasien1"></canvas>
                        </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-info text-white">Kunjungan Pasien</div>
                            <div class="card-body">
                                <canvas id="chartKunjungan"></canvas>
                            </div>
                        </div>
                    </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-info text-white">Obat & Alkes Masuk</div>
                        <div class="card-body">
                            <canvas id="chartObat"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-info text-white">Obat & Alkes Keluar</div>
                        <div class="card-body">
                            <canvas id="chartObatKeluar"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-info text-white">Pendapatan</div>
                        <div class="card-body">
                            <canvas id="chartPendapatan"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

