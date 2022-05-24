<div class="card">
	<div class="card-header">
		<a href="#tambah" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i><b> Tambah Siswa</b></a>
	</div>
	<div class="card-body">
		<table class="table" id="dataTable">
			<thead>
				<th>#</th>
				<th>Nama</th>
				<th>Username</th>
				<th>NIPD</th>
				<th>NISN</th>
				<th>NIK</th>
				<th>TTL</th>
				<th>Agama</th>
				<th>Kelas</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($siswa as $ad) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $ad['nm_siswa'] ?></td>
						<td><?= $ad['username'] ?></td>
						<td><?= $ad['nipd'] ?></td>
						<td><?= $ad['nisn'] ?></td>
						<td><?= $ad['nik'] ?></td>
						<td><?= $ad['tempat_lahir'] ?>, <?= date('d-m-y', strtotime($ad['tgl_lahir'])) ?></td>
						<td><?= $ad['agama'] ?></td>
						<td><?= $ad['nm_kelas'] ?></td>


						<td><?= $ad['alamat'] ?></td>
						<td><?= $ad['jenkel'] ?></td>



						<td>
							<a href="#hapus<?= $ad['id'] ?>" data-toggle="modal" class="btn btn-sm btn-danger btn-rounded"><i class="fa fa-trash"></i></a>
							<a href="#edit<?= $ad['id'] ?>" data-toggle="modal" class="btn btn-sm btn-primary btn-rounded"><i class="fa fa-edit"></i></a>

						</td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<?php foreach ($siswa as $us) { ?>
	<div class="modal fade" id="edit<?= $us['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('admin/user/edit_siswa') ?>" method="post">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="nama" value="<?= $us['nm_siswa'] ?>" class="form-control">
							<input type="hidden" name="id" value="<?= $us['siswa_id'] ?>" class="form-control">

						</div>
						<div class="form-group">
							<label for="">NIPD</label>
							<input type="text" name="nipd" value="<?= $us['nipd'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">NISN</label>
							<input type="text" name="nisn" value="<?= $us['nisn'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Tempat Lahir</label>
							<input type="text" name="tempat_lahit" value="<?= $us['tempat_lahir'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Tanggal lahir</label>
							<input type="date" name="tgl_lahir" value="<?= $us['tgl_lahir'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">NIK</label>
							<input type="text" name="nik" value="<?= $us['nik'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Agama</label>
							<select name="agama" class="form-control" id="">
								<option value="<?= $us['agama'] ?>">
									<?= $us['agama'] ?>
								</option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Konghucu">Konghucu</option>
								<option value="Budha">Budha</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Kelas</label> <br>
							<select name="kelas" class="form-control" id="">
								<option value="<?= $us['kelas_id'] ?>"><?= $us['nm_kelas'] ?></option>
								<?php foreach ($kelas as $kel) { ?>
									<option value="<?= $kel['id'] ?>"><?= $kel['nm_kelas'] ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="form-group">
							<label for="">Alamat</label>
							<input type="text" name="alamat" value="<?= $us['alamat'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" name="username" value="<?= $us['username'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">No Hp</label>
							<input type="text" name="no_hp" value="<?= $us['no_hp'] ?>" class="form-control">
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

<!-- hapus -->
<?php foreach ($siswa as $si) { ?>
	<div class="modal fade" id="hapus<?= $si['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Apakah anda yakin menghapus <?= $si['nm_siswa'] ?>?</p>

				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a href="<?= base_url('admin/user/hapus_siswa/' . $si['id']) ?>" class="btn btn-primary" type="submit">Save</a>

				</div>
			</div>

		</div>

	</div>

<?php } ?>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/user/add_siswa') ?>" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Nama</label>
								<input type="text" name="nama" class="form-control">
							</div>
							<div class="form-group">
								<label for="">NIPD</label>
								<input type="text" name="nipd" class="form-control">
							</div>
							<div class="form-group">
								<label for="">NISN</label>
								<input type="text" name="nisn" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Tempat Lahir</label>
								<input type="text" name="tempat_lahir" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Tanggal lahir</label>
								<input type="date" name="tgl_lahir" class="form-control">
							</div>

							<div class="form-group">
								<label for="">NIK</label>
								<input type="text" name="nik" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
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
								<label for="">Kelas</label> <br>
								<select name="kelas" class="form-control" id="">
									<option value="">--Pilih Kelas--</option>
									<?php foreach ($kelas as $kel) { ?>
										<option value="<?= $kel['id'] ?>"><?= $kel['nm_kelas'] ?></option>
									<?php } ?>
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
