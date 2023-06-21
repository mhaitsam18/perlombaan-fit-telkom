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
                        <h2><?= lang('Auth.loginTitle') ?></h2>
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        <form action="<?= url_to('login') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="row">
                                <?php if ($config->validFields === ['email']) : ?>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    </div>

                                <?php else : ?>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password"><?= lang('Auth.password') ?></label>
                                        <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($config->allowRemembering) : ?>
                                    <div class="col-lg-12 form-condition">
                                        <div class="agree-label">
                                            <input type="checkbox" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                            <label for="chb1">
                                                <?= lang('Auth.rememberMe') ?>

                                                <?php if ($config->activeResetter) : ?>
                                                    <a class="forget" href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>

                                <?php endif; ?>
                                <div class="col-lg-12 ">
                                    <button type="submit" class="default-btn btn-bg-two">
                                        Masuk Sekarang
                                    </button>
                                </div>
                                <?php if ($config->allowRegistration) : ?>
                                    <div class="col-12">
                                        <p class="account-desc">
                                            <?= lang('Auth.needAnAccount') ?>
                                            <a href="<?= url_to('register') ?>">Daftar Sekarang</a>
                                        </p>
                                    </div>
                                <?php endif; ?>

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