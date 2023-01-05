<!-- Footer -->

<footer class="text-center text-lg-start  text-muted" style="background-color:  #012970;padding:40px;">
	<div class="container text-center text-md-start ">
		<!-- Grid row -->
		<div class="row mt-3">
			<!-- Grid column -->
			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-3">
				<!-- Content -->
				<h6 class="text-uppercase fw-bold mb-3">
					<img src="<?= base_url('assets/assets_user/img/logofooter.png') ?>" class="card-img-top" alt="..."
						style="width: 125px; height: 55px;" />
				</h6>
				<h5 class="text-white" style="font-size:18px; font-style:italic;">
					“Berkelana di Negeri Khatulistiwa Bagi Sesama”
				</h5>
				<p class="text-white" style="font-size:14px; margin-top:10px; ">Copyright. DPN. <?= date('Y') ?>. All
					right reserved</p>
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto  text-white mb-3">
				<!-- Links -->
				<h6 class="fw-bold mb-4">
					Informasi
				</h6>
				<p style="font-size:14px; "><i class="fa-solid fa-location-dot"> </i> &nbsp;&nbsp;Jln. Bahagia No. 2,
					Kel. Sudiang, Kec. Biringkanaya, Kota Makassar, Sulawesi Selatan, Indonesia.</p>
				<p style="font-size:14px; "><i class="fa-solid fa-phone"></i> &nbsp;&nbsp;0812-3421-3319</p>
				<p style="font-size:14px; "><i class="fa-solid fa-envelope"></i>
					&nbsp;&nbsp;halo@dedikasipemudanegeri.id</p>
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-1 col-lg-1 col-xl-1 mx-auto  text-white text-center mb-3">
				<!-- Links -->
				<h6 class="text-white fw-bold mb-4">
					Menu
				</h6>
				<p style="font-size:14px; ">
					<a href="<?= base_url("User_Program"); ?>" class="text-reset">Program</a>
				</p>
				<p style="font-size:14px; ">
					<a href="<?= base_url("User_Artikel"); ?>" class="text-reset">Artikel</a>
				</p>
				<p style="font-size:14px; ">
					<a href="<?= base_url("User_About"); ?>" class="text-reset">Tentang Kami</a>
				</p>
			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0  text-white text-center mb-3">
				<!-- Links -->
				<h6 class="text-white fw-bold mb-4">Ikuti Kami</h6>
				<a href="https://www.instagram.com/dedikasipemudanegeri/" class="text-white ">
					<p style="font-size:14px; "><i class="fa-brands fa-instagram"></i> Instagram</p>
				</a>
				<a href="https://www.linkedin.com/in/dedikasi-pemuda-negeri/" class="text-white ">
					<p style="font-size:14px; "><i class="fa-brands fa-linkedin"></i>Linkedin</p>
				</a>
				<a href="#" class="text-white ">
					<p style="font-size:14px; "><i class="fa-brands fa-youtube"></i> Youtube</p>
				</a>
			</div>
			<!-- Grid column -->
			<!-- Grid column -->
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-md-0  text-white text-center mb-3">
				<!-- Links -->
				<h6 class="fw-bold mb-4">Kritik dan Saran</h6>
				<a target="_blank"
					href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=halo@dedikasipemudanegeri.or.id"
					class="btn btn-warning text-center" style="width:131px;  border-radius: 10px;">Kirimkan</a>
			</div>
			<!-- Grid column -->
		</div>
		<!-- Grid row -->
	</div>
</footer>
<!-- Footer -->
</section>
<!-- end footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script>
	const menu = document.querySelector(".nav-tabs-bordered");
	menu.addEventListener('click', function (e) {
		const targetMenu = e.target;
		if (targetMenu.classList.contains('nav-link')) {
			const menuLinkActive = document.querySelector("nav-tabs-bordered .nav-link.active");
			if (menuLinkActive !== null && targetMenu.getAttribute('href') !== menuLinkActive.getAttribute(
					'href')) {
				menuLinkActive.classList.remove('active');
			}
			targetMenu.classList.add('active');
		}
	});

	// start countdown
	CountDownTimer("<?= date('Y-m-d H:i:s', strtotime($program['deadline'])) ?>", 'hari', 'jam', 'menit', 'detik');

	function CountDownTimer(dt, id1, id2, id3, id4) {
		var end = new Date(dt);

		var _second = 1000;
		var _minute = _second * 60;
		var _hour = _minute * 60;
		var _day = _hour * 24;
		var timer;

		function showRemaining() {
			var now = new Date();
			var distance = end - now;
			var distance1 = now - end;
			if (distance1 > 0) {
				clearInterval(timer);
				return;
			}
			var days = Math.floor(distance / _day);
			var hours = Math.floor((distance % _day) / _hour);
			var minutes = Math.floor((distance % _hour) / _minute);
			var seconds = Math.floor((distance % _minute) / _second);

			document.getElementById(id1).innerHTML = days + ' Hari';
			document.getElementById(id2).innerHTML = hours + ' Jam';
			document.getElementById(id3).innerHTML = minutes + ' Menit';
			document.getElementById(id4).innerHTML = seconds + ' Detik';
		}

		timer = setInterval(showRemaining, 1000);

	}
	// end countdown

</script>

</body>

</html>
