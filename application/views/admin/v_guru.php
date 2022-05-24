<div class="card">
	<div class="card-header">
		<a href="#tambah" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i><b> Tambah Guru </b></a>
	</div>
	<div class="card-body">
		<table class="table" id="dataTable">
			<thead>
				<th>#</th>
				<th>Nama</th>
				<th>NIP</th>
				<th>Agama</th>
				<th>Username</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>No Hp</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($admin as $ad) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $ad['nm_guru'] ?></td>
						<td><?= $ad['nip_guru'] ?></td>
						<td><?= $ad['agama'] ?></td>

						<td><?= $ad['username'] ?></td>
						<td><?= $ad['alamat'] ?></td>
						<td><?= $ad['jenkel'] ?></td>

						<td><?= $ad['no_hp'] ?></td>


						<td>
							<a href="#hapus<?= $ad['id'] ?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
							<a href="#edit<?= $ad['id'] ?>" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>

						</td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Tambah-->
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
				<form action="<?= base_url('admin/user/add_guru') ?>" method="post">
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label for="">NIP</label>
						<input type="text" name="nip" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Agama</label>
						<select name="agama" class="form-control" id="">
							<option value="">
								<--Pilih Agama-->
							</option>
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Hindu">Hindu</option>
							<option value="Konghucu">Konghucu</option>
							<option value="Budha">Budha</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Alamat</label>
						<input type="text" name="alamat" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="">No Hp</label>
						<input type="text" name="no_hp" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Jenis Kelamin</label> <br>
						<input type="radio" name="jenkel" value="Laki-laki" checked> Laki-laki
						<input type="radio" name="jenkel" value="Wanita"> Wanita

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
<?php foreach ($admin as $gr) { ?>
	<div class="modal fade" id="hapus<?= $gr['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Apakah anda yakin untuk menghapus <?= $gr['nm_guru'] ?>?</p>


				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a href="<?= base_url('admin/user/hapus_guru/' . $gr['id']) ?>" class="btn btn-danger">Save</a>

				</div>
			</div>
		</div>
	</div>

<?php } ?>

<!-- edit -->
<?php foreach ($admin as $an) { ?>
	<div class="modal fade" id="edit<?= $an['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Guru?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('admin/user/edit_guru') ?>" method="post">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="hidden" name="id_guru" value="<?= $an['id'] ?>" class="form-control">

							<input type="text" name="nama" value="<?= $an['nm_guru'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">NIP</label>
							<input type="text" name="nip" value="<?= $an['nip_guru'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Agama</label>
							<select name="agama" class="form-control" id="">
								<option value="<?= $an['agama'] ?>">
									<?= $an['nip_guru'] ?>
								</option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Konghucu">Konghucu</option>
								<option value="Budha">Budha</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<input type="text" name="alamat" value="<?= $an['alamat'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" name="username" value="<?= $an['username'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">No Hp</label>
							<input type="text" name="no_hp" value="<?= $an['no_hp'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Jenis Kelamin</label> <br>
							<input type="radio" name="jenkel" value="Laki-laki" checked> Laki-laki
							<input type="radio" name="jenkel" value="Wanita"> Wanita

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
