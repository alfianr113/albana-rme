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
								<h4 class="card-title">Daftar Antrian Pengunjung | 01 Januari 2025</h4>
							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover" >
									<thead>
										<tr>
											<th>No</th>
											<th>No. RM</th>
											<th>Nama Pasien</th>
											<th>Poli Tuju</th>
											<th>Antrian</th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>No. RM</th>
											<th>Nama Pasien</th>
											<th>Poli Tuju</th>
											<th>Antrian</th>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<td>1</td>
											<td>00-00-90-35</td>
											<td>BAYI NYONYA FENNI SILVIA EFENDI</td>
											<td>Poli Gigi</td>
											<td>A1</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>00-00-90-34</td>
											<td style="text-align: left;">SUDARI</td>
											<td>Poli Umum</td>
											<td>A2</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>00-00-90-33</td>
											<td style="text-align: left;">RICKY TOGU HAHOLONGAN GULTOM</td>
											<td>Poli Umum</td>
											<td>A3</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>00-00-90-32</td>
											<td style="text-align: left;">MUHAMMAD ARIEF</td>
											<td>Poli Umum</td>
											<td>A4</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>00-00-90-31</td>
											<td style="text-align: left;">SATIAWATI</td>
											<td>Poli Umum</td>
											<td>A5</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>00-00-90-30</td>
											<td style="text-align: left;">MUHAMAD ADAM RIZKI HASAN </td>
											<td>Poli Umum</td>
											<td>A6</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>7</td>
											<td>00-00-90-29</td>
											<td style="text-align: left;">SITI RAHMAWATI RAMADANTI</td>
											<td>Poli Gigi</td>
											<td>A7</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>8</td>
											<td>00-00-90-28</td>
											<td style="text-align: left;">ELIDA</td>
											<td>Poli Gigi</td>
											<td>A8</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>9</td>
											<td>00-00-90-27</td>
											<td style="text-align: left;">ZEA AZUCENA </td>
											<td>Poli Umum</td>
											<td>A9</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>10</td>
											<td>00-00-90-26</td>
											<td style="text-align: left;">USEP HERMANTO</td>
											<td>Poli Umum</td>
											<td>A10</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-info btn-sm btn-border ml-1" >
														<i class="fas fa-microphone"></i>
													</button>
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" >
														<i class="fas fa-check"></i>
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														<i class="fas fa-times"></i>
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