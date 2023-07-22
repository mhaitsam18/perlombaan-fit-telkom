<?= $this->extend('layouts/home') ?>


<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3><?= $title ?></h3>
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
    <div class="inner-shape">
        <img src="/assets-techex-demo/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<div class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">Dosen Kami</span>
            <h2>Cari Dosen Pembimbingmu</h2>
        </div>
        <div class="row pt-45">
            <?php foreach ($data_dosen as $dosen) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <img src="/assets/img/<?= $dosen['foto'] ?>" alt="Team Images" loading="lazy">
                        <ul class="social-link">
                            <li>
                                <a href="mahasiswa\pendataan\lomba-index" target="_blank">
                                    <i class='bx bxl-whatsapp'></i>
                                </a>

                                $routes->get('', 'Mahasiswa\PendataanLomba::index', ['as' => 'mahasiswa-pendataan-lomba-index']);
                                <a href="<?= $dosen['telepon'] ?>" target="_blank">
                                    <i class='bx bxl-whatsapp'></i>
                                </a>
                            </li>

                            $routes->get('/informasi-dosen', 'Home::informasi_dosen', ['as' => 'home-informasi-dosen']);
                        </ul>
                        <div class="content">
                            <h3><?= $dosen['nama_gelar'] ?></h3>
                            <span><?= $dosen['jabatan'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="col-lg-12 col-md-12 text-center">
                <div class="pagination-area">
                    <a href="team.html" class="prev page-numbers">
                        <i class='bx bx-left-arrow-alt'></i>
                    </a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="team.html" class="page-numbers">2</a>
                    <a href="team.html" class="page-numbers">3</a>
                    <a href="team.html" class="next page-numbers">
                        <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div> -->
        </div>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>