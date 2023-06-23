<?= $this->extend('layouts/admin') ?>


<?= $this->section('style') ?>
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/assets-nobleui/vendors/jquery-steps/jquery.steps.css">
<!-- End plugin css for this page -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/assets-nobleui/vendors/select2/select2.min.css">
<link rel="stylesheet" href="/assets-nobleui/vendors/jquery-tags-input/jquery.tagsinput.min.css">
<link rel="stylesheet" href="/assets-nobleui/vendors/dropzone/dropzone.min.css">
<link rel="stylesheet" href="/assets-nobleui/vendors/dropify/dist/dropify.min.css">
<link rel="stylesheet" href="/assets-nobleui/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="/assets-nobleui/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="/assets-nobleui/vendors/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/assets-nobleui/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">
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

<?php if (session()->getFlashdata('errorss')) : ?>
    <div class="alert alert-danger">
        <?php $data = session()->getFlashdata('errorss') ?>
        <?= dd($data) ?>
    </div>
<?php endif; ?>

<div class="row">
    <!-- <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Ubah data Autentikasi / Akun</h6>
                    <?php if (session()->has('validation')) : ?>
                        <div class="alert alert-danger">
                            <?php
                            $validation = session('validation');
                            foreach ($validation->getErrors() as $field => $error) {
                                echo $error . '<br>';
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
                <form action="/user" method="post" class="forms-sample">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="put">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ?>" name="fullname" id="fullname" value="<?= old('fullname', $user['fullname']) ?>">
                        <div id="fullname_feedback" class="invalid-feedback">
                            <?= $validation->getError('fullname') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" name="username" id="username" value="<?= old('username', $user['username']) ?>">
                        <div id="username_feedback" class="invalid-feedback">
                            <?= $validation->getError('username') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor Handphone:</label>
                        <input class="form-control <?= ($validation->hasError('no_ponsel')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" data-inputmask-alias="(+62) 899-9999-99999" name="no_ponsel" id="no_ponsel" value="<?= old('no_ponsel', $user['no_ponsel']) ?>" />
                        <div id="no_ponsel_feedback" class="invalid-feedback">
                            <?= $validation->getError('no_ponsel') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" data-inputmask="'alias': 'email'" name="email" id="email" value="<?= old('email', $user['email']) ?>" />
                        <div id="email_feedback" class="invalid-feedback">
                            <?= $validation->getError('email') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto Profil:</label>
                        <input type="file" class="form-control <?= ($validation->hasError('user_image')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" name="user_image" id="user_image" value="<?= old('user_image', $user['user_image']) ?>" />
                        <div id="user_image_feedback" class="invalid-feedback">
                            <?= $validation->getError('user_image') ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div> -->
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Ubah data mahasiswa</h6>
                </div>
                <form action="/admin/mahasiswa/<?= $mahasiswa['id'] ?>" method="post" class="forms-sample" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="fotoLama" value="<?= $mahasiswa['foto'] ?>">

                    <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">

                    <div class="mb-3">
                        <label for="email_telkom" class="form-label">Email Telkom</label>
                        <input type="text" class="form-control <?= ($validation->hasError('email_telkom')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('email_telkom')) ? 'is-invalid' : '' ?>" name="email_telkom" id="email_telkom" value="<?= old('email_telkom', $mahasiswa['email_telkom']) ?>">
                        <div id="email_telkom_feedback" class="invalid-feedback">
                            <?= $validation->getError('email_telkom') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" id="nama" value="<?= old('nama', $mahasiswa['nama']) ?>">
                        <div id="nama_feedback" class="invalid-feedback">
                            <?= $validation->getError('nama') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nim')) ? 'is-invalid' : '' ?>" name="nim" id="nim" value="<?= old('nim', $mahasiswa['nim']) ?>">
                        <div id="nim_feedback" class="invalid-feedback">
                            <?= $validation->getError('nim') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : '' ?>" name="kelas" id="kelas" value="<?= old('kelas', $mahasiswa['kelas']) ?>">

                        <div id="kelas_feedback" class="invalid-feedback">
                            <?= $validation->getError('kelas') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Formal</label>
                        <div class="col-sm-4 m-1">
                            <img src="/assets/img/<?= $mahasiswa['foto'] ?>" class="img-thumbnail img-preview">
                        </div>
                        <input type="file" class="form-control img-input <?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" name="foto" id="foto" value="<?= old('foto', $mahasiswa['foto']) ?>" onchange="previewImg()">
                        <div id="foto_feedback" class="invalid-feedback">
                            <?= $validation->getError('foto') ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div> <!-- row -->


<?= $this->endSection() ?>

<?= $this->section('script') ?>


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
<!-- Plugin js for this page -->
<script src="/assets-nobleui/vendors/jquery-steps/jquery.steps.min.js"></script>
<!-- End plugin js for this page -->

<!-- Plugin js for this page -->
<script src="/assets-nobleui/vendors/jquery-validation/jquery.validate.min.js"></script>
<script src="/assets-nobleui/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="/assets-nobleui/vendors/inputmask/jquery.inputmask.min.js"></script>
<script src="/assets-nobleui/vendors/select2/select2.min.js"></script>
<script src="/assets-nobleui/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="/assets-nobleui/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script src="/assets-nobleui/vendors/dropzone/dropzone.min.js"></script>
<script src="/assets-nobleui/vendors/dropify/dist/dropify.min.js"></script>
<script src="/assets-nobleui/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="/assets-nobleui/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="/assets-nobleui/vendors/moment/moment.min.js"></script>
<script src="/assets-nobleui/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js"></script>
<!-- End plugin js for this page -->

<!-- Custom js for this page -->
<script src="/assets-nobleui/js/form-validation.js"></script>
<script src="/assets-nobleui/js/bootstrap-maxlength.js"></script>
<script src="/assets-nobleui/js/inputmask.js"></script>
<script src="/assets-nobleui/js/select2.js"></script>
<script src="/assets-nobleui/js/typeahead.js"></script>
<script src="/assets-nobleui/js/tags-input.js"></script>
<script src="/assets-nobleui/js/dropzone.js"></script>
<script src="/assets-nobleui/js/dropify.js"></script>
<script src="/assets-nobleui/js/bootstrap-colorpicker.js"></script>
<script src="/assets-nobleui/js/datepicker.js"></script>
<script src="/assets-nobleui/js/timepicker.js"></script>
<!-- End custom js for this page -->


<script src="/assets-nobleui/js/wizard.js"></script>
<?= $this->endSection() ?>