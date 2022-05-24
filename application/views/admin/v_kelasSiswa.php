<div class="row">
	<div class="col-md-5">
		<div class="card mb-3">
			<div class="card-body">
				<div class="form-group row">
					<div class="col-md-6">Kelas</div>
					<div class="col-md-6"><?= $kelas['nm_kelas'] ?></div>

				</div>
				<div class="form-group row">
					<div class="col-md-6">Guru</div>
					<div class="col-md-6"><?= $guru['nm_guru'] ?></div>

				</div>
				<div class="form-group row">
					<div class="col-md-6">Mata Pelajaran</div>
					<div class="col-md-6">Bahasa Inggris</div>

				</div>
				<div class="form-group row">
					<div class="col-md-6">Jadwal Kelas</div>
					<div class="col-md-6"><?= $kelas['hari'] ?></div>

				</div>
				<!-- <div class="form-group row">
					<div class="col-md-6">Jam</div>
					<div class="col-md-6"><?= $kelas['jam_masuk'] ?> - <?= $kelas['jam_keluar'] ?></div>

				</div> -->
			</div>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header">

	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Nama Siswa</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($siswa as $si) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $si['nm_siswa'] ?></td>

						<td>
							<a href="#gantiKelas<?= $si['id'] ?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fa fa-edit"></i></a>
						</td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php foreach ($siswa as $s) { ?>

	<div class="modal fade" id="gantiKelas<?= $s['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('admin/kelas/ganti_isi_kelas') ?>" method="post">

						<div class="form-group">
							<label for="">Kelas</label>
							<input type="text" name="id_siswa" value="<?= $s['id'] ?>">
							<select name="id_kelas" class="form-control" lid="">
								<option value="">--Pilih Kelas--</option>
								<?php foreach ($kelas2 as $gr) { ?>
									<option value="<?= $gr['id'] ?>"><?= $gr['nm_kelas'] ?></option>
								<?php } ?>
							</select>
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
<?php } ?>
