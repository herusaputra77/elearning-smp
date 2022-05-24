<div id="features" class="features section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="features-content">
					<div class="row">
						<?php foreach ($materi as $m) { ?>

							<div class="col-md-12 col-md-6">
								<div class="features-item second-feature wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
									<!-- <a href="<?= base_url('assets/materi/' . $m['file_materi']) ?>" target="_blank"><?= $m['judul_materi'] ?></a> -->

									<a href="<?= base_url('assets/materi/' . $m['file_materi']) ?>" target="_blank">
										<div class="icon"></div>
									</a>
									<h4>Materi Tanggal <?= date('d M Y', $m['waktu_kirim']) ?></h4>
									<div class="line-dec"></div>
									<p><?= $m['deskripsi'] ?></p>
									<p><a href="<?= base_url('assets/materi/' . $m['file_materi']) ?>">Klik Disini</a> untuk mendownload MATERI</p>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>
			</div>
			<!-- <div class="col-lg-12">
				<div class="skills-content">
					<div class="row">
						<div class="col-lg-3">
							<div class="skill-item wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0s; -moz-animation-delay: 0s; animation-delay: 0s;">
								<div class="progress" data-percentage="80">
									<span class="progress-left">
										<span class="progress-bar"></span>
									</span>
									<span class="progress-right">
										<span class="progress-bar"></span>
									</span>
									<div class="progress-value">
										<div>
											80%<br>
											<span>HTML/CSS/JS</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="skill-item wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
								<div class="progress" data-percentage="60">
									<span class="progress-left">
										<span class="progress-bar"></span>
									</span>
									<span class="progress-right">
										<span class="progress-bar"></span>
									</span>
									<div class="progress-value">
										<div>
											60%<br>
											<span>Wordpress</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="skill-item wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
								<div class="progress" data-percentage="90">
									<span class="progress-left">
										<span class="progress-bar"></span>
									</span>
									<span class="progress-right">
										<span class="progress-bar"></span>
									</span>
									<div class="progress-value">
										<div>
											90%<br>
											<span>Marketing</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="skill-item last-skill-item wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
								<div class="progress" data-percentage="70">
									<span class="progress-left">
										<span class="progress-bar"></span>
									</span>
									<span class="progress-right">
										<span class="progress-bar"></span>
									</span>
									<div class="progress-value">
										<div>
											70%<br>
											<span>Photoshop</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
