<!-- topbar -->
<header id="header" class="header fixed-top d-flex align-items-center">
	<div class="d-flex align-items-center justify-content-between"><img class="logo-nav toggle-sidebar-btn" src="<?= base_url('assets/'); ?>img/logo.png" alt="" /></div>

	<nav class="header-nav ms-auto">
		<ul class="d-flex align-items-center">
			<li class="nav-item dropdown pe-3">
				<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
					<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="Profile" class="rounded-circle" /> <span class="d-none d-md-block dropdown-toggle ps-2">Halo, <?= $user['name']; ?></span>
				</a>
				<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
					<li>
						<a class="dropdown-item d-flex align-items-center" href="<?= base_url('user'); ?>"> <i class="bi bi-person"></i> <span>My Profile</span> </a>
					</li>

					<li>
						<hr class="dropdown-divider" />
					</li>
					<li>
						<hr class="dropdown-divider" />
					</li>
					<li>
						<a class="dropdown-item d-flex align-items-center" href="<?= base_url('auth/logout'); ?>"> <i class="bi bi-box-arrow-right"></i> <span>Logout</span> </a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</header>
<!-- end of topbar -->
