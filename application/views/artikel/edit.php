<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul">Edit Artikel</h1>
		<p class="keterangan-judul">Anda dapat mengubah artikel</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-8">
			<div class="card">
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>

					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_article" value="<?= $artikel['id_article'] ?>">
						<input type="hidden" name="old_image" value="<?= $artikel['image'] ?>">
						<div class="form-group">
							<label for="image" class="mb-3 mt-3">Gambar Artikel</label>
							<input id="image" accept="image/*" type="file" name="image" class="form-control"><br>
							<img src="<?= base_url('assets/img/artikel/') . $artikel['image']; ?>" alt="banner" style="width:80px;height:80px;object-fit: cover;">
						</div>

						<div class="form-group">
							<label for="post_date" class="mb-3 mt-3">Waktu Post Artikel </label>
							<input type="date" name="post_date" id="post_date" value="<?= date('Y-m-d', strtotime($artikel['post_date'])) ?>" class="form-control" required>
						</div>

						<div class="form-group">
							<label class="mb-1 mt-3">Pilih kategori untuk artikel ini</label>
							<?php
							foreach ($kategori as $k) : ?>
								<div class="form-check">
									<label for="category_id<?= $k['id_category'] ?>" class="form-check-label"><?= $k['category_name'] ?></label>
									<input <?= check_category($artikel['id_article'], $k['id_category']); ?> class="form-check-input category-check-test" id="category_id<?= $k['id_category'] ?>" name="category_id[]" type="checkbox" value="<?= $k['id_category'] ?>">
								</div>
							<?php endforeach; ?>
						</div>

						<div class="form-group">
							<label for="title" class="mb-3 mt-3">Judul Artikel</label>
							<input type="text" id="title" name="title" class="form-control" required value="<?= $artikel['title'] ?>">
							<?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>

						</div>
						<div class="form-group">
							<label for="created_by" class="mb-3 mt-3">Ditulis oleh</label>
							<input type="text" id="created_by" name="created_by" class="form-control" value="<?= $artikel['created_by'] ?>">
							<?= form_error('created_by', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="ckedtor" class="mb-3 mt-3">Isi Artikel</label>
							<textarea required class="ckeditor" name="article_content" id="ckedtor" rows="3" placeholder="tuliskan sesuatu disini"><?= $artikel['article_content'] ?></textarea>
							<?= form_error('article_content', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<button type="submit" value="upload" class="btn mt-5" style="background-color: #242790; color: white">Post Artikel</button>
						<a href="<?= base_url('artikel') ?>" class="btn btn-danger mt-5">Batal</a>
					</form>
				</div>

			</div>
		</div>
	</section>
</main>
