<div class="card">
	<div class="card">
		<div class="table">
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Nama Siswa</th>
					<th>Tanggal Absen</th>
					<th>Jam Absen</th>
					<th>Keterangan</th>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($siswa as $s) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $s['nm_siswa'] ?></td>
							<td><?= $s['tgl_absensi_siswa'] ?></td>
							<td><?= $s['jam_absensi_siswa'] ?></td>

							<td><?= $s['keterangan_absen'] ?></td>


						</tr>

					<?php } ?>
				</tbody>

			</table>
		</div>
	</div>
</div>
