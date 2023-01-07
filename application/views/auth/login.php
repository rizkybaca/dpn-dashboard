<div class="container">
	<!-- Outer Row -->

	<div class="row justify-content-center">
		<div class="col-lg-5 col-md-9">
			<div class="card o-hidden border-1 my-4">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-12">
							<div class="p-5">
								<div class="text-center">
									<img src="<?= base_url('assets/'); ?>img/logo.png" class="img" style="height: 79px; width: 160px" alt="..." />
								</div>
								<div class="text-center">
									<h1 class="login-teks text-gray-900 mb-5 my-4">Masuk untuk melanjutkan</h1>
									<?php
									echo $this->session->flashdata('message');
									?>

								</div>

								<form method="POST" action="<?= base_url('auth'); ?>">
									<div class="mb-3">
										<label for="email" class="form-label">Username</label>
										<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan email" value="<?= set_value("email"); ?>" />
										<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

									</div>
									<div class="mb-3">
										<label for="password" class="form-label">Password</label>
										<input id="password" name="password" type="password" class="password form-control" placeholder="Masukkan password">
										<!-- <i class="hide fa fa-eye"></i>
										<i class="show fa fa-eye-slash"></i> -->
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										<input class="form-check-input" type="checkbox" id="gotTheEye" />
										<label class="disabled form-check-label" for="gotTheEye">Lihat Password</label>
									</div>

									<!-- <div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />
										<label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
									</div> -->

									<button type="submit" class="tombol-submit btn btn-primary form-control my-4">Masuk</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
