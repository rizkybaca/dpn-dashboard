<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul"><?= $title; ?></h1>
		<p class="keterangan-judul">Anda dapat mengubah Jalur</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-8">
			<div class="card">
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>

					<!-- start form -->
					<form method="POST" enctype="multipart/form-data">

						<input type="hidden" name="id_path" value="<?= $jalur['id_path'] ?>">
						<div class="form-group">
							<label for="program_type_id" class="mb-3 mt-3">Pilih Tipe Program</label><br>
							<?php
							foreach ($tipe_program as $tp) {
								$checked = ($tp['id_program_type'] == $jalur['program_type_id']) ? 'checked' : '';
							?>
								<div class="form-check form-check form-check-inline">
									<input <?= $checked; ?> class="form-check-input" type="radio" name="program_type_id" id="<?= $tp['id_program_type'] ?>" value="<?= $tp['id_program_type'] ?>" required>
									<label class="form-check-label" for="<?= $tp['id_program_type'] ?>">
										<?= $tp['program_type_name'] ?>
									</label>
								</div>
							<?php
							}
							?>
						</div>
						<a href="<?= base_url('program/program_type') ?>"> <span>klik untuk kelola tipe program selengkapnya..</span> </a>

						<div class="form-group">
							<label for="path_name" class="mb-3 mt-3">Nama Jalur</label>
							<input type="text" id="path_name" name="path_name" class="form-control" value="<?= $jalur['path_name'] ?>" required>
							<?= form_error('path_name', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="path_icon" class="mb-3 mt-3">Icon Jalur</label>
							<input type="text" id="path_icon" name="path_icon" class="form-control" value="<?= $jalur['path_icon'] ?>" required>
							<?= form_error('path_icon', '<small class="text-danger pl-3">', '</small>'); ?>
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
							<label for="ckedtor" class="mb-3 mt-3">Detail Jalur</label>
							<textarea class="ckeditor" name="path_description" id="ckedtor" rows="3" placeholder="tuliskan sesuatu disini"><?= $jalur['path_description']; ?></textarea>
						</div>

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

						<button type="submit" value="upload" class="btn mt-5" style="background-color: #242790; color: white">Post Path</button>
						<a href="<?= base_url('program/path') ?>" class="btn btn-danger mt-5">Batal</a>

					</form>
					<!-- endform -->
				</div>
			</div>
		</div>
	</section>
</main>
