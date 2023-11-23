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
                        <div class="login-form">
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user" method="post" action="<?= base_url('Auth'); ?>">
                                <div class="form-group">
                                    <input type="text"class="form-control form-control-user" value="<?=
                                    set_value('email');?>" id="emaill" name="email" placeholder="Masukkan Alamat Email...">
                                    <?= form_error('email','< class="text-danger pl-3">','</small>');?>
                                    </div>
                                    <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                    value="<?= set_value('nama');?>" name="password" id="password"
                                    placeholder="Password">
                                    <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                                    </div>
                                    <button type="submit"class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a class="small" href="<?= base_url('auth/registrasi') ?>">Sign Up Here!</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>