<?= $this->extend('layouts/admin') ?>


<?= $this->section('style') ?>
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/assets-nobleui/vendors/jquery-steps/jquery.steps.css">
<!-- End plugin css for this page -->


<!-- Plugin css for this page -->
<link rel="stylesheet" href="/assets-nobleui/vendors/simplemde/simplemde.min.css">
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
                <h4 class="card-title">Form Data lomba</h4>
                <form action="/admin/lomba/" method="post" id="form" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="row" id="">
                        <div class="col-md-6">
                            <?php $no = 1; ?>
                            <div class=" mb-3">
                                <label for="Title" class="form-label">Judul Lomba</label>
                                <input onchange="myFunction()" type="text" class="form-control <?= ($validation->hasError('Title')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('Title')) ? 'is-invalid' : '' ?>" name="Title" id="Title" value="<?= old('Title') ?>">
                                <div id="Title_feedback" class="invalid-feedback">
                                    <?= $validation->getError('Title') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="cabang_lomba">Cabang Lomba</label>
                                <input list="browsers" class="form-control <?= ($validation->hasError('cabang_lomba')) ? 'is-invalid' : '' ?>" name="cabang_lomba" id="cabang_lomba" value="<?= old('cabang_lomba') ?>">
                                <div id="cabang_lomba_feedback" class="invalid-feedback">
                                    <?= $validation->getError('cabang_lomba') ?>
                                </div>
                            </div>
                            <datalist id="browsers">
                                <option value="Pemprograman">
                                <option value="Pengembangan Perangkat Lunak">
                                <option value="Pengembangan Website">
                                <option value="Analisis Data">
                                <option value="Big Data">
                                <option value="Machine Learning">
                                <option value="UI UX Design">
                                <option value="Proses Bisnis">
                                <option value="Keamanan jaringan & Sistem Informasi">
                                <option value="Kecerdasan Buatan AI">

                                    <!-- Add more options as needed -->
                            </datalist>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control <?= ($validation->hasError('slug')) ? 'is-invalid' : '' ?>" name="slug" id="slug" value="<?= old('slug') ?>">
                                <div id="slug_feedback" class="invalid-feedback">
                                    <?= $validation->getError('slug') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link Official</label>
                                <input type="text" class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : '' ?>" name="link" id="link" value="<?= old('link') ?>">
                                <div id="link_feedback" class="invalid-feedback">
                                    <?= $validation->getError('link') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Penyelenggara" class="form-label">Penyelenggara</label>
                                <input type="text" class="form-control <?= ($validation->hasError('Penyelenggara')) ? 'is-invalid' : '' ?>" name="Penyelenggara" id="Penyelenggara" value="<?= old('Penyelenggara') ?>">
                                <div id="Penyelenggara_feedback" class="invalid-feedback">
                                    <?= $validation->getError('Penyelenggara') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="Deadline" class="form-label">Deadline</label>
                                <input type="date" class="form-control <?= ($validation->hasError('Deadline')) ? 'is-invalid' : '' ?>" name="Deadline" id="Deadline" value="<?= old('Deadline') ?>">
                                <div id="Deadline_feedback" class="invalid-feedback">
                                    <?= $validation->getError('Deadline') ?>
                                </div>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="counting_day" class="form-label">Counting Day</label>
                                <input type="text" class="form-control <?= ($validation->hasError('counting_day')) ? 'is-invalid' : '' ?>" name="counting_day" id="counting_day" value="<?= old('counting_day') ?>">
                                <div id="counting_day_feedback" class="invalid-feedback">
                                    <?= $validation->getError('counting_day') ?>
                                </div>
                            </div> -->
                            <div class="mb-3">
                                <label for="poster" class="form-label">Poster</label>
                                <div class="col-sm-4 m-1">
                                    <img src="/assets/img/lomba/user.png" class="img-thumbnail img-preview">
                                </div>
                                <input type="file" class="form-control img-input <?= ($validation->hasError('poster')) ? 'is-invalid' : '' ?>" name="poster" id="poster" onchange="previewImg()">
                                <div id="poster_feedback" class="invalid-feedback">
                                    <?= $validation->getError('poster') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="teks" class="form-label">Deskripsi</label>
                                <textarea id="tinymceExample" class="form-control <?= ($validation->hasError('teks')) ? 'is-invalid' : '' ?>" maxlength="150" rows="8" name="teks"><?= old('teks') ?></textarea>
                                <div id="teks_feedback" class="invalid-feedback">
                                    <?= $validation->getError('teks') ?>
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

<script type="text/javascript">
    function myFunction() {

        var a = document.getElementById("Title").value;

        var b = a.toLowerCase().replace(/ /g, '-')
            .replace(/[^\w-]+/g, '');

        document.getElementById("slug").value = b;


    }
</script>



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

</script>
<?= $this->endSection() ?>