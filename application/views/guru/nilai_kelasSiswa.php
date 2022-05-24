<div class="card">
	<div class="card-body">
		<div class="div">

			<table class="table">
				<thead>
					<th>#</th>
					<th>Nama Siswa</th>
					<td>Nilai Tugas</td>
				</thead>
				<tbody>
					<?php
					$no = 1;
					// $siswa = $this->M_Kelas->get_siswa_kelasid($id);
					foreach ($detail_kelas as $sis) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $sis['nm_siswa'] ?></td>
							<td><a href="<?= base_url('guru/tugas/nilai_siswa/' . $sis['id']) ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a></td>
							<td></td>
						</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
