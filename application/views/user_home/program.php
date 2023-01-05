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
					$id_program_type = '';
					foreach ($tipe_program as $pt) {
						$nama = '';

						if (!isset($_GET['submitTipe']) && $id_program_type == '') {
							if ($pt['program_type_name'] == 'Pengabdian') {
								$id_program_type = $pt['id_program_type'];
								$nama = $pt['program_type_name'];
							}
						}

						$active = (isset($_GET['submitTipe']) && $pt['id_program_type'] == $_GET['type']) ? 'active' : '';

						if ($active == 'active') {
							$id_program_type = $pt['id_program_type'];
							$nama = $pt['program_type_name'];
						}

						$lili = (isset($_GET['submitTipe'])) ? $_GET['type'] : $id_program_type;
						if ($lili) {
							$id_program_type = $lili;
						}

					?>
						<!-- start program type  -->
						<li class="nav-item ms-3">
							<form action="" method="GET">
								<input type="hidden" name="type" value="<?= $pt['id_program_type'] ?>">
								<?php
								$retval = ($pt['program_type_name'] === $nama) ? 'active' : '';
								?>

								<button type="submit" name="submitTipe" class="nav-link <?= $retval ?>" data-bs-toggle="tab" href="#" value="<?= $pt['program_type_name'] ?>"><?= $pt['program_type_name'] ?></button>
							</form>
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

				<!-- start program -->
				<?php

				$data['program'] = $this->program->getProgramByProgramTypeId($id_program_type);

				foreach ($data['program'] as $p) {
				?>
					<?php
					$image = ($p['image'] !== null) ? 'program/image/' . $p['image'] : 'bg.jpg.';

					?>
					<div class="col-lg-3 col-md-12 mb-3">
						<div class="card " style="width: 18rem; border-radius: 12px;">
							<a href="<?= base_url("User_Detail_program/index/") . $p['slug']; ?>">

								<img src="<?= base_url('assets/img/') . $image ?>" class="card-img-top rounded-top" alt="gambar program">
							</a>
							<div class="row mt-3">
								<?php
								$data['program_paths'] = $this->programpath->getProgramPathByProgramId($p['id_program']);
								foreach ($data['program_paths'] as $ps) { ?>
									<div class="col ms-3 ">
										<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;<?= $ps['path_name'] ?></button>
									</div>
								<?php }
								?>
								<div class="col">
									<button type="button" class="btn btn-outline-secondary" style="border-radius: 12px; font-size:7px; margin-left:-60px;" disabled><i class="fa-solid fa-tv"></i>&nbsp;&nbsp;<?= $p['work_method'] ?></button>
								</div>
							</div>
							<div class="card-body">
								<p class="card-text" style="font-size: 14px;"><b><?= $p['title'] ?></b> </p>
								<p class="card-text" style="font-size: 12px; margin-top:-10px;"><?= $p['location'] ?></p>
							</div>
							<div class="card-body">
								<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Detail Kegiatan</b> </p>
								<p class="card-text" style="font-size: 12px; margin-top:-10px;"><?= htmlspecialchars(substr($p['program_description'], 0, 100)) ?>...</p>
								<a class="btn text-white" href="<?= base_url("User_Detail_program/index/") . $p['slug']; ?>" role="button" style=" background-color: #1ABB63; font-size: 11px; border-radius: 8px;">Batas Akhir Pendaftaran : <?= date('d F Y', strtotime($p['end'])) ?></a>
							</div>
						</div>
					</div>
				<?php
				}
				?>
				<!-- end program -->

			</div>

		</div>
	</div>

	<!-- end Program Page -->
