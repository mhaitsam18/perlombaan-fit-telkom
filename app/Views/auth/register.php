<?= $this->extend('layouts/home') ?>


<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<!-- <div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Log In</h3>
            <ul>
                <li>
                    <a href="/">Beranda</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>Log In</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="/assets-techex-demo/images/shape/inner-shape.png" alt="Images">
    </div>
</div> -->


<div class="user-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="user-img">
                    <img src="/assets-techex-demo/images/beranda_logod3.png" alt="Images" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="user-form">
                    <div class="contact-form">
                        <h2><?= lang('Auth.register') ?></h2>
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="role" value="mahasiswa">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fullname"><?= lang('Auth.fullname') ?></label>
                                        <input type="text" class="form-control <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" name="fullname" aria-describedby="fullnameHelp" placeholder="<?= lang('Auth.fullname') ?>" value="<?= old('fullname') ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="username"><?= lang('Auth.username') ?></label>
                                        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email"><?= lang('Auth.email') ?></label>
                                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                        <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password"><?= lang('Auth.password') ?></label>
                                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-12 ">
                                    <button type="submit" class="default-btn btn-bg-two">
                                        Daftar
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p class="account-desc">
                                        <?= lang('Auth.alreadyRegistered') ?>
                                        <a href="<?= url_to('login') ?>">Masuk Sekarang</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>