<main id="main" class="main">
	<div class="pagetitle">
		<h1 class="judul"><?= $title ?></h1>
		<p class="keterangan-judul">Anda dapat menambah, mengubah dan menghapus Jalur untuk digunakan saat mengelola Program</p>
		<?= $this->session->flashdata('message'); ?>

		<a href="<?= base_url('program/create_path') ?>"><span>Tambah Jalur Baru Cepat</span> </a>

	</div>

	<section class="section dashboard mt-4">
		<div class="card-artikel col-sm-11">
			<div class="card">
				<div class="card-header font-weight-bold text-gray-100" style="background-color: #eeeef0"><?= $title ?></div>

				<div class="row mt-2">
					<div class="col-md-12 text-center">
						<div class="table-responsive m-4">
							<table class="table table-bordered">
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Tipe Program</th>
									<th class="text-center">Nama Jalur</th>
									<th class="text-center">Deskripsi</th>
									<th class="text-center">Icon</th>
									<th class="text-center">Edit</th>
									<th class="text-center">Hapus</th>
								</tr>
								<?php $i = 1;
								foreach ($jalur as $j) : ?>
									<tr>
										<td><?= $i++; ?></td>
										<td><?= $j['program_type_name'] ?></td>
										<td><?= $j['path_name'] ?></td>
										<td><?= $j['path_description'] ?></td>
										<td><?= $j['path_icon'] ?></td>
										<td>
											<center>
												<a class="mb-2 mt-2 btn btn-sm" style="background-color: #242790; color: white" href="<?= base_url('program/edit_path/') . $j['id_path'] ?>"> Edit </a>
											</center>
										</td>
										<td>
											<center>
												<a onclick="return confirm('Yakin Hapus?')" class="mb-2 mt-2 btn btn-sm btn-danger" href="<?= base_url('program/delete_path/') . $j['id_path'] ?>"> Hapus </a>
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
