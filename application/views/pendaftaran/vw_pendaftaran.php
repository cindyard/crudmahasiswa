<div class="container-fluid">
	<h1 class=" h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row">
		<div class="col-md-6">
			<a href="<?= base_url('Pendaftaran/tambah') ?>" class="btn btn-info mb-2">Tambah pendaftaran</a>
		</div>
		<div class="col-md-12">
			<?= $this->session->flashdata('message'); ?>
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>jenis_kelamin</td>
						<td>Email</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
				<?php $i = 1;?>
				<?php foreach ($pendaftaran as $us ) :?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $us['nama']?></td>
						<td><?= $us['jenis_kelamin']?></td>
						<td><?= $us['email']?></td>
						<td>
							<a href="<?= base_url('Pendaftaran/hapus/') . $us['id'] ?>" class="btn btn-danger">Hapus</a>
							<a href="<?= base_url('Pendaftaran/edit/') . $us['id'] ?>" class="btn btn-warning">Edit</a>
					
						</td>
					</tr>
					<?php $i++ ?>
					<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
