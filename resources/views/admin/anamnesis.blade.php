@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            
            @include('admin.partials.partialsPemeriksaan')

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="#">   
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Anamnesis</h4>
                                <button type="submit" class="btn btn-primary btn-sm btn-border ml-auto">
                                    Simpan
                                </button>
                            </div>
                        </div>
                        <div class="card-body">                              
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Keluhan Utama</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="Masukan Keluhan Utama" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Anamnesis Diperoleh</label>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="selectgroup selectgroup-border">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="value" value="HTML" class="selectgroup-input">
                                                <span class="selectgroup-button">Autoanamnesis</span>
                                            </label>
                                            &emsp;
                                            <label class="selectgroup-item">
                                                <input type="radio" name="value" value="CSS" class="selectgroup-input">
                                                <span class="selectgroup-button">Alloanamnesis</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <textarea type="text" class="form-control" id="inputPassword3" name="no_rekam_medis"  placeholder="Masukan Sumber" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Riwayat Penyakit Sekarang</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="Masukan Deskripsi Anamnesis" required></textarea>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
