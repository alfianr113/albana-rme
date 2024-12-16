@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-sm-12 mt--3">
                    <div class="card">
                        <div class="card-body">
                                <h1 class="text-center">Grafik Pasien</h1>
                        
                                <!-- Form Input Tanggal -->
                                <div class="row my-4">
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" placeholder="Tanggal Mulai">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" placeholder="Hingga Tanggal">
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-info w-100">Lihat</button>
                                    </div>
                                </div>
                        
                                <!-- Grafik -->
                                
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">Pendaftaran Pasien</div>
                        <div class="card-body">
                            <canvas id="chartKunjungan3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
