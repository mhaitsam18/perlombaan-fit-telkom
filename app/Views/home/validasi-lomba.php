<?= $this->extend('layouts/home') ?>


<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <div class="talk-content text-center">
                <div class="section-title text-center">
                    <!-- <span class="sp-color1">Let's Talk</span> -->
                    <h3><?= $title ?></h3>
                </div>
                <ul>
                    <li>
                        <a href="/">Beranda</a>
                    </li>
                    <li>
                        <i class='bx bx-chevrons-right'></i>
                    </li>
                    <li><?= $title ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inner-shape">
        <img src="/assets-techex-demo/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<div class="contact-form-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Formulir Validasi Lomba</h2><br>
            <div class="fs-4" style="text-align: justify;">
                Form Validasi Lomba adalah sebuah formulir yang dirancang untuk memvalidasi apakah lomba yang diinputkan sesuai dengan program studi D3 Sistem Informasi. Kalian bisa mencari suatu lomba di luar website ini dan divalidasi di sini karena formulir ini dibuat dengan memanfaatkan teknologi machine learning, yang memungkinkan pengguna untuk dengan cepat mengetahui apakah lomba yang akan diikuti sesuai dengan bidang keahlian yang ditawarkan oleh program studi tersebut. Fitur ini sangat membantu dalam menyaring lomba-lomba yang relevan, sehingga mahasiswa D3 Sistem Informasi dapat fokus mengikuti kegiatan yang sesuai dengan kurikulum dan minat mereka.
            </div>
            <span></span>
        </div>
        <div class="row pt-45">
            <div class="col-lg-12">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Link<span>*</span></label>
                                    <input type="text" name="link" id="link" class="form-control" required data-error="Masukkan Link" placeholder="link">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Judul Lomba<span>*</span></label>
                                    <input type="text" name="Title" id="Title" class="form-control" required data-error="Masukkan Judul Lomba" placeholder="Judul Lomba">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi perlombaan <span>*</span></label>
                                    <textarea name="teks" class="form-control" id="teks" cols="30" rows="8" required data-error="Masukkan Deskripsi" placeholder="Deskripsi"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn btn-bg-two border-radius-50">
                                    Kirim <i class='bx bx-chevron-right'></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="map-area">
    <div class="container-fluid m-0 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50194.82376159623!2d-79.09792989247224!3d38.159337740034566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b4a08eb8621697%3A0xe5d6e4710a09b66e!2sStaunton%2C%20VA%2024401%2C%20USA!5e0!3m2!1sen!2sbd!4v1607173226867!5m2!1sen!2sbd"></iframe>
    </div>
</div> -->

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    FilePond.setOptions({
        labelIdle: 'Seret & Lepaskan file Anda atau <span class="filepond--label-action"> Jelajahi </span>'
    });
</script>
<?= $this->endSection() ?>