<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul"><?= $title ?></h1>
		<p class="keterangan-judul">Berikut Kategori pada Artikel</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-11">
			<div class="card">
				<div class="card-header font-weight-bold text-gray-100" style="background-color: #eeeef0">List Kategori</div>
				<div class="row mt-2">
					<div class="col-md-12 text-center">
						<div class="table-responsive m-4">
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Artikel</th>
										<th scope="col">Kategori</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($kategori as $k) : ?>
										<tr>
											<th><?= $i++; ?></th>
											<td><?= $k['category_name']; ?></td>
											<td>
												<input class="form-check-input ini-check" type="checkbox" <?= check_category($artikel['id_article'], $k['id_category']); ?> data-artikel="<?= $artikel['id_article']; ?>" data-kategori="<?= $k['id_category']; ?>">
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>

			</div>
			<a href="<?= base_url('artikel/category') ?>"> <span>klik untuk kelola kategori selengkapnya..</span> </a>
		</div>
	</section>
</main>
