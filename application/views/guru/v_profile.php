<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div>
					<p style="font-size:20px;">Nama :</p>
					<p style="font-family: 'Times New Roman', Times, serif;"><?= $user['nm_guru'] ?></p>

				</div>
				<div>
					<p style="font-size:20px;">Username :</p>
					<p style="font-family: 'Times New Roman', Times, serif;"><?= $user['username'] ?></p>

				</div>
				<div>
					<p style="font-size:20px;">Alamat :</p>
					<p style="font-family: 'Times New Roman', Times, serif;"><?= $user['alamat'] ?></p>

				</div>
				<div>
					<p style="font-size:20px;">No Hp :</p>
					<p style="font-family: 'Times New Roman', Times, serif;"><?= $user['no_hp'] ?></p>

				</div>

				<a href="#edit<?= $user['id'] ?>" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</a>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div style="border: 2px;" align="center">
					<img src="<?= base_url('assets/foto_profile/guru/' . $user['foto_guru']) ?>" alt="">
				</div>
				<div class="ganti-foto mt-4">
					<form action="<?= base_url('guru/profile_guru/edit_foto') ?>" method="post" enctype="multipart/form-data">
						<input type="file" name="foto">
						<button type="submit" class="btn btn-sm btn-primary">Ganti Foto</button>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="modal fade" id="edit<?= $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Guru</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('guru/profile_guru/edit') ?>" method="post">
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" class="form-control" name="nama" value="<?= $user['nm_guru'] ?>">
					</div>
					<div class="form-group">
						<label for="">Alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?= $user['alamat'] ?>">
					</div>
					<div class="form-group">
						<label for="">No Hp</label>
						<input type="text" class="form-control" name="no_hp" value="<?= $user['no_hp'] ?>">
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary" type="submit">Edit</button>
				</form>
			</div>
		</div>
	</div>
</div>
