<div class="card">
	<div class="card-header">
		<a href="#tambah" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i><b> Tambah Admin</b></a>
	</div>
	<div class="card-body">
		<table class="table" id="dataTable">
			<thead>
				<th>#</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($admin as $ad) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $ad['nm_admin'] ?></td>
						<td><?= $ad['username'] ?></td>
						<td>
							<?php if ($ad['id'] == $this->session->userdata('id_user')) { ?>
								<a href="#edit<?= $ad['id'] ?>" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
							<?php } else { ?>
								<a href="#hapus<?= $ad['id'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
								<a href="#edit<?= $ad['id'] ?>" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
							<?php } ?>

						</td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Logout Modal-->
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
				<form action="<?= base_url('admin/user/add_admin') ?>" method="post">
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" class="form-control">
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

<!-- edit -->
<?php foreach ($admin as $ad) { ?>
	<div class="modal fade" id="edit<?= $ad['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('admin/user/edit_admin') ?>" method="post">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="nama" value="<?= $ad['nm_admin'] ?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Username</label>
							<input type="text" name="username" value="<?= $ad['username'] ?>" class="form-control">
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
