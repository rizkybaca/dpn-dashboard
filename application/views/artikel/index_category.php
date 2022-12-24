<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul">List Kategori</h1>
		<p class="keterangan-judul">Anda dapat menambah, mengubah dan menghapus Kategori untuk digunakan saat mengelola Artikel</p>
		<?= $this->session->flashdata('message'); ?>

		<a href="<?= base_url('artikel/create_category') ?>"><span>Tambah Kategori Baru Cepat</span> </a>

	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-11">
			<div class="card">
				<div class="card-header font-weight-bold text-gray-100" style="background-color: #eeeef0">List Kategori</div>

				<div class="row mt-2">
					<div class="col-md-12 text-center">
						<div class="table-responsive m-4">
							<table class="table table-bordered">
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Nama Kategori</th>
									<th class="text-center">Icon</th>
									<th class="text-center">Edit</th>
									<th class="text-center">Hapus</th>
								</tr>
								<?php $i = 1;
								foreach ($kategori as $k) : ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $k['category_name'] ?></td>
										<td><?= $k['category_icon'] ?></td>
										<td>
											<center>
												<form method="POST" action="<?= base_url('artikel/edit_category') ?>">
													<input type="hidden" name="id_category" value="<?= $k['id_category']; ?>">
													<button type="submit" class="mb-2 mt-2 btn btn-sm" style="background-color: #242790; color: white"> Edit </button>
												</form>
											</center>
										</td>
										<td>
											<center>
												<a onclick="return confirm('Yakin Hapus?')" class="mb-2 mt-2 btn btn-sm btn-danger" href="<?= base_url('artikel/delete_category/') . $k['id_category'] ?>"> Hapus </a>
											</center>
										</td>
									</tr>
								<?php endforeach; ?>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
