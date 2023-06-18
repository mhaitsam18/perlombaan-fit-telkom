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


<div class="blog-style-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php foreach ($data_lomba as $lomba) : ?>
                        <?php
                        $time = Time::parse($lomba['Deadline']);
                        ?>
                        <div class="col-lg-12 m-3">
                            <div class="blog-style-card">
                                <div class="blog-style-img">
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>">
                                        <img src="/assets/img/<?= $lomba['poster'] ?>" alt="Images" loading="lazy">
                                    </a>
                                    <div class="blog-style-tag">
                                        <h3><?= $time->format('d'); ?></h3>
                                        <span>Nov</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <?php
                                        $targetDate = strtotime($lomba['Deadline']);
                                        $currentDate = time();
                                        $secondsRemaining = $targetDate - $currentDate;
                                        $daysRemaining = floor($secondsRemaining / (60 * 60 * 24));

                                     ?>
                                    <ul>
                                        <li><i class='bx bxs-user'></i> By <?= $lomba['Penyelenggara'] ?></li>
                                        <li><i class='bx bx-calendar'></i>Deadline: <?= date('d F Y', strtotime($lomba['Deadline'])); ?></li>
                                        <li><i class='bx bx-time'></i><?= $daysRemaining ?> Hari lagi</li>
                                    </ul>
                                    <h3><a href="/perlombaan/<?= $lomba['slug'] ?>"><?= $lomba['cabang_lomba'] ?></a></h3>
                                    <p>
                                        <?= $lomba['excerpt'] ?>
                                    </p>
                                    <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel vewwlit nisi elit consequat ipsum.</p> -->
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>" class="default-btn btn-bg-two border-radius-50">Learn More <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-lg-12 col-md-12 text-center">
                        <!-- <div class="pagination-area">
                            <a href="blog-1.html" class="prev page-numbers">
                                <i class='bx bx-left-arrow-alt'></i>
                            </a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="blog-1.html" class="page-numbers">2</a>
                            <a href="blog-1.html" class="page-numbers">3</a>
                            <a href="blog-1.html" class="next page-numbers">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>