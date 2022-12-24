<!-- panggil jquery -->
<script type="text/javascript" src="<?= base_url('assets/') ?>js/jQuery 3.6.1.min.js"></script>
<!-- panggil ckeditor.js -->
<script type="text/javascript" src="<?= base_url('assets/') ?>ckeditor/config.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="<?= base_url('assets/') ?>ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->
<script type="text/javascript" src="<?= base_url('assets/') ?>ckeditor/ckeditor.js"></script>

<script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/main.js"></script>
<script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});


	$('.form-check-input').on('click', function() {
		const menuId = $(this).data('menu');
		const roleId = $(this).data('role');

		$.ajax({
			url: "<?= base_url('admin/changeaccess'); ?>",
			type: 'post',
			data: {
				menuId: menuId,
				roleId: roleId
			},
			success: function() {
				document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
			}
		});
	});

	$('.ini-check').on('click', function() {
		const categoryId = $(this).data('kategori');
		const articleId = $(this).data('artikel');

		$.ajax({
			url: "<?= base_url('artikel/changearticlecategory'); ?>",
			type: 'post',
			data: {
				categoryId: categoryId,
				articleId: articleId
			},
			success: function() {
				document.location.href = "<?= base_url('artikel/articleCategory/'); ?>" + articleId;
			}
		});
	});
</script>
</body>

</html>
