<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul"><?= $title ?></h1>
		<p class="keterangan-judul">Berikut Manfaat pada Program "<?= $program['title'] ?>"</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-11">
			<div class="card">
				<div class="card-header font-weight-bold text-gray-100" style="background-color: #eeeef0">List Manfaat</div>

				<div class="row mt-2">
					<div class="col-md-12 text-center">
						<div class="table-responsive m-4">
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">Manfaat</th>
										<th scope="col">Ceklis untuk menambahkan Manfaat pada Program ini</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1;
									foreach ($manfaat as $m) : ?>
										<tr>
											<td><?= $m['benefit_name']; ?></td>
											<td>
												<input class="form-check-input" id="check-benefit" type="checkbox" <?= check_benefit($program['id_program'], $m['id_benefit']); ?> data-program="<?= $program['id_program']; ?>" data-benefit="<?= $m['id_benefit']; ?>">
											</td>


										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>

						</div>
					</div>
				</div>

			</div>
			<a href="<?= base_url('program/benefit') ?>"> <span>klik untuk kelola manfaat selengkapnya..</span> </a>

		</div>
	</section>
</main>
