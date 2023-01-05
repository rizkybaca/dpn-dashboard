<!-- panggil jquery -->
<script type="text/javascript" src="<?= base_url('assets/') ?>js/jQuery 3.6.1.min.js"></script>

<!-- datatable -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
	src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.js">
</script>

<!-- panggil ckeditor.js -->
<script type="text/javascript" src="<?= base_url('assets/') ?>ckeditor/config.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="<?= base_url('assets/') ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?= base_url('assets/') ?>ckeditor/adapters/jquery.js"></script>



<!-- setup selector -->

<script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/main.js"></script>
<script>
	$(document).ready(function () {

		$('#aaa').DataTable();

		$('.custom-file-input').on('change', function () {
			let fileName = $(this).val().split('\\').pop();
			$(this).next('.custom-file-label').addClass("selected").html(fileName);
		});


		// $('.form-check-input').on('click', function() {
		// 	const menuId = $(this).data('menu');
		// 	const roleId = $(this).data('role');

		// 	$.ajax({
		// 		url: "<?= base_url('admin/changeaccess'); ?>",
		// 		type: 'post',
		// 		data: {
		// 			menuId: menuId,
		// 			roleId: roleId
		// 		},
		// 		success: function() {
		// 			document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
		// 		}
		// 	});
		// });

		$('.ini-check').on('click', function () {
			const categoryId = $(this).data('kategori');
			const articleId = $(this).data('artikel');

			$.ajax({
				url: "<?= base_url('artikel/changearticlecategory'); ?>",
				type: 'post',
				data: {
					categoryId: categoryId,
					articleId: articleId
				},
				success: function () {
					document.location.href = "<?= base_url('artikel/articleCategory/'); ?>" +
						articleId;
				}
			});
		});

		$('#check-path').on('click', function () {
			const pathId = $(this).data('path');
			const programId = $(this).data('program');
			var cta_link = $("#cta_link").val();

			$.ajax({
				url: "<?= base_url('program/cp') ?>",
				type: 'post',
				data: {
					pathId: pathId,
					programId: programId,
					cta_link: cta_link
				},
				success: function () {
					document.location.href = "<?= base_url('program/program_path/'); ?>" +
						programId;
				}
			});
		});

		$('#check-benefit').on('click', function () {
			const benefitId = $(this).data('benefit');
			const programId = $(this).data('program');

			$.ajax({
				url: "<?= base_url('program/pb') ?>",
				type: 'post',
				data: {
					benefitId: benefitId,
					programId: programId
				},
				success: function () {
					document.location.href = "<?= base_url('program/program_benefit/'); ?>" +
						programId;
				}
			});
		});

		$('.cek-tipe-nih').on('click', function () {

			var programTypeId = $(this).val();
			$.ajax({
				url: "<?= base_url('program/pt') ?>",
				type: 'post',
				data: {
					programTypeId: programTypeId
				},
				success: function (respond) {
					$("#fill_path").html(respond);
				}
			});

			$.ajax({
				url: "<?= base_url('program/benefit_program') ?>",
				type: 'post',
				data: {
					programTypeId: programTypeId
				},
				success: function (respond) {
					$("#fill_benefit").html(respond);
				}
			});

		});

		$('.cek-edit-tipe-nih').on('click', function () {
			var programTypeId = $(this).val();
			const programId = $(this).data('program');
			$.ajax({
				url: "<?= base_url('program/checkeditprogrampath') ?>",
				type: 'post',
				data: {
					programTypeId: programTypeId,
					programId: programId
				},
				success: function (respond) {
					$("#fill_path_edit").html(respond);
				}
			});
			$.ajax({
				url: "<?= base_url('program/checkeditprogrambenefit') ?>",
				type: 'post',
				data: {
					programTypeId: programTypeId,
					programId: programId
				},
				success: function (respond) {
					$("#fill_benefit_edit").html(respond);
				}
			});
		});



	});

</script>
</body>

</html>
