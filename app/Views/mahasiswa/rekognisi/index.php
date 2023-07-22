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
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif ?>
        <div class="section-title text-center">
            <h1>Rekognisi Lomba Kamu Menjadi Nilai</h1>
            <div class="fs-3">
                Rekognisi adalah suatu fitur untuk menrekognisi suatu loba kamu menjadi nilai nilai di matakuliah tertentu sesuai dengan lomba yang kamu ikuti
            </div>
            <div class="fs-4">Cek Rekognisi Nilai Kamu <a href="/mahasiswa/rekognisi/list" class="badge bg-primary">di sini</a></div>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4">
                <div class="contact-info mr-20">
                    <span>Info Kontak</span>
                    <h2>Hubungi kami</h2>
                    <p>Rekognisikan gelar juara anda untuk nilai mata kuliah yang lebih baik.</p>
                    <ul>
                        <li>
                            <div class="content">
                                <i class='bx bx-phone-call'></i>
                                <h3>Nomor Telepon</h3>
                                <a href="tel:(022) 7564108">(022) 7564108</a>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class='bx bxs-map'></i>
                                <h3>Alamat</h3>
                                <span>Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</span>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class='bx bx-message'></i>
                                <h3>Kontak Info</h3>
                                <a href="https://telkomuniversity.ac.id" target="_blank"><span class="__cf_email__" data-cfemail="761e131a1a19360213151e130e5815191b">telkomuniversity.ac.id</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="contact-form">
                    <form action="/mahasiswa/rekognisi" method="post" enctype="multipart/form-data" id="contactForm">
                        <?= csrf_field() ?>
                        <input type="hidden" name="user_id" value="<?= user()->id ?>">
                        <input type="hidden" name="action" id="action" value="/mahasiswa/rekognisi">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Nama Lomba<span>*</span></label>
                                    <input type="text" name="nama_lomba" id="nama_lomba" class="form-control <?= ($validation->hasError('nama_lomba')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('nama_lomba')) ? 'is-invalid' : '' ?>" required data-error="Masukkan nama lomba" placeholder="Nama Lomba" value="<?= old('nama_lomba') ?>">
                                    <div id="nama_lomba_feedback" class="text-danger fs-6">
                                        <?= $validation->getError('nama_lomba') ?>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Ketua <span>*</span></label>
                                    <input type="text" name="nama_ketua" id="nama_ketua" class="form-control  <?= ($validation->hasError('nama_ketua')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('nama_ketua')) ? 'is-invalid' : '' ?>" required data-error="Masukkan Nama Lengkap" placeholder="Nama Lengkap" value="<?= old('nama_ketua') ?>">
                                    <div id="nama_ketua_feedback" class="text-danger fs-6">
                                        <?= $validation->getError('nama_ketua') ?>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                    <span class="text-dark">Note : Untuk Penambahan anggota dilakukan ketika form ini sudah dikirim</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nomor Induk Mahasiswa <span>*</span></label>
                                    <input type="text" name="nim" id="nim" required data-error="Masukkan NIM" class="form-control  <?= ($validation->hasError('nim')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('nim')) ? 'is-invalid' : '' ?>" placeholder="NIM" value="<?= old('nim') ?>">
                                    <div id="nim_feedback" class="text-danger fs-6">
                                        <?= $validation->getError('nim') ?>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Kelas <span>*</span></label>

                                    <input type="text" name="kelas" id="kelas" required data-error="Masukkan kelas" class="form-control  <?= ($validation->hasError('kelas')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('kelas')) ? 'is-invalid' : '' ?>" placeholder="Kode Kelas" value="<?= old('kelas') ?>">
                                    <div id="kelas_feedback" class="text-danger fs-6">
                                        <?= $validation->getError('kelas') ?>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                    <p>Format Pengisian Contoh D3SI-44-04</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email <span>*</span></label>
                                    <input type="email" name="email" id="email" required data-error="Masukkan email" class="form-control  <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" placeholder="email" value="<?= old('email') ?>">
                                    <div id="email_feedback" class="text-danger fs-6">
                                        <?= $validation->getError('email') ?>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Nama Dosen Pembimbing <span>*</span></label>
                                    <input list="browsers" name="nama_pembimbing" id="nama_pembimbing" class="form-control <?= ($validation->hasError('nama_pembimbing')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('nama_pembimbing')) ? 'is-invalid' : '' ?>" required data-error="Masukkan Nama Pembimbing" placeholder="Nama Lengkap" value="<?= old('nama_pembimbing') ?>">
                                    <datalist id="browsers">
                                        <!-- Iterasi melalui data yang diambil dari model DosenModel -->
                                        <?php foreach ($nama_gelar_list as $nama_gelar) : ?>
                                            <option value="<?= $nama_gelar['nama_gelar'] ?>">
                                            <?php endforeach; ?>
                                    </datalist>
                                    <div id="nama_pembimbing_feedback" class="text-danger fs-6">
                                        <?= $validation->getError('nama_pembimbing') ?>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Upload Bukti Sertifikat <span>*</span></label>
                                    <input type="file" name="sertifikat" id="sertifikat" class="form-control" required data-error="Upload Sertifikat" accept=".doc, .docx, .pdf">
                                    <div id="sertifikat_feedback" class="text-danger fs-6">
                                        <?= $validation->getError('sertifikat') ?>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mb-3">
                                <div class="form-group">
                                    <label>Kategori Prestasi <span>*</span></label>
                                    <select name="prestasi" id="prestasi" class="form-control <?= ($validation->hasError('nama_pembimbing')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('nama_pembimbing')) ? 'is-invalid' : '' ?>" required data-error="Prestasi">
                                        <option disabled selected value="">Pilih Prestasi</option>
                                        <option <?= (old('prestasi') == 'Juara 1') ? 'selected' : '' ?> value="Juara 1">Juara 1</option>
                                        <option <?= (old('prestasi') == 'Juara 2') ? 'selected' : '' ?> value="Juara 2">Juara 2</option>
                                        <option <?= (old('prestasi') == 'Juara 3') ? 'selected' : '' ?> value="Juara 3">Juara 3</option>
                                        <option <?= (old('prestasi') == 'Lolos Pendanaan') ? 'selected' : '' ?> value="Lolos Pendanaan">Lolos Pendanaan</option>
                                        <option <?= (old('prestasi') == 'Juara Harapan') ? 'selected' : '' ?> value="Juara Harapan">Juara Harapan</option>
                                    </select>
                                    <div id="prestasi_feedback" class="text-danger fs-6">
                                        <?= $validation->getError('prestasi') ?>
                                    </div>
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
    const csrfToken = document.querySelector('[name="csrf-token"]').getAttribute('content');
    FilePond.create(
        document.querySelector('.filepond')
    );
    FilePond.setOptions({
        server: {
            process: '/tmp-upload',
            revert: '/tmp-delete',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
        },
        labelIdle: 'Seret & Lepaskan file Anda atau <span class="filepond--label-action"> Jelajahi </span>'
    });
</script>


<?= $this->endSection() ?>