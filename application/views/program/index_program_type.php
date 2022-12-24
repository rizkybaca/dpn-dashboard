<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul">List Tipe Program</h1>
		<p class="keterangan-judul">Anda dapat menambah, mengubah dan menghapus Tipe Program untuk digunakan saat mengelola Program</p>
		<?= $this->session->flashdata('message'); ?>

		<a href="<?= base_url('program/create_program_type') ?>"><span>Tambah Tipe Program Baru Cepat</span> </a>

	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-11">
			<div class="card">
				<div class="card-header font-weight-bold text-gray-100" style="background-color: #eeeef0">List Tipe Program</div>

				<div class="row mt-2">
					<div class="col-md-12 text-center">
						<div class="table-responsive m-4">
							<table class="table table-bordered">
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Nama Tipe Program</th>
									<th class="text-center">Edit</th>
									<th class="text-center">Hapus</th>
								</tr>
								<?php $i = 1;
								foreach ($program_type as $p) : ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $p['program_type_name'] ?></td>
										<td>
											<center>
												<a class="mb-2 mt-2 btn btn-sm" style="background-color: #242790; color: white" href="<?= base_url('program/edit_program_type/') . $p['id_program_type'] ?>"> Edit </a>
											</center>
										</td>
										<td>
											<center>
												<a onclick="return confirm('Yakin Hapus?')" class="mb-2 mt-2 btn btn-sm btn-danger" href="<?= base_url('program/delete_program_type/') . $p['id_program_type'] ?>"> Hapus </a>
											</center>
										</td>
									</tr>
								<?php endforeach; ?>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
