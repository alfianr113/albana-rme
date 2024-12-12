@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pendaftaran Nakes Baru</div>
                        </div>
                        <form action="/admin/tenagaKesehatan">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <h4><center>Biodata Nakes</center></h4>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kode Nakes Satu Sehat<span style="color:red">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Kode Nakes Satu Sehat" name="no_rekam_medis" value="" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-border col-sm-2">Cari</button>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Nakes<span style="color:red">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="Masukan Nama Nakes" name="no_rekam_medis" value="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Foto Nakes<span style="color:red">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control form-control-file" id="uploadImg2" name="uploadImg2" accept="image/*" required="">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">No. Telepon / HP <span style="color:red">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Isi 0 jika tidak ada" required>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat KTP <span style="color:red">*</span></label>
                                      <div class="col-sm-3">
                                        <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Provinsi" required>
                                      </div>
                                      <div class="col-sm-3">
                                        <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Kota" required>
                                      </div>
                                      <div class="col-sm-2">
                                        <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Kecamatan" required>
                                      </div>
                                      <div class="col-sm-2">
                                        <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Kelurahan" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Jalan" name="ktp_jalan" required>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="inputPassword3" placeholder="Nomor Rumah" name="ktp_nomor" required>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="inputPassword3" placeholder="RT" name="ktp_rt" required>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="inputPassword3" placeholder="RW" name="ktp_rw" required>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="number" class="form-control" id="inputPassword3" placeholder="KD Pos" name="ktp_kodepos" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat Tinggal <span style="color:red">*</span></label>
                                          <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Provinsi" required>
                                          </div>
                                          <div class="col-sm-3">
                                            <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Kota" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Kecamatan" required>
                                          </div>
                                          <div class="col-sm-2">
                                            <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Kelurahan" required>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Jalan" name="ktp_jalan" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="Nomor Rumah" name="ktp_nomor" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="RT" name="ktp_rt" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="RW" name="ktp_rw" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="number" class="form-control" id="inputPassword3" placeholder="KD Pos" name="ktp_kodepos" required>
                                            </div>
                                        </div>
                            
                            <div class="form-group row">
                                    
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun Pengalaman <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Masukan Tahun Pengalaman" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Pendidikan Terakhir <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Masukan  Pendidikan Terakhir" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Kampus <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Masukan Nama Kampus" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun Lulus <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Masukan Tahun Lulus" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    
                                <label for="inputPassword3" class="col-sm-2 col-form-label">No. STR <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Masukan No. STR" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                    
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Surat Ijin Praktik <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Masukan Surat Ijin Praktik" required>
                                </div>
                            </div>
                            <div class="form-group row">    
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Catatan <span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Masukan Catatan Khusus" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Tanda Tangan<span style="color:red">*</span></label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control form-control-file" id="uploadImg2" name="uploadImg2" accept="image/*" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <hr>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h4><center>Bidang Nakes</center></h4>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <select class="form-control" name="status_pasien" required>
                                        <option value="">-- Pilih Kategori Nakes --</option>
                                        <option value="umum">Dokter Gigi</option>
                                        <option value="gigi">Dokter Umum</option>
                                        <option value="gigi">Dokter THT</option>
                                        <option value="gigi">Dokter Mata</option>
                                        <option value="anak">Pendaftaran</option>
                                        <option value="anak">Perawat</option>
                                        <option value="anak">Farmasi</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" name="status_pasien" required>
                                        <option value="">-- Pilih unit kerja --</option>
                                        <option value="umum">Poli Umum</option>
                                        <option value="gigi">Poli Gigi</option>
                                        <option value="anak">Pendaftaran</option>
                                        <option value="anak">Apoteker/farmasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <hr>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h4><center>Jadwal Kerja / Dokter</center></h4>
                                </div>
                            </div>
                            <div class="form-group row">    
                                <label for="inputPassword3" class="col-sm-1 col-form-label">Senin</label>
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>_
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>
                                <div class="col-sm-1">
                                    
                                </div>
                                <label for="inputPassword3" class="col-sm-1 col-form-label">Jumat</label>
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>_
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>
                            </div>
                            <div class="form-group row">    
                                <label for="inputPassword3" class="col-sm-1 col-form-label">Selasa</label>
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>_
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>
                                <div class="col-sm-1">
                                    
                                </div>
                                <label for="inputPassword3" class="col-sm-1 col-form-label">Sabtu</label>
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>_
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>
                            </div>
                            <div class="form-group row">    
                                <label for="inputPassword3" class="col-sm-1 col-form-label">Rabu</label>
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>_
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>
                                <div class="col-sm-1">
                                    
                                </div>
                                <label for="inputPassword3" class="col-sm-1 col-form-label">Minggu</label>
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>_
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>
                            </div>
                            <div class="form-group row">    
                                <label for="inputPassword3" class="col-sm-1 col-form-label">Kamis</label>
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>_
                                <div class="col-sm-2">
                                    <input type="time" class="form-control" id="appt" name="appt" min="09:00" max="18:00" required />
                                </div>
                                <div class="col-sm-1">
                                    
                                </div>
                                
                            </div>
                            
                            <br>
                            <!-- /.card-body -->
                            
                              
                             
                            <div class="card-footer">
                              <a href="/admin/tenagaKesehatan" class="btn btn-danger" >Kembali</a>
                              <button type="submit" class="btn btn-primary float-right">Simpan</button>  
                            </div>
                          </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection