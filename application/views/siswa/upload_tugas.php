<div id="contact" class="contact-us section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
				<form id="contact" action="<?= base_url('siswa/tugas/simpan_tugas') ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="section-heading">
								<h2>Upload Tugas</h2>
								<hr>
								<h6>Silahkan Upload Tugas dengan Baik dan Benar</h6>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12">
									<fieldset>
										<input type="file" name="file_tugas" autocomplete="on" required>
										<?php foreach ($tugas as $tu) { ?>
											<input type="hidden" name="id_tugas" value="<?= $tu['id_tugas'] ?>">
											<input type="hidden" name="id_tugas_kelas" value="<?= $tu['id_tugas_kelas'] ?>">

										<?php } ?>
									</fieldset>
								</div>
								<div class="col-lg-12">
									<fieldset>
										<input type="text" name="keterangan" placeholder="Keterangan" autocomplete="on" required>
									</fieldset>
								</div>
								<div class="col-lg-12">
									<fieldset>
										<button type="submit" id="form-submit" class="main-button ">Kirim Tugas</button>
									</fieldset>
								</div>
							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
