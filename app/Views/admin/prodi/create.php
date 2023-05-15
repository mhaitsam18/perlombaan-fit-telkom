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
                <h4 class="card-title">Form Data Prodi</h4>
                <form action="/admin/prodi/" method="post" id="form" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="row" id="">
                        <div class="col-md-6">
                            <!-- <h2>Data prodi</h2> -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Program Studi</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" id="nama" value="<?= old('nama') ?>">
                                <div id="nama_feedback" class="invalid-feedback">
                                    <?= $validation->getError('nama') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kode" class="form-label">Kode Program Studi</label>
                                <input type="text" class="form-control <?= ($validation->hasError('kode')) ? 'is-invalid' : '' ?>" name="kode" id="kode" value="<?= old('kode') ?>">
                                <div id="kode_feedback" class="invalid-feedback">
                                    <?= $validation->getError('kode') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="singkatan" class="form-label">Singkatan</label>
                                <input type="text" class="form-control <?= ($validation->hasError('singkatan')) ? 'is-invalid' : '' ?>" name="singkatan" id="singkatan" value="<?= old('singkatan') ?>">
                                <div id="singkatan_feedback" class="invalid-feedback">
                                    <?= $validation->getError('singkatan') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea id="maxlength-textarea" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : '' ?>" maxlength="150" rows="8" name="keterangan"><?= old('keterangan') ?></textarea>
                                <div id="keterangan_feedback" class="invalid-feedback">
                                    <?= $validation->getError('keterangan') ?>
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