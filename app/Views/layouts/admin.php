<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Purchase: https://1.envato.market/nobleui_admin
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title><?= $title ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="/assets-nobleui/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets-nobleui/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets-nobleui/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->



    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets-nobleui/vendors/sweetalert2/sweetalert2.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="/assets-nobleui/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="/assets-nobleui/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets-nobleui/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="/assets/img/logos/logo_telyu_polos.png" />
    <?= $this->renderSection('style') ?>
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <?= $this->include('layouts/sidebar-admin') ?>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <?= $this->include('layouts/topbar-admin') ?>

            <!-- partial -->

            <div class="page-content">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="flash-data" data-success="<?= session()->getFlashdata('success') ?>"></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('fail')) : ?>
                    <div class="flash-data" data-fail="<?= session()->getFlashdata('fail') ?>"></div>
                <?php endif; ?>
                <?= $this->renderSection('content') ?>



            </div>

            <!-- partial:partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-muted mb-1 mb-md-0">Copyright © 2023 <a href="https://www.nobleui.com" target="_blank">Dashboard Perlombaan D3 Sistem Informasi</a>.</p>
                <p class="text-muted">Handcrafted By Raden Fachry
                    <!-- <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i> -->
                </p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="/assets-nobleui/vendors/core/core.js"></script>
    <!-- endinject -->


    <!-- Plugin js for this page -->
    <script src="/assets-nobleui/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/assets-nobleui/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page -->



    <!-- Plugin js for this page -->
    <script src="/assets-nobleui/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets-nobleui/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="/assets-nobleui/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="/assets-nobleui/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets-nobleui/vendors/apexcharts/apexcharts.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="/assets-nobleui/vendors/feather-icons/feather.min.js"></script>
    <script src="/assets-nobleui/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="/assets-nobleui/js/dashboard-light.js"></script>
    <script src="/assets-nobleui/js/datepicker.js"></script>
    <!-- End custom js for this page -->
    <!-- Plugin js for this page -->
    <script src="/assets-nobleui/vendors/sweetalert2/sweetalert2.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- Custom js for this page -->
    <script src="/assets-nobleui/js/data-table.js"></script>
    <!-- End custom js for this page -->

    <script>
        const success = $('.flash-data').data('success');
        const fail = $('.flash-data').data('fail');
        if (success) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: success
            })
        }
        if (fail) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: fail
            })
        }


        $('.tombol-hapus').on('click', function(e) {
            e.preventDefault();
            const formAction = $(this).closest('form').attr('action');
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                confirmButtonText: 'Hapus',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).closest('form').submit();
                }
            });
        });

        function previewImg() {
            const image = document.querySelector('.img-input');
            const imageLabel = document.querySelector('.img-label');
            const imgPreview = document.querySelector('.img-preview');

            if (imageLabel) {
                imageLabel.textContent = image.files[0].name;
            }

            const fileImage = new FileReader();
            fileImage.readAsDataURL(image.files[0]);

            fileImage.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>


    <?= $this->renderSection('script') ?>


</body>

</html>