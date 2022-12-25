<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul">List Artikel</h1>
		<p class="keterangan-judul">Anda dapat mengedit dan menghapus Artikel yang telah di post pada halaman Tambah Artikel</p>

	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-11">
			<div class="card">
				<div class="card-header font-weight-bold text-gray-100" style="background-color: #eeeef0">List Artikel</div>
				<div class="row mt-2">
					<div class="col-md-12 text-center">
						<?= $this->session->flashdata('message'); ?>

						<div class="table-responsive m-4">
							<table class="table table-bordered">
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Judul Artikel</th>
									<th class="text-center">Waktu Post</th>
									<th class="text-center">Gambar</th>
									<th class="text-center">Edit</th>
									<th class="text-center">Hapus</th>
									<th class="text-center">Lihat</th>
									<th class="text-center">Kategori</th>
								</tr>
								<?php $i = 1;
								foreach ($artikel as $a) : ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $a['title'] ?></td>
										<td><?= date('d M Y', strtotime($a['post_date'])) ?></td>
										<td>
											<img src="<?= base_url('assets/img/artikel/') . $a['image']; ?>" alt="banner" style="width:128px;height:128px;object-fit: cover;">
										</td>
										<td>
											<center>
												<a class="mb-2 mt-2 btn btn-sm" style="background-color: #242790; color: white" href="<?= base_url('artikel/edit/') . $a['id_article'] ?>"> Edit </a>
											</center>
										</td>
										<td>
											<center>
												<form action="<?= base_url('artikel/delete/') . $a['id_article'] ?>" method="POST">
													<input type="hidden" name="old_image" value="<?= $a['image'] ?>">
													<button onclick="return confirm('Yakin Hapus?')" class="mb-2 mt-2 btn btn-sm btn-danger"> Hapus </button>
												</form>
											</center>
										</td>
										<td>
											<center>
												<a class="mb-2 mt-2 btn btn-sm btn-success" href="#"> Lihat </a>
											</center>
										</td>
										<td>
											<center>
												<a class="mb-2 mt-2 btn btn-sm btn-success" href="<?= base_url('artikel/articleCategory/') . $a['id_article'] ?>">Kelola Kategori </a>
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
