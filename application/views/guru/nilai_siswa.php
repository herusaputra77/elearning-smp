<div class="card">
	<div class="card-body">
		<div>
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Tugas</th>
					<th>File Tugas</th>
					<th>Nilai Tugas</th>
				</thead>
				<tbody>
					<?php $no = 1;
					$rataTugas = 0;
					$total = 0;
					foreach ($tugas as $tu) {
						$id_siswa = $tu['id_siswa'];
						$row = $this->db->get_where('tb_tugas_siswa', ['id_siswa' => $id_siswa]);
						$s = $row->num_rows();
						$nilai = $tu['nilai_tugas'];
						$total += $nilai;
						$rataTugas = $total / $s;

					?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $tu['judul_tugas'] ?></td>
							<td><a href="<?= base_url('assets/tugas_siswa/' . $tu['file_tugas_siswa']) ?>" target="_blank">Tugas</a></td>

							<td><?= $tu['nilai_tugas'] ?></td>

						</tr>

					<?php } ?>
					<tr>
						<td>Total</td>
						<td></td>
						<td></td>
						<td colspan="4"><?= $total ?></td>
					</tr>
					<tr>
						<td>Rata-rata Tugas</td>
						<td></td>
						<td></td>
						<td colspan="4"><?= $rataTugas ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
