<section class="program-pge" id="program-pge">
	<div class="card bg-dark text-white mt-5">
		<img src="<?= base_url('assets/') ?>/img/baner2.png" class="card-img" alt="...">
		<div class="card-img-overlay text-center text-bold font-weight-bolder mt-5">
			<h1 class="card-title mt-5">Program Kami</h1>
		</div>
	</div>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
		<div class="container-fluid">
			<div class="collapse navbar-collapse text-left" id="navbarText">
				<ul class="nav nav-tabs nav-tabs-bordered  mb-2 mb-lg-0">
					<?php
					foreach ($tipe_program as $pt) {
						$active = ($pt['program_type_name'] == 'Pengabdian') ? 'active' : '';
					?>
						<!-- start program type  -->
						<!-- <li class="nav-item ms-3" data-bs-toggle="tab">
						<button class="nav-link active" data-bs-toggle="tab" href="#">Voluntering</button>
					</li>
					<li class="nav-item ms-3">
						<button class="nav-link " data-bs-toggle="tab" href="#">CSR</button>
					</li> -->
						<li class="nav-item ms-3">
							<button class="nav-link <?= $active ?>" data-bs-toggle="tab" href="#"><?= $pt['program_type_name'] ?></button>
						</li>
					<?php
					}
					?>
					<!-- end program type -->

				</ul>
			</div>
		</div>
	</nav>
	<!-- end Navbar -->

	<!-- Program Page -->

	<div class="card ">
		<div class="container-fluid">

			<div class="row mt-4 mb-1" style="padding:20px; ">

				<!-- <div class="col-lg-3 col-md-12 mb-3">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<a href="<?= base_url("User_Detail_program"); ?>">
							<img src="<?= base_url('assets/img/bg.jpg') ?>" class="card-img-top rounded-top" alt="...">
						</a>
						<div class="row mt-3">
							<div class="col ms-3 ">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Fully Funded</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Online</button>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px;"><b>Cakrawala Mengabdi</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Pandeglang, Banten, Indonesia</p>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
							<a class="btn text-white" href="<?= base_url("User_Detail_program"); ?>" role="button" style="background-color: #1ABB63; font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : 15 November 2022</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-12 mb-3">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<a href="<?= base_url("User_Detail_program"); ?>">
							<img src="<?= base_url('assets/img/bg.jpg') ?>" class="card-img-top rounded-top" alt="...">
						</a>
						<div class="row mt-3">
							<div class="col ms-3 ">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Fully Funded</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Online</button>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px;"><b>Cakrawala Mengabdi</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Pandeglang, Banten, Indonesia</p>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
							<a class="btn text-white" href="<?= base_url("User_Detail_program"); ?>" role="button" style="background-color: #1ABB63; font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : 15 November 2022</a>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-12 mb-3">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<a href="<?= base_url("User_Detail_program"); ?>">
							<img src="<?= base_url('assets/img/bg.jpg') ?>" class="card-img-top rounded-top" alt="...">
						</a>
						<div class="row mt-3">
							<div class="col ms-3 ">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Fully Funded</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Online</button>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px;"><b>Cakrawala Mengabdi</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Pandeglang, Banten, Indonesia</p>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
							<a class="btn text-white" href="<?= base_url("User_Detail_program"); ?>" role="button" style="background-color: #1ABB63; font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : 15 November 2022</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-12 mb-3">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<a href="<?= base_url("User_Detail_program"); ?>">
							<img src="<?= base_url('assets/img/bg.jpg') ?>" class="card-img-top rounded-top" alt="...">
						</a>
						<div class="row mt-3">
							<div class="col ms-3 ">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Fully Funded</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Online</button>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px;"><b>Cakrawala Mengabdi</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Pandeglang, Banten, Indonesia</p>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
							<a class="btn text-white" href="<?= base_url("User_Detail_program"); ?>" role="button" style="background-color: #1ABB63; font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : 15 November 2022</a>
						</div>
					</div>
				</div> -->

				<!-- start program -->
				<?php
				foreach ($program as $p) {
				?>
					<?php
					// echo var_dump($p['end']) ;
					$image = ($p['image'] !== null) ? 'program/image/' . $p['image'] : 'bg.jpg.';
					
					// $end = ($p['end'] !== null) ? $p['end'] : date('Y-M-d');
					// $btn_close_class = (strtotime($end > time())) ? 'btn-secondary' : '';
					// $btn_open_style = (strtotime($end <= time())) ? 'background-color: #1ABB63;' : '';
					?>
					<div class="col-lg-3 col-md-12 mb-3">
						<div class="card " style="width: 18rem; border-radius: 12px;">
							<a href="<?= base_url("User_Detail_program/") . $p['slug']; ?>">

								<img src="<?= base_url('assets/img/') . $image ?>" class="card-img-top rounded-top" alt="gambar program">
							</a>
							<div class="row mt-3">
								<div class="col ms-3 ">
									<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;<?= $p['path_name'] ?></button>
								</div>
								<div class="col">
									<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;<?= $p['work_method'] ?></button>
								</div>
							</div>
							<div class="card-body">
								<p class="card-text" style="font-size: 14px;"><b><?= $p['title'] ?></b> </p>
								<p class="card-text" style="font-size: 12px; margin-top:-10px;"><?= $p['location'] ?>, Indonesia</p>
							</div>
							<div class="card-body">
								<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
								<p class="card-text" style="font-size: 12px; margin-top:-10px;"><?= htmlspecialchars($p['program_description']) ?></p>
								<a class="btn text-white" href="<?= base_url("User_Detail_program"); ?>" role="button" style=" background-color: #1ABB63; font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : <?= date('d F Y', strtotime($p['end'])) ?></a>
							</div>
						</div>
					</div>
				<?php
				}
				?>
				<!-- end program -->

			</div>

			<div class="row mb-5" style="padding:20px; ">
				<div class="col-lg-3 col-md-12 mb-3">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<a href="<?= base_url("User_Detail_program"); ?>">
							<img src="<?= base_url('assets/img/bg.jpg') ?>" class="card-img-top rounded-top" alt="...">
						</a>
						<div class="row mt-3">
							<div class="col ms-3 ">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Fully Funded</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Online</button>
							</div>
						</div>

						<div class="card-body">
							<p class="card-text" style="font-size: 14px;"><b>Cakrawala Mengabdi</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Pandeglang, Banten, Indonesia</p>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
							<a class="btn btn-secondary text-white" href="<?= base_url("User_Detail_program"); ?>" role="button" style="font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : 15 November 2022</a>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-md-12 mb-3">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<a href="<?= base_url("User_Detail_program"); ?>">
							<img src="<?= base_url('assets/img/bg.jpg') ?>" class="card-img-top rounded-top" alt="...">
						</a>
						<div class="row mt-3">
							<div class="col ms-3 ">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Fully Funded</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Online</button>
							</div>
						</div>

						<div class="card-body">
							<p class="card-text" style="font-size: 14px;"><b>Cakrawala Mengabdi</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Pandeglang, Banten, Indonesia</p>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
							<a class="btn btn-secondary text-white" href="<?= base_url("User_Detail_program"); ?>" role="button" style="font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : 15 November 2022</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-12 mb-3">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<a href="<?= base_url("User_Detail_program"); ?>">
							<img src="<?= base_url('assets/img/bg.jpg') ?>" class="card-img-top rounded-top" alt="...">
						</a>
						<div class="row mt-3">
							<div class="col ms-3 ">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Fully Funded</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Online</button>
							</div>
						</div>

						<div class="card-body">
							<p class="card-text" style="font-size: 14px;"><b>Cakrawala Mengabdi</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Pandeglang, Banten, Indonesia</p>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
							<a class="btn btn-secondary text-white" href="<?= base_url("User_Detail_program"); ?>" role="button" style="font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : 15 November 2022</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-12 mb-3">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<a href="<?= base_url("User_Detail_program"); ?>">
							<img src="<?= base_url('assets/img/bg.jpg') ?>" class="card-img-top rounded-top" alt="...">
						</a>
						<div class="row mt-3">
							<div class="col ms-3 ">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Fully Funded</button>
							</div>
							<div class="col">
								<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;Online</button>
							</div>
						</div>

						<div class="card-body">
							<p class="card-text" style="font-size: 14px;"><b>Cakrawala Mengabdi</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Pandeglang, Banten, Indonesia</p>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
							<a class="btn btn-secondary text-white" href="<?= base_url("User_Detail_program"); ?>" role="button" style="font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : 15 November 2022</a>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- end Program Page -->
