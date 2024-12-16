@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-9">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="page-pretitle">
                                Pembayaran
                            </h6>
                            <h4 class="page-title">Faktur #FDS9876KD</h4>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-light btn-border">
                                Unduh
                            </a>
                            <a href="#" class="btn btn-primary ml-2">
                                Cetak
                            </a>
                        </div>
                    </div>
                    <div class="page-divider"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-invoice">
                                <div class="card-header">
                                    <div class="invoice-header">
                                        <h3 class="invoice-title">
                                            Faktur
                                        </h3>
                                        <div class="invoice-logo">
                                            <img src="{{ asset('img/examples/invoice.png') }}" alt="company logo">
                                        </div>
                                    </div>
                                    <div class="invoice-desc">
                                        Bandung Barat, Jawa Barat, Indonesia<br/>
                                        albanaalkes@gmail.com
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="separator-solid"></div>
                                    <div class="row">
                                        <div class="col-md-4 info-invoice">
                                            <h5 class="sub">Tanggal</h5>
                                            <p>01 Januari 2025</p>
                                        </div>
                                        <div class="col-md-4 info-invoice">
                                            <h5 class="sub">ID Faktur</h5>
                                            <p>#FDS9876KD</p>
                                        </div>
                                        <div class="col-md-4 info-invoice">
                                            <h5 class="sub">Ditujukan Kepada</h5>
                                            <p>
                                                Nn. Minami Hamabe, <br/>
                                                No Bpjs : 0003511875982
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="invoice-detail">
                                                <div class="invoice-top">
                                                    <h3 class="title"><strong>Ringkasan Pesanan</strong></h3>
                                                </div>
                                                <div class="invoice-item">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <td><strong>Barang</strong></td>
                                                                    <td class="text-center"><strong>Harga</strong></td>
                                                                    <td class="text-center"><strong>Jumlah</strong></td>
                                                                    <td class="text-right"><strong>Total</strong></td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>VIT B COMPLEX</td>
                                                                    <td class="text-center">Rp4.000,00</td>
                                                                    <td class="text-center">6</td>
                                                                    <td class="text-right">Rp24.000,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>OMEPRAZOLE 20MG</td>
                                                                    <td class="text-center">Rp5.000,00</td>
                                                                    <td class="text-center">6</td>
                                                                    <td class="text-right">Rp30.000,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>DEXAMETHASONE</td>
                                                                    <td class="text-center">Rp3.000,00</td>
                                                                    <td class="text-center">6</td>
                                                                    <td class="text-right">Rp18.000,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PLESTER</td>
                                                                    <td class="text-center">Rp1.000,00</td>
                                                                    <td class="text-center">2</td>
                                                                    <td class="text-right">Rp2.000,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="text-center"><strong>Subtotal</strong></td>
                                                                    <td class="text-right">Rp74.000,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="text-center"><strong>Pajak</strong></td>
                                                                    <td class="text-right">Rp5.000,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="text-center"><strong>Total</strong></td>
                                                                    <td class="text-right">Rp79.000,00</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="separator-solid  mb-3"></div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-7 col-md-5 mb-3 mb-md-0 transfer-to">
                                            <h5 class="sub">Bandung Barat, 01 Januari 2025</h5>
                                            <div class="account-transfer">
                                                <div><center>Petugas</center><br><br></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div><center>(..................................................)</center></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-md-7 transfer-total">
                                            <h5 class="sub">Total Keseluruhan</h5>
                                            <div class="price">Rp79.000,00</div>
                                            <span>Termasuk Pajak</span>
                                        </div>
                                    </div>
                                    <div class="separator-solid"></div>
                                    
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
