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
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio nisi, accusamus veniam dignissimos iusto expedita recusandae pariatur quidem quae ipsum minus dicta.
									Accusantium quos odit tempore? Placeat pariatur tempore quae.
								</p>
								<h5 class="card-title">Profile Details</h5>
								<div class="row">
									<div class="col-lg-3 col-md-4 label">Full Name</div>
									<div class="col-lg-9 col-md-8"><?= $user['name']; ?></div>
								</div>
								<div class="row">
									<div class="col-lg-3 col-md-4 label">Organisation</div>
									<div class="col-lg-9 col-md-8">DPN</div>
								</div>
								<div class="row">
									<div class="col-lg-3 col-md-4 label">Job</div>
									<div class="col-lg-9 col-md-8">Developing and Engineering Manager</div>
								</div>
							</div>
							<div class="tab-pane fade profile-edit pt-3" id="profile-edit">
								<form action="<?= base_url('user/edit'); ?>" method="POST" enctype="multipart/form-data">
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
											<input name="name" type="text" class="form-control" id="name" value="<?= $user['name']; ?>" />
											<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="row mb-3">
										<label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
										<div class="col-md-8 col-lg-9">
											<textarea name="about" class="form-control" id="about" style="height: 100px">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem quam quia, deleniti porro quasi eaque sed iusto. Blanditiis quidem facere autem vel repudiandae et? Corrupti doloremque labore consectetur dolorum laudantium!</textarea>
										</div>
									</div>
									<div class="row mb-3">
										<label for="company" class="col-md-4 col-lg-3 col-form-label">Organisation</label>
										<div class="col-md-8 col-lg-9"><input name="company" type="text" class="form-control" id="company" value="DPN" /></div>
									</div>
									<div class="row mb-3">
										<label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
										<div class="col-md-8 col-lg-9"><input name="job" type="text" class="form-control" id="Job" value="Developing and Engineering Manager" /></div>
									</div>

									<div class="text-center"><button type="submit" class="btn" style="background-color: #242790; color: white">Save Changes</button></div>
								</form>
							</div>

							<div class="tab-pane fade pt-3" id="profile-change-password">
								<form action="<?= base_url('user/changepassword'); ?>" method="POST">
									<div class="row mb-3">
										<label for="current_password" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
										<div class="col-md-8 col-lg-9">
											<input name="password" type="password" class="form-control" id="current_password" name="current_password">
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
