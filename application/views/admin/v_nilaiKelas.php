<div class="card">
	<div class="card-header">

	</div>
	<div class="card-body">
		<table class="table" id="dataTable">
			<thead>
				<th>#</th>
				<th>Nama Siswa</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $no = 1;
				foreach ($siswa as $si) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $si['nm_siswa'] ?></td>

						<td>
							<a href="<?= base_url('admin/laporan/detail_tugas/' . $si['id'])  ?>" class="btn btn-sm btn-primary">Detail Nilai</a>
						</td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
