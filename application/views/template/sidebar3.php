<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-0">
			<i class="fas fa-home"></i>
		</div>
		<div class="sidebar-brand-text mx-3" style="color: white; font-size:small;">E-Learning SMPN 5 <br>Lubuk Alung<sup></sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('guru/beranda') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		User
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('guru/kelas') ?>">
			<i class="fas fa-fw fa-home"></i>
			<span>Kelas</span></a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('guru/materi') ?>">
			<i class="fas fa-fw fa-sticky-note"></i>
			<span>Materi</span></a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('guru/absensi') ?>">
			<i class="fas fa-fw fa-sticky-note"></i>
			<span>Absensi</span></a>
	</li>
	<li class="nav-item active">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Tugas</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('guru/tugas') ?>">Data Tugas</a>
				<a class="collapse-item" href="<?= base_url('guru/tugas/tugas_siswa') ?>">Tugas Siswa</a>
				<a class="collapse-item" href="<?= base_url('guru/tugas/get_tugas_siswa/') ?>">Nilai Tugas</a>
			</div>
		</div>
	</li>
	<!-- <li class="nav-item active">
		<a class="nav-link" href="<?= base_url('guru/tugas') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Tugas</span></a>
	</li> -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('guru/chat') ?>">
			<i class="fas fa-fw fa-comments"></i>
			<span>Chat</span></a>
	</li>
	<li class="nav-item active">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="laporan">
			<i class="fas fa-fw fa-book"></i>
			<span>Laporan</span>
		</a>
		<div id="laporan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('guru/laporan/absensi') ?>">Absensi</a>
			</div>
		</div>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider">


	<!-- Divider -->
	<!-- <hr class="sidebar-divider d-none d-md-block"> -->

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
