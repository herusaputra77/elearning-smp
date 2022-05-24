<div class="card">
	<div class="card-body">
		<div class="mb-3">
			<!-- <a href="#tambah" data-toggle="modal" class="btn btn-sm btn-primary">Jadwal Masuk Kelas</a> -->
			<!-- <a href="" class="btn btn-sm btn-success">Absensi Siswa</a> -->
		</div>
		<div>
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Tanggal Masuk</th>
					<th>Jam Masuk</th>
					<th>Jam Keluar</th>
					<th>Keterangan</th>
					<th>Absen Siswa</th>
					<!-- <th>Aksi</th> -->
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($absensi as $a) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $a['tgl_absensi'] ?></td>
							<td><?= $a['jam_masuk'] ?></td>
							<td><?= $a['jam_keluar'] ?></td>
							<td><?= $a['keterangan'] ?></td>
							<td>
								<a href="<?= base_url('guru/absensi/detail_absen/' . $a['id_absensi_kelas']) ?>" class="btn btn-sm btn-success">Absensi Siswa</a>
							</td>
							<!-- <td>
								<a href="<?= base_url('guru/absensi/hapus_absensiKelas/' . $a['id_absensi_kelas']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
							</td> -->


						</tr>

					<?php } ?>
				</tbody>

			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Absensi</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('guru/absensi/add_absensi') ?>" method="post">

					<div class="form-group">
						<label for="">Jam Masuk</label>
						<input type="time" class="form-control" name="jam_masuk" id="">
						<input type="hidden" class="form-control" name="id_kelas" value="<?= $this->uri->segment(4) ?>" id="">

					</div>
					<div class="form-group">
						<label for="">Jam Keluar</label>
						<input type="time" class="form-control" name="jam_keluar" id="">
					</div>
					<div class="form-group">
						<label for="">Tanggal</label>
						<input type="date" class="form-control" name="tgl_absensi" id="">
					</div>
					<div class="form-group">
						<label for="">Keterangan</label>
						<input type="text" class="form-control" name="keterangan" id="">
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
