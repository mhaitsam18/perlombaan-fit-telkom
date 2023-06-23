<?= $this->extend('layouts/admin') ?>


<?= $this->section('style') ?>
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/assets-nobleui/vendors/jquery-steps/jquery.steps.css">
<!-- End plugin css for this page -->



<!-- Plugin css for this page -->
<link rel="stylesheet" href="/assets-nobleui/vendors/simplemde/simplemde.min.css">
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
                    <h6 class="card-title mb-0">Ubah data lomba</h6>
                </div>
                <form action="/admin/lomba/<?= $lomba['id'] ?>" method="post" class="forms-sample" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="posterLama" value="<?= $lomba['poster'] ?>">

                    <input type="hidden" name="id" value="<?= $lomba['id'] ?>">

                    <div class="mb-3">
                        <label for="Title" class="form-label">Judul Lomba</label>
                        <input type="text" class="form-control <?= ($validation->hasError('Title')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('Title')) ? 'is-invalid' : '' ?>" name="Title" id="Title" value="<?= old('Title', $lomba['Title']) ?>">
                        <div id="Title_feedback" class="invalid-feedback">
                            <?= $validation->getError('Title') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control <?= ($validation->hasError('slug')) ? 'is-invalid' : '' ?>" name="slug" id="slug" value="<?= old('slug', $lomba['slug']) ?>">
                        <div id="slug_feedback" class="invalid-feedback">
                            <?= $validation->getError('slug') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link Official</label>
                        <input type="text" class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : '' ?>" name="link" id="link" value="<?= old('link', $lomba['link']) ?>">
                        <div id="link_feedback" class="invalid-feedback">
                            <?= $validation->getError('link') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Penyelenggara" class="form-label">Penyelenggara</label>
                        <input type="text" class="form-control <?= ($validation->hasError('Penyelenggara')) ? 'is-invalid' : '' ?>" name="Penyelenggara" id="Penyelenggara" value="<?= old('Penyelenggara', $lomba['Penyelenggara']) ?>">
                        <div id="Penyelenggara_feedback" class="invalid-feedback">
                            <?= $validation->getError('Penyelenggara') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Deadline" class="form-label">Deadline</label>
                        <input type="date" class="form-control <?= ($validation->hasError('Deadline')) ? 'is-invalid' : '' ?>" name="Deadline" id="Deadline" value="<?= old('Deadline', $lomba['Deadline']) ?>">
                        <div id="Deadline_feedback" class="invalid-feedback">
                            <?= $validation->getError('Deadline') ?>
                        </div>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="counting_day" class="form-label">counting_day</label>
                        <input type="text" class="form-control <?= ($validation->hasError('counting_day')) ? 'is-invalid' : '' ?>" name="counting_day" id="counting_day" value="<?= old('counting_day', $lomba['counting_day']) ?>">
                        <div id="counting_day_feedback" class="invalid-feedback">
                            <?= $validation->getError('counting_day') ?>
                        </div>
                    </div> -->
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster</label>
                        <div class="col-sm-4 m-1">
                            <img src="/assets/img/<?= $lomba['poster'] ?>" class="img-thumbnail img-preview">
                        </div>
                        <input type="file" class="form-control img-input <?= ($validation->hasError('poster')) ? 'is-invalid' : '' ?>" name="poster" id="poster" value="<?= old('poster', $lomba['poster']) ?>" onchange="previewImg()">
                        <div id="poster_feedback" class="invalid-feedback">
                            <?= $validation->getError('poster') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="teks" class="form-label">Deskripsi</label>
                        <textarea id="tinymceExample" class="form-control <?= ($validation->hasError('teks')) ? 'is-invalid' : '' ?>" maxlength="150" rows="8" name="teks"><?= old('teks', $lomba['teks']) ?></textarea>
                        <div id="teks_feedback" class="invalid-feedback">
                            <?= $validation->getError('teks') ?>
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
<script src="/assets-nobleui/vendors/tinymce/tinymce.min.js"></script>
<script src="/assets-nobleui/vendors/simplemde/simplemde.min.js"></script>
<script src="/assets-nobleui/vendors/ace-builds/src-min/ace.js"></script>
<script src="/assets-nobleui/vendors/ace-builds/src-min/theme-chaos.js"></script>
<!-- End plugin js for this page -->

<!-- Custom js for this page -->
<script src="/assets-nobleui/js/tinymce.js"></script>
<script src="/assets-nobleui/js/simplemde.js"></script>
<script src="/assets-nobleui/js/ace.js"></script>
<!-- End custom js for this page -->

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
<script>
    function previewImg() {
        const poster = document.querySelector('#poster');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(poster.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
<?= $this->endSection() ?>