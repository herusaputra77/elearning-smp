<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin 2 - Login</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url() ?>assets/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url() ?>assets/template/css/sb-admin-2.min.css" rel="stylesheet">
	<script src="<?= base_url('assets/') ?>sweetalert/package/dist/sweetalert2.all.min.js"></script>



</head>

<body class="bg-gradient-success">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<?php if ($this->session->flashdata('gagal-login')) : ?>
							<script>
								Swal.fire({
									icon: 'error',
									title: 'Gagal login!',
									text: 'Silahkan Periksa Kembali Username dan Password Kamu!',
									showConfirmButton: false,
									timer: 5000
								});
							</script>
						<?php endif; ?>
						<?php if ($this->session->flashdata('success-logout')) : ?>
							<script>
								Swal.fire({
									icon: 'success',
									title: 'Sukses Logout!',
									text: 'Anda Berhasil Logout!',
									showConfirmButton: false,
									timer: 5000
								});
							</script>
						<?php endif; ?>
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image">
								<img width="100%" height="100%" src="<?= base_url('assets/') ?>img/modal-login-2.png" alt="">

							</div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center mb-3">
										<h1 class="h4 text-gray-900 mb-4" style="font-family: 'Times New Roman', Times, serif;">Selamat Datang di E-learning SMPN 5 Lubuk Alung</h1>
										<img src="<?= base_url('assets/img/logo_smp.png') ?>" alt="" width="150px">
									</div>
									<form class="user" action="<?= base_url('auth/cek_loginSiswa') ?>" method="post">
										<div class="form-group">
											<input type="text" class="form-control form-control-user" name="username" id="username" aria-describedby="emailHelp" placeholder="Username">
										</div>
										<?= form_error('username', '<small class="text-danger">', '</small>'); ?>

										<div class="form-group">
											<input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
										</div>
										<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
										<div class="form-group">
											<select name="role" class="form-control" id="">
												<option value="">Pilih Role</option>
												<option value="1">Guru</option>
												<option value="2">Siswa</option>

											</select>
										</div>

										<!-- <div class="form-group">
											<div class="custom-control custom-checkbox small">
												<input type="checkbox" class="custom-control-input" id="customCheck">
												<label class="custom-control-label" for="customCheck">Remember Me</label>
											</div>
										</div> -->
										<button type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>
										<!-- <a href="index.html" class="btn btn-google btn-user btn-block">
											<i class="fab fa-google fa-fw"></i> Login with Google
										</a>
										<a href="index.html" class="btn btn-facebook btn-user btn-block">
											<i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
										</a> -->
									</form>
									<hr>
									<!-- <div class="text-center">
										<a class="small" href="forgot-password.html">Forgot Password?</a>
									</div>
									<div class="text-center">
										<a class="small" href="register.html">Create an Account!</a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url() ?>assets/template/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url() ?>assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url() ?>assets/template/js/sb-admin-2.min.js"></script>

</body>

</html>
