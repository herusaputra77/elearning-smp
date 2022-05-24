<div class="card card-default">
	<div class="card-header">
		<a href="#tambah" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-plus"> Materi</i></a>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Judul Materi</th>
				<th>Kelas</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($materi as $m) {
					$id_materi = $m['id'] ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><a href="<?= base_url('assets/materi/' . $m['file_materi']) ?>" target="_blank"><?= $m['judul_materi'] ?></a></td>
						<td>
							<?php $materi_kelas = $this->M_Materi->kirim_materi($id_materi);
							foreach ($materi_kelas as $mk) { ?>
								<?= $mk['nm_kelas'] . '|'; ?>

							<?php } ?>
						</td>

						<td>
							<a href="#hapus<?= $m['id'] ?>" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
							<a href="#kirim_materi<?= $m['id'] ?>" data-toggle="modal" class=" btn btn-primary">Kirim Materi</a>
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('guru/materi/add_materi') ?>" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label for="">Judul Materi</label>
						<input type="text" name="materi" class="form-control">
					</div>
					<div class="form-group">
						<label for="">File Materi</label>
						<input type="file" name="file_materi" class="form-control">
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
<?php foreach ($materi as $m) { ?>
	<div class="modal fade" id="hapus<?= $m['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Apakah anda yakin menghapus materi <?= $m['judul_materi'] ?></p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?= base_url('guru/materi/hapus/' . $m['id']) ?> ">Save</a>

				</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>

<?php foreach ($materi as $ma) { ?>
	<div class="modal fade" id="kirim_materi<?= $ma['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Kirim Materi</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('guru/materi/kirim_materi') ?>" enctype="multipart/form-data" method="post">
						<div class="form-group">
							<label for="">Deskripsi Materi</label>
							<input type="text" name="deskripsi" class="form-control">
							<input type="hidden" name="id_materi" value="<?= $ma['id'] ?>" class="form-control">


						</div>
						<div class="form-group">
							<label for="">Kelas</label>
							<select name="kelas" class="form-control" id="">
								<option value="">--Pilih Kelas--</option>
								<?php foreach ($kelas as $kl) { ?>
									<option value="<?= $kl['kelas_id'] ?>"><?= $kl['nm_kelas'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">File Materi</label>
							<a href="<?= base_url('assets/materi/' . $m['file_materi']) ?>" target="_blank"><?= $m['judul_materi'] ?></a>
						</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-primary" type="submit">Kirim</button>

				</div>
				</form>
			</div>
		</div>
	</div>

<?php } ?>
