<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Albana.id | Halaman Antrian</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="img/logo_albana.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["{{ asset('css/fonts.min.css') }}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/atlantis2.css') }}">

</head>
<body>
	<div class="wrapper horizontal-layout-2">
		
		<div class="main-header" data-background-color="light-blue2">
			<div class="nav-top">
				<div class="container d-flex flex-row">
					<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="icon-menu"></i>
						</span>
					</button>
					<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
					<!-- Logo Header -->
					<a href="/" class="logo d-flex align-items-center">
						<img src="../img/logoklinik.png" alt="navbar brand" class="navbar-brand">
					</a>
					<!-- End Logo Header -->
				</div>
			</div>
			<div class="nav-bottom">
				<div class="container">
					<h3 class="title-menu d-flex d-lg-none"> 
						Menu 
						<div class="close-menu"> <i class="flaticon-cross"></i></div>
					</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
                                <div class="col-6 col-sm-4 col-lg-2">
                                    <div class="card">
                                        <div class="card-body p-3 text-center">
                                            <div class="h3 m-0">NOMOR ANTRIAN</div>
											<div class="h1 mt-2">00</div>
                                            <div class="text-muted mb-3">NAMA PASIEN</div>
											<div class="text-muted mb-3">POLI UMUM</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-lg-2">
                                    <div class="card">
                                        <div class="card-body p-3 text-center">
                                            <div class="h3 m-0">NOMOR ANTRIAN</div>
											<div class="h1 mt-2">00</div>
                                            <div class="text-muted mb-3">NAMA PASIEN</div>
											<div class="text-muted mb-3">RESEPSIONIS</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-lg-2">
                                    <div class="card">
                                        <div class="card-body p-3 text-center">
                                            <div class="h3 m-0">NOMOR ANTRIAN</div>
											<div class="h1 mt-2">00</div>
                                            <div class="text-muted mb-3">NAMA PASIEN</div>
											<div class="text-muted mb-3">TRIASE</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-lg-2">
                                    <div class="card">
                                        <div class="card-body p-3 text-center">
                                            <div class="h3 m-0">NOMOR ANTRIAN</div>
											<div class="h1 mt-2">00</div>
                                            <div class="text-muted mb-3">NAMA PASIEN</div>
											<div class="text-muted mb-3">DEPO OBAT</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-lg-2">
                                    <div class="card">
                                        <div class="card-body p-3 text-center">
                                            <div class="h3 m-0">NOMOR ANTRIAN</div>
											<div class="h1 mt-2">00</div>
                                            <div class="text-muted mb-3">NAMA PASIEN</div>
											<div class="text-muted mb-3">LAB</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-lg-2">
                                    <div class="card">
                                        <div class="card-body p-3 text-center">
                                            <div class="h3 m-0">NOMOR ANTRIAN</div>
											<div class="h1 mt-2">00</div>
                                            <div class="text-muted mb-3">NAMA PASIEN</div>
											<div class="text-muted mb-3">KASIR</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('https://albana.id') }}" target="_blank">
                                Albana Alkesindo Teknologi
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Bantuan
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    2025, made with <i class="fa fa-heart heart text-danger"></i> by <a href="{{ url('https://albana.id') }}" target="_blank">albana.id</a>
                </div>
            </div>
        </footer>
	</div>
	<!--   Core JS Files   -->
	<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/core/popper.min.js') }}"></script>
	<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

	<!-- Moment JS -->
	<script src="{{ asset('js/plugin/moment/moment.min.js') }}"></script>

	<!-- Chart JS -->
	<script src="{{ asset('js/plugin/chart.js/chart.min.js') }}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

	<!-- Chart Circle -->
	<script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- Bootstrap Toggle -->
	<script src="{{ asset('js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{ asset('js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

	<!-- Google Maps Plugin -->
	<script src="{{ asset('js/plugin/gmaps/gmaps.js') }}"></script>

	<!-- Dropzone -->
	<script src="{{ asset('js/plugin/dropzone/dropzone.min.js') }}"></script>

	<!-- Fullcalendar -->
	<script src="{{ asset('js/plugin/fullcalendar/fullcalendar.min.js') }}"></script>

	<!-- DateTimePicker -->
	<script src="{{ asset('js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="{{ asset('js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

	<!-- Bootstrap Wizard -->
	<script src="{{ asset('js/plugin/bootstrap-wizard/bootstrapwizard.js') }}"></script>

	<!-- jQuery Validation -->
	<script src="{{ asset('js/plugin/jquery.validate/jquery.validate.min.js') }}"></script>

	<!-- Summernote -->
	<script src="{{ asset('js/plugin/summernote/summernote-bs4.min.js') }}"></script>
	
	<!-- Owl Carousel -->
	<script src="{{ asset('js/plugin/owl-carousel/owl.carousel.min.js') }}"></script>
	
	<!-- Select2 -->
	<script src="{{ asset('js/plugin/select2/select2.full.min.js') }}"></script>

	<!-- Sweet Alert -->
	<script src="{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}"></script>

	<!-- Atlantis JS -->
	<script src="{{ asset('js/atlantis2.min.js') }}"></script>

</body>
</html>