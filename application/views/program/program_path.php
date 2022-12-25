<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul"><?= $title ?></h1>
		<p class="keterangan-judul">Berikut Jalur pada Program "<?= $program['title'] ?>"</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-11">
			<div class="card">
				<div class="card-header font-weight-bold text-gray-100" style="background-color: #eeeef0">List Jalur</div>

				<div class="row mt-2">
					<div class="col-md-12 text-center">
						<div class="table-responsive m-4">
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">Masukkan Link untuk akses Jalur Program ini</th>
										<th scope="col">Jalur</th>
										<th scope="col">Ceklis untuk menambahkan Jalur pada Program ini</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($jalur as $j) : ?>
										<tr>
											<td>
												<input type="text" <?= check_cta_link_path($program['id_program'], $j['id_path']); ?> id="cta_link" name="cta_link" class="form-control" required>
											</td>
											<td><?= $j['path_name']; ?></td>
											<td>
												<input class="form-check-input" id="check-path" type="checkbox" <?= check_path($program['id_program'], $j['id_path']); ?> data-program="<?= $program['id_program']; ?>" data-path="<?= $j['id_path']; ?>">
											</td>


										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>

			</div>
			<a href="<?= base_url('program/path') ?>"> <span>klik untuk kelola jalur selengkapnya..</span> </a>

		</div>
	</section>
</main>
