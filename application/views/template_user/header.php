<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>

	<link rel="icon" href="<?= base_url('assets/assets_user/img/logo.png'); ?>" type="image/x-icon" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!--  custom css file  -->
	<link rel="stylesheet" href="<?= base_url('assets/assets_user/css/user.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?= base_url('assets/assets_user/fonts/fontawesome/css/all.css'); ?>" />
</head>

<body>

	<!-- Navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg fixed-top">
		<div class="container">
			<a class="navbar-brand " href="#"> <a class="navbar-brand" href="#"><img src="<?= base_url('assets/assets_user/') ?>/img/logo.png" style="width: 85px; height: 45px" alt="" /></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-right" id="navbarText">
					<ul class="nav nav-tabs nav-tabs-bordered ms-auto mb-2 mb-lg-0">
						<li class="nav-item ms-3" data-bs-toggle="tab">
							<button class="nav-link active" data-bs-toggle="tab" href="#home">Beranda</button>
						</li>
						<li class="nav-item ms-3" data-bs-toggle="tab">
							<button class="nav-link " href="#program">Program</button>
						</li>
						<li class="nav-item ms-3" data-bs-toggle="tab">
							<button class="nav-link " href="#artikel">Artikel</button>
						</li>
						<li class="nav-item ms-3" data-bs-toggle="tab">
							<button class="nav-link " href="#about">Tentang Kami</button>
						</li>
					</ul>
				</div>
		</div>
	</nav>
	<!-- end Navbar -->
