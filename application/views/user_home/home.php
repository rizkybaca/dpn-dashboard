<section class="home" id="home">

	<!-- home page -->

	<div class="hero d-flex align-items-center" id="home">
		<div class="container">
			<div class="row mt-5">
				<div class="col-lg-8  text-start">
					<h1 class="text-white fw-bold mb-2 mt-5">
						Wujudkan Mimpimu <br />
						Membangun Negeri Mendedikasikan Diri <br />
						Melalui Dedikasi Pemuda Negeri
					</h1>
					<p class="text-white mt-4"><i> “Berkelana di Negeri Khatulistiwa Memberi Manfaat bagi Sesama”</i></p>
					<a class="btn btn-warning btn-lg mt-4" href="<?= base_url("User_Program"); ?>" role="button" style="border-radius: 12px; font-size:18px;">Telusuri Program</a>

				</div>
				<div class="col-lg-4 col-xl-12 text-end">
					<a target="_blank" class="btn text-white btn-lg justify-content-end " href="https://api.whatsapp.com/send?phone=+6285399207948&text=Halo DPN" style="border-radius: 12px; background-color:#31D668; font-size:18px;  ">
						<i class="fa-brands fa-whatsapp"></i>&nbsp;Hubungi Kami</b></a>
				</div>
			</div>
		</div>



	</div>

	<!-- end home page -->
	<!-- about page -->
	<section class="about-page" id="about">
		<div class="d-flex align-items-center m-3" id="about">
			<div class="container">
				<div class="row  ">
					<div class="col-lg-7 col-md-12 mt-5">
						<div class="about-img mt-5  ">
							<img src="<?= base_url('assets/img/about-us.jpg') ?>" class="about card-img " alt="..." style="margin-top:-28px; margin-left:-40px;border-radius: 12px; ">
						</div>
					</div>
					<div class="col-lg-5 col-md-12 ">
						<div class="about-title">
							<p class="text pt-2">Tentang Kami</p>
							<div class="verikal_center"></div>
						</div>
						<div class="paragraph py-5 w-100" style="text-align: justify; margin-top:-30px;">
							<p>
								Dedikasi Pemuda Negeri merupakan Youth Development Fasilitator Service Organization yang dikelola oleh anak-anak muda Indonesia dari berbagai latar belakang budaya, pendidikan, dan
								daerah asal yang berbeda. Dedikasi Pemuda Negeri berpusat di kota Makassar, Sulawesi Selatan, Indonesia dan memiliki kegiatan di seluruh wilayah Indonesia maupun luar Indonesia.
							</p>
							<p>
								Dedikasi Pemuda Negeri merupakan Youth Development Fasilitator Service Organization yang dikelola oleh anak-anak muda Indonesia dari berbagai latar belakang budaya, pendidikan, dan
								daerah asal yang berbeda. Dedikasi Pemuda Negeri berpusat di kota Makassar, Sulawesi Selatan, Indonesia dan memiliki kegiatan di seluruh wilayah Indonesia maupun luar Indonesia.
								<br /><br />
								<a href="<?= base_url("User_About"); ?>" class="btn btn-warning" style="border-radius: 12px; padding-left: 20px; padding-right: 20px;">Selengkapnya &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end about page -->
	<!-- Program Kami -->

	<div class="d-flex align-items-center m-3">
		<div class="container">


			<div class="row">

				<div class="col-lg-4 col-md-12 ">
					<div class="card-program" style="background-color: #b54bcc;">
						<div class="row">
							<!--  -->
							<div class="col-lg-8 col-md-12 m-5 ">
								<div class="program-title">
									<p class="text pt-5">Program Kami</p>
									<div class="verikal_center"></div>
								</div>
								<div class="program">
									<p>
										Ayo ikut bersama kami berkelana <br />
										mengarungi khatulistiwa serta <br />
										bermanfaat untuk sesama <br />
									</p>
									<a href="<?= base_url("User_Program"); ?>" class="btn btn-warning">Liat Semua Program </a>
								</div>
							</div>
							<!--  -->
						</div>
					</div>
				</div>


				<div class="col-lg-8 col-md-12 ">
					<div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
						<div class="carousel-inner mt-5">
							<div class="carousel-item active">
								<img src="<?= base_url('assets/img/banner2.png') ?>" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('assets/img/banner1.png') ?>" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('assets/img/banner2.png') ?>" class="d-block w-100" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
							<span class="badge text-dark bg-white rounded-pill" aria-hidden="true" style="padding: 10px;"><i class="fa-solid fa-arrow-left"></i></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
							<span class="badge text-dark bg-white rounded-pill" aria-hidden="true" style="padding: 10px;"> <i class="fa-solid fa-arrow-right"></i></span>
							<span class=" visually-hidden">Next</span>
						</button>
					</div>
				</div>

			</div>


		</div>
	</div>


	<!-- end program kami -->

	<!-- jumlah count event page  -->

	<div class="d-flex align-items-center m-3 mt-5 mb-5">
		<div class="container mt-5 mb-5">
			<div class="card bg-warning p-3" style="border-radius: 12px;">
				<div class="card-body text-center bg-warning p-5">
					<div class="row">
						<div class="col-lg-3 col-md-12 border-end border-dark">
							<h1><?= $count_program_csr; ?></h1>
							<h5>Program CSR</h5>
						</div>
						<!-- <div class="col-lg-3 col-md-12 border-end border-dark">
							<h1><?= $count_program_csr; ?></h1>
							<h5>Program CSR</h5>
						</div> -->
						<div class="col-lg-3 col-md-12 border-end border-dark">
							<h1><?= $count_program_pengabdian; ?></h1>
							<h5>Program Pengabdian</h5>
						</div>
						<!-- <div class="col-lg-3 col-md-12">
							<h1><?= $count_program_pengabdian; ?></h1>
							<h5>Program Pengabdian</h5>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end count event page -->

	<!-- Budaya Organisasi Page -->

	<div class="d-flex align-items-center m-3 mb-5">
		<div class="container">
			<div class="asas-title">
				<p class="text pt-5">Budaya Organisasi</p>
				<center>
					<div class="verikal_center"></div>
				</center>
			</div>

			<div class="row text-center mt-5">
				<div class="col-lg-4 col-md-12 ">
					<img src="<?= base_url('assets/img/icon/1.png') ?>" alt="" /><br />
					<div class="judul-asas mt-3">
						<h4><b>Asas Kebermanfaatan</b></h4>
					</div>
					<p>Adanya wadah menjadikan setiap anggota semakin mendapatkan tempat untuk terus upgrade diri dan memberikan dampak yang positif untuk sesama.</p>
				</div>
				<div class="col-lg-4 col-md-12 ">
					<img src="<?= base_url('assets/img/icon/2.png') ?>" alt="" /><br />
					<div class="judul-asas mt-3">
						<h4><b>Asas Profesionalitas</b></h4>
					</div>
					<p>Melaksanakan tugas dan tanggung jawabnya berlandaskan kode etik dan ketentuan peraturan dari organisasi tersebut yang mana telah disepakati bersama.</p>
				</div>
				<div class="col-lg-4 col-md-12 ">
					<img src="<?= base_url('assets/img/icon/3.png') ?>" alt="" /><br />
					<div class="judul-asas mt-3">
						<h4><b>Asas Merdeka Finansial</b></h4>
					</div>
					<p>Mencapai sesuatu keinginan setiap anggota organisasi DPN, baik untuk membantu orang lain ataupun untuk diri sendiri.</p>
				</div>
			</div>

			<div class="row text-center  mt-5">
				<div class="col-lg-6 col-md-12 ">
					<img src="<?= base_url('assets/img/icon/1.png') ?>" alt="" /><br />
					<div class="judul-asas mt-3">
						<h4><b>Asas Kebermanfaatan</b></h4>
					</div>
					<p>Adanya wadah menjadikan setiap anggota semakin mendapatkan tempat untuk terus upgrade diri dan memberikan dampak yang positif untuk sesama.</p>
				</div>
				<div class="col-lg-6 col-md-12">
					<img src="<?= base_url('assets/img/icon/2.png') ?>" alt="" /><br />
					<div class="judul-asas mt-3">
						<h4><b>Asas Profesionalitas</b></h4>
					</div>
					<p>Melaksanakan tugas dan tanggung jawabnya berlandaskan kode etik dan ketentuan peraturan dari organisasi tersebut yang mana telah disepakati bersama.</p>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- end Budaya Organisasi Page -->

	<!-- Dokumentasi kegiatan -->

	<div class=" d-flex align-items-center mb-5">
		<div class="container-fluid h-100 " style="background-image: linear-gradient(to right, #2c2d8e, #b54bcc);">

			<div class="doc-title ">
				<h1 class="text pt-5 text-white text-center mt-5 mb-3">Dokumentasi Kegiatan</h2>
					<center>
						<div class="verikal_center1"></div>
					</center>
			</div>
			<center>
				<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner  mt-5 mb-5 ">
						<div class="carousel-item active " data-bs-interval="10000">
							<img src="<?= base_url('assets/img/g1.png') ?>" class="d-block w-75 mb-5 " alt="...">
						</div>
						<div class="carousel-item " data-bs-interval="2000">
							<img src="<?= base_url('assets/img/g1.png') ?>" class="d-block w-75 mb-5" alt="...">
						</div>
						<div class="carousel-item ">
							<img src="<?= base_url('assets/img/g1.png') ?>" class="d-block w-75 mb-5" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
						<span class="text-dark bg-white rounded-circle" aria-hidden="true" style="padding: 10px; width: 40px;"><i class="fa-solid fa-arrow-left"></i></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
						<span class="text-dark bg-white rounded-circle" aria-hidden="true" style="padding: 10px;width: 40px;"><i class="fa-solid fa-arrow-right"></i></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</center>
		</div>
	</div>

	<!-- end Dokumentasi kegiatan -->

	<!-- apa kata mereka page -->

	<div class=" d-flex align-items-center mb-5">
		<div class="container h-100">

			<div class="asas-title">
				<p class="text pt-5">Apa Kata Mereka?</p>
				<center>
					<div class="verikal_center"></div>
				</center>
			</div>

			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

				<div class="col-12 mt-5">
					<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

						<div class="carousel-inner">
							<!-- carousel halaman 1 -->
							<div class="carousel-item active">
								<div class="row">

									<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
										<div class="card" style="width: 20rem; height: 28rem">
											<div class="card-body m-3">
												<p class="card-text text-sm-start">
													Lorem ipsum dolor sit amet consectetur. Morbi hendrerit auctor eu aenean neque sed. A sit aliquet sed molestie fringilla morbi. Ipsum fringilla nunc ac sem. Suspendisse vulputate
													aliquam a imperdiet at vivamus et congue eu. Turpis sit molestie vestibulum imperdiet cursus lectus aliquet. Mauris quis a ut aliquet ridiculus ultrices felis hendrerit
													elementum.
												</p>
											</div>
											<center>
												<hr class="garis" />
											</center>
											<div class="cart-deleg m-3">
												<div class="row">
													<div class="col-lg-2 ">
														<div class="img-deleg "><img src="<?= base_url('assets/img/a1.png') ?>" class="card-img-top" alt="..." /></div>
													</div>
													<div class="col-lg-10">
														<div class="nama-deleg"><b>Rivo Dimas</b></div>
														<div class="ket-deleg">Delegasi Pengabdian Banten</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
										<div class="card" style="width: 20rem; height: 28rem">
											<div class="card-body m-3">
												<p class="card-text text-sm-start">
													Lorem ipsum dolor sit amet consectetur. Morbi hendrerit auctor eu aenean neque sed. A sit aliquet sed molestie fringilla morbi. Ipsum fringilla nunc ac sem. Suspendisse vulputate
													aliquam a imperdiet at vivamus et congue eu. Turpis sit molestie vestibulum imperdiet cursus lectus aliquet. Mauris quis a ut aliquet ridiculus ultrices felis hendrerit
													elementum.
												</p>
											</div>
											<center>
												<hr class="garis" />
											</center>
											<div class="cart-deleg m-3">
												<div class="row">
													<div class="col-lg-2">
														<div class="img-deleg"><img src="<?= base_url('assets/img/a1.png') ?>" class="card-img-top" alt="..." /></div>
													</div>
													<div class="col-lg-10">
														<div class="nama-deleg"><b>Rivo Dimas</b></div>
														<div class="ket-deleg">Delegasi Pengabdian Banten</div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
										<div class="card" style="width: 20rem; height: 28rem">
											<div class="card-body m-3">
												<p class="card-text text-sm-start">
													Lorem ipsum dolor sit amet consectetur. Morbi hendrerit auctor eu aenean neque sed. A sit aliquet sed molestie fringilla morbi. Ipsum fringilla nunc ac sem. Suspendisse vulputate
													aliquam a imperdiet at vivamus et congue eu. Turpis sit molestie vestibulum imperdiet cursus lectus aliquet. Mauris quis a ut aliquet ridiculus ultrices felis hendrerit
													elementum.
												</p>
											</div>
											<center>
												<hr class="garis" />
											</center>
											<div class="cart-deleg m-3">
												<div class="row">
													<div class="col-lg-2">
														<div class="img-deleg"><img src="<?= base_url('assets/img/a1.png') ?>" class="card-img-top" alt="..." /></div>
													</div>
													<div class="col-lg-10">
														<div class="nama-deleg"><b>Rivo Dimas</b></div>
														<div class="ket-deleg">Delegasi Pengabdian Banten</div>
													</div>
												</div>
											</div>
										</div>
									</div>


								</div>
							</div>
							<!-- end carousel halaman 1 -->

							<!-- carousel halaman 2 -->

							<div class="carousel-item">

								<div class="row">

									<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
										<div class="card" style="width: 20rem; height: 28rem">
											<div class="card-body m-3">
												<p class="card-text text-sm-start">
													Lorem ipsum dolor sit amet consectetur. Morbi hendrerit auctor eu aenean neque sed. A sit aliquet sed molestie fringilla morbi. Ipsum fringilla nunc ac sem. Suspendisse vulputate
													aliquam a imperdiet at vivamus et congue eu. Turpis sit molestie vestibulum imperdiet cursus lectus aliquet. Mauris quis a ut aliquet ridiculus ultrices felis hendrerit
													elementum.
												</p>
											</div>
											<center>
												<hr class="garis" />
											</center>
											<div class="cart-deleg m-3">
												<div class="row">
													<div class="col-lg-2">
														<div class="img-deleg"><img src="<?= base_url('assets/img/a1.png') ?>" class="card-img-top" alt="..." /></div>
													</div>
													<div class="col-lg-10">
														<div class="nama-deleg"><b>Rivo Dimas</b></div>
														<div class="ket-deleg">Delegasi Pengabdian Banten</div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
										<div class="card" style="width: 20rem; height: 28rem">
											<div class="card-body m-3">
												<p class="card-text text-sm-start">
													Lorem ipsum dolor sit amet consectetur. Morbi hendrerit auctor eu aenean neque sed. A sit aliquet sed molestie fringilla morbi. Ipsum fringilla nunc ac sem. Suspendisse vulputate
													aliquam a imperdiet at vivamus et congue eu. Turpis sit molestie vestibulum imperdiet cursus lectus aliquet. Mauris quis a ut aliquet ridiculus ultrices felis hendrerit
													elementum.
												</p>
											</div>
											<center>
												<hr class="garis" />
											</center>
											<div class="cart-deleg m-3">
												<div class="row">
													<div class="col-lg-2">
														<div class="img-deleg"><img src="<?= base_url('assets/img/a1.png') ?>" class="card-img-top" alt="..." /></div>
													</div>
													<div class="col-lg-10">
														<div class="nama-deleg"><b>Rivo Dimas</b></div>
														<div class="ket-deleg">Delegasi Pengabdian Banten</div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row">
										<div class="card" style="width: 20rem; height: 28rem">
											<div class="card-body m-3">
												<p class="card-text text-sm-start">
													Lorem ipsum dolor sit amet consectetur. Morbi hendrerit auctor eu aenean neque sed. A sit aliquet sed molestie fringilla morbi. Ipsum fringilla nunc ac sem. Suspendisse vulputate
													aliquam a imperdiet at vivamus et congue eu. Turpis sit molestie vestibulum imperdiet cursus lectus aliquet. Mauris quis a ut aliquet ridiculus ultrices felis hendrerit
													elementum.
												</p>
											</div>
											<center>
												<hr class="garis" />
											</center>
											<div class="cart-deleg m-3">
												<div class="row">
													<div class="col-lg-2">
														<div class="img-deleg"><img src="<?= base_url('assets/img/a1.png') ?>" class="card-img-top" alt="..." /></div>
													</div>
													<div class="col-lg-10">
														<div class="nama-deleg"><b>Rivo Dimas</b></div>
														<div class="ket-deleg">Delegasi Pengabdian Banten</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							<!-- end carousel halaman 2 -->


						</div>
					</div>
				</div>

				<!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                      <span class="text-dark bg-warning rounded-circle" aria-hidden="true" style="padding: 10px; width: 40px;"><i class="fa-solid fa-arrow-left"></i></span>
                      <span class="visually-hidden">Previous</span>
                    </button> -->
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
					<span class="text-dark bg-warning rounded-circle end-0 top-50 translate-middle-y" aria-hidden="true" style="padding: 10px; width: 40px;"><i class="fa-solid fa-arrow-right"></i></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>

		</div>
	</div>

	<!-- end apa kata mereka page -->

	<!-- artikel page-->

	<div class=" d-flex align-items-center mb-5">
		<div class="container h-100">
			<div class="row mb-5">


				<div class="col-lg-10 col-md-12 mb-5">
					<div class="about-title" style="margin-top:-10px;">
						<p class="text pt-5">Artikel Terbaru</p>
						<div class="verikal_center"></div>
					</div>
				</div>

				<div class="col-lg-2 col-md-12 mb-5">
					<div class="bt-ar justify-content-end  ">
						<a href="<?= base_url("User_Artikel"); ?>" class="btn btn-warning justify-content-end mt-5" style="border-radius: 12px;">Selengkapnya &nbsp; <i class="fa-solid fa-arrow-right"></i></a>


					</div>
				</div>

			</div>


			<div class="row mt-5">

				<!-- <div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row mb-3">
					<div class="card" style="width: 18rem">
						<a href="<?= base_url("User_Halaman_artikel"); ?>">
							<img src="<?= base_url('assets/img/gambar.png') ?>" class="card-img-top" alt="..." />
						</a>
						<div class="card-body">
							<h5 class="card-title">Program Cakrawala Mengabdi Sukses Dilaksanakan di Banten</h5>
							<p class="card-text">
								Lorem ipsum dolor sit amet consectetur. Morbi hendrerit auctor eu aenean neque sed. A sit aliquet sed molestie fringilla morbi. Ipsum fringilla nunc ac sem. Suspendisse vulputate
								aliquam a imperdiet at vivamus et congue eu. Turpis sit . . .
							</p>
						</div>
					</div>

				</div>

				<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row mb-3">
					<div class="card" style="width: 18rem">
						<a href="<?= base_url("User_Halaman_artikel"); ?>">
							<img src="<?= base_url('assets/img/gambar.png') ?>" class="card-img-top" alt="..." />
						</a>
						<div class="card-body">
							<h5 class="card-title">Program Cakrawala Mengabdi Sukses Dilaksanakan di Banten</h5>
							<p class="card-text">
								Lorem ipsum dolor sit amet consectetur. Morbi hendrerit auctor eu aenean neque sed. A sit aliquet sed molestie fringilla morbi. Ipsum fringilla nunc ac sem. Suspendisse vulputate
								aliquam a imperdiet at vivamus et congue eu. Turpis sit . . .
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row mb-3">
					<div class="card" style="width: 18rem">
						<a href="<?= base_url("User_Halaman_artikel"); ?>">
							<img src="<?= base_url('assets/img/gambar.png') ?>" class="card-img-top" alt="..." />
						</a>
						<div class="card-body">
							<h5 class="card-title">Program Cakrawala Mengabdi Sukses Dilaksanakan di Banten</h5>
							<p class="card-text">
								Lorem ipsum dolor sit amet consectetur. Morbi hendrerit auctor eu aenean neque sed. A sit aliquet sed molestie fringilla morbi. Ipsum fringilla nunc ac sem. Suspendisse vulputate
								aliquam a imperdiet at vivamus et congue eu. Turpis sit . . .
							</p>
						</div>
					</div>
				</div> -->

				<!-- start last 3 articles -->

				<?php
				foreach ($article as $a) {
				?>
					<div class="col-lg-4 col-md-12 col-lg-4 flex-sm-row mb-3">

						<div class="card" style="width: 18rem">
							<a href="<?= base_url("User_Halaman_artikel/") . $a['slug']; ?>">
								<img src="<?= base_url('assets/img/artikel/') . $a['image'] ?>" class="card-img-top" alt="gambar artikel" />
							</a>
							<div class="card-body">
								<h5 class="card-title"><?= $a['title'] ?></h5>
								<p class="card-text">
									<?= html_escape(substr($a['article_content'], 0, 250)) ?>
								</p>
							</div>
						</div>
					</div>

				<?php
				}
				?>
				<!-- end last 3 articles -->


			</div>

		</div>
	</div>



	<!-- end artikel page -->
