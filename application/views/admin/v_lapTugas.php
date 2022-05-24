<div class="card">
	<div class="card-body">
		<div class="div">

			<table class="table" id="dataTable">
				<thead>
					<th>#</th>
					<th>Nama Kelas</th>
					<th>Guru</th>
					<th>Nilai Siswa</th>
					<!-- <th>Aksi</th> -->
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($kelas as $kl) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $kl['nm_kelas'] ?></td>
							<td><?= $kl['nm_guru'] ?></td>
							<td><a href="<?= base_url('admin/laporan/nilai_kelas/' . $kl['id_kelas']) ?>" class="btn btn-sm btn-primary">Nilai</a></td>
							</td>
							<!-- <td>
								<a href="#hapus<?= $kl['id_kelas'] ?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
								<a href="#edit<?= $kl['id_kelas'] ?>" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>

							</td> -->

						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
