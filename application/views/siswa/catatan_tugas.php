<div id="features" class="features section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="features-content">
					<div class="row">

						<div class="col-md-12 col-md-6">
							<div class="features-item second-feature wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
								<div style="overflow-x: auto;">
									<table class="table">
										<thead>

											<th>#</th>
											<th>Judul Tugas</th>
											<th>Keterangan</th>
											<th>File Tugas</th>
											<!-- <th>Nilai Tugas</th> -->
											<th>Aksi</th>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($tugas as $tu) { ?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $tu['judul_tugas'] ?></td>
													<td><?= $tu['keterangan'] ?></td>
													<td><a href="<?= base_url('assets/tugas_siswa/' . $tu['file_tugas_siswa']) ?>" target="_blank"><?= $tu['file_tugas_siswa'] ?></a></td>
													<td>
														<a href="<?= base_url('siswa/tugas/detail_tugas_siswa/' . $tu['id_tugas_siswa']) ?>"><i class="fa fa-eye"></i></a>
													</td>

												</tr>
											<?php } ?>
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
</div>
