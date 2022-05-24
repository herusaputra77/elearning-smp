<div id="contact" class="contact-us section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<?php foreach ($tugas as $tu) { ?>
									<div class="row">

										<div class="col-lg-6 offset-lg-3">
											<div class="section-heading">
												<h2><span>Detail</span> <em>Tugas</em></h2> <br>
												<h6><?= $tu['deskripsi_tugas'] ?></h6>
											</div>
										</div>
										<div class="col-lg-6 offset-lg-3">
											<table class="table">
												<tr>
													<td>Judul Tugas</td>
													<td>:</td>
													<td><?= $tu['judul_tugas'] ?></td>

												</tr>
												<tr>
													<td>Tugas Dikirim</td>
													<td>:</td>
													<td>
														<?= date('d/m/Y h:i:s', $tu['waktu_kirim_tugas']) ?>
														<!-- <?= $tu['waktu_kirim_tugas'] ?> -->
													</td>


												</tr>
												<tr>
													<td>Tanggal Dikumpulkan </td>
													<td>:</td>
													<td>
														<?= date('d/m/y', strtotime($tu['tgl_dikumpul']))  ?>

													</td>
												</tr>
												<tr>
													<td>Jam Dikumpulkan</td>
													<td>:</td>
													<td><?= $tu['jam_dikumpul'] ?></td>

												</tr>
												<tr>
													<td>Sisa Waktu Pengerjaan</td>
													<td>:</td>
													<td>
														<?php
														date_default_timezone_set('Asia/Jakarta');
														$tahun = date('Y', strtotime($tu['tgl_dikumpul']));
														$bulan = date('m', strtotime($tu['tgl_dikumpul']));
														$hari = date('d', strtotime($tu['tgl_dikumpul']));
														$jam = date('H', strtotime($tu['jam_dikumpul']));
														$menit = date('i', strtotime($tu['jam_dikumpul']));

														// echo $menit;

														// echo $jam;

														// echo $hari;
														// echo $bulan;

														// echo $tahun;
														$target = mktime($jam, $menit, 0, $bulan, $hari, $tahun);
														$hari2 = time();
														$selisih = $target - $hari2;
														$jam2 = (int) ($selisih / 3600);
														$menit2 =  ($selisih / 7200);
														if ($target >= $hari) {
															echo "Waktu Habis";
														} else {

															echo $jam2 . ' jam' . ' ' . $menit2 . ' menit';
														}
														?>
													</td>
												</tr>


											</table>
											<td>
												<?php if ($target >= $hari) { ?>
													<a href="<?= base_url('siswa/tugas/upload_tugas/' . $tu['id_tugas']) ?>" class="btn btn-sm btn-primary">Kumpulkan Tugas</a>
												<?php } else { ?>
													<a href="#tambah" data-toggle="modal" class="btn btn-sm btn-primary">Kumpulkan Tugas</a>
												<?php } ?>
											</td>
										</div>
									</div>
								<?php } ?>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Tugas</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('guru/tugas/add_tugas') ?>" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label for="">Judul Tugas</label>
						<input type="text" name="tugas" class="form-control">
					</div>
					<div class="form-group">
						<label for="">File Tugas</label>
						<input type="file" name="file_tugas" class="form-control">
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary" type="submit">Save</button>

			</div>
			</form>
		</div>
	</div>
</div>
<script>

</script>
