<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul">Ubah Kategori</h1>
		<p class="keterangan-judul">Anda dapat mengubah artikel terkini</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-8">
			<div class="card">
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>

					<form action="" method="POST" enctype="multipart/form-data">

						<input type="hidden" name="id_category" value="<?= $kategori['id_category']; ?>">
						<div class="form-group">
							<label for="category_name" class="mb-3 mt-3">Nama Kategori</label>
							<input type="text" id="category_name" name="category_name" class="form-control" value="<?= $kategori['category_name']; ?>" required>
							<?= form_error('category_name', '<small class="text-danger pl-3">', '</small>'); ?>

						</div>
						<div class="form-group">
							<label for="category_icon" class="mb-3 mt-3">Icon Kategori</label>
							<input type="text" id="category_icon" name="category_icon" class="form-control" value="<?= htmlspecialchars($kategori['category_icon']); ?>" required>
							<?= form_error('category_icon', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<button type="submit" class="btn mt-5" style="background-color: #242790; color: white">Ubah Kategori</button>
						<a href="<?= base_url('artikel/category') ?>" class="btn btn-danger mt-5">Batal</a>
					</form>
				</div>

			</div>
		</div>
	</section>
</main>
