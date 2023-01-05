<section class="detail_program" id="detail_program">
	<div class="card bg-dark text-white ">
		<?php
		$banner = ($program['banner'] != null) ? 'program/banner/' . $program['banner'] : 'banner1.png';
		?>
		<img src="<?= base_url('assets/img/') . $banner ?>" class="card-img" alt="banner program">
		<div class=" card-img-overlay text-center text-bold font-weight-bolder mt-5">
			<div class="row" style="margin-top: 120px;">
				<?php
				$logo = ($program['logo'] !== null) ? 'program/logo/' . $program['logo'] : 'logo2.png';
				?>
				<div class="col "> <img src="<?= base_url('assets/img/') ?>logo2.png" class="card-img" alt="logo DPN" style="width: 55px; height:55px; float:right;"></div>
				<div class="col "> <img src="<?= base_url('assets/img/') . $logo ?>" class="card-img" alt="logo Program" style="width: 55px; height:55px; float:left;"></div>
			</div>
			<h1 class="card-title" style="margin-top: 20px; "><?= $program['title'] ?></h1>
			<p>Open Recruitment Volunteer Pengabdian Masyarakat </p>
			<p><?= $program['location'] ?></p>
			<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="col-md-2 col-lg-2 btn btn-warning" style=" border-radius: 10px; ">Daftar Sekarang</button>
		</div>
	</div>

	<div class="card">
		<div class="container-fluid " style="background-color: #F8F8F8; ">
			<div class="row ms-4 mt-5">
				<div class="col-sm-5 col-md-4 mt-5">
					<div class="card mb-2 ms-4">
						<div class="card-body" style="padding: 40px; ">
							<div class="row">
								<p class="card-text" style="font-size:14px; color:#012970;"><b>Tanggal Pelaksanaan</b> </p>
								<p class="card-text mt-0" style="font-size:14px;"><i class="fa-regular fa-calendar-days" style="font-size:14px; color:#012970;"></i>&nbsp;&nbsp; <?= date('d', strtotime($program['start'])) . ' - ' . date('d F Y', strtotime($program['end'])) ?></p>
							</div>
							<div class="row mt-3">
								<p class="card-text" style="font-size:14px; color:#012970;"><b>Lokasi</b> </p>
								<p class="card-text mt-0" style="font-size:14px;"><i class="fa-solid fa-location-dot" style="font-size:14px; color:#012970;"></i>&nbsp;&nbsp; <?= $program['location'] ?></p>
							</div>
							<div class="row mt-4">
								<p class="card-text" style="font-size:14px; color:#012970;"><b>Batas Akhir Pendaftaran</b> </p>
								<div class="col ">
									<p class="card-text " style="font-size:14px;"><?= date('d F Y', strtotime($program['deadline'])) ?></p>
								</div>
								<div class="col">
									<p class="card-text" style="font-size:14px;"><?= date('H.i', strtotime($program['deadline'])) ?> WIB</p>
								</div>
							</div>
							<div class="row mt-3 mb-3">

								<div class="countdown" style="font-size:14px; color:#012970;"> <b>Berakhir Dalam </b>
									<!-- <span id="timer"></span> -->
									<!-- <p class="card-text mt-0 mb-4" style="font-size:14px;"> Countdown</p> -->

									<!-- start countdown -->
									<div class="row">
										<div class="col">
											<p id="hari">0 Hari</p>
										</div>
										<div class="col">
											<p id="jam">0 Jam</p>
										</div>
										<div class="col">
											<p id="menit">0 Menit</p>
										</div>
										<div class="col">
											<p id="detik">0 Detik</p>
										</div>
									</div>
									<!-- end countdown -->



								</div>
								<button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style=" border-radius: 10px; background:#012970;">
									Daftar Sekarang
								</button>


								<!-- Modal -->

								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog-centered modal-dialog modal-xl">

										<div class=" modal-content ">

											<div class="modal-header border-0 justify-content-center mt-3 ">
												<h5 class="modal-title " id="exampleModalLabel"><b>Pilih Jalur Program</b> </h5>
											</div>

											<div class="modal-body ">
												<!-- isian -->
												<div class="container mb-5">
													<div class="row">

														<?php
														foreach ($jalur as $j) { ?>

															<!-- start path -->
															<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
																<div class="card border-0" style="width: 18rem;">
																	<div class="row mt-3 ms-3 ">
																		<div class="col-lg-2">
																			<div class="img" style="width:52px; height:52px;"><img src="<?= base_url('assets/img/program/path_icon/') . $j['path_icon'] ?>" class="card-img-top" alt="logo jalur" /></div>
																		</div>
																		<div class="col-lg-10">
																			<div class="ms-3 mt-3"><b><?= $j['path_name'] ?></b></div>
																		</div>
																	</div>
																	<div class="card-body ms-3">
																		<p class="card-text"><?= $j['path_description'] ?></p>
																	</div>
																	<div class="text-end">
																		<a target="_blank" href="<?= $j['cta_link'] ?>" class="text-end text-warning">Daftar Sekarang <i class="fa-solid fa-arrow-right"></i></a>
																	</div>
																</div>
															</div>
															<!-- end path -->

														<?php }
														?>

													</div>
												</div>
												<!-- end isian -->
											</div>


										</div>
									</div>
								</div>
								<!--end modal -->
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-5  col-md-7 mt-5 mb-5">
					<div class="card mb-5 ms-4 ">
						<div class="card-body" style="padding: 40px; ">
							<?php
							$image = ($program['image'] !== null) ? 'program/image/' . $program['image'] : 'logo.png';

							?>
							<img src="<?= base_url('assets/img/') . $image ?>" class="card-img-top mt-4" alt="gambar program" style="height: 90px; width: 180px">
							<div class="card-body ">
								<p class="card-text" style="font-size: 24px;"><b><?= $program['title'] ?></b> </p>
								<p class="card-text text-secondary" style="font-size: 14px; margin-top:-10px;"><?= $program['location'] ?></p>
							</div>
							<div class="row ms-1">

								<?php
								foreach ($jalur as $j) {
								?>
									<!-- start path -->
									<div class="col-lg-3 ">
										<button type="button" class="btn btn-outline-secondary mb-3" style="border-radius: 12px; font-size:12px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;<?= $j['path_name'] ?></button>
									</div>
									<!-- end path -->
								<?php } ?>

								<!-- start method -->
								<div class="col-lg-3 ">
									<button type="button" class="btn btn-outline-secondary " style="border-radius: 12px; font-size:12px; " disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;<?= $program['work_method'] ?></button>
								</div>
								<!-- end method -->
							</div>
							<hr>
							<div class="card-body">
								<p class="card-text" style="font-size: 18px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
								<p class="card-text" style="font-size: 14px; margin-top:-10px;text-align: justify;"><?= nl2br(htmlspecialchars($program['program_description'])) ?></p>
							</div>

							<hr>
							<div class="card-body">
								<p class="card-text" style="font-size: 18px; margin-top:-20px;"><b>Manfaat Yang Akan Kamu Dapatkan</b> </p>

								<div class="row">
									<?php
									$a = 1;
									foreach ($manfaat as $m) {
									?>
										<!-- start benefit -->
										<div class="col-lg-6 d-flex flex-row align-items-baseline ">
											<div style="margin-right: 2rem;" class="manfaat-teks">

												<!-- <div class="">

												</div> -->
												<span class="badge text-white rounded-pill" style="background-color: #012970; font-size: 12px;"><?= $a++ ?></span>

												<!-- <div class="ms-4">

												</div> -->
											</div>
											<div style="margin-bottom: 1rem;">
												<p class="card-text" style="font-size: 14px;">
													<b><?= $m['benefit_name'] ?></b>
													<br><?= htmlspecialchars($m['benefit_description']) ?>
												</p>
											</div>
										</div>
										<!-- end benefit -->
									<?php
									} ?>

								</div>


								<hr>
								<div class="card-body">
									<p class="card-text mb-3" style="font-size: 18px; margin-top:-20px;"><b>Persyaratan Delegasi</b> </p>

									<?php

									$delegate = explode('</li>', $program['delegation_requirement']);
									$a = 1;
									foreach ($delegate as $del) {
									?>
										<!-- start requirement -->
										<div class="row mb-2">
											<div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;"><?= $a++ ?></span></div>
											<div class="col-lg-11 col-md-12">
												<?= $del ?>
											</div>
										</div>
										<!-- end requirement -->
									<?php
									}
									?>

								</div>

								<hr>
								<div class="card-body">
									<p class="card-text mb-3" style="font-size: 18px; margin-top:-20px;"><b>Program Yang Dijalankan</b> </p>

									<?php
									$activity = explode('</li>', $program['program_activity']);
									$a = 1;
									foreach ($activity as $act) {
									?>

										<!-- start activity -->
										<div class="row mb-2">
											<div class="col-lg-1 col-md-12"><span class="badge text-white rounded-pill text-dark" style="background-color: #012970;"><?= $a++ ?></span></div>
											<div class="col-lg-11 col-md-12"><?= $act ?></div>
										</div>
										<!-- end activity -->
									<?php
									}
									?>
								</div>

								<hr>
								<div class="card-body">
									<p class="card-text" style="font-size: 18px; margin-top:-20px;"><b>Preview Kegiatan</b> </p>
									<div class="row">
										<div class="container text-center my-1 ratio ratio-16x9">

											<?php
											$video = ($program['video'] != null && $program['video'] != '') ? $program['video'] : 'https://www.youtube.com/embed/yg8116aeD7E';
											?>

											<iframe class="embed-responsive-item" src="<?= $video ?>" style=" border-radius: 10px; " allowfullscreen></iframe>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
