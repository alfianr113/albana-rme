@extends('admin.layouts.main')
@section('container')

<div class="main-panel">
	<div class="container">
		<div class="page-inner">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Cari Pasien</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
											<form action="/admin/cariPasien2">
											<div class="form-group row">
												<div class="col-sm-4">
													<input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="Nama" required>
												</div>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="NIK" required>
												</div>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="inputPassword3" name="no_rekam_medis" placeholder="No RM" required>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-12">
													<span style="color:red">*Minimal Isi Salah Satu</span>
												</div>
											</div>
											<button type="submit" class="btn btn-info float-right">Cari Pasien</button>
											</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="d-flex align-items-center">
								<h4 class="card-title">Daftar Pasien | 01 Januari 2025</h4>
                                    <button type="button" class="btn btn-primary btn-border ml-auto" data-toggle="modal" data-target="#exampleModalCenter">
                                        Cari Pasien
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
											<th>NIK</th>
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
											<th>Tanggal Daftar</th>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<td>1</td>
											<td>00-00-90-35</td>
											<td>Ny. Minami Hamabe</td>
											<td>3287661991990205</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>00-00-90-34</td>
											<td style="text-align: left;">Ny. Sudari</td>
											<td>3287661991990210</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>00-00-90-33</td>
											<td style="text-align: left;">Tn. Ricky Togu Gultom</td>
											<td>3287661991980001</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>00-00-90-32</td>
											<td style="text-align: left;">Tn. Muhammad Arief</td>
											<td>3287661991930521</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>00-00-90-31</td>
											<td style="text-align: left;">Nn. Satiawati</td>
											<td>3287661991930521</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>00-00-90-30</td>
											<td style="text-align: left;">An. Muhammad Adam Rizki</td>
											<td>3287661991930521</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													
												</div>
											</td>
										</tr>
										<tr>
											<td>7</td>
											<td>00-00-90-29</td>
											<td style="text-align: left;">Nn. Siti Rahmawati Ramadanti</td>
											<td>3287661991930521</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													
												</div>
											</td>
										</tr>
										<tr>
											<td>8</td>
											<td>00-00-90-28</td>
											<td style="text-align: left;">An. Elda Maharani</td>
											<td>3287661991930521</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													
												</div>
											</td>
										</tr>
										<tr>
											<td>9</td>
											<td>00-00-90-27</td>
											<td style="text-align: left;">Tn. Zea Azucena </td>
											<td>3287661991930521</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													
												</div>
											</td>
										</tr>
										<tr>
											<td>10</td>
											<td>00-00-90-26</td>
											<td style="text-align: left;">Tn. Ed Rothtaylor</td>
											<td>3287661991930521</td>
											<td>01 - 01 - 2025</td>
											<td>
												<div class="form-button-action">
													<a href="/admin/detailPasien" type="button" class="btn btn-secondary btn-sm btn-border ml-1" >
														<i class="fas fa-eye"></i>
													</a>
													
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