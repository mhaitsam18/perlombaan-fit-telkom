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

<div class="counter-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">Selamat datang di halaman "Tentang Kami" Dashboard Perlombaan!</h2><br>
            <div class="fs-4" style="text-align: justify;"> Kami bangga menjadi bagian dari perjalanan kompetisi Anda melalui platform kami yang inovatif. dashboard Perlombaan adalah solusi terpadu yang dirancang khusus untuk memudahkan peserta dalam memantau perlombaan secara efisien.

                Tim kami terdiri dari 2 orang mahasiswa Telkom Uninversity Raden Fachry Azwar dan Dinda Nabila
                Kami berharap Anda menikmati pengalaman menggunakan Dashboard Perlombaan kami. Kami terus berupaya meningkatkan platform kami agar dapat memenuhi harapan dan kebutuhan Anda. Terima kasih telah memilih kami sebagai mitra perlombaan Anda!</div>
        </div>
    </div>
    <div class="counter-shape">
        <div class="shape1">
            <img src="/assets-techex-demo/images/shape/shape1.png" alt="Images" loading="lazy">
        </div>
        <div class="shape2">
            <img src="/assets-techex-demo/images/shape/shape2.png" alt="Images" loading="lazy">
        </div>
    </div>
</div>





<div class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-content mr-20">
                    <div class="section-title"><br><br>
                        <h2>Raden Fachry Azwar</h2>
                        <p>
                            Halo Perkenalkan Aku Raden Fachry Azwar Mahasiswa angkatan 2020 dari D3 Sistem Informasi yang menggarap project Web ini dari UI,Fitur Perlombaan Pendataan Lomba dan Rekognisi.
                        </p>
                        <br><br><br><br><br><br><br>
                        <h2>Dinda Nabila</h2>
                        <p>
                            Halo Perkenalkan Aku Dinda Nabila Mahasiswa angkatan 2019 dari D3 Sistem Informasi yang menggarap project Web ini Fitur Machine Learning.
                        </p>
                        <br>

                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-6 col-6">
                            <div class="choose-content-card">
                                <div class="content">
                                    <i class="flaticon-practice"></i>
                                    <h3>Experience</h3>
                                </div>
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="choose-content-card">
                                <div class="content">
                                    <i class="flaticon-help"></i>
                                    <h3>Quick Support</h3>
                                </div>
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-img">
                    <img src="/assets-techex-demo/images/choose-img.jpg" alt="Images" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <!-- <span class="sp-color2">User Kami</span> -->
            <h2>Terima Kasih Sudah Menggunakan Website Kami</h2>
        </div>
        <!-- <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-play">
                    <img src="/assets-techex-demo/images/about/about-img1.jpg" alt="About Images" loading="lazy">
                    <div class="about-play-content">
                        <span>Watch Our Intro Video</span>
                        <h2>Perfect Solution for It Services!</h2>
                        <div class="play-on-area">
                            <a href="https://www.youtube.com/watch?v=tUP5S4YdEJo" class="play-on popup-btn"><i class='bx bx-play'></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content ml-25">
                    <div class="section-title">
                        <span class="sp-color2">15 Years of Experience</span>
                        <h2>Right Partner for Software Innovation</h2>
                        <p>
                            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <ul class="about-list text-start">
                                <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                                <li><i class='bx bxs-check-circle'></i>Bribed Autor Nisi Elit Volume</li>
                                <li><i class='bx bxs-check-circle'></i>Cost of Supplies and Equipment</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <ul class="about-list about-list-2 text-start">
                                <li><i class='bx bxs-check-circle'></i>Change the Volume of Expected</li>
                                <li><i class='bx bxs-check-circle'></i>Easy to Customer Services</li>
                                <li><i class='bx bxs-check-circle'></i>Good Quality Products Services</li>
                            </ul>
                        </div>
                    </div>
                    <p class="about-content-text">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
                </div>
            </div>
        </div> -->
    </div>
</div>

<!-- <div class="security-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color2">IT Security & Computing</span>
            <h2>Searching for a Solution! We Provide Truly Prominent IT Solutions</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-cyber-security"></i>
                    <h3><a href="case-details.html">Business Security</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-computer"></i>
                    <h3><a href="case-details.html">Manage IT Service</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-effective"></i>
                    <h3><a href="case-details.html">Product Analysis</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-implement"></i>
                    <h3><a href="case-details.html">Analytic Solution</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-consulting"></i>
                    <h3><a href="case-details.html">Finest Quality</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="security-card">
                    <i class="flaticon-consultant"></i>
                    <h3><a href="case-details.html">Risk Management</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit scelerisque ullamcorper proin scelerisque tortor odio.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="brand-area-two ptb-100">
    <div class="container">
        <div class="brand-slider owl-carousel owl-theme">
            <div class="brand-item">
                <img src="/assets-techex-demo/images/brand-logo/brand-style1.png" alt="Images" loading="lazy">
            </div>
            <div class="brand-item">
                <img src="/assets-techex-demo/images/brand-logo/brand-style2.png" alt="Images" loading="lazy">
            </div>
            <div class="brand-item">
                <img src="/assets-techex-demo/images/brand-logo/brand-style3.png" alt="Images" loading="lazy">
            </div>
            <div class="brand-item">
                <img src="/assets-techex-demo/images/brand-logo/brand-style4.png" alt="Images" loading="lazy">
            </div>
            <div class="brand-item">
                <img src="/assets-techex-demo/images/brand-logo/brand-style5.png" alt="Images" loading="lazy">
            </div>
            <div class="brand-item">
                <img src="/assets-techex-demo/images/brand-logo/brand-style3.png" alt="Images" loading="lazy">
            </div>
        </div>
    </div>
</div> -->




<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>