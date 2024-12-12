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
						
						<div class="row">
							<div class="col-md-8">
								<div class="card full-height">
									<div class="card-body">
										<div class="card-title">Statistik Hari Ini | 1 Januari 2025</div>
										<div class="card-category">Informasi statistik harian klinik</div>
										<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
											<div class="px-2 pb-2 pb-md-0 text-center">
												<div id="circles-1"></div>
												<h6 class="fw-bold mt-3 mb-0">Pasien Baru</h6>
											</div>
											<div class="px-2 pb-2 pb-md-0 text-center">
												<div id="circles-2"></div>
												<h6 class="fw-bold mt-3 mb-0">Pengunjung</h6>
											</div>
											<div class="px-2 pb-2 pb-md-0 text-center">
												<div id="circles-3"></div>
												<h6 class="fw-bold mt-3 mb-0">Dilayani</h6>
											</div>
											<div class="px-2 pb-2 pb-md-0 text-center">
												<div id="circles-4"></div>
												<h6 class="fw-bold mt-3 mb-0">Obat Terjual</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card">
									<div class="card-body">
										<div class="card-title fw-mediumbold">Pasien Baru</div>
										<div class="card-list">
											<div class="item-list">
												<div class="avatar">
													<img src="{{ asset('img/user.png') }}" alt="..." class="avatar-img rounded-circle">
												</div>
												<div class="info-user ml-3">
													<div class="username">KASUMI ARIMURA</div>
													<div class="status">RM : 00-995-991</div>
												</div>
												<button class="btn btn-icon btn-primary btn-round btn-xs">
													<i class="fa fa-eye"></i>
												</button>
											</div>
											<div class="item-list">
												<div class="avatar">
													<img src="{{ asset('img/user.png') }}" alt="..." class="avatar-img rounded-circle">
												</div>
												<div class="info-user ml-3">
													<div class="username">HASHIMOTO KANNA</div>
													<div class="status">RM : 00-995-990</div>
												</div>
												<button class="btn btn-icon btn-primary btn-round btn-xs">
													<i class="fa fa-eye"></i>
												</button>
											</div>
											<div class="item-list">
												<div class="avatar">
													<img src="{{ asset('img/user.png') }}" alt="..." class="avatar-img rounded-circle">
												</div>
												<div class="info-user ml-3">
													<div class="username">SUZU HIROSE</div>
													<div class="status">RM : 00-995-989</div>
												</div>
												<button class="btn btn-icon btn-primary btn-round btn-xs">
													<i class="fa fa-eye"></i>
												</button>
											</div> 
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<!-- TimeLine -->
					<h4 class="page-title">Riwayat Aktivitas | 1 Januari 2025</h4>
					<div class="row">
						<div class="col-md-12">
							
							<ul class="timeline">
								<li>
									<div class="timeline-badge info"><i class="icon-user-follow"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Kunjungan Terbaru</h4>
										</div>
										<div class="timeline-body">
											<p><span style="color: red">"MINAMI HAMABE"</span> baru saja melakukan pendaftaran untuk <span style="color: red">Kunjungan</span></p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge warning"><i class="flaticon-alarm-1"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Antrian Saat Ini</h4>
										</div>
										<div class="timeline-body">
											<p>Nomor antrian saat ini adalah <span style="color: red">A5</span> atas nama <span style="color: red">"ALFIAN RAHMAN"</span></p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge success"><i class="flaticon-analytics"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Pelayanan Terbaru</h4>
										</div>
										<div class="timeline-body">
											<p>Saat ini, <span style="color: red">"BAYU SUPRIATNA"</span> sedang mendapatkan pelayanan dari dokter <span style="color: red">"AGUS MAHENDRA"</span> pada poli <span style="color: red">"UMUM"</span></p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge danger"><i class="flaticon-box-1"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Stok Obat</h4>
										</div>
										<div class="timeline-body">
											<p>Stok Obat <span style="color: red">"MICROLAX SUPP"</span> saat ini tersisa sebanyak<span style="color: red">"1 Tube"</span></p>
										</div>
									</div>
								</li>
								
								<li>
									<div class="timeline-badge secondary"><i class="flaticon-credit-card"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Pembayaran</h4>
										</div>
										<div class="timeline-body">
											<p><span style="color: red">"EDWARD ELRIC"</span> baru saja melakukan pembayaran sebesar <span style="color: red">"Rp125.000"</span></p>
											
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge dark"><i class="flaticon-calendar"></i></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Jadwal Dokter</h4>
										</div>
										<div class="timeline-body">
											<p>Hari ini : <br>
												<span style="color: red">Dr.Tirta</span> hadir dari pukul <span style="color: red">10:00 - 14:00</span><br>
												<span style="color: red">Dr.Rafel</span> hadir dari pukul <span style="color: red">11:00 - 15:00</span><br> 
												<span style="color: red">Dr.Juna</span> hadir dari pukul <span style="color: red">15:00 - 20:00</span></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
