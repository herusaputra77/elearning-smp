<div class="card">
	<div class="card-body">
		<table class="table table-striped">
			<thead>
				<th>#</th>
				<th>Tugas</th>
				<th>Kelas</th>
				<th>Detail</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($tugas as $tg) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $tg['judul_tugas'] ?></td>
						<td><?= $tg['nm_kelas'] ?></td>
						<td><a href="<?= base_url('guru/tugas/detail_tugas/' . $tg['kelas_id']) ?>" class="btn btn-sm btn-success"><i class="fa fa-search"></i></a></td>

					</tr>

				<?php } ?>
			</tbody>
		</table>

	</div>
</div>
