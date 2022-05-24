<div class="row">
	<?php foreach ($kelas as $kel) { ?>

		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-2">
							<h1><i class="fa fa-book"></i></h1>
						</div>
						<div class="col-md-10">
							<h1>Kelas : <?= $kel['nm_kelas'] ?></h1>
							<h2>Jumlah Siswa : </h2>
							<h3>Hari : <?= $kel['hari'] ?></h3>
							<a href="<?= base_url('guru/tugas/nilai_tugasSiswa/' . $kel['kelas_id'])  ?>" class="btn btn-primary">Nilai Tugas Siswa</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

<?php foreach ($kelas as $s) {
	$id = $s['kelas_id'] ?>
	<div class="modal fade" id="detail<?= $s['kelas_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Detail Kelas</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<table class="table">
						<thead>
							<th>#</th>
							<th>Nama Siswa</th>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$siswa = $this->M_Kelas->get_siswa_kelasid($id);
							foreach ($siswa as $sis) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $sis['nm_siswa'] ?></td>
								</tr>

							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<button class="btn btn-primary" type="submit">Save</button> -->

				</div>
			</div>
		</div>
	</div>
<?php } ?>
