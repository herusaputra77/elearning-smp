<div class="card">
	<div class="card-body">
		<table class="table table-hover">
			<thead>
				<th>#</th>
				<th>Nama Kelas</th>
				<th>Jadwal</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($kelas as $ke) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $ke['nm_kelas'] ?></td>
						<td>
							<a href="<?= base_url('guru/absensi/absen_kelas/' . $ke['kelas_id']) ?>" class="btn btn-primary btn-sm">Lihat Absensi</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
