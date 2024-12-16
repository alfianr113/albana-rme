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
                                <h4 class="card-title">Pemeriksaan Awal</h4>
                                <button type="submit" class="btn btn-primary btn-sm btn-border ml-auto">
                                    Simpan
                                </button>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Asesmen Awal</label>
                                <button class="btn btn-primary btn-border col-sm-3" data-toggle="modal" data-target="#addAsesmen">Mengisi Asesmen</button>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputPassword3" readonly name="no_rekam_medis" value="Belum Skrining" required>
                                </div>
                            </div>
                            <div class="modal fade" id="addAsesmen" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><b>
                                                <span class="fw-mediumbold">
                                                Asesmen Awal Pasien</span>
                                            </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">1. Tingkat Mobilitas</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Mandiri</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">dengan Bantuan</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="150" class="selectgroup-input">
                                                            <span class="selectgroup-button">Sangat Terbatas</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="200" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tanpa Pergerakan</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="200" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tanpa Pergerakan</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-3 col-form-label">2. Frekuensi Nafas</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Normal (16x - 30x /menit)</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak Normal (<16x atau > 30x /menit)</16></span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="150" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak Ada (-)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-9 col-form-label">3. Pola Nafas</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Normal</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak Normal</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-9 col-form-label">4. Pengisian Kapiler</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button"><= 2 detik</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">> 2detik</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-9 col-form-label">5. Nadi</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Teraba</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak Teraba / Lemah</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="150" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak Ada (-)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-9 col-form-label">6. Respon</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                            <span class="selectgroup-button">Mengikuti Perintah</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak Mengikuti Perintah</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="150" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak Ada Respon (-)</span>
                                                        </label>
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
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Tujuan</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="status_pasien" required>
                                      <option value="">Pilih Tujuan</option>
                                      <option value="Tuan">Kontrol</option>
                                      <option value="Tuan">Konsultasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputPassword3" class="col-sm-3 col-form-label">Keadaan</label>
                              <div class="col-sm-9">
                                  <div class="selectgroup w-100">
                                      <label class="selectgroup-item">
                                          <input type="radio" name="value" value="50" class="selectgroup-input">
                                          <span class="selectgroup-button">Tampak Sehat</span>
                                      </label>
                                      <label class="selectgroup-item">
                                          <input type="radio" name="value" value="100" class="selectgroup-input">
                                          <span class="selectgroup-button">Sakit Ringan</span>
                                      </label>
                                      <label class="selectgroup-item">
                                          <input type="radio" name="value" value="150" class="selectgroup-input">
                                          <span class="selectgroup-button">Sakit Sedang</span>
                                      </label>
                                      <label class="selectgroup-item">
                                          <input type="radio" name="value" value="200" class="selectgroup-input">
                                          <span class="selectgroup-button">Sakit Berat</span>
                                      </label>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Keadaan Sakit</label>
                                <div class="col-sm-9">
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">Compos mentis</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                            <span class="selectgroup-button">Apati</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="150" class="selectgroup-input">
                                            <span class="selectgroup-button">Somnolen</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="200" class="selectgroup-input">
                                            <span class="selectgroup-button">Delirium</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="200" class="selectgroup-input">
                                            <span class="selectgroup-button">Sopor</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="200" class="selectgroup-input">
                                            <span class="selectgroup-button">Coma</span>
                                        </label>
                                    </div>
                                </div>
                              </div>
                              <div class="modal fade" id="addSkrining" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLongTitle"><b>Skrining Risiko Jatuh Dewasa - Skala Morse</b></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-12 col-form-label">1. Riwayat jatuh: Apakah pasien pernah jatuh dalam 3 bulan terakhir ?</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-12 col-form-label">2. Diagnosa sekunder: Apakah pasien memiliki lebih dari satu penyakit ?</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-9 col-form-label">3. Alat Bantu Jalan</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                            <span class="selectgroup-button">Normal/ Bed rest/ dibantu</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Kruk/ tongkat/ walker</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Berpegangan pada benda-benda di sekitar</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-12 col-form-label">4. Terapi Intravena: Apakah saat ini pasien terpasang infus?</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                            <span class="selectgroup-button">Ya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Tidak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-9 col-form-label">5. Gaya berjalan/ Cara berpindah</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                            <span class="selectgroup-button">Normal/ bad rest/ immobile</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Lemah</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="150" class="selectgroup-input">
                                                            <span class="selectgroup-button">Gangguan/ Tidak normal</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-9 col-form-label">6. Status Mental</label>
                                                <div class="col-sm-16 ml-3">
                                                    <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                                            <span class="selectgroup-button">Pasien menyadari kondisi dirinya</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="100" class="selectgroup-input">
                                                            <span class="selectgroup-button">Pasien mengalami keterbatasan daya ingat</span>
                                                        </label>
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
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Skrining Resiko Jatuh</label>
                                <button class="btn btn-primary btn-border col-sm-3" data-toggle="modal" data-target="#addSkrining">Skrining</button>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputPassword3" readonly name="no_rekam_medis" value="Belum Skrining" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Skala Nyeri</label>
                                <label class="col-sm-2 col-form-label"><center><span style="color: red">Tidak Ditanya</span></center></label>
                                <div class="col-sm-7">
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">1</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">2</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">3</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">4</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">5</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">6</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">7</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">8</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">9</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="value" value="50" class="selectgroup-input">
                                            <span class="selectgroup-button">10</span>
                                        </label>
                                    </div>
                                </div>   
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Catatan Petugas</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                          <!-- /.card-body -->
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="#">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">TTV (Tanda - Tanda Vital)</h4>
                                <button type="submit" class="btn btn-primary btn-sm btn-border ml-auto">
                                    Simpan
                                </button>
                            </div>
                        </div>
                        <div class="card-body">                              
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Sistol</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">mmHg</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Diastol</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">mmHg</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Detak Jantung</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">per min</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Nafas</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">per min</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Suhu Badan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Celsius</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Saturasi</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">%</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Antropometri</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-5 col-form-label">Tinggi Badan</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">cm</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-5 col-form-label">Berat Badan</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">kg</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-5 col-form-label">IMT</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-5 col-form-label">Lingkat Perut</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">cm</label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-5 col-form-label">Lingkar Panggul</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="0">
                                        </div>
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">cm</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Daftar Alergi</h4>
                                <a class="ml-auto"><button type="button" class="btn btn-primary btn-sm btn-border" data-toggle="modal" data-target="#tambahAlergi">
                                    Tambah Alergi
                                </button></a>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Alergen</th>
                                            <th>Sejak</th>
                                            <th>Reaksi</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Alergen</th>
                                            <th>Sejak</th>
                                            <th>Reaksi</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Makan Keju</td>
                                            <td>Balita</td>
                                            <td>Gatal - gatal</td>
                                            <td>
                                                <div class="form-button-action">

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="tambahAlergi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Alergi</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="#">
                                                                        <div class="form-group row">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Alergen</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="Masukkan Alergen" required> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Sejak</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="Alergi Sejak" required> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="inputPassword3" class="col-sm-4 col-form-label">Reaksi</label>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="Rekasi dari alergi" required> 
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary btn-border">Tambah</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
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