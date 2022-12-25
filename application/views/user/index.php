<main id="main" class="main">
	<div class="pagetitle">
		<h1><?= $title; ?></h1>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<?= $this->session->flashdata('message'); ?>
		</div>
	</div>
	<section class="section profile">
		<div class="row">
			<div class="col-xl-4">
				<div class="card">
					<div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
						<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Profile" class="rounded-circle" />
						<h2><?= $user['name']; ?></h2>
						<h3>Admin DPN</h3>
					</div>
				</div>
			</div>
			<div class="col-xl-8">
				<div class="card">
					<div class="card-body pt-3">
						<ul class="nav nav-tabs nav-tabs-bordered">
							<li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
							<li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button></li>
							<li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button></li>
						</ul>
						<div class="tab-content pt-2">
							<div class="tab-pane fade show active profile-overview" id="profile-overview">
								<h5 class="card-title">About</h5>
								<p class="small fst-italic">
									<?= $user['about'] ?>
								</p>
								<h5 class="card-title">Profile Details</h5>
								<div class="row">
									<div class="col-lg-3 col-md-4 label">Full Name</div>
									<div class="col-lg-9 col-md-8"><?= $user['name']; ?></div>
								</div>
								<div class="row">
									<div class="col-lg-3 col-md-4 label">Organization</div>
									<div class="col-lg-9 col-md-8"><?= $user['organization'] ?></div>
								</div>
								<div class="row">
									<div class="col-lg-3 col-md-4 label">Job</div>
									<div class="col-lg-9 col-md-8"><?= $user['job'] ?></div>
								</div>
							</div>
							<div class="tab-pane fade profile-edit pt-3" id="profile-edit">
								<form action="<?= base_url('user/edit'); ?>" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="id" value="<?= $user['id']; ?>">
									<div class="row mb-3">
										<label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
										<div class="col-md-8 col-lg-9">
											<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Profile" />
											<div class="pt-2">
												<a href="#" class="btn btn-sm" title="Upload new profile image" style="background-color: #242790; color: white"><i class="bi bi-upload"></i></a>
												<a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>

											</div>
										</div>
									</div>
									<div class="row mb-3">
										<label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
										<div class="col-md-8 col-lg-9">
											<input name="name" type="text" class="form-control" id="name" value="<?= $user['name']; ?>" required />
											<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="row mb-3">
										<label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
										<div class="col-md-8 col-lg-9">
											<textarea required name="about" class="form-control" id="about" style="height: 100px"><?= $user['about'] ?></textarea>
										</div>
									</div>
									<div class="row mb-3">
										<label for="organization" class="col-md-4 col-lg-3 col-form-label">Organization</label>
										<div class="col-md-8 col-lg-9"><input required name="organization" type="text" class="form-control" id="organization" value="<?= $user['organization'] ?>" /></div>
									</div>
									<div class="row mb-3">
										<label for="job" class="col-md-4 col-lg-3 col-form-label">Job</label>
										<div class="col-md-8 col-lg-9"><input required name="job" type="text" class="form-control" id="job" value="<?= $user['job'] ?>" /></div>
									</div>

									<div class="text-center"><button type="submit" class="btn" style="background-color: #242790; color: white">Save Changes</button></div>
								</form>
							</div>

							<div class="tab-pane fade pt-3" id="profile-change-password">
								<form action="<?= base_url('user/changepassword'); ?>" method="POST">
									<div class="row mb-3">
										<label for="current_password" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
										<div class="col-md-8 col-lg-9">
											<input name="current_password" type="password" class="form-control" id="current_password" name="current_password">
											<?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="row mb-3">
										<label for="new_password1" class="col-md-4 col-lg-3 col-form-label">New Password</label>
										<div class="col-md-8 col-lg-9">
											<input name="new_password1" type="password" class="form-control" id="new_password1">
											<?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="row mb-3">
										<label for="new_password2" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
										<div class="col-md-8 col-lg-9">
											<input type="password" class="form-control" id="new_password2" name="new_password2">
											<?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>

										</div>
									</div>
									<div class="text-center">
										<button type="submit" class="btn" style="background-color: #242790; color: white">Change Password</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
