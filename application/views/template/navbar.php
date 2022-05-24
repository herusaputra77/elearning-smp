<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
	<div class="preloader-inner">
		<span class="dot"></span>
		<div class="dots">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="main-nav">
					<!-- ***** Logo Start ***** -->
					<a href="<?= base_url('siswa/beranda') ?>" class="logo">
						<h4>E-LEARNING <img src="<?= base_url('assets/template_frontend/') ?>asset/images/logo-icon.png" alt=""></h4>
					</a>
					<!-- ***** Logo End ***** -->
					<!-- ***** Menu Start ***** -->
					<ul class="nav">
						<?php
						$id_user =
							$this->session->userdata('id_user');

						if ($id_user == null) { ?>

							<li class="scroll-to-section"><a href="<?= base_url() ?>" class="">Home</a></li>
							<li class="scroll-to-section"><a href="<?= base_url('beranda/profile') ?>">Profile Sekolah</a></li>
							<li class="scroll-to-section"><a href="<?= base_url('beranda/visi_misi') ?>">Visi Misi</a></li>

							<!-- <li class="scroll-to-section"><a href="#about">About Us</a></li>
							<li class="scroll-to-section"><a href="#services">Services</a></li>
							<li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
							<li class="scroll-to-section"><a href="#contact">Contact Us</a></li> -->
							<li class="scroll-to-section">
								<div class="main-blue-button"><a href="<?= base_url('auth/login') ?>">Masuk</a></div>
							</li>
						<?php } else { ?>
							<li class="scroll-to-section"><a href="<?= base_url('siswa/beranda') ?>" class="">Home</a></li>
							<li class="scroll-to-section"><a href="<?= base_url('siswa/absensi') ?>" class="">Absensi</a></li>

							<li class="scroll-to-section"><a href="<?= base_url('siswa/materi') ?>" class="">Materi</a></li>
							<li class="scroll-to-section"><a href="<?= base_url('siswa/tugas') ?>">Tugas</a>

							</li>
							<li class="scroll-to-section"><a href="<?= base_url('siswa/chat') ?>">Chat</a></li>
							<li class="scroll-to-section"><a href="<?= base_url('siswa/tugas/catatan_tugas') ?>">Catatan Tugas</a></li>
							<li class="scroll-to-section"><a href="<?= base_url('auth/logout') ?>">Logout</a></li>
							<li class="scroll-to-section">
								<div class="main-blue-button"><a href="<?= base_url('siswa/profile') ?>"><?= $user['username'] ?></a></div>
							</li>
						<?php } ?>
					</ul>
					<a class='menu-trigger'>
						<span>Menu</span>
					</a>
					<!-- ***** Menu End ***** -->
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- ***** Header Area End ***** -->
