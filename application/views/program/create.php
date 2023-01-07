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

						<!-- start choose program type -->
						<div class="form-group">
							<label for="program_type_id" class="mb-1 mt-3">Pilih Tipe Program</label><br>
							<?php
							foreach ($tipe_program as $tp) {
							?>
							<div class="form-check form-check form-check-inline">
								<input class="form-check-input cek-tipe-nih" type="radio" name="program_type_id"
									id="<?= $tp['id_program_type'] ?>" value="<?= $tp['id_program_type'] ?>"
									data-pt="<?= $tp['id_program_type'] ?>" required>
								<label class="form-check-label" for="<?= $tp['id_program_type'] ?>">
									<?= $tp['program_type_name'] ?>
								</label>
							</div>
							<?php
							}
							?>
						</div>
						<!-- end choose program type -->

						<!-- start choose path -->
						<div class="form-group">
							<label class="mb-1 mt-3">Pilih jalur untuk program ini</label><br>
							<div id="fill_path" class="fst-italic text-danger">
								<label>pilih tipe program dahulu!</label><br>
							</div>
						</div>
						<!-- end choose path -->

						<div class="form-group">
							<label for="image" class="mb-3 mt-3">Gambar Program</label>
							<input type="file" id="image" name="image" class="form-control" />
						</div>
						<div class="form-group">
							<label for="banner" class="mb-3 mt-3">Banner Program</label>
							<input type="file" id="banner" name="banner" class="form-control" />
						</div>
						<div class="form-group">
							<label for="logo" class="mb-3 mt-3">Logo Program</label>
							<input type="file" id="logo" name="logo" class="form-control" />
						</div>

						<div class="form-group">
							<label for="title" class="mb-3 mt-3">Judul Program</label>
							<input type="text" id="title" name="title" class="form-control" required>
							<?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="guide_book_link" class="mb-3 mt-3">Link Buku Panduan</label>
							<input type="url" id="guide_book_link" name="guide_book_link" class="form-control">
							<?= form_error('guide_book_link', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="video" class="mb-3 mt-3">Link Video Preview</label>
							<input type="url" id="video" name="video" class="form-control">
							<?= form_error('video', '<small class="text-danger pl-3">', '</small>'); ?>
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
									<input type="date" name="start" id="start" class="form-control mb-1" required>
									<input type="time" name="start_time" id="start" class="form-control" required>
								</div>
								<div class="col-sm-2 text-center" style="color: #777c83">Sampai</div>
								<div class="col-sm-3">
									<input type="date" name="end" id="end" class="form-control mb-1" required>
									<input type="time" name="end_time" id="end" class="form-control" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="" class="mb-3 mt-3">Batas Waktu Pendaftaran</label>
							<div class="row gx-3 gy-2 align-items-center">
								<div class="col-sm-3">
									<input type="date" name="deadline" id="deadline" class="form-control mb-1" required>
									<input type="time" name="deadline_time" id="deadline" class="form-control" required>
								</div>
							</div>
						</div>



						<div class="form-group">
							<label class="mb-1 mt-3">Pilih Metode Pelaksanaan</label>
							<br>
							<div class="form-check form-check form-check-inline">
								<input class="form-check-input" type="radio" name="work_method" id="offline"
									value="offline" required>
								<label class="form-check-label" for="offline">
									Offline
								</label>
							</div>
							<div class="form-check form-check form-check-inline">
								<input class="form-check-input" type="radio" name="work_method" id="online"
									value="online">
								<label class="form-check-label" for="online">
									Online
								</label>
							</div>
							<div class="form-check form-check form-check-inline">
								<input class="form-check-input" type="radio" name="work_method" id="hybrid"
									value="hybrid">
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
							<textarea class="ckeditor" name="program_description" id="ckedtor" rows="3"
								placeholder="tuliskan sesuatu disini"></textarea>
						</div>

						<!-- start choose benefit -->
						<div class="form-group">
							<label class="mb-1 mt-3">Pilih manfaat untuk program ini</label><br>
							<label class="fst-italic text-danger" id="fill_benefit">pilih tipe program
								dahulu!</label><br>
						</div>
						<!-- end choose benefit -->

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
							<textarea class="ckeditor" name="delegation_requirement" id="ckedtor" rows="3"
								placeholder="tuliskan sesuatu disini"></textarea>
						</div>

						<div class="form-group">
							<label for="ckedtor" class="mb-3 mt-3">Program Pengabdian</label>
							<textarea class="ckeditor" name="program_activity" id="ckedtor" rows="3"
								placeholder="tuliskan sesuatu disini"></textarea>
						</div>
						<button type="submit" value="upload" class="btn mt-5"
							style="background-color: #242790; color: white">Post Program</button>
						<a href="<?= base_url('program') ?>" class="btn btn-danger mt-5">Batal</a>

					</form>
					<!-- endform -->
				</div>
			</div>
		</div>
	</section>
</main>
