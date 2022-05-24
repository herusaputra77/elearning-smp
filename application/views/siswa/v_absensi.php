<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="col-md-12">
					<!-- <div class="card card-primary">
						<div class="card-body">
							<h1 align="center" style="color:blue;font-family:poppins;font-size:50px;">Selamat Datang <?= $user['username'] ?></h1>

						</div>
					</div> -->
				</div>
				<div class="row">
					<div class="col-lg-6 align-self-center">
						<div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
							<div class="row">
								<div class="col-lg-12 col-sm-12">
									<div class="info-stat">
										<h1 style="color: blue;">Silahkan isi absensi ananda hari ini.</h1>

									</div>
								</div>
								<div class="col-lg-12">
									<div class="main-green-button scroll-to-section">
										<a href="<?= base_url('auth/login') ?>">Absensi</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
							<img src="<?= base_url('assets/template_frontend/') ?>asset/images/banner-right-image.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container mb-4 mt-3">
	<table class="table table-hover">
		<thead>
			<th>No</th>
			<th>Kelas</th>
			<th>Jadwal Kelas</th>
			<th>Jam</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php $no = 1;
			$id_siswa = $this->session->userdata('id');
			date_default_timezone_set('Asia/Jakarta');
			$jam = date('h:i:s A');
			$tgl_sekarang = date('y-m-d');
			// $tgl_sekarang == 0;
			echo $jam;
			foreach ($kelas as $ke) {
				$id_absensi_kelas = $ke['id_absensi_kelas'];
				$absen = $this->M_Absensi->cek_absen();
			?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $ke['nm_kelas'] ?></td>
					<td><?= $ke['tgl_absensi'] ?></td>
					<td><?= $ke['jam_masuk'] ?> - <?= $ke['jam_keluar'] ?></td>
					<td>
						<form action="<?= base_url('siswa/absensi/isi_absen') ?>" method="post">
							<input type="hidden" name="id_absensi_siswa" value="<?= $ke['id_absensi_siswa'] ?>" id="">

							<input type="hidden" name="id_absensi_kelas" value="<?= $ke['id_absensi_kelas'] ?>" id="">
							<input type="hidden" name="id_kelas" value="<?= $ke['id'] ?>" id="">
							<input type="hidden" name="jam_masuk" value="<?= $jam ?>" id="">
							<input type="hidden" name="tgl_absen" value="<?= $tgl_sekarang ?>" id="">

							<?php if ($ke['keterangan'] != null) { ?>
								<button class="btn btn-sm btn-success">Sudah Absen</button>

							<?php } else { ?>
								<button type="submit" class="btn btn-sm btn-primary">Absen</button>
							<?php } ?>

						</form>

					</td>
				<?php } ?>


				</tr>
		</tbody>
	</table>
</div>



<?php

?>
