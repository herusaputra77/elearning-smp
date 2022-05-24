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
												<h6>Skor :
												</h6>
												<p style="font-family: 'Times New Roman', Times, serif; color:blue; font-size:40px;"><?= $tu['nilai_tugas'] ?></p>

											</div>
										</div>
										<div class="col-lg-6 offset-lg-3">
											<table class="table">
												<tr>
													<td>Keterangan</td>
													<td>:</td>
													<td><?= $tu['keterangan'] ?></td>

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
													<td>Dikumpul </td>
													<td>:</td>
													<td>
														<?= date('d/m/Y', $tu['waktu_kumpul_tugas'])  ?>

													</td>
												</tr>
												<tr>
													<td>Jam</td>
													<td>:</td>
													<td><?= date('h:i:s', $tu['waktu_kumpul_tugas'])  ?></td>

												</tr>
												<tr>
													<td>File Tugas</td>
													<td>:</td>
													<td>
														<a href="<?= base_url('assets/tugas_siswa/' . $tu['file_tugas_siswa']) ?>" target="_blank"><?= $tu['file_tugas_siswa'] ?></a>

													</td>
												</tr>


											</table>

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
