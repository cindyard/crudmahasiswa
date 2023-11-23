<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Tambah Data Pendaftaran
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group mb-2 ">
							<label for="nama">Nama</label>
							<input type="text" name="nama" value="<?= set_value('nama') ?>" id="nama" class="form-control" placeholder="Nama ">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="password">password</label>
							<input type="password" name="password" id="password" class="form-control" value="<?= set_value('password') ?>" placeholder="password">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="tanggal_lahir">tanggal_lahir</label>
							<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
							<?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
						<label for="jenis_kelamin">Jenis Kelamin</label>
							<select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" id="jk" class="form-control">
								<option value="">Jenis Kelamin</option>
								<option value="Laki-Laki">Laki Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
						</div>

						<a href="<?= base_url('Dosen') ?>" class="btn mt-2 btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Tambah Prodi</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
