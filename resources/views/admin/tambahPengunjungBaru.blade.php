@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Pendaftaran Kunjungan Pasien Baru</div>
                            <div class="card-category"><h6 style="color:red">* wajib diisi</h6></div>
                        </div>
                        <form action="/admin/daftarKunjungan">
                            <div class="card-body">
                            <center><b>Data Pasien</b></h5></center>
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Rekam Medis <span style="color:red">*</span></label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputPassword3" readonly name="no_rekam_medis" value="00-55-44-21" required>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor BPJS</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="inputPassword3" name="no_bpjs" placeholder="Isi Nomor BPJS Jika Ada (Kosongkan jika tidak)">
                                  </div>
                                  <button class="btn btn-primary btn-border col-sm-2">Cek Data</button>
                              </div>
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label" required>Nama Pasien <span style="color:red">*</span></label>
                                  <div class="col-sm-2">
                                      <select class="form-control" name="status_pasien" required>
                                        <option value="">-- Beri Panggilan --</option>
                                        <option value="Tuan">Tuan</option>
                                        <option value="Nyonya">Nyonya</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Nona">Nona</option>
                                      </select>
                                  </div>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="inputPassword3" name="nama_pasien" placeholder="Masukkan Nama Lengkap" required>
                                  </div>
                              </div>
                              
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat <span style="color:red">*</span></label>
                                  <div class="col-sm-4">
                                      <input type="text" class="form-control" id="inputPassword3" name="tempat_lahir" placeholder="Masukkan Nama Kota" required>
                                  </div>
                                  <label for="inputPassword3" class="col-sm-2 col-form-label" style="text-align:right">Tanggal Lahir <span style="color:red">*</span></label>
                                  <div class="col-sm-4">
                                      <input type="date" class="form-control" id="inputPassword3" name="tanggal_lahir" required >
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">NIK / No. KTP<span style="color:red">*</span></label>
                                  <div class="col-sm-10">
                                      <input type="number" class="form-control" id="inputPassword3" name="nik_ktp" placeholder="Masukkan NIK atau No KTP">
                                  </div>
                              </div>
          
                              <div class="form-group row">
                              <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat KTP <span style="color:red">*</span></label>
                                <div class="col-sm-3">
                                      <select class="form-control" id="form_prov" name="ktp_provinsi" required>
                                        <option value="">Pilih Provinsi</option>
                                        <option value="11">ACEH</option>
                                        <option value="51">BALI</option>
                                        <option value="36">BANTEN</option>
                                        <option value="17">BENGKULU</option>
                                        <option value="34">DAERAH ISTIMEWA YOGYAKARTA</option>
                                        <option value="31">DKI JAKARTA</option>
                                        <option value="75">GORONTALO</option>
                                        <option value="15">JAMBI</option>
                                        <option value="32">JAWA BARAT</option>
                                        <option value="33">JAWA TENGAH</option>
                                        <option value="35">JAWA TIMUR</option>
                                        <option value="61">KALIMANTAN BARAT</option>
                                        <option value="63">KALIMANTAN SELATAN</option>
                                        <option value="62">KALIMANTAN TENGAH</option>
                                        <option value="64">KALIMANTAN TIMUR</option>
                                        <option value="65">KALIMANTAN UTARA</option>
                                        <option value="19">KEPULAUAN BANGKA BELITUNG</option>
                                        <option value="21">KEPULAUAN RIAU</option>
                                        <option value="18">LAMPUNG</option>
                                        <option value="81">MALUKU</option>
                                        <option value="82">MALUKU UTARA</option>
                                        <option value="52">NUSA TENGGARA BARAT</option>
                                        <option value="53">NUSA TENGGARA TIMUR</option>
                                        <option value="91">PAPUA</option>
                                        <option value="92">PAPUA BARAT</option>
                                        <option value="14">RIAU</option>
                                        <option value="76">SULAWESI BARAT</option>
                                        <option value="73">SULAWESI SELATAN</option>
                                        <option value="72">SULAWESI TENGAH</option>
                                        <option value="74">SULAWESI TENGGARA</option>
                                        <option value="71">SULAWESI UTARA</option>
                                        <option value="13">SUMATERA BARAT</option>
                                        <option value="16">SUMATERA SELATAN</option>
                                        <option value="12">SUMATERA UTARA</option>
                                      </select>
                                </div>
                                <div class="col-sm-3">
                                  <select class="form-control" id="form_kab" name="ktp_kota" required></select>
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control" id="form_kec" name="ktp_kecamatan" required></select>
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control" id="form_des" name="ktp_kelurahan" required></select>
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
                                      <select class="form-control" id="form_prov1" name="tinggal_provinsi" required>
                                        <option value="">Pilih Provinsi</option>
                                        <option value="11">ACEH</option>
                                        <option value="51">BALI</option>
                                        <option value="36">BANTEN</option>
                                        <option value="17">BENGKULU</option>
                                        <option value="34">DAERAH ISTIMEWA YOGYAKARTA</option>
                                        <option value="31">DKI JAKARTA</option>
                                        <option value="75">GORONTALO</option>
                                        <option value="15">JAMBI</option>
                                        <option value="32">JAWA BARAT</option>
                                        <option value="33">JAWA TENGAH</option>
                                        <option value="35">JAWA TIMUR</option>
                                        <option value="61">KALIMANTAN BARAT</option>
                                        <option value="63">KALIMANTAN SELATAN</option>
                                        <option value="62">KALIMANTAN TENGAH</option>
                                        <option value="64">KALIMANTAN TIMUR</option>
                                        <option value="65">KALIMANTAN UTARA</option>
                                        <option value="19">KEPULAUAN BANGKA BELITUNG</option>
                                        <option value="21">KEPULAUAN RIAU</option>
                                        <option value="18">LAMPUNG</option>
                                        <option value="81">MALUKU</option>
                                        <option value="82">MALUKU UTARA</option>
                                        <option value="52">NUSA TENGGARA BARAT</option>
                                        <option value="53">NUSA TENGGARA TIMUR</option>
                                        <option value="91">PAPUA</option>
                                        <option value="92">PAPUA BARAT</option>
                                        <option value="14">RIAU</option>
                                        <option value="76">SULAWESI BARAT</option>
                                        <option value="73">SULAWESI SELATAN</option>
                                        <option value="72">SULAWESI TENGAH</option>
                                        <option value="74">SULAWESI TENGGARA</option>
                                        <option value="71">SULAWESI UTARA</option>
                                        <option value="13">SUMATERA BARAT</option>
                                        <option value="16">SUMATERA SELATAN</option>
                                        <option value="12">SUMATERA UTARA</option>
                                      </select>
                                </div>
                                <div class="col-sm-3">
                                  <select class="form-control" id="form_kab1" name="tinggal_kota" required></select>
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control" id="form_kec1" name="tinggal_kecamatan" required></select>
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control" id="form_des1" name="tinggal_kelurahan" required></select>
                                </div>
                              </div>
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                  <div class="col-sm-2">
                                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Jalan" name="tinggal_jalan" required>
                                  </div>
                                  <div class="col-sm-2">
                                      <input type="number" class="form-control" id="inputPassword3" placeholder="Nomor Rumah" name="tinggal_nomor" required>
                                  </div>
                                  <div class="col-sm-2">
                                      <input type="number" class="form-control" id="inputPassword3" placeholder="RT" name="tinggal_rt" required>
                                  </div>
                                  <div class="col-sm-2">
                                      <input type="number" class="form-control" id="inputPassword3" placeholder="RW" name="tinggal_rw" required>
                                  </div>
                                  <div class="col-sm-2">
                                      <input type="number" class="form-control" id="inputPassword3" placeholder="KD Pos" name="tinggal_kodepos" required>
                                  </div>
                              </div>
                              <script type="text/javascript">
                              
                              $(document).ready(function(){
          
                                // sembunyikan form kabupaten, kecamatan dan desa
                                $("#form_kab").hide();
                                $("#form_kec").hide();
                                $("#form_des").hide();
          
                                // ambil data kabupaten ketika data memilih provinsi
                                $('body').on("change","#form_prov",function(){
                                  var id = $(this).val();
                                  var data = "id="+id+"&data=kabupaten";
                                  $.ajax({
                                    type: 'POST',
                                    url: "get_daerah.php",
                                    data: data,
                                    success: function(hasil) {
                                      $("#form_kab").html(hasil);
                                      $("#form_kab").show();
                                      $("#form_kec").hide();
                                      $("#form_des").hide();
                                    }
                                  });
                                });
          
                                // ambil data kecamatan/kota ketika data memilih kabupaten
                                $('body').on("change","#form_kab",function(){
                                  var id = $(this).val();
                                  var data = "id="+id+"&data=kecamatan";
                                  $.ajax({
                                    type: 'POST',
                                    url: "get_daerah.php",
                                    data: data,
                                    success: function(hasil) {
                                      $("#form_kec").html(hasil);
                                      $("#form_kec").show();
                                      $("#form_des").hide();
                                    }
                                  });
                                });
          
                                // ambil data desa ketika data memilih kecamatan/kota
                                $('body').on("change","#form_kec",function(){
                                  var id = $(this).val();
                                  var data = "id="+id+"&data=desa";
                                  $.ajax({
                                    type: 'POST',
                                    url: "get_daerah.php",
                                    data: data,
                                    success: function(hasil) {
                                      $("#form_des").html(hasil);
                                      $("#form_des").show();
                                    }
                                  });
                                });
          
          
                              });
                            </script>
          
                            <script type="text/javascript">
                              
                              $(document).ready(function(){
          
                                // sembunyikan form kabupaten, kecamatan dan desa
                                $("#form_kab1").hide();
                                $("#form_kec1").hide();
                                $("#form_des1").hide();
          
                                // ambil data kabupaten ketika data memilih provinsi
                                $('body').on("change","#form_prov1",function(){
                                  var id = $(this).val();
                                  var data = "id="+id+"&data=kabupaten1";
                                  $.ajax({
                                    type: 'POST',
                                    url: "get_daerah1.php",
                                    data: data,
                                    success: function(hasil) {
                                      $("#form_kab1").html(hasil);
                                      $("#form_kab1").show();
                                      $("#form_kec1").hide();
                                      $("#form_des1").hide();
                                    }
                                  });
                                });
          
                                // ambil data kecamatan/kota ketika data memilih kabupaten
                                $('body').on("change","#form_kab1",function(){
                                  var id = $(this).val();
                                  var data = "id="+id+"&data=kecamatan1";
                                  $.ajax({
                                    type: 'POST',
                                    url: "get_daerah1.php",
                                    data: data,
                                    success: function(hasil) {
                                      $("#form_kec1").html(hasil);
                                      $("#form_kec1").show();
                                      $("#form_des1").hide();
                                    }
                                  });
                                });
          
                                // ambil data desa ketika data memilih kecamatan/kota
                                $('body').on("change","#form_kec1",function(){
                                  var id = $(this).val();
                                  var data = "id="+id+"&data=desa1";
                                  $.ajax({
                                    type: 'POST',
                                    url: "get_daerah1.php",
                                    data: data,
                                    success: function(hasil) {
                                      $("#form_des1").html(hasil);
                                      $("#form_des1").show();
                                    }
                                  });
                                });
          
          
                              });
                            </script>
          
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Pendidikan Terakhir <span style="color:red">*</span></label>
                                  <div class="col-sm-4">
                                      <select class="form-control" name="pendidikan_terakhir" required>
                                        <option value="">-- Pilih Pendidikan Terakhir --</option>
                                        <option value="belum sekolah/ tidak sekolah">belum sekolah/ tidak sekolah</option>
                                        <option value="SD">SD (Sekolah Dasar)</option>
                                        <option value="SMP/MTs">SMP/MTs</option>
                                        <option value="SMA/SMK/MA">SMA/SMK/MA</option>
                                        <option value="D3 (Diploma 3)">D3 (Diploma 3)</option>
                                        <option value="S1 (Sarjana)">S1 (Sarjana)</option>
                                        <option value="S2 (Magister)">S2 (Magister)</option>
                                        <option value="S3 (Doktor)">S3 (Doktor)</option>
                                      </select>
                                  </div>
                                  <label for="inputPassword3" class="col-sm-2 col-form-label" style="text-align:right">Agama <span style="color:red">*</span></label>
                                  <div class="col-sm-4">
                                      <select class="form-control" name="agama" required>
                                        <option value="">-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin <span style="color:red">*</span></label>
                                  <div class="col-sm-4">
                                      <select class="form-control" name="jenis_kelamin" required>
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki - laki">Laki - laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                      </select>
                                  </div>
                                  <label for="inputPassword3" class="col-sm-2 col-form-label" style="text-align:right">Status Pernikahan <span style="color:red">*</span></label>
                                  <div class="col-sm-4">
                                      <select class="form-control" name="status_pernikahan" required>
                                        <option value="">-- Status Pernikahan --</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Belum Menikah">Belum Menikah</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Suku</label>
                                  <div class="col-sm-4">
                                      <input type="text" class="form-control" id="inputPassword3" name="suku" placeholder="Masukkan Asal Suku">
                                  </div>
                                  <label for="inputPassword3" class="col-sm-2 col-form-label" style="text-align:right">Bahasa</label>
                                  <div class="col-sm-4">
                                      <input type="text" class="form-control" id="inputPassword3" name="bahasa" placeholder="Masukkan Bahasa Yang Digunakan">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Pekerjaan</label>
                                  <div class="col-sm-4">
                                      <input type="text" class="form-control" id="inputPassword3" name="pekerjaan" placeholder="Masukkan Nama Pekerjaan">
                                  </div>
                                  <label for="inputPassword3" class="col-sm-2 col-form-label" style="text-align:right">No. Telepon / HP <span style="color:red">*</span></label>
                                  <div class="col-sm-4">
                                      <input type="number" class="form-control" id="inputPassword3" name="no_telepon" placeholder="Isi 0 jika tidak ada" required>
                                  </div>
                              </div>
                            <!-- /.card-body -->
                              </div>
                              <center><h5><b>Data Penanggung Jawab</b></h5></center>
                              <div class="card-body">
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Jelas</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputPassword3" name="nama_jelas" placeholder="Masukkan Nama Penanggung Jawab">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Hub Dengan Pasien</label>
                                  <div class="col-sm-4">
                                      <input type="text" class="form-control" id="inputPassword3" name="hub_pasien" placeholder="Apa Hubungan Dengan Pasien">
                                  </div>
                                  <label for="inputPassword3" class="col-sm-2 col-form-label" style="text-align:right">No. Telepon / HP</label>
                                  <div class="col-sm-4">
                                      <input type="number" class="form-control" id="inputPassword3" name="no_telepon_penanggung" placeholder="Isi 0 jika tidak ada">
                                  </div>
                              </div>   
                            <!-- /.card-body -->
                           
                            
                              </div>
                             
                            <div class="card-footer">
                              <a href="/admin/pendaftaran" class="btn btn-danger" >Kembali</a>
                              <button type="submit" class="btn btn-primary float-right">Submit</button>
                              
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