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
								<h2 class="card-title">Hasil Pencarian :</h2>
                                <button type="button" class="btn btn-primary btn-border ml-auto">
                                    <span style="color: red">Nama :</span> Rahman &nbsp; | &nbsp;
                                    <span style="color: red">NIK :</span> - &nbsp; | &nbsp;
                                    <span style="color: red">No RM :</span> -
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
											<th style="width: 10%">Pilih Pasien</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>No</th>
											<th>No. RM</th>
											<th>Nama Pasien</th>
											<th>NIK</th>
										</tr>
									</tfoot>
									<tbody>
										<tr>
											<td>1</td>
											<td>00-00-90-35</td>
											<td>Tn. Alfian Rahman</td>
											<td>1741146002941195 </td>
											<td>
												<div class="form-button-action">
													<a type="button" class="btn btn-secondary btn-sm btn-border ml-1" href="/admin/detailPasien">
														<i class="fas fa-eye"></i>
                                                    </a>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>00-00-90-34</td>
											<td style="text-align: left;">Tn. Rahman Azael</td>
											<td>8999419179993769 </td>
											<td>
												<div class="form-button-action">
													<a type="button" class="btn btn-secondary btn-sm btn-border ml-1" href="/admin/detailPasien">
														<i class="fas fa-eye"></i>
                                                    </a>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>00-00-90-33</td>
											<td style="text-align: left;">Tn. Tubagus Rahman</td>
											<td>6346429238847971 </td>
											<td>
												<div class="form-button-action">
													<a type="button" class="btn btn-secondary btn-sm btn-border ml-1" href="/admin/detailPasien">
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