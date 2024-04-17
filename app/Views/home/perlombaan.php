<?= $this->extend('layouts/home') ?>


<?= $this->section('style') ?>
<?php

use CodeIgniter\I18n\Time;
?>
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

<?php
// Ambil nilai 'cabang lomba' yang unik dari tabel kompetisi
$uniqueCabangLomba = array_unique(array_column($data_lomba, 'cabang_lomba'));
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12 text-center">
                <div class="filter-dropdown">
                    <select class="filter-select">
                        <option value="all">Tampilkan Semua</option>
                        <?php foreach ($uniqueCabangLomba as $cabangLomba) : ?>
                            <option value="<?= $cabangLomba ?>"><?= $cabangLomba ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="blog-style-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <div class="row">
                        <?php
                        // Fungsi untuk membandingkan ID dua lomba
                        function compareID($a, $b)
                        {
                            return $b['id'] - $a['id']; // Mengurutkan berdasarkan ID terbesar ke terkecil
                            // Ganti $b['id'] - $a['id'] dengan $a['id'] - $b['id'] untuk mengurutkan berdasarkan ID terkecil ke terbesar
                        }

                        // Urutkan data lomba berdasarkan ID menggunakan fungsi usort
                        usort($data_lomba, 'compareID');

                        // Bagian pagination
                        $perPage = 10; // Jumlah lomba per halaman
                        $currentPage = $pager->getCurrentPage(); // Dapatkan halaman saat ini

                        // Bagi data lomba menjadi halaman-halaman dengan ukuran yang sesuai
                        $pages = array_chunk($data_lomba, $perPage);

                        // Ambil data lomba untuk halaman yang sedang aktif
                        $data_lomba = isset($pages[$currentPage - 1]) ? $pages[$currentPage - 1] : [];
                        ?>

                        <?php foreach ($data_lomba as $lomba) : ?>
                            <?php
                            $time = Time::parse($lomba['Deadline']);
                            ?>
                            <div class="col-lg-5 m-3 blog-style-card" data-cabang="<?= $lomba['cabang_lomba'] ?>">
                                <div class="blog-style-img">
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>">
                                        <img src="/assets/img/<?= $lomba['poster'] ?>" alt="Images" loading="lazy">
                                    </a>
                                </div>
                                <div class="content">
                                    <?php
                                    $targetDate = strtotime($lomba['Deadline']);
                                    $currentDate = time();
                                    $secondsRemaining = $targetDate - $currentDate;
                                    $daysRemaining = ceil($secondsRemaining / (60 * 60 * 24));

                                    if ($daysRemaining < 1) {
                                        $test =  "Lomba Sudah Ditutup";
                                    } else {
                                        $test = "Tersisa $daysRemaining hari lagi untuk lomba";
                                    }
                                    ?>
                                    <ul>
                                        <li><i class='bx bxs-user'></i> By <?= $lomba['Penyelenggara'] ?></li>
                                        <li><i class='bx bx-calendar'></i>Deadline: <?= date('d F Y', strtotime($lomba['Deadline'])); ?></li>
                                        <li><i class='bx bx-time'></i><?php echo $test ?></li>
                                        <li><i class='bx bx-link'></i><a href="<?= $lomba['link'] ?>" target="_blank">Buka Situs Resmi</a></li>
                                    </ul>
                                    <h3><a href="/perlombaan/<?= $lomba['slug'] ?>"><?= $lomba['Title'] ?></a></h3>
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>" class="default-btn btn-bg-two border-radius-50">Baca Selengkapnya<i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="col-lg-12 col-md-12 text-center">
                            <?= $pager->links('lomba', 'home_pagination') ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection() ?>
<link href="path/to/bootstrap.min.css" rel="stylesheet">

<!-- Pastikan jQuery telah dimuat -->
<script src="path/to/jquery.min.js"></script>

<!-- Pastikan file JavaScript Bootstrap telah dimuat -->
<script src="path/to/bootstrap.min.js"></script>

<?= $this->section('script') ?>
<script>
    // JavaScript untuk filter kompetisi berdasarkan "cabang lomba" yang dipilih
    $(document).ready(function() {
        $('.filter-select').change(function() {
            const filterValue = $(this).val();
            console.log("Filter Value:", filterValue); // Tambahkan log ini untuk memeriksa nilai filterValue

            // Filter kartu kompetisi berdasarkan "cabang lomba" yang dipilih
            $('.blog-style-card').each(function() {
                console.log("Data Cabang Lomba:", $(this).data('cabang')); // Tambahkan log ini untuk memeriksa nilai atribut data-cabang
                if (filterValue === 'all' || $(this).data('cabang') === filterValue) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>
<?= $this->endSection() ?>