<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?= base_url('assets/') ?>images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4"> Buat Akun </h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/registrasi') ?>">
                            <div class="form-group">
                                <input type="text" name="nama" value="<?= set_value('nama'); ?>"
                                    class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" value="<?= set_value('email'); ?>"
                                    class="form-control form-control-user" id="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password1" value="<?= set_value('password1'); ?>"
                                    class="form-control form-control-user" id="password1"
                                    placeholder="Masukkan Password">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password2" value="<?= set_value('password2'); ?>"
                                    class="form-control form-control-user" id="password2" placeholder="Ulangi Password">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar Account
                            </button>
                        </form>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth') ?>">Sudah punya akun? Log In!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>