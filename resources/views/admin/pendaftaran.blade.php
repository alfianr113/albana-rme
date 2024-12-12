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
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pengunjung</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <center>
                                            <a href="/admin/tambahPengunjungBaru" type="button" class="btn btn-primary btn-border">Pengunjung Baru</a>
                                            &nbsp;
                                            <a href="/admin/tambahPengunjungLama" type="button" class="btn btn-primary btn-border">Pengunjung Lama</a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="d-flex align-items-center">
								<h4 class="card-title">Daftar Pengunjung | 01 Januari 2025</h4>
                                    <button type="button" class="btn btn-primary btn-border ml-auto" data-toggle="modal" data-target="#exampleModalCenter">
                                        Tambah Pengunjung
                                    </button>
                                <!-- Button trigger modal -->
                            
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
											<th>Tanggal Daftar</th>
											<th style="width: 10%">Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>No. RM</th>
											<th>Nama Pasien</th>
											<th>Poli Tuju</th>
											<th>Tanggal Daftar</th>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<td>1</td>
											<td>00-00-90-35</td>
											<td>An. Fenni Silvia Efendi</td>
											<td>Poli Umum</td>
											<td>09 - 04 - 2024</td>
											<td>
												<div class="form-button-action">
													<div class="modal fade" id="terimaPengunjung" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-header border-0">
																	<h5 class="modal-title">
																		<span class="fw-mediumbold">
																		Pilih Dokter
																	</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<form action="/admin/antrianKunjungan">
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
																		<button type="submit" id="addRowButton" class="btn btn-info">Simpan</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													
													<a type="button" class="btn btn-secondary btn-sm btn-border ml-1" href="/admin/detailPasien">
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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
											<td>01 - 11 - 1973</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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
											<td>Poli Gigi</td>
											<td>31 - 03 - 1979</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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
											<td>Poli Gigi</td>
											<td>11 - 09 - 1994</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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
											<td>Poli Gigi</td>
											<td>15 - 02 - 1978</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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
											<td>26 - 07 - 2005</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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
											<td>Poli Umum</td>
											<td>25 - 09 - 2007</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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
											<td>Poli Umum</td>
											<td>04 - 05 - 1983</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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
											<td>04 - 05 - 2020</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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
											<td>04 - 08 - 1992</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													<button type="button" class="btn btn-success btn-sm btn-border ml-1" data-toggle="modal" data-target="#terimaPengunjung">
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