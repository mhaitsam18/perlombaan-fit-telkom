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
    <div class="col-md-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Ubah data prodi</h6>
                </div>
                <form action="/admin/prodi/<?= $prodi['id'] ?>" method="post" class="forms-sample" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" value="<?= $prodi['id'] ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Program Studi</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" id="nama" value="<?= old('nama', $prodi['nama']) ?>">
                        <div id="nama_feedback" class="invalid-feedback">
                            <?= $validation->getError('nama') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Program Studi</label>
                        <input type="text" class="form-control <?= ($validation->hasError('kode')) ? 'is-invalid' : '' ?>" name="kode" id="kode" value="<?= old('kode', $prodi['kode']) ?>">
                        <div id="kode_feedback" class="invalid-feedback">
                            <?= $validation->getError('kode') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="singkatan" class="form-label">Singkatan</label>
                        <input type="text" class="form-control <?= ($validation->hasError('singkatan')) ? 'is-invalid' : '' ?>" name="singkatan" id="singkatan" value="<?= old('singkatan', $prodi['singkatan']) ?>">

                        <div id="singkatan_feedback" class="invalid-feedback">
                            <?= $validation->getError('singkatan') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea id="maxlength-textarea" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : '' ?>" maxlength="150" rows="8" name="keterangan"><?= old('keterangan', $prodi['keterangan']) ?></textarea>
                        <div id="keterangan_feedback" class="invalid-feedback">
                            <?= $validation->getError('keterangan') ?>
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