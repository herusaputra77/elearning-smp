<div class="card">
	<div class="card-body">
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Nama Siswa</th>
				<th>Jawaban Tugas</th>
				<th>Nilai</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($tugas as $tg) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $tg['nm_siswa'] ?></td>
						<td><a href="<?= base_url('assets/tugas_siswa/' . $tg['file_tugas_siswa']) ?>" target="_blank">file</a></td>
						<td>
							<?php if ($tg['nilai_tugas'] == 0) { ?>

								<a href="#nilai<?= $tg['id_tugas_siswa'] ?>" data-toggle="modal" class="btn btn-primary btn-sm">Nilai</a>
							<?php } else { ?>
								<?= $tg['nilai_tugas'] ?> <a href="#nilai<?= $tg['id_tugas_siswa'] ?>" class="btn btn-sm btn-primary" data-toggle="modal"><i class="fas fa-edit"></i></a>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<?php foreach ($tugas as $t) { ?>
	<div class="modal fade" id="nilai<?= $t['id_tugas_siswa'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content modal-center">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Detail Kelas</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('guru/tugas/nilai_tugas') ?>" method="post">
						<div class="form-group">
							<label for="">Nilai</label>
							<input type="hidden" value="<?= $t['id_tugas_siswa'] ?>" name="id_tugas" id="">
							<input type="number" class="form-control" name="nilai_tugas" id="">
						</div>

				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<button class="btn btn-primary" type="submit">Save</button>
					</form>

				</div>
			</div>
		</div>
	</div>
<?php } ?>
