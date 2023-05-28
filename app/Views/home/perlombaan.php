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
                        <div class="col-lg-12">
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
                                    <ul>
                                        <li><i class='bx bxs-user'></i> By <?= $lomba['Penyelenggara'] ?></li>
                                        <li><i class='bx bx-show-alt'></i>322 View</li>
                                        <li><i class='bx bx-purchase-tag-alt'></i><?= $lomba['kategori_indo'] ?></li>
                                    </ul>
                                    <h3><a href="/perlombaan/<?= $lomba['slug'] ?>"><?= $lomba['cabang_lomba'] ?></a></h3>
                                    <?= $lomba['except'] ?>
                                    <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, Proin gravida nibh vel vewwlit nisi elit consequat ipsum.</p> -->
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>" class="default-btn btn-bg-two border-radius-50">Learn More <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-lg-12 col-md-12 text-center">
                        <div class="pagination-area">
                            <a href="blog-1.html" class="prev page-numbers">
                                <i class='bx bx-left-arrow-alt'></i>
                            </a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="blog-1.html" class="page-numbers">2</a>
                            <a href="blog-1.html" class="page-numbers">3</a>
                            <a href="blog-1.html" class="next page-numbers">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="side-bar-area">
                    <div class="search-widget">
                        <form class="search-form">
                            <input type="search" class="form-control" placeholder="Cari...">
                            <button type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Kategori Lomba</h3>
                        <div class="side-bar-categories">
                            <ul>
                                <?php foreach ($data_kategori_lomba as $kategori_lomba) : ?>
                                    <li>
                                        <div class="line-circle"></div>
                                        <a href="/perlombaan/kategori/<?= $kategori_lomba['slug'] ?>"><?= $kategori_lomba['kategori_indo'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                                <!-- <li>
                                    <div class="line-circle"></div>
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>">IT Services<span>[70]</span></a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="side-bar-widget">
                        <h3 class="title">Latest Blog</h3>
                        <div class="widget-popular-post">
                            <article class="item">
                                <a href="news-details.html" class="thumb">
                                    <span class="full-image cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="news-details.html">
                                            10 Ways to Get Efficient Result & Benefits
                                        </a>
                                    </h4>
                                    <p>Nov 05, 2020</p>
                                </div>
                            </article>
                            <article class="item">
                                <a href="news-details.html" class="thumb">
                                    <span class="full-image cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="news-details.html">
                                            New Device Invention for Digital Platform
                                        </a>
                                    </h4>
                                    <p>13 October, 2020</p>
                                </div>
                            </article>
                            <article class="item">
                                <a href="news-details.html" class="thumb">
                                    <span class="full-image cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="news-details.html">
                                            Idea For New 5 App Design
                                        </a>
                                    </h4>
                                    <p>17 October, 2020</p>
                                </div>
                            </article>
                            <article class="item">
                                <a href="news-details.html" class="thumb">
                                    <span class="full-image cover bg4" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="news-details.html">
                                            Product Idea Solution For New Generation
                                        </a>
                                    </h4>
                                    <p>17 October, 2020</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Tag Cloud</h3>
                        <ul class="side-bar-widget-tag">
                            <li><a href="/perlombaan/<?= $lomba['slug'] ?>">Android</a></li>
                            <li><a href="/perlombaan/<?= $lomba['slug'] ?>">Creative</a></li>
                            <li><a href="/perlombaan/<?= $lomba['slug'] ?>">App</a></li>
                            <li><a href="/perlombaan/<?= $lomba['slug'] ?>">IOS</a></li>
                            <li><a href="/perlombaan/<?= $lomba['slug'] ?>">Business</a></li>
                            <li><a href="/perlombaan/<?= $lomba['slug'] ?>">Consulting</a></li>
                        </ul>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Gallery</h3>
                        <ul class="blog-gallery">
                            <li>
                                <a href="/perlombaan/<?= $lomba['slug'] ?>">
                                    <img src="/assets-techex-demo/images/blog/blog-small-img1.jpg" alt="image" loading="lazy">
                                </a>
                            </li>
                            <li>
                                <a href="/perlombaan/<?= $lomba['slug'] ?>">
                                    <img src="/assets-techex-demo/images/blog/blog-small-img2.jpg" alt="image" loading="lazy">
                                </a>
                            </li>
                            <li>
                                <a href="/perlombaan/<?= $lomba['slug'] ?>">
                                    <img src="/assets-techex-demo/images/blog/blog-small-img3.jpg" alt="image" loading="lazy">
                                </a>
                            </li>
                            <li>
                                <a href="/perlombaan/<?= $lomba['slug'] ?>">
                                    <img src="/assets-techex-demo/images/blog/blog-small-img4.jpg" alt="image" loading="lazy">
                                </a>
                            </li>
                            <li>
                                <a href="/perlombaan/<?= $lomba['slug'] ?>">
                                    <img src="/assets-techex-demo/images/blog/blog-small-img5.jpg" alt="image" loading="lazy">
                                </a>
                            </li>
                            <li>
                                <a href="/perlombaan/<?= $lomba['slug'] ?>">
                                    <img src="/assets-techex-demo/images/blog/blog-small-img6.jpg" alt="image" loading="lazy">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="side-bar-widget">
                        <h3 class="title">Archive</h3>
                        <div class="side-bar-categories">
                            <ul>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>">Design<span>[70]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>">Business<span>[24]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>">Development<span>[08]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>">Technology <span>[17]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>">Startup <span>[20]</span></a>
                                </li>
                                <li>
                                    <div class="line-circle"></div>
                                    <a href="/perlombaan/<?= $lomba['slug'] ?>">Marketing Growth <span>[13]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>