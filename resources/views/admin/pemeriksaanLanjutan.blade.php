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
                                <h4 class="card-title">Pemeriksaan Lanjutan</h4>
                                <button type="submit" class="btn btn-primary btn-sm btn-border ml-auto">
                                    Simpan
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-header">
                                <div class="row row-nav-line">
                                    <ul class="nav nav-tabs nav-line nav-color-secondary w-100 pl-4" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#subjektif" role="tab" aria-selected="true">Subjektif</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#objektif" role="tab" aria-selected="false">Objektif</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fisik" role="tab" aria-selected="false">Fisik</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#anatomi" role="tab" aria-selected="false">Anatomi</a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#asesmen" role="tab" aria-selected="false">Asesmen</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="subjektif" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="container">
                                        <div class="page-inner">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-12 col-form-label">Subjektif</label>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-12 col-form-label">Riwayat Penyakit Dahulu dan Pengobatan</label>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-12 col-form-label">Riwayat Personal Sosial dan Lingkungan</label>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="objektif" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="container">
                                            <div class="page-inner">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-12 col-form-label">Catatan Pemeriksaaan Awal</label>
                                                            <div class="col-sm-12">
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-12 col-form-label">Temuan</label>
                                                            <div class="col-sm-12">
                                                                <div class="selectgroup selectgroup-pills">
                                                                    <label class="selectgroup-item">
                                                                        <input type="checkbox" name="value" value="HTML" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Kepala</span>
                                                                    </label>
                                                                    <label class="selectgroup-item">
                                                                        <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Leher</span>
                                                                    </label>
                                                                    <label class="selectgroup-item">
                                                                        <input type="checkbox" name="value" value="PHP" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Thorax</span>
                                                                    </label>
                                                                    <label class="selectgroup-item">
                                                                        <input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Abdomen</span>
                                                                    </label>
                                                                    <label class="selectgroup-item">
                                                                        <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Ekstremitas</span>
                                                                    </label>
                                                                    <label class="selectgroup-item">
                                                                        <input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Genitalia</span>
                                                                    </label>
                                                                    <label class="selectgroup-item">
                                                                        <input type="checkbox" name="value" value="C++" class="selectgroup-input">
                                                                        <span class="selectgroup-button">Lain-lain</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="fisik" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="container">
                                        <div class="page-inner">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-12 col-form-label">Fisik</label>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="anatomi" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="container">
                                        <div class="page-inner">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Kepala</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Mata</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" readonly name="" value="Tidak Diperiksa">
                                                        </div>
                                                        <button class="btn btn-primary btn-border col-sm-3" data-toggle="modal" data-target="#periksaMata">Mengisi Pemeriksaan</button>
                                                    </div>
                                                    <div class="modal fade" id="periksaMata" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                        Form Periksa Mata
                                                                    </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group row">
                                                                                <label for="inputPassword3" class="col-sm-4 col-form-label">Anemis</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="selectgroup w-100">
                                                                                        <label class="selectgroup-item">
                                                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                            <span class="selectgroup-button">Tidak</span>
                                                                                        </label>
                                                                                        <label class="selectgroup-item">
                                                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                            <span class="selectgroup-button">Iya</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group row">
                                                                                <label for="inputPassword3" class="col-sm-4 col-form-label">Ikterus</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="selectgroup w-100">
                                                                                        <label class="selectgroup-item">
                                                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                            <span class="selectgroup-button">Tidak</span>
                                                                                        </label>
                                                                                        <label class="selectgroup-item">
                                                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                            <span class="selectgroup-button">Iya</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group row">
                                                                                <label for="inputPassword3" class="col-sm-4 col-form-label">Diameter</label>
                                                                                <div class="col-sm-3">
                                                                                    <input type="text" class="form-control" id="inputPassword3" name="" value="0">
                                                                                </div>
                                                                                <label for="inputPassword3" class="col-form-label">/</label>
                                                                                <div class="col-sm-3">
                                                                                    <input type="text" class="form-control" id="inputPassword3" name="" value="0">
                                                                                </div>
                                                                                <label for="inputPassword3" class="col-form-label">mm</label>
                                                                            </div>	
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group row">
                                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Udem Palpebrae</label>
                                                                        <div class="col-sm-8">
                                                                            <div class="selectgroup w-100">
                                                                                <label class="selectgroup-item">
                                                                                    <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                    <span class="selectgroup-button">Tidak</span>
                                                                                </label>
                                                                                <label class="selectgroup-item">
                                                                                    <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                    <span class="selectgroup-button">Iya</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Pupil</label>
                                                                        <div class="selectgroup selectgroup-pills">
                                                                            <label class="selectgroup-item">
                                                                                <input type="checkbox" name="value" value="HTML" class="selectgroup-input">
                                                                                <span class="selectgroup-button">Isokor</span>
                                                                            </label>
                                                                            <label class="selectgroup-item">
                                                                                <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
                                                                                <span class="selectgroup-button">Anisokor</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Ada Kelainan</label>
                                                                        <div class="col-sm-3">
                                                                            <select class="form-control" name="status_pasien">
                                                                            <option value="">Tidak Diperiksa</option>
                                                                            <option value="">Tidak Ada</option>
                                                                            <option value="">Ada</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="addRowButton" class="btn btn-primary btn-border">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Telinga</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Hidung</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Rambut</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Bibir</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Gigi Geligi</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Lidah</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Langit-langit</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Leher</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" readonly name="" value="Tidak Diperiksa">
                                                        </div>
                                                        <button class="btn btn-primary btn-border col-sm-3" data-toggle="modal" data-target="#periksaLeher">Mengisi Pemeriksaan</button>
                                                    </div>
                                                    <div class="modal fade" id="periksaLeher" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                        Form Periksa Leher
                                                                    </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group row">
                                                                        <label for="inputPassword3" class="col-sm-12 col-form-label">Jugular Venous Pressure (JVP):</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label for="inputPassword3" class="col-sm-5 col-form-label">Pembesaran Kelenjar Limfe</label>
                                                                                <div class="col-sm-7">
                                                                                    <div class="selectgroup w-100">
                                                                                        <label class="selectgroup-item">
                                                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                            <span class="selectgroup-button">Tidak</span>
                                                                                        </label>
                                                                                        <label class="selectgroup-item">
                                                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                            <span class="selectgroup-button">Iya</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label for="inputPassword3" class="col-sm-5 col-form-label">Kaku Kuduk</label>
                                                                                <div class="col-sm-7">
                                                                                    <div class="selectgroup w-100">
                                                                                        <label class="selectgroup-item">
                                                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                            <span class="selectgroup-button">Tidak</span>
                                                                                        </label>
                                                                                        <label class="selectgroup-item">
                                                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                            <span class="selectgroup-button">Iya</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Ada Kelainan</label>
                                                                        <div class="col-sm-3">
                                                                            <select class="form-control" name="status_pasien">
                                                                            <option value="">Tidak Diperiksa</option>
                                                                            <option value="">Tidak Ada</option>
                                                                            <option value="">Ada</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="addRowButton" class="btn btn-primary btn-border">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tenggorokan</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tonsil</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Dada</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" readonly name="" value="Tidak Diperiksa">
                                                        </div>
                                                        <button class="btn btn-primary btn-border col-sm-3" data-toggle="modal" data-target="#periksaDada">Mengisi Pemeriksaan</button>
                                                    </div>
                                                    <div class="modal fade" id="periksaDada" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                        Form Periksa Dada
                                                                    </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Thoraks</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Simetris</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Asimetris</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4"></div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <div class="col-sm-12">
                                                                                <label for="inputPassword3" class="col-form-label">COR</label>
                                                                            </div>
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">S1 / S2</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                                            </div>

                                                                            <div class="col-sm-12">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Reguler</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ireguler</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Murmur</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                                            </div>
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Lain - Lain</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-12 col-form-label">Pulmo</label>
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Suara Nafas</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Ronchi</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4"></div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Wheezing</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4"></div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Ada Kelainan</label>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-control" name="status_pasien">
                                                                                <option value="">Tidak Diperiksa</option>
                                                                                <option value="">Tidak Ada</option>
                                                                                <option value="">Ada</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4"></div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="addRowButton" class="btn btn-primary btn-border">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Payudara</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Punggung</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Perut</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" readonly name="" value="Tidak Diperiksa">
                                                        </div>
                                                        <button class="btn btn-primary btn-border col-sm-3" data-toggle="modal" data-target="#periksaPerut">Mengisi Pemeriksaan</button>
                                                    </div>
                                                    <div class="modal fade" id="periksaPerut" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                        Form Periksa Perut
                                                                    </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-12 col-form-label">Abdomen</label>
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Distended</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <label class="col-sm-4 col-form-label">Meteorismus</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Peristaltik</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="checkbox" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Normal</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="checkbox" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Meningkat</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="checkbox" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Menurun</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="checkbox" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak Ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <label class="col-sm-4 col-form-label">Asites</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Nyeri Tekan</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <label class="col-sm-4 col-form-label">Lokasi</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">Hepar</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-4 col-form-label">Lien</div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">Extremitas</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="checkbox" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Hangat</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="checkbox" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Dingin</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">Edem</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4"></div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">Lain-lain</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="col-sm-8 form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-12 col-form-label">Defaksi</label>
                                                                            <label class="col-sm-4 col-form-label">Via Anus</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" placeholder="Frekuensi">
                                                                                <input type="text" class="form-control" placeholder="Konsistensi">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">Stoma</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" placeholder="Sebutkan">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-4 col-form-label">Urin</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="checkbox" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Spontan</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="checkbox" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Kateter Urin</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="checkbox" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Cytostomy</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Ada Kelainan</label>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-control" name="status_pasien">
                                                                                <option value="">Tidak Diperiksa</option>
                                                                                <option value="">Tidak Ada</option>
                                                                                <option value="">Ada</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-sm-4"></div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="addRowButton" class="btn btn-primary btn-border">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Genital</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Anus</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" readonly name="" value="Tidak Diperiksa">
                                                        </div>
                                                        <button class="btn btn-primary btn-border col-sm-3" data-toggle="modal" data-target="#periksaAnus">Mengisi Pemeriksaan</button>
                                                    </div>
                                                    <div class="modal fade" id="periksaAnus" tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                        Form Periksa Anus
                                                                    </h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Ada Kelainan</label>
                                                                            <div class="col-sm-8">
                                                                                <select class="form-control" name="status_pasien">
                                                                                <option value="">Tidak Diperiksa</option>
                                                                                <option value="">Tidak Ada</option>
                                                                                <option value="">Ada</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 border">
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Inspeksi Sekitar Anus</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Normal</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ukus</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Fistel</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Hemorrhoid</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Spinkter Ani</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Mencekik</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Longgar</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Mukosa</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Licin</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Kasar</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Berbenjol-benjol</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Nyeri</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Berbenjol-benjol</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <label class="col-sm-4 col-form-label">Lokasi</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" placeholder="Lokasi(Sesuai Arah Jam)">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Massa Tumor</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <label class="col-sm-4 col-form-label">Ukuran</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Konsistensi</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Konsistensi</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Ampulla</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Kosong</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Berisi</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row border">
                                                                            <label for="inputPassword3" class="col-sm-12 col-form-label">Sarung Tangan</label>
                                                                            <label class="col-sm-4 col-form-label">Fases</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <label class="col-sm-4 col-form-label">Darah</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <label class="col-sm-4 col-form-label">Lendir</label>
                                                                            <div class="col-sm-8">
                                                                                <div class="selectgroup w-100">
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Ada</span>
                                                                                    </label>
                                                                                    <label class="selectgroup-item">
                                                                                        <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                                        <span class="selectgroup-button">Tidak ada</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-12 col-form-label">Deskripsi</label>
                                                                            <textarea type="text" class="col-sm-12 form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="addRowButton" class="btn btn-primary btn-border">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Lengan Atas</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Lengan Bawah</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jari Tangan</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Kuku Tangan</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Persendian Tangan</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tungkai atas</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tungkai Bawah</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jari Bawah</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Kuku Jari</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Persendian Jari</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Faring</label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control" name="status_pasien">
                                                            <option value="">Tidak Diperiksa</option>
                                                            <option value="">Tidak Ada</option>
                                                            <option value="">Ada</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Deskripsi">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="asesmen" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="container">
                                        <div class="page-inner">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Kasus</label>
                                                        <div class="col-sm-8">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                <span class="selectgroup-button">Baru</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                <span class="selectgroup-button">Lama</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Masalah</label>
                                                        <div class="col-sm-8">
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="value" value="50" class="selectgroup-input">
                                                                <span class="selectgroup-button">Umum</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                <span class="selectgroup-button">Spesifik</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                <span class="selectgroup-button">Kompleks</span>
                                                            </label>
                                                            <label class="selectgroup-item">
                                                                <input type="radio" name="value" value="100" class="selectgroup-input">
                                                                <span class="selectgroup-button">Promotif/Preventif</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword3" class="col-sm-4 col-form-label">Prognosis</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option>Sanam (Sembuh)</option>
                                                                <option>Bonam (Baik)</option>
                                                                <option>Malam (Buruk/jelek)</option>
                                                                <option>Dubia (Tidak tentu/Ragu - ragu)</option>
                                                                <option>Dubia ad Sanam/bonam (Cenderung sembuh/baik)</option>
                                                                <option>Dubia ad Malam (Cenderung buruk/jelek)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">ICPC-2</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Diagnosis Kerja (ICD10)</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option>(A00.0) - Kolera disebabkan Vibrio Cholerae 01, Biovar Cholerae</option>
                                                                <option>(A00.1) - Kolera disebabkan Vibrio Cholerae 01, Biovar eltor</option>
                                                                <option>(A00.9) - Kolera, yang tidak spesifik</option>
                                                                <option>dll (comming soon)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Diagnosis Banding (ICD10)</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option>(A00.0) - Kolera disebabkan Vibrio Cholerae 01, Biovar Cholerae</option>
                                                                <option>(A00.1) - Kolera disebabkan Vibrio Cholerae 01, Biovar eltor</option>
                                                                <option>(A00.9) - Kolera, yang tidak spesifik</option>
                                                                <option>dll (comming soon)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-4 col-form-label">Diagnosis Sekunder (ICD)</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control">
                                                                <option></option>
                                                                <option>(A00.0) - Kolera disebabkan Vibrio Cholerae 01, Biovar Cholerae</option>
                                                                <option>(A00.1) - Kolera disebabkan Vibrio Cholerae 01, Biovar eltor</option>
                                                                <option>(A00.9) - Kolera, yang tidak spesifik</option>
                                                                <option>dll (comming soon)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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