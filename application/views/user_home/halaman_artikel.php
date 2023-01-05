<section class="halaman_artikel" id="halaman_artikel">
	<div class="card  mt-5">
		<div class="container ">
			<div class="row mt-5 ">
				<!-- isi artikel -->
				<div class="col-sm-5 col-md-9 mt-4 mb-5">
					<div class="card mt-5 border-0">
						<div class="card-body ">
							<h2 class="card-title "><b><?= $artikel['title'] ?></b></h2>
							<h6 class="card-subtitle mt-3 mb-2 text-muted"><?= date('d F Y', strtotime($artikel['post_date'])) ?></h6>
							<p class="card-text">Penulis : <?= $artikel['created_by'] ?></p>
							<?php
							$image = ($artikel['image'] !== null) ? 'artikel/' . $artikel['image'] : 'gambar2.jpg';
							?>
							<img src="<?= base_url('assets/img/') . $image ?>" class="card-img-top rounded-top" alt="gambar artikel">
							<?php
							foreach ($kategori as $k) { ?>
								<button type="button" class="btn btn-outline-secondary mt-3" style="border-radius: 12px; font-size:12px; margin-right: 3px;" disabled><?= $k['category_name'] ?></button>
							<?php }
							?>
						</div>
						<div class="card-body">
							<p class="card-text" style="font-size: 18px;text-align: justify;">

								<?=
								nl2br(htmlspecialchars_decode($artikel['article_content']));
								?>
							</p>
						</div>
					</div>
				</div>
				<!-- end isi artikel -->
				<div class="col-sm-5 col-md-3 mt-5 mb-2">
					<div class="card mb-2 ms-4 mt-5">
						<div class="card-body" style="padding: 8px; ">
							<div class="card-body">
								<p class="card-text" style="font-size: 14px;"><b>Hubungi Kami</b> </p>
								<p class="card-text" style="font-size: 12px; margin-top:-10px;text-align: justify;">Apabila ada pertanyaan lebih lanjut silahkan hubungi kami melalui :</p>
							</div>
							<div class="card-body" style="margin-top: -20px;">
								<p style="font-size:16px; "><i class="fa-brands fa-instagram"></i> &nbsp;&nbsp;Instagram</p>
								<p style="font-size:16px; "><i class="fa-brands fa-linkedin"></i> &nbsp;&nbsp;Linkedin</p>
								<p style="font-size:16px; "><i class="fa-brands fa-youtube"></i> &nbsp;&nbsp;youtube</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
