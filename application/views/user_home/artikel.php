<section class="aerikel" id="artikel">
	<div class="card bg-dark text-white mt-5">
		<img src="<?= base_url('assets/') ?>/img/baner2.png" class="card-img" alt="...">
		<div class="card-img-overlay text-center text-bold font-weight-bolder mt-5">
			<h1 class="card-title mt-5">Artikel</h1>
		</div>
	</div>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
		<div class="container-fluid">
			<div class="collapse navbar-collapse text-left" id="navbarText">
				<ul class="nav nav-tabs nav-tabs-bordered  mb-2 mb-lg-0">
					<!-- start article category -->
					<?php

					$id_category = '';

					// $activeB = '';
					foreach ($kategori as $kt) {
						$nama = '';

						if (!isset($_GET['submitKategory']) && $id_category == '') {

							if ($kt['category_name'] == 'Program') {
								$id_category = $kt['id_category'];
								$nama = $kt['category_name'];
							}
						}
						$active = (isset($_GET['submitKategory']) && $kt['id_category'] == $_GET['category']) ? 'active' : '';
						if ($active == 'active') {
							$id_category = $kt['id_category'];
							$nama = $kt['category_name'];
						}

						$lala = (isset($_GET['submitKategory'])) ? $_GET['category'] : $id_category;
						if ($lala) {
							$id_category = $lala;
						}

					?>

						<!-- <li class="nav-item ms-3" data-bs-toggle="tab">
							<button class="nav-link <?= $active ?>" data-bs-toggle="tab" href="#"><?= $kt['category_name'] ?></button>
						</li> -->

						<li class="nav-item ms-3" data-bs-toggle="tab">
							<form action="" method="GET">
								<input type="hidden" name="category" value="<?= $kt['id_category'] ?>">
								<?php
								$retval = ($kt['category_name'] === $nama) ? 'active' : '';
								?>

								<button value="<?= $kt['category_name'] ?>" type="submit" name="submitKategory" class="nav-link <?= $retval ?>" data-bs-toggle="tab" href="#"><?= $kt['category_name'] ?></button>
							</form>

						</li>

					<?php
					}



					?>
					<!-- end article category -->

				</ul>
			</div>
		</div>
	</nav>
	<!-- end Navbar -->

	<!-- Program Page -->

	<div class="card ">
		<div class="container-fluid">

			<div class="row mt-4 mb-1" style="padding:20px; ">

				<?php
				$data['artikel'] = $this->artikel->getArticleByCategoryId($id_category);
				// $data['artikel'] = $this->artikel->getArticle();
				?>
				<?php
				foreach ($data['artikel'] as $a) {
				?>
					<div class="col-lg-3 col-md-12 mb-3">
						<div class="card " style="width: 18rem; border-radius: 12px;">
							<a href="<?= base_url("User_Halaman_artikel/index/") . $a['slug']; ?>">
								<?php
								$image = ($a['image'] !== null) ? 'artikel/' . $a['image'] : 'gambar.png';
								?>
								<img src="<?= base_url('assets/img/') . $image ?>" class="card-img-top rounded-top" alt="gambar artikel">
							</a>
							<div class="card-body mt-3">
								<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b><?= $a['title'] ?></b> </p>
								<p class="card-text" style="font-size: 12px; margin-top:-10px;"><?= htmlspecialchars(substr($a['article_content'], 0, 100)) ?>...</p>
							</div>
						</div>
					</div>
				<?php
				}
				?>

			</div>



			<!-- <div class="row mt-2 mb-5" style="padding:20px; ">
				<div class="col-lg-3 col-md-12 mb-5">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<a href="<?= base_url("User_Halaman_artikel"); ?>">
							<img src="<?= base_url('assets/img/gambar.png') ?>" class="card-img-top rounded-top" alt="...">
						</a>
						<div class="card-body mt-3">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Program Cakrawala Mengabdi Sukses Dilaksanakan di Banten</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-12 mb-5">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<img src="<?= base_url('assets/img/gambar.png') ?>" class="card-img-top rounded-top" alt="...">
						<div class="card-body mt-3">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Program Cakrawala Mengabdi Sukses Dilaksanakan di Banten</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-12 mb-5">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<img src="<?= base_url('assets/img/gambar.png') ?>" class="card-img-top rounded-top" alt="...">
						<div class="card-body mt-3">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Program Cakrawala Mengabdi Sukses Dilaksanakan di Banten</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-12 mb-3">
					<div class="card " style="width: 18rem; border-radius: 12px;">
						<img src="<?= base_url('assets/img/gambar.png') ?>" class="card-img-top rounded-top" alt="...">
						<div class="card-body mt-3">
							<p class="card-text" style="font-size: 14px; margin-top:-20px;"><b>Program Cakrawala Mengabdi Sukses Dilaksanakan di Banten</b> </p>
							<p class="card-text" style="font-size: 12px; margin-top:-10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque ipsum eius impedit quod sapiente asperiores nemo illum optio quisquam aliquid, explicabo fuga, laborum non cumque eum at accusantium molestias numquam.</p>
						</div>
					</div>
				</div>
			</div> -->


		</div>
	</div>

	<!-- end Program Page -->
