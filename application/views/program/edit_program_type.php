<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul">Edit Tipe Program</h1>
		<p class="keterangan-judul">Anda dapat Mengubah Tipe Program</p>
	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-8">
			<div class="card">
				<div class="card-body">
					<?= $this->session->flashdata('message'); ?>

					<form method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id_program_type" value="<?= $program_type['id_program_type'] ?>">
						<div class="form-group">
							<label for="program_type_name" class="mb-3 mt-3">Nama Tipe Program</label>
							<input type="text" id="program_type_name" name="program_type_name" class="form-control" value="<?= $program_type['program_type_name'] ?>" required>
							<?= form_error('program_type_name', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>

						<button type="submit" class="btn mt-5" style="background-color: #242790; color: white">Simpan Tipe Program</button>
						<a href="<?= base_url('program/program_type') ?>" class="btn btn-danger mt-5">Batal</a>
					</form>
				</div>

			</div>
		</div>
	</section>
</main>
