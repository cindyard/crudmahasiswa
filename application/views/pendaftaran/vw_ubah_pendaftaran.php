<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">
		<?= $judul ?>
	</h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Ubah Data Dosen
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?= $pendaftaran['id'] ?>" id="id" class="form-control">
						<div class="form-group mb-2 ">
							<label for="nama">Nama</label>
							<input type="text" name="nama" value="<?= $pendaftaran['nama'] ?>" id="nama" class="form-control" placeholder="Nama Dosen">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?= $pendaftaran['email'] ?>">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="password">password</label>
							<input type="password" name="password" id="password" class="form-control" value="<?= $pendaftaran['password'] ?>" placeholder="password">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="tanggal_lahir">tanggal_lahir</label>
							<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="tanggal_lahir" value="<?= $pendaftaran['tanggal_lahir']?>">
							<?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="jenis_kelamin">Jenis Kelamin</label>
							<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
								<option value="<?= $dosen['jenis_kelamin'] ?>">
									<?= $dosen['jenis_kelamin'] ?>
								</option>
								<option value="Laki-Laki" <?php if ($dosen['jenis_kelamin'] == "Laki-laki") ?>>Laki
									Laki</option>
								<option value="Perempuan" <?php if ($dosen['jenis_kelamin'] == "Perempuan") ?>>
									Perempuan</option>
							</select>
							<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<a href="<?= base_url('dosen') ?>" class="btn mt-2 btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Ubah dosen</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>