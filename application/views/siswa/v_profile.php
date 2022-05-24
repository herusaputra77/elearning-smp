<div id="features" class="features section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="features-content">
					<div class="container">

						<div class="row">
							<div class="col-md-12">

								<div class="mt-3 mb-3">

									<h3><?= $judul ?></h3>
								</div>
							</div>
							<div class="col-md-6">

								<div class="card mb-3" style="border:2;">
									<div class="card-body">
										<div>
											<label for="">Nama</label>
											<h3><?= $user['nm_siswa'] ?></h3>
										</div>
										<div>
											<label for="">Username</label>
											<h3><?= $user['username'] ?></h3>
										</div>
										<div>
											<label for="">Alamat</label>
											<h3><?= $user['alamat'] ?></h3>
										</div>
										<div>
											<label for="">No Hp</label>
											<h3><?= $user['no_hp'] ?></h3>
										</div>
										<div>
											<label for="">Jenis Kelamin</label>
											<h3><?= $user['jenkel'] ?></h3>
										</div>


									</div>
								</div>
							</div>
							<div class="col-md-6" align="center">
								<img src="<?= base_url('assets/foto_profile/siswa/' . $user['foto']) ?>" style="width: 50%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
