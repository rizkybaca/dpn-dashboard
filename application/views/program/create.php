<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul"><?= $title; ?></h1>
		<p class="keterangan-judul">Anda dapat menambahkan Program yang Dijalankan</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-8">
			<div class="card">
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>

					<!-- start form -->
					<form method="POST" enctype="multipart/form-data">

						<div class="form-group">
							<label for="program_type_id" class="mb-3 mt-3">Pilih Tipe Program</label><br>
							<?php
							foreach ($tipe_program as $tp) {
							?>
								<div class="form-check form-check form-check-inline">
									<input class="form-check-input" type="radio" name="program_type_id" id="<?= $tp['id_program_type'] ?>" value="<?= $tp['id_program_type'] ?>" required>
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
							<label for="image" class="mb-3 mt-3">Gambar Program</label>
							<input type="file" id="image" name="image" class="form-control" />
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
							<input type="text" id="title" name="title" class="form-control" required>
							<?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="location" class="mb-3 mt-3">Lokasi Kegiatan</label>
							<input type="text" id="location" name="location" class="form-control" required>
							<?= form_error('location', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<div class="form-group">
							<label for="" class="mb-3 mt-3">Tanggal Pelaksanaan</label>
							<div class="row gx-3 gy-2 align-items-center">
								<div class="col-sm-3">
									<input type="date" name="start" id="start" class="form-control" required>
								</div>
								<div class="col-sm-2 text-center" style="color: #777c83">Sampai</div>
								<div class="col-sm-3">
									<input type="date" name="end" id="end" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="mb-3 mt-3" for="">
								Pilih Metode Pelaksanaan
							</label><br>
							<div class="form-check form-check form-check-inline">
								<input class="form-check-input" type="radio" name="work_method" id="offline" value="offline" required>
								<label class="form-check-label" for="offline">
									Offline
								</label>
							</div>
							<div class="form-check form-check form-check-inline">
								<input class="form-check-input" type="radio" name="work_method" id="online" value="online">
								<label class="form-check-label" for="online">
									Online
								</label>
							</div>
							<div class="form-check form-check form-check-inline">
								<input class="form-check-input" type="radio" name="work_method" id="hybrid" value="hybrid">
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
							<textarea class="ckeditor" name="program_description" id="ckedtor" rows="3" placeholder="tuliskan sesuatu disini"></textarea>
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

						<div class="form-group">
							<label for="ckedtor" class="mb-3 mt-3">Persyaratan Delegasi</label>
							<textarea class="ckeditor" name="delegation_requirement" id="ckedtor" rows="3" placeholder="tuliskan sesuatu disini"></textarea>
						</div>

						<div class="form-group">
							<label for="ckedtor" class="mb-3 mt-3">Program Pengabdian</label>
							<textarea class="ckeditor" name="program_activity" id="ckedtor" rows="3" placeholder="tuliskan sesuatu disini"></textarea>
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
