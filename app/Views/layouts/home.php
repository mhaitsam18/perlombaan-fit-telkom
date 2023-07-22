<!doctype html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">

    <link rel="stylesheet" href="/assets-techex-demo/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets-techex-demo/css/animate.min.css">

    <link rel="stylesheet" href="/assets-techex-demo/fonts/flaticon.css">

    <link rel="stylesheet" href="/assets-techex-demo/css/boxicons.min.css">

    <link rel="stylesheet" href="/assets-techex-demo/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets-techex-demo/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/assets-techex-demo/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets-techex-demo/css/nice-select.min.css">

    <link rel="stylesheet" href="/assets-techex-demo/css/meanmenu.css">

    <link rel="stylesheet" href="/assets-techex-demo/css/style.css">

    <link rel="stylesheet" href="/assets-techex-demo/css/responsive.css">

    <link rel="stylesheet" href="/assets-techex-demo/css/theme-dark.css">

    <link rel="icon" type="image/png" href="/assets/img/logos/logo_telyu_polos.png"><!-- Filepond stylesheet -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <style>
        .logo-telyu {
            max-height: 80px;
            width: auto;
        }
    </style>
    <?= $this->renderSection('style') ?>
    <title><?= $title ?></title>
</head>

<body>

    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
    <div class="navbar-area">

        <div class="mobile-nav">
            <a href="/beranda" class="logo">
                <img src="/assets/img/logos/logo_telyu_lanskap.png" class="logo-one logo-telyu" alt="Logo">
                <img src="/assets/img/logos/logo_telyu_potrait.png" class="logo-two logo-telyu" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <div class="container-max">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="/beranda">
                            <img src="/assets/img/logos/logo_telyu_lanskap.png" class="logo-one logo-telyu" alt="Logo">
                            <img src="/assets/img/logos/logo_telyu_potrait.png" class="logo-two logo-telyu" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="/beranda" class="nav-link <?= ($page == 'beranda') ? 'active' : '' ?>">
                                        Beranda
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/perlombaan" class="nav-link <?= ($page == 'perlombaan') ? 'active' : '' ?>">
                                        Perlombaan
                                    </a>
                                </li>
                                <?php if (logged_in()) : ?>
                                <?php endif; ?>
                                <li class="nav-item">
                                    <a href="/mahasiswa/pendataan-lomba/list" class="nav-link <?= ($page == 'pendataan-lomba') ? 'active' : '' ?>">
                                        Pendataan Lomba
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/mahasiswa/rekognisi/list" class="nav-link <?= ($page == 'rekognisi') ? 'active' : '' ?>">
                                        Rekognisi
                                    </a>
                                </li>

                                <!-- <li class="nav-item">
                                    <a href="/validasi-lomba" class="nav-link  <?= ($page == 'validasi-lomba') ? 'active' : '' ?>">
                                        Validasi Lomba <span>(error)</span>
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link <?= ($page == 'rekognisi' || $page == 'pendataan-lomba' || $page == 'validasi-lomba') ? 'active' : '' ?>">
                                        Layanan
                                        <i class='bx bx-caret-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="/mahasiswa/rekognisi/list" class="nav-link <?= ($page == 'rekognisi') ? 'active' : '' ?>">
                                                Rekognisi
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/mahasiswa/pendataan-lomba/list" class="nav-link <?= ($page == 'pendataan-lomba') ? 'active' : '' ?>">
                                                Pendataan Lomba
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/validasi-lomba" class="nav-link  <?= ($page == 'validasi-lomba') ? 'active' : '' ?>">
                                                Validasi Lomba <span>(New)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link <?= ($page == 'tentang-kami' || $page == 'faq' || $page == 'kontak-kami' || $page == 'informasi-dosen') ? 'active' : '' ?>">
                                        Informasi
                                        <i class='bx bx-caret-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="/tentang-kami" class="nav-link <?= ($page == 'tentang-kami') ? 'active' : '' ?>">
                                                Tentang Kami
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="/faq" class="nav-link <?= ($page == 'faq') ? 'active' : '' ?>">
                                                FAQ
                                            </a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a href="/kontak-kami" class="nav-link  <?= ($page == 'kontak-kami') ? 'active' : '' ?>">
                                                Kontak Kami
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/informasi-dosen" class="nav-link  <?= ($page == 'informasi-dosen') ? 'active' : '' ?>">
                                                informasi Dosen
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="nav-side d-display nav-side-mt align-middle">
                                <!-- <div class="nav-side-item">
                                    <div class="search-side-widget">
                                        <form class="search-side-form">
                                            <input type="search" class="form-control" placeholder="Search...">
                                            <button type="submit">
                                                <i class="bx bx-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div> -->
                                <div class="nav-side-item align-middle">
                                    <h5 class="align-middle">
                                        <?php if (logged_in()) : ?>
                                            Haloo <?= user()->role ?>, <?= user()->username ?>
                                        <?php endif; ?>
                                    </h5>
                                </div>
                                <div class="nav-side-item">
                                    <div class="get-btn">
                                        <?php if (logged_in()) : ?>
                                            <a href="/logout" class="default-btn btn-bg-two border-radius-50">Keluar <i class='bx bx-chevron-right'></i></a>
                                        <?php else : ?>
                                            <a href="/login" class="default-btn btn-bg-two border-radius-50">Login Mahasiswa <i class='bx bx-chevron-right'></i></a>
                                            <a href="/admin-login" class="default-btn btn-bg-two border-radius-50">Login Admin <i class='bx bx-chevron-right'></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="side-nav-responsive">
            <div class="container-max">
                <div class="dot-menu">
                    <div class="circle-inner">
                        <div class="in-circle circle-one"></div>
                        <div class="in-circle circle-two"></div>
                        <div class="in-circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="side-nav-inner">
                        <div class="side-nav justify-content-center align-items-center">
                            <div class="side-nav-item nav-side">
                                <div class="search-box">
                                    <i class='bx bx-search'></i>
                                </div>
                                <div class="get-btn">
                                    <a href="contact.html" class="default-btn btn-bg-two border-radius-50">Get A Quote <i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-layer"></div>
                <div class="search-close">
                    <span class="search-close-line"></span>
                    <span class="search-close-line"></span>
                </div>
                <div class="search-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->renderSection('content') ?>

    <footer class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="footer-widget text-center">
                            <div class="footer-logo">
                                <a href="/beranda">
                                    <img src="/assets/img/logos/logo_telyu_lanskap_putih.png" alt="Images" loading="lazy" class="mx-auto d-block" style="width: 400px;">
                                </a>
                            </div>
                            <p class="text-center mx-auto">
                                Universitas Telkom atau Telkom University adalah sebuah perguruan tinggi swasta no. 1 di Indonesia yang terletak di Bandung, Jawa Barat.
                            </p>
                            <div class="footer-call-content mx-auto">
                                <h3 class="text-center">Talk to Our Support</h3>
                                <span><a href="tel:+62812-1185-5713">+62 812-1185-5713</a></span>
                                <i class="bx bx-headphone"></i>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="talk-area ptb-100">
                            <div class="container">
                                <div class="talk-content text-center">
                                    <div class="section-title text-center">
                                        <span class="sp-color1">Let's Talk</span>
                                        <h2>Contact Us</h2>
                                    </div>
                                    <a href="contact.html" class="default-btn btn-bg-two border-radius-5">Klik Di sini</a>
                                </div>
                            </div>
                        </div> -->



                    <!-- <div class="col-lg-2 col-sm-6">
                            <div class="footer-widget pl-2">
                                <h3>Services</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            IT Consultancy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Business Solution
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Digital Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="compare.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Business Reform
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Web Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Cloud Computing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="service-details.html" target="_blank">
                                            <i class='bx bx-chevron-right'></i>
                                            Data Analysis
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget pl-5">
                                <h3>Our Blog</h3>
                                <ul class="footer-blog">
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="/assets-techex-demo/images/blog/blog-img-footer.jpg" alt="Images" loading="lazy">
                                        </a>
                                        <div class="content">
                                            <h3><a href="blog-details.html">Product Idea Solution For New Generation</a></h3>
                                            <span>04 Dec 2020</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="/assets-techex-demo/images/blog/blog-img-footer2.jpg" alt="Images" loading="lazy">
                                        </a>
                                        <div class="content">
                                            <h3><a href="blog-details.html">New Device Invention for Digital Platform</a></h3>
                                            <span>07 Dec 2020</span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="blog-details.html">
                                            <img src="/assets-techex-demo/images/blog/blog-img-footer3.jpg" alt="Images" loading="lazy">
                                        </a>
                                        <div class="content">
                                            <h3><a href="blog-details.html">Business Strategy Make His Goal Acheive</a></h3>
                                            <span>10 Dec 2020</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget">
                                <h3>Newsletter</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus molestie molestie. Phasellus ac rutrum massa, et volutpat nisl. Fusce ultrices suscipit nisl.</p>
                                <div class="newsletter-area">
                                    <form class="newsletter-form" data-toggle="validator" method="POST">
                                        <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                                        <button class="subscribe-btn" type="submit">
                                            <i class='bx bx-paper-plane'></i>
                                        </button>
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                    <div class="copy-right-area">
                        <div class="copy-right-text">
                            <p>
                                Copyright © <script>
                                    document.write(new Date().getFullYear())
                                </script> Dashboard Perlombaan D3 Sistem Informasi. dibuat oleh
                                <a href="https://instagram.com/raden_fachry" target="_blank">Raden Fachry Azwar</a>
                            </p>
                        </div>
                    </div>
                </div>
    </footer>


    <!-- <div class="switch-box">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div> -->


    <script src="/assets-techex-demo/js/jquery.min.js"></script>

    <script src="/assets-techex-demo/js/bootstrap.bundle.min.js"></script>

    <script src="/assets-techex-demo/js/owl.carousel.min.js"></script>

    <script src="/assets-techex-demo/js/jquery.magnific-popup.min.js"></script>

    <script src="/assets-techex-demo/js/jquery.nice-select.min.js"></script>

    <script src="/assets-techex-demo/js/wow.min.js"></script>

    <script src="/assets-techex-demo/js/meanmenu.js"></script>

    <script src="/assets-techex-demo/js/jquery.ajaxchimp.min.js"></script>

    <script src="/assets-techex-demo/js/form-validator.min.js"></script>

    <script src="/assets-techex-demo/js/contact-form-script.js"></script>

    <script src="/assets-techex-demo/js/custom.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        // FilePond.parse(document.body);
    </script>

    <?= $this->renderSection('script') ?>
</body>

</html>