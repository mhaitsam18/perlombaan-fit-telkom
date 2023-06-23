<?= $this->extend('layouts/admin') ?>


<?= $this->section('style') ?>
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/assets-nobleui/vendors/jquery-steps/jquery.steps.css">
<!-- End plugin css for this page -->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0"><?= $title ?></h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">

    </div>
</div>

<?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif ?>


<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Data Mahasiswa</h4>
                <form action="/admin/mahasiswa/" method="post" id="form" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="row" id="">
                        <!-- <div class="col-md-6">
                            <h2>Autentikasi</h2>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ?>" name="fullname" id="fullname" value="<?= old('fullname') ?>">
                                <div id="fullname_feedback" class="invalid-feedback">
                                    <?= $validation->getError('fullname') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" name="username" id="username" value="<?= old('username') ?>">
                                <div id="username_feedback" class="invalid-feedback">
                                    <?= $validation->getError('username') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Handphone:</label>
                                <input class="form-control <?= ($validation->hasError('no_ponsel')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" data-inputmask-alias="(+62) 899-9999-99999" name="no_ponsel" id="no_ponsel" value="<?= old('no_ponsel') ?>" />
                                <div id="no_ponsel_feedback" class="invalid-feedback">
                                    <?= $validation->getError('no_ponsel') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" data-inputmask="'alias': 'email'" name="email" id="email" value="<?= old('email') ?>" />
                                <div id="email_feedback" class="invalid-feedback">
                                    <?= $validation->getError('email') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kata Sandi:</label>
                                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" name="password" id="password" />
                                <div id="password_feedback" class="invalid-feedback">
                                    <?= $validation->getError('password') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Konfirmasi Kata Sandi:</label>
                                <input type="password" class="form-control <?= ($validation->hasError('pass_confirm')) ? 'is-invalid' : '' ?>" name="pass_confirm" id="pass_confirm" />
                                <div id="pass_confirm_feedback" class="invalid-feedback">
                                    <?= $validation->getError('pass_confirm') ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Foto Profil:</label>
                                <input type="file" class="form-control <?= ($validation->hasError('user_image')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" name="user_image" id="user_image" value="<?= old('user_image') ?>" />
                                <div id="user_image_feedback" class="invalid-feedback">
                                    <?= $validation->getError('user_image') ?>
                                </div>
                            </div>
                        </div> -->

                        <div class="col-md-6">
                            <!-- <h2>Data mahasiswa</h2> -->
                            <div class="mb-3">
                                <label for="email_telkom" class="form-label">Email Telkom</label>
                                <input type="text" class="form-control <?= ($validation->hasError('email_telkom')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('email_telkom')) ? 'is-invalid' : '' ?>" name="email_telkom" id="email_telkom" value="<?= old('email_telkom') ?>">
                                <div id="email_telkom_feedback" class="invalid-feedback">
                                    <?= $validation->getError('email_telkom') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" id="nama" value="<?= old('nama') ?>">
                                <div id="nama_feedback" class="invalid-feedback">
                                    <?= $validation->getError('nama') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nim')) ? 'is-invalid' : '' ?>" name="nim" id="nim" value="<?= old('nim') ?>">
                                <div id="nim_feedback" class="invalid-feedback">
                                    <?= $validation->getError('nim') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : '' ?>" name="kelas" id="kelas" value="<?= old('kelas') ?>">
                                <div id="kelas_feedback" class="invalid-feedback">
                                    <?= $validation->getError('kelas') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Formal</label>
                                <div class="col-sm-4 m-1">
                                    <img src="/assets/img/mahasiswa/user.png" class="img-thumbnail img-preview">
                                </div>
                                <input type="file" class="form-control img-input <?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" name="foto" id="foto" onchange="previewImg()">
                                <div id="foto_feedback" class="invalid-feedback">
                                    <?= $validation->getError('foto') ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Plugin js for this page -->
<script src="/assets-nobleui/vendors/jquery-steps/jquery.steps.min.js"></script>
<!-- End plugin js for this page -->

<script src="/assets-nobleui/js/wizard.js"></script>

<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(foto.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
<script>
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });
</script>

</script>
<?= $this->endSection() ?>