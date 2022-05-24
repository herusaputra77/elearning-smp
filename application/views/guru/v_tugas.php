<div class="card card-default">
	<div class="card-header">
		<a href="#tambah" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-plus"> Tugas</i></a>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Judul Tugas</th>
				<th>Kelas</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($tugas as $m) {
					$id_tugas = $m['id_tugas'] ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><a href="<?= base_url('assets/tugas/' . $m['file_tugas']) ?>" target="_blank"><?= $m['judul_tugas'] ?></a></td>
						<td>
							<?php $tugas_kelas = $this->M_Tugas->tugas_kelas($id_tugas);
							foreach ($tugas_kelas as $tk) {
								echo $tk['nm_kelas'] . '|';
							} ?>
						</td>

						<td>
							<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
							<a href="#kirim_tugas<?= $m['id_tugas'] ?>" data-toggle="modal" class=" btn btn-primary">Kirim Tugas</a>
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
				<h5 class="modal-title" id="exampleModalLabel">Tambah Tugas</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('guru/tugas/add_tugas') ?>" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label for="">Judul Tugas</label>
						<input type="text" name="tugas" class="form-control">
					</div>
					<div class="form-group">
						<label for="">File Tugas</label>
						<input type="file" name="file_tugas" class="form-control">
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

<?php foreach ($tugas as $tu) { ?>
	<div class="modal fade" id="kirim_tugas<?= $tu['id_tugas'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Kirim tugas</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('guru/tugas/kirim_tugas') ?>" enctype="multipart/form-data" method="post">
						<div class="form-group">
							<label for="">Deskripsi tugas</label>
							<input type="text" name="deskripsi" class="form-control">
							<input type="hidden" name="id_tugas" value="<?= $tu['id_tugas'] ?>" class="form-control">


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
							<label for="">Waktu tugas dikumpilkan</label>
							<div class="row">

								<div class="col-md-6">
									<input type="date" name="tgl_kumpul" class="form-control">

								</div>
								<div class="col-md-6">

									<input type="time" name="jam_kumpul" class="form-control">
								</div>
							</div>



						</div>
						<div class="form-group">
							<label for="">File tugas</label>
							<a href="<?= base_url('assets/tugas/' . $m['file_tugas']) ?>" target="_blank"><?= $m['judul_tugas'] ?></a>
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
