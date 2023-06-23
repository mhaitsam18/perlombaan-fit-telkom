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
                    <h6 class="card-title mb-0">Ubah data Dosen</h6>
                </div>
                <form action="/admin/dosen/<?= $dosen['id'] ?>" method="post" class="forms-sample" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="fotoLama" value="<?= $dosen['foto'] ?>">

                    <input type="hidden" name="id" value="<?= $dosen['id'] ?>">

                    <div class="mb-3">
                        <label for="email_telkom" class="form-label">Email Telkom</label>
                        <input type="text" class="form-control <?= ($validation->hasError('email_telkom')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('email_telkom')) ? 'is-invalid' : '' ?>" name="email_telkom" id="email_telkom" value="<?= old('email_telkom', $dosen['email_telkom']) ?>">
                        <div id="email_telkom_feedback" class="invalid-feedback">
                            <?= $validation->getError('email_telkom') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" id="nama" value="<?= old('nama', $dosen['nama']) ?>">
                        <div id="nama_feedback" class="invalid-feedback">
                            <?= $validation->getError('nama') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama_gelar" class="form-label">Nama dan Gelar</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama_gelar')) ? 'is-invalid' : '' ?>" name="nama_gelar" id="nama_gelar" value="<?= old('nama_gelar', $dosen['nama_gelar']) ?>">
                        <div id="nama_gelar_feedback" class="invalid-feedback">
                            <?= $validation->getError('nama_gelar') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : '' ?>" name="nip" id="nip" value="<?= old('nip', $dosen['nip']) ?>">
                        <div id="nip_feedback" class="invalid-feedback">
                            <?= $validation->getError('nip') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nidn" class="form-label">NIDN</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nidn')) ? 'is-invalid' : '' ?>" name="nidn" id="nidn" value="<?= old('nidn', $dosen['nidn']) ?>">
                        <div id="nidn_feedback" class="invalid-feedback">
                            <?= $validation->getError('nidn') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Dosen</label>
                        <input type="text" class="form-control <?= ($validation->hasError('kode')) ? 'is-invalid' : '' ?>" name="kode" id="kode" value="<?= old('kode', $dosen['kode']) ?>">
                        <div id="kode_feedback" class="invalid-feedback">
                            <?= $validation->getError('kode') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Nomor Kantor</label>
                        <input type="text" class="form-control <?= ($validation->hasError('telepon')) ? 'is-invalid' : '' ?>" name="telepon" id="telepon" value="<?= old('telepon', $dosen['telepon']) ?>">
                        <div id="telepon_feedback" class="invalid-feedback">
                            <?= $validation->getError('telepon') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Formal</label>
                        <div class="col-sm-4 m-1">
                            <img src="/assets/img/<?= $dosen['foto'] ?>" class="img-thumbnail img-preview">
                        </div>
                        <input type="file" class="form-control img-input <?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" name="foto" id="foto" value="<?= old('foto', $dosen['foto']) ?>" onchange="previewImg()">
                        <div id="foto_feedback" class="invalid-feedback">
                            <?= $validation->getError('foto') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea id="maxlength-textarea" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" maxlength="150" rows="8" name="alamat"><?= old('alamat', $dosen['alamat']) ?></textarea>
                        <div id="alamat_feedback" class="invalid-feedback">
                            <?= $validation->getError('alamat') ?>
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