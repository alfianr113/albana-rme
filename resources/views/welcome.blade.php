<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Albana.id | Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="img/logo_albana.png" type="image/x-icon"/>
    
	<!-- Fonts and icons -->
	<script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: [{{ asset('css/fonts.min.css') }}]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<style>
		.login-aside {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center; /* Center content vertically */
		padding: 20px;
		}

		.login-aside img {
			max-width: 40%; /* Batasi ukuran gambar agar proporsional */
			margin-bottom: 20px; /* Jarak antara gambar dan teks */
		}

		.login-aside h1 {
			font-size: 2.5rem; /* Ukuran font lebih besar */
			font-weight: 700; /* Lebih tebal */
			margin-bottom: 15px; /* Jarak antara judul dan teks lainnya */
		}

		center {
			font-size: 1.1rem; /* Ukuran font lebih besar */
			line-height: 1.8; /* Spasi antar baris lebih lega */
			margin-bottom: 15px; /* Jarak antar paragraf */
			color: rgba(255, 255, 255, 0.9); /* Warna putih dengan transparansi untuk kelembutan */
		}
	</style>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/atlantis.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.min.css') }}">
</head>
<body class="login">
	<div class="wrapper wrapper-login wrapper-login-full p-0">
		<div class="login-aside w-50 d-flex flex-column align-items-center bg-secondary-gradient">
			<h1 class="title fw-bold text-white">Albana.id</h1>
			<img src="{{ asset('img/awal.png') }}" alt="Gambar Ilustrasi">
			<p><center>
				Akses mudah, aman, dan fleksibel, kapan saja dan di mana saja. Tingkatkan efisiensi layanan Anda bersama <a href="albana.id" style="color: aliceblue;">Albana.id</a> !
			</center></p>
		</div>
		<div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
			<div class="container container-login container-transparent animated fadeIn">
				<h3 class="text-center">Silahkan Masuk</h3>
				<div class="login-form">
					<div class="form-group">
						<label for="username" class="placeholder"><b>Username</b></label>
						<input id="username" name="username" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password" class="placeholder"><b>Password</b></label>
						<a href="#" class="link float-right" id="show-signup">Lupa Password ?</a>
						<div class="position-relative">
							<input id="password" name="password" type="password" class="form-control" required>
							<div class="show-password">
								<i class="icon-eye"></i>
							</div>
						</div>
					</div>
					<div class="form-group form-action-d-flex mb-3">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="rememberme">
							<label class="custom-control-label m-0" for="rememberme">Ingat Saya</label>
						</div>
						<a href="#" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Masuk</a>
					</div>
					<div class="login-account">
						<span class="msg">Akses Antrian Display ?</span>
						<a href="#" id="show-signup" class="link">Klik Disini</a>
					</div>
				</div>
			</div>

			<div class="container container-signup container-transparent animated fadeIn">
				<h3 class="text-center">Lupa Password</h3>
				<div class="login-form">
					<div class="form-group">
						<label for="fullname" class="placeholder"><b>Nama Pemilik Akun</b></label>
						<input  id="fullname" name="fullname" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email" class="placeholder"><b>Tipe Akun Pegawai</b></label>
						<select class="form-control form-control" id="defaultSelect">
                            <option>-- Pilih Tipe --</option>
                            <option>Apoteker</option>
                            <option>Dokter</option>
                            <option>Pendaftaran</option>
                            <option>Perawat</option>
                            <option>Lainnya</option>
                        </select>
					</div>
					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="agree" id="agree">
							<label class="custom-control-label" for="agree">Saya Setuju dengan syarat dan ketentuan.</label>
						</div>
					</div>
					<div class="row form-action">
						<div class="col-md-6">
							<a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Batal</a>
						</div>
						<div class="col-md-6">
							<a href="#" class="btn btn-secondary w-100 fw-bold">Proses</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/core/popper.min.js') }}"></script>
	<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/atlantis.min.js') }}"></script>
</body>
</html>