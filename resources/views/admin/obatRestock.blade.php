@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
                        
            @include('admin.partials.partialsObat')

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Pengadaan Stok Obat | Data Transaksi</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Tanggal Transaksi</label>
                                        <input id="Name" type="date" class="form-control" placeholder="Fill Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nomor Faktur</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nama Supplier Obat</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nama Penanggung Jawab</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nomor HP</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Alamat</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nama Penerima</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Keterangan</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nomor Telp Klinik</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Pengadaan Stok Obat | Pemesanan Obat</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Kode Obat</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Nama Obat</label>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <select id="inputFloatingLabel" class="form-control input-border-bottom" required>
                                            <option></option>
                                            <option>Tablet</option>
                                            <option>Kapsul</option>
                                            <option>Sirup</option>
                                            <option>Suspensi</option>
                                            <option>Kaplet</option>
                                            <option>Salep</option>
                                            <option>Krim</option>
                                            <option>Gel</option>
                                            <option>Larutan</option>
                                            <option>Tetes (Drop)</option>
                                            <option>Injeksi</option>
                                            <option>Suppositoria</option>
                                            <option>Plester (patch)</option>
                                            <option>Inhale</option>
                                            <option>Serbuk</option>
                                            <option>Granul</option>
                                            <option>Ointment</option>
                                            <option>Spray</option>
                                            <option>Emulsi</option>
                                            <option>Lozenges / Permen Hisap</option>
                                        </select>
                                        <label for="inputFloatingLabel" class="placeholder">Bentuk</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <select id="inputFloatingLabel" class="form-control input-border-bottom" required>
                                            <option></option>
                                            <option>Obat Generik</option>
                                            <option>Obat Bebas</option>
                                            <option>Obat Bebas Terbatas</option>
                                            <option>Obat Keras</option>
                                            <option>Obat Psikotropika</option>
                                            <option>Obat Narkotika</option>
                                            <option>Obat Herbal</option>
                                            <option>Obat Suplemen</option>
                                            <option>Obat Topikal</option>
                                            <option>Obat Antiseptik dan Desinfektan</option>
                                            <option>Obat Antivirus</option>
                                            <option>Obat Antibiotik</option>
                                            <option>Obat Antijamur</option>
                                            <option>Obat Antihistamin</option>
                                            <option>Obat Antipiretik</option>
                                            <option>Obat Analgesik</option>
                                            <option>Obat Antihipertensi</option>
                                            <option>Obat Antidiabetes</option>
                                            <option>Obat Antasida</option>
                                            <option>Obat Kardiovaskular</option>
                                        </select>
                                        <label for="inputFloatingLabel" class="placeholder">Kategori</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <select id="inputFloatingLabel" class="form-control input-border-bottom" required>
                                            <option></option>
                                            <option>Tablet</option>
                                            <option>Kaplet</option>
                                            <option>Kapsul</option>
                                            <option>Strip</option>
                                            <option>Saset</option>
                                            <option>Sirup(ml)</option>
                                            <option>Tetes (Drop)</option>
                                            <option>Botol</option>
                                            <option>Tube</option>
                                            <option>Pot</option>
                                            <option>Plester (Patch)</option>
                                            <option>Ampul</option>
                                        </select>
                                        <label for="inputFloatingLabel" class="placeholder">Satuan</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-floating-label">
                                        <input id="inputFloatingLabel" type="number" class="form-control input-border-bottom" required>
                                        <label for="inputFloatingLabel" class="placeholder">Jumlah Stok</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Harga Beli Satuan</label>
                                        <input id="Name" type="number" class="form-control" placeholder="Rp">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Harga Jual Satuan</label>
                                        <input id="Name" type="number" class="form-control" placeholder="Rp">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Tanggal Kadaluarsa</label>
                                        <input id="Name" type="date" class="form-control" placeholder="Fill Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Total Harga Supplier</label>
                                        <input id="Name" type="number" class="form-control" placeholder="Rp">
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
