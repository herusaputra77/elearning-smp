<div class="card">
	<div class="card-header">
		<a href="#tambah" class="btn btn-sm btn-primary" data-toggle="modal"><i class="fa fa-plus"></i><b> Kelas</b></a>
	</div>
	<div class="card-body">
		<table class="table" id="dataTable">
			<thead>
				<th>#</th>
				<th>Nama Kelas</th>
				<th>Guru</th>
				<th>Data Murid</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($kelas as $kl) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $kl['nm_kelas'] ?></td>
						<td><?= $kl['nm_guru'] ?></td>
						<td><a href="<?= base_url('admin/kelas/isi_kelas/' . $kl['id_kelas']) ?>" class="btn btn-sm btn-primary">Isi Kelas</a></td>
						</td>
						<td>
							<a href="#hapus<?= $kl['id_kelas'] ?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
							<a href="#edit<?= $kl['id_kelas'] ?>" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>

						</td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/kelas/add_kelas') ?>" method="post">
					<div class="form-group">
						<label for="">Nama Kelas</label>
						<input type="text" name="nm_kelas" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Nama Guru</label>
						<select name="nm_guru" class="form-control" lid="">
							<option value="">--Pilih Guru--</option>
							<?php foreach ($guru as $gr) { ?>
								<option value="<?= $gr['id'] ?>"><?= $gr['nm_guru'] ?></option>

							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Jadwal Kelas</label>
						<select name="jadwal" class="form-control" id="">
							<option value="">--Pilih Hari--</option>
							<?php foreach ($hari as $h) { ?>
								<option value="<?= $h['id_hari'] ?>"><?= $h['hari'] ?></option>
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

<!-- hapus -->
<?php foreach ($kelas as $kl) { ?>

	<div class="modal fade" id="hapus<?= $kl['id_kelas'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Hapus Kelas</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Apakah anda yakin untuk menghapus kelas <?= $kl['nm_kelas'] ?>?</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a href="<?= base_url('admin/kelas/hapus_kelas/' . $kl['id_kelas']) ?>" class="btn btn-primary">Save</a>

				</div>
			</div>
		</div>
	</div>
<?php } ?>
<!-- edit -->

<?php foreach ($kelas as $ke) { ?>
	<div class="modal fade" id="edit<?= $ke['id_kelas'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('admin/kelas/edit_kelas') ?>" method="post">
						<div class="form-group">
							<label for="">Nama Kelas</label>
							<input type="hidden" value="<?= $ke['id_kelas'] ?>" name="id_kelas" id="">
							<input type="text" name="nm_kelas" value="<?= $ke['nm_kelas'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Nama Guru</label>
							<select name="nm_guru" class="form-control" lid="">
								<!-- <option value="">--Pilih Guru--</option> -->
								<option value="<?= $ke['guru_id'] ?>"><?= $ke['nm_guru'] ?></option>
								<?php foreach ($guru as $gr) { ?>
									<option value="<?= $gr['id'] ?>"><?= $gr['nm_guru'] ?></option>

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
