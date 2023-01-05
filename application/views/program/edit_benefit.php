<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul"><?= $title; ?></h1>
		<p class="keterangan-judul">Anda dapat mengubah Manfaat</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-8">
			<div class="card">
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>

					<!-- start form -->
					<form method="POST" enctype="multipart/form-data">

						<input type="hidden" name="id_benefit" value="<?= $manfaat['id_benefit'] ?>">
						<div class="form-group">
							<label for="program_type_id" class="mb-3 mt-3">Pilih Tipe Program</label><br>
							<?php
							foreach ($tipe_program as $tp) {
								$checked = ($tp['id_program_type'] == $manfaat['program_type_id']) ? 'checked' : '';
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

						<div class="form-group">
							<label for="benefit_name" class="mb-3 mt-3">Nama Manfaat</label>
							<input type="text" id="benefit_name" name="benefit_name" class="form-control" value="<?= $manfaat['benefit_name'] ?>" required>
							<?= form_error('benefit_name', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="benefit_icon" class="mb-3 mt-3">Icon Manfaat</label>
							<input type="text" id="benefit_icon" name="benefit_icon" class="form-control" value="<?= htmlspecialchars($manfaat['benefit_icon']) ?>" required>
							<?= form_error('benefit_icon', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="desc" class="mb-3 mt-3">Detail Manfaat</label>
							<textarea class="form-control" id="desc" name="benefit_description" rows="3" placeholder="tuliskan sesuatu disini"><?= $manfaat['benefit_description']; ?></textarea>
						</div>

						<button type="submit" value="upload" class="btn mt-5" style="background-color: #242790; color: white">Post Manfaat</button>
						<a href="<?= base_url('program/benefit') ?>" class="btn btn-danger mt-5">Batal</a>

					</form>
					<!-- endform -->
				</div>
			</div>
		</div>
	</section>
</main>
