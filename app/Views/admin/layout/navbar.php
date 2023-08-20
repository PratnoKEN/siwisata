<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Manajemen</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Wisata
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('tambah-produk'); ?>">Tambah Wisata</a>
                        <a class="nav-link" href="<?= base_url('daftar-produk'); ?>">Daftar Wisata</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePenginapan"
                    aria-expanded="false" aria-controls="collapsePenginapan">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-hotel"></i></div>
                    Penginapan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePenginapan" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('tambah-hotel'); ?>">Tambah Penginapan</a>
                        <a class="nav-link" href="<?= base_url('daftar-hotel'); ?>">Daftar Penginapan</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTransportasi"
                    aria-expanded="false" aria-controls="collapseTransportasi">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-plane"></i></div>
                    Transportasi
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTransportasi" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('tambah-transportasi'); ?>">Tambah Transportasi</a>
                        <a class="nav-link" href="<?= base_url('daftar-transportasi'); ?>">Daftar Transportasi</a>
                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php if (session()->has('username')): ?>
                <?= session('username') ?>
            <?php endif; ?>
        </div>

    </nav>
</div>