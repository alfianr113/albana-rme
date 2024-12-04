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
								<h4 class="card-title">Daftar Pengunjung</h4>
								<a class="ml-auto" href="tambahPengunjung.html"><button class="btn btn-primary btn-border ">
									Tambah Pengunjung
								</button></a>
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
											<th>NIK</th>
											<th>Tempat Lahir</th>
											<th>Tanggal Lahir</th>
											<th>Tanggal Daftar</th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>No. RM</th>
											<th>Nama Pasien</th>
											<th>NIK</th>
											<th>Tempat Lahir</th>
											<th>Tanggal Lahir</th>
											<th>Tanggal Daftar</th>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<td>1</td>
											<td>00-00-90-35</td>
											<td>BAYI NYONYA FENNI SILVIA EFENDI</td>
											<td>3603120...</td>
											<td>TANGERANG</td>
											<td>09 - 04 - 2024</td>
											<td>15 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<div class="modal fade" id="terimaPengunjung" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog modal-sm" role="document">
															<div class="modal-content">
																<div class="modal-header border-0">
																	<h5 class="modal-title">
																		<span class="fw-mediumbold">
																		Pilih Poliklinik dan Dokter
																	</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<form action="pengunjung.html">
																		<div class="form-group row">
																			<label for="inputPassword3" class="col-sm-4 col-form-label">Poliklinik</label>
																			<div class="col-sm-8">
																				<select class="form-control" name="status_pasien" required>
																					<option value="">-- Pilih Poliklinik --</option>
																					<option value="umum">Poli Umum</option>
																					<option value="gigi">Poli Gigi</option>
																					<option value="anak">Poli Anak</option>
																				</select>
																			</div>
																		</div>
																		<div class="form-group row">
																			<label for="inputPassword3" class="col-sm-4 col-form-label">Dokter</label>
																			<div class="col-sm-8">
																				<select class="form-control" name="status_pasien" required>
																					<option value="">-- Pilih Dokter --</option>
																					<option value="umum">dr. Reni</option>
																					<option value="gigi">dr. Agus</option>
																					<option value="anak">dr. Iwan</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer border-0">
																		<button type="submit" id="addRowButton" class="btn btn-primary">Simpan</button>
																		<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>00-00-90-34</td>
											<td style="text-align: left;">SUDARI</td>
											<td>3603120...</td>
											<td>TANGERANG </td>
											<td>01 - 11 - 1973</td>
											<td>15 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>00-00-90-33</td>
											<td style="text-align: left;">RICKY TOGU HAHOLONGAN GULTOM</td>
											<td>3603123...</td>
											<td>BANDUNG</td>
											<td>31 - 03 - 1979</td>
											<td>15 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>00-00-90-32</td>
											<td style="text-align: left;">MUHAMMAD ARIEF</td>
											<td>3603121...</td>
											<td>PATI</td>
											<td>11 - 09 - 1994</td>
											<td>15 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>00-00-90-31</td>
											<td style="text-align: left;">SATIAWATI</td>
											<td>3603295...</td>
											<td>TANGERANG </td>
											<td>15 - 02 - 1978</td>
											<td>14 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>00-00-90-30</td>
											<td style="text-align: left;">MUHAMAD ADAM RIZKI HASAN </td>
											<td>3603292...</td>
											<td>TANGERANG </td>
											<td>26 - 07 - 2005</td>
											<td>14 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>7</td>
											<td>00-00-90-29</td>
											<td style="text-align: left;">SITI RAHMAWATI RAMADANTI</td>
											<td>3201296...</td>
											<td>BOGOR</td>
											<td>25 - 09 - 2007</td>
											<td>14 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>8</td>
											<td>00-00-90-28</td>
											<td style="text-align: left;">ELIDA</td>
											<td>3201294...</td>
											<td>TANGERANG </td>
											<td>04 - 05 - 1983</td>
											<td>14 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>9</td>
											<td>00-00-90-27</td>
											<td style="text-align: left;">ZEA AZUCENA </td>
											<td>3603124...</td>
											<td>TANGERANG </td>
											<td>04 - 05 - 2020</td>
											<td>14 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
													</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>10</td>
											<td>00-00-90-26</td>
											<td style="text-align: left;">USEP HERMANTO</td>
											<td>3601280...</td>
											<td>PANDEGLANG</td>
											<td>04 - 08 - 1992</td>
											<td>13 - 07 - 2024</td>
											<td>
												<div class="form-button-action">
													<button type="button" class="btn btn-success btn-sm btn-border" data-toggle="modal" data-target="#terimaPengunjung">
														Terima
													</button>
													<button type="button" class="btn btn-danger btn-sm btn-border ml-1" >
														Batal
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