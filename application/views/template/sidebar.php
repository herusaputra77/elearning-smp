<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3" style="color: white; font-size:small;">E-Learning SMPN 5 <br>Lubuk Alung<sup></sup></div>

	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/beranda') ?>">
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
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>User</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/user/admin') ?>">Admin</a>
				<a class="collapse-item" href="<?= base_url('admin/user/guru/') ?>">Guru</a>
				<a class="collapse-item" href="<?= base_url('admin/user/siswa/') ?>">Siswa</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Kelas</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Kelas Online</h6>
				<a class="collapse-item" href="<?= base_url('admin/kelas') ?>">Data Kelas</a>
				<!-- <a class="collapse-item" href="<?= base_url('admin/kelas/kelas_siswa') ?>">Kelas Siswa</a> -->
				<!-- <a class="collapse-item" href="<?= base_url('admin/kelas/kelas_siswa') ?>">Kelas Siswa</a> -->


			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">
	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="laporan">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Laporan</span>
		</a>
		<div id="laporan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Laporan</h6>
				<a class="collapse-item" href="<?= base_url('admin/laporan/tugas') ?>">Laporan Tugas</a>
				<!-- <a class="collapse-item" href="<?= base_url('admin/kelas/kelas_siswa') ?>">Kelas Siswa</a> -->
				<!-- <a class="collapse-item" href="<?= base_url('admin/kelas/kelas_siswa') ?>">Kelas Siswa</a> -->


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
