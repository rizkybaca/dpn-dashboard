<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul"><?= $title; ?></h1>
		<p class="keterangan-judul">Anda dapat mengubah Program yang Dijalankan</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-8">
			<div class="card">
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>

					<!-- start form -->
					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_program" value="<?= $program['id_program']; ?>">
						<input type="hidden" name="old_image" value="<?= $program['image']; ?>">
						<input type="hidden" name="old_banner" value="<?= $program['banner']; ?>">
						<input type="hidden" name="old_video" value="<?= $program['video']; ?>">

						<!-- start choose program type -->
						<div class="form-group">
							<label for="program_type_id" class="mb-1 mt-3">Pilih Tipe Program</label><br>
							<?php
							foreach ($tipe_program as $tp) {
								$selected = ($tp['id_program_type'] == $program['program_type_id']) ? 'checked' : '';
							?>
								<div class="form-check form-check form-check-inline">
									<input <?= $selected; ?> class="form-check-input cek-edit-tipe-nih" type="radio" name="program_type_id" id="<?= $tp['id_program_type'] ?>" value="<?= $tp['id_program_type'] ?>" data-pt="<?= $tp['id_program_type'] ?>" data-program="<?= $program['id_program'] ?>" required>
									<label class="form-check-label" for="<?= $tp['id_program_type'] ?>">
										<?= $tp['program_type_name'] ?>
									</label>
								</div>
							<?php
							}
							?>
						</div>
						<!-- end choose program type -->

						<a href="<?= base_url('program/program_type') ?>"> <span>klik untuk kelola tipe program selengkapnya..</span> </a>
						<?php
						foreach ($jalur as $j) {
						?>
							<div class="form-group">
								<div class="input-group mb-3">
									<div class="input-group-text">
										<input class="form-check-input mt-0" <?= check_path($program['id_program'], $j['id_path']); ?> name="check[]" value="<?= $j['id_path'] ?>" type="checkbox" aria-label="Checkbox for following text input">
									</div>
									<input type="text" <?= check_cta_link_path($program['id_program'], $j['id_path']); ?> name="text[]" class="form-control" aria-label="Text input with checkbox">
								</div>
							</div>
						<?php
						}
						?>

						<!-- start choose path -->
						<div class="form-group">
							<label class="mb-1 mt-3">Pilih jalur untuk program ini</label><br>
							<div id="fill_path_edit">
								<?php
								$count = count($jalur);
								if ($count <= 0) { ?>
									<label class='fst-italic text-danger'>belum ada jalur pada tipe program ini!</label><br>
								<?php } else {
								?>
									<?php
									foreach ($jalur as $j) { ?>
										<div class="row align-items-center mb-2 text-dark fst-normal">
											<div class="col col-sm-12 col-lg-6 col-md-12 ">
												<input <?= check_cta_link_path($program['id_program'], $j['id_path']); ?> type="text" id="cta_link<?= $j['id_path'] ?>" name="cta_link[]" class="form-control" placeholder="link daftar jalur">
												<div id="cta_link<?= $j['id_path'] ?>" class="form-text">We'll never share your email with anyone else.</div>
											</div>
											<div class="col">
												<div class="form-check form-check-inline">
													<label for="path_id<?= $j['id_path'] ?>" class="form-check-label"><?= $j['path_name'] ?></label>
													<input <?= check_path($program['id_program'], $j['id_path']); ?> class="form-check-input" id="path_id<?= $j['id_path'] ?>" name="path_id[]" type="checkbox" value="<?= $j['id_path'] ?>">
												</div>
											</div>
										</div>
								<?php }
								}
								?>
							</div>
						</div>
						<!-- end choose path -->

						<div class="form-group">
							<label for="image" class="mb-3 mt-3">Gambar Program</label>
							<input type="file" id="image" name="image" class="form-control">
						</div>
						<div class="form-group">
							<label for="banner" class="mb-3 mt-3">Banner Program</label>
							<input type="file" id="banner" name="banner" class="form-control" />
						</div>
						<div class="form-group">
							<label for="video" class="mb-3 mt-3">Video Preview Program</label>
							<input type="file" id="video" name="video" class="form-control" />
						</div>

						<div class="form-group">
							<label for="title" class="mb-3 mt-3">Judul Program</label>
							<input type="text" id="title" name="title" class="form-control" value="<?= $program['title'] ?>" required>
							<?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="location" class="mb-3 mt-3">Lokasi Kegiatan</label>
							<input type="text" id="location" name="location" class="form-control" value="<?= $program['location'] ?>" required>
							<?= form_error('location', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="" class="mb-3 mt-3">Tanggal Pelaksanaan</label>
							<div class="row gx-3 gy-2 align-items-center">
								<div class="col-sm-3">
									<input type="date" name="start" id="start" class="form-control" value="<?= date('Y-m-d', strtotime($program['start'])) ?>" required>
									<input type="time" name="start_time" id="start" class="form-control" value="<?= date('H:i', strtotime($program['start'])) ?>" required>

								</div>
								<div class="col-sm-2 text-center" style="color: #777c83">Sampai</div>
								<div class="col-sm-3">
									<input type="date" name="end" id="end" class="form-control" value="<?= date('Y-m-d', strtotime($program['end'])) ?>" required>
									<input type="time" value="<?= date('H:i', strtotime($program['end'])) ?>" name="end_time" id="end" class="form-control" required>

								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="mb-3 mt-3" for="">
								Pilih Metode Pelaksanaan
							</label><br>
							<?php
							$offChecked = ($program['work_method'] == 'offline') ? 'checked' : '';
							$onChecked = ($program['work_method'] == 'online') ? 'checked' : '';
							$hybChecked = ($program['work_method'] == 'hybrid') ? 'checked' : '';
							?>
							<div class="form-check form-check form-check-inline">
								<input <?= $offChecked; ?> class="form-check-input" type="radio" name="work_method" id="offline" value="offline" required>
								<label class="form-check-label" for="offline">
									Offline
								</label>
							</div>
							<div class="form-check form-check form-check-inline">
								<input <?= $onChecked; ?> class="form-check-input" type="radio" name="work_method" id="online" value="online">
								<label class="form-check-label" for="online">
									Online
								</label>
							</div>
							<div class="form-check form-check form-check-inline">
								<input <?= $hybChecked; ?> class="form-check-input" type="radio" name="work_method" id="hybrid" value="hybrid">
								<label class="form-check-label" for="hybrid">
									Hybrid
								</label>
							</div>
						</div>

						<!-- program type -->
						<!-- <div class="form-group">
						<label class="mb-3 mt-3">Jenis Program</label>
						<br />
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
							<label class="form-check-label" for="inlineCheckbox1">Fully Funded</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
							<label class="form-check-label" for="inlineCheckbox2">Partially Funded</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
							<label class="form-check-label" for="inlineCheckbox2">Self Funded</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
							<label class="form-check-label" for="inlineCheckbox2">WFO</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
							<label class="form-check-label" for="inlineCheckbox2">WFH</label>
						</div>
					</div> -->

						<div class="form-group">
							<label for="ckedtor" class="mb-3 mt-3">Detail Kegiatan</label>
							<textarea class="ckeditor" name="program_description" id="ckedtor" rows="3" placeholder="tuliskan sesuatu disini"><?= $program['program_description'] ?></textarea>
						</div>

						<!-- start choose benefit -->
						<!-- <div class="form-group">
							<label class="mb-1 mt-3">Pilih manfaat untuk program ini</label><br>
							<label class="fst-italic text-danger" id="fill_benefit">pilih tipe program dahulu!</label><br>
						</div> -->
						<!-- end choose benefit -->

						<!-- start choose path -->
						<div class="form-group">
							<label class="mb-1 mt-3">Pilih manfaat untuk program ini</label><br>

							<div id="fill_benefit_edit">
								<?php
								$count = count($manfaat);
								if ($count <= 0) { ?>
									<label class='fst-italic text-danger'>belum ada manfaat pada tipe program ini!</label><br>
								<?php } else {
								?>
									<?php
									foreach ($manfaat as $m) { ?>
										<div class='form-check form-check-inline text-dark fst-normal'>
											<label for='benefit_id<?= $m['id_benefit'] ?>' class='form-check-label'><?= $m['benefit_name'] ?></label>
											<input class='form-check-input' <?= check_benefit($program['id_program'], $m['id_benefit']) ?> id='benefit_id<?= $m['id_benefit'] ?>' name='benefit_id[]' type='checkbox' value='<?= $m['id_benefit'] ?>'>
										</div>
								<?php }
								}
								?>
							</div>
						</div>
						<!-- end choose path -->

						<!-- program benefit -->
						<!-- <div class="form-group">
						<label class="mb-3 mt-3">Manfaat Program</label>
						<br />
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
							<label class="form-check-label" for="inlineCheckbox1">Upgrade Skill</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
							<label class="form-check-label" for="inlineCheckbox2">Kesempatan Tim internal</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
							<label class="form-check-label" for="inlineCheckbox2">Relasi</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
							<label class="form-check-label" for="inlineCheckbox2">Give Away</label>
						</div>
					</div> -->

						<div class="form-group">
							<label for="ckedtor" class="mb-3 mt-3">Persyaratan Delegasi</label>
							<textarea class="ckeditor" name="delegation_requirement" id="ckedtor" rows="3" placeholder="tuliskan sesuatu disini"><?= $program['delegation_requirement'] ?></textarea>
						</div>

						<div class="form-group">
							<label for="ckedtor" class="mb-3 mt-3">Program Pengabdian</label>
							<textarea class="ckeditor" name="program_activity" id="ckedtor" rows="3" placeholder="tuliskan sesuatu disini"><?= $program['program_activity'] ?></textarea>
						</div>
						<button type="submit" value="upload" class="btn mt-5" style="background-color: #242790; color: white">Post Program</button>
						<a href="<?= base_url('program') ?>" class="btn btn-danger mt-5">Batal</a>

					</form>
					<!-- endform -->
				</div>
			</div>
		</div>
	</section>
</main>
