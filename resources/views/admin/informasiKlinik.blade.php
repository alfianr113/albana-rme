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
                                <h4 class="card-title">Informasi Klinik</h4>
                                <div class="modal fade" id="updateInfoKlinik" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title">
                                                    <span class="fw-mediumbold">
                                                    Perbaharui Informasi Klinik
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Token</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" value="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Organization ID</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" value="" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label" required>Organization Type</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" style="width: 100%;" name="Organization_type" required>
                                                            <option value="">------- Pilih Tipe Organization -------</option>
                                                            <option value="prov">Healthcare Provider - (Fasilitas Pelayanan Kesehatan)</option>
                                                            <option value="dept">Hospital Department - (Departemen dalam Rumah Sakit)</option>
                                                            <option value="team">Organizational team - (Kelompok praktisi/tenaga kesehatan yang menjalankan fungsi tertentu dalam suatu organisasi)</option>
                                                            <option value="gov">Government - (Organisasi Pemerintah)</option>
                                                            <option value="ins">Insurance Company - (Perusahaan Asuransi)</option>
                                                            <option value="pay">Payer - (Badan Penjamin)</option>
                                                            <option value="edu">Educational Institute - (Institusi Pendidikan/Penelitian)</option>
                                                            <option value="reli">Religious Institution - (Organisasi Keagamaan)</option>
                                                            <option value="crs">Clinical Research Sponsor - (Sponsor penelitian klinis)</option>
                                                            <option value="cg">Community Group - (Kelompok Masyarakat)</option>
                                                            <option value="bus">Non-Healthcare Business or Corporation - (Perusahaan diluar bidang kesehatan)</option>
                                                            <option value="other">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size:14px;">Alamat</label>
                                                    <div class="col-sm-10">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <select class="form-control" id="form_prov" name="province" required>
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
                                                            <div class="col-md-3">
                                                                <select class="form-control" id="form_kab" name="code_city" required></select>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select class="form-control" id="form_kec" name="district" required></select>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select class="form-control" id="form_des" name="village" required></select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size:14px;">Kode Pos</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control form-control-sm" id="PostalCode"  name="PostalCode" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size:14px;">Nama Jalan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-sm" id="street_name" name="street_name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size:14px;">No Telepon</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control form-control-sm" id="phone"  name="phone" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size:14px;">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control form-control-sm" id="email"  name="email" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size:14px;">Nama Organisasi</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-sm" id="Name"  name="Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size:14px;">Website</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-sm" id="web_site"  name="web_site" required>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                  <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                                </div>
                                                <!-- /.card-footer -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-border ml-auto" data-toggle="modal" data-target="#updateInfoKlinik">Perbaharui Informasi Klinik</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                  <br><br>
                                  <center><img src="{{ asset('img/logo.png') }}"/></center>
                                </div>
                                <div class="col-md-10">
                                    <table width="100%">
                                        <tr>
                                          <th colspan="3" style="text-align: left;">Data Organisasi</th>
                                        </tr>
                                        <tr>
                                          <td style="text-align: left;" width="20%">ID Organisasi</td>
                                          <td width="5%">:</td>
                                          <td style="text-align: left;" width="75%">2d193be2-608d-4834-9db3-45b684fe6e20</td>
                                        </tr>
                                        <tr>
                                          <td style="text-align: left;">Nama</td>
                                          <td>:</td>
                                          <td style="text-align: left;">Klinik Pratama Indosehat 2003 Pasar Kemis</td>
                                        </tr>
                                        <tr>
                                          <td style="text-align: left;">Tipe Organisasi</td>
                                          <td>:</td>
                                          <td style="text-align: left;">Healthcare Provider - (Fasilitas Pelayanan Kesehatan)</td>
                                        </tr>
                                        <tr>
                                          <td style="text-align: left;">Alamat</td>
                                          <td>:</td>
                                          <td style="text-align: left;">BANTEN, KAB. TANGERANG, Pasar Kemis, Pasar Kemis</td>
                                        </tr>
                                        <tr>
                                          <td style="text-align: left;">Nama Jalan</td>
                                          <td>:</td>
                                          <td style="text-align: left;"> Jl Raya Pasar Kemis no. 33 rt/rw 001/001</td>
                                        </tr>
                                        <tr>
                                          <td style="text-align: left;">Kode Pos</td>
                                          <td>:</td>
                                          <td style="text-align: left;">15560</td>
                                        </tr>
                                        <tr>
                                          <td style="text-align: left;">No Telepon</td>
                                          <td>:</td>
                                          <td style="text-align: left;">081281015591</td>
                                        </tr>
                                        <tr>
                                          <td style="text-align: left;">Email</td>
                                          <td>:</td>
                                          <td style="text-align: left;">Indosehatpasarkemis@gmail.com</td>
                                        </tr>
                                        <tr>
                                          <td style="text-align: left;">Website</td>
                                          <td>:</td>
                                          <td style="text-align: left;">https://klinikpratamaindosehat2003pasarkemis.com/</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection