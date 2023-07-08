<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <img src="/assets/img/logos/logo_telyu_lanskap.png" class="img-fluid mx-auto p-4" alt="" href="/admin">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Utama</li>
            <li class="nav-item">
                <a href="/admin/index" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Master Data</li>

            <li class="nav-item <?= ($page == 'dosen') ? 'active' : '' ?>">
                <a href="<?= route_to('admin-dosen') ?>" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Data Dosen</span>
                </a>
            </li>
            <!-- <li class="nav-item <?= ($page == 'prodi') ? 'active' : '' ?>">
                <a href="<?= route_to('admin-prodi') ?>" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Data Prodi</span>
                </a>
            </li> -->
            <!-- <li class="nav-item <?= ($page == 'mahasiswa') ? 'active' : '' ?>">
                <a href="<?= route_to('admin-mahasiswa') ?>" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Data Mahasiswa</span>
                </a>
            </li> -->
            <li class="nav-item nav-category">Fitur</li>
            <li class="nav-item <?= ($page == 'lomba') ? 'active' : '' ?>">
                <a href="<?= route_to('admin-lomba') ?>" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Data Lomba</span>
                </a>
            </li>
            <li class="nav-item <?= ($page == 'rekognisi') ? 'active' : '' ?>">
                <a href="<?= route_to('admin-rekognisi') ?>" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Data Rekognisi</span>
                </a>
            </li>
            <li class="nav-item <?= ($page == 'pendataan-lomba') ? 'active' : '' ?>">
                <a href="<?= route_to('admin-pendataan-lomba') ?>" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Data Lomba Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item nav-category">Fitur Maintance</li>
            <a style="color: black;" href="/validasi-lomba" class="nav-link <?= ($page == 'validasi-lomba') ? 'active' : '' ?>">
                Validasi Lomba <span>(error)</span>
            </a>
        </ul>
    </div>
</nav>
<!-- <nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
                <label class="form-check-label" for="sidebarLight">
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
                <label class="form-check-label" for="sidebarDark">
                    Dark
                </label>
            </div>
        </div>
    </div>
</nav> -->