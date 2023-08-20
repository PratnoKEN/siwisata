<<<<<<< HEAD
<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Transportasi
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/daftar-transportasi'); ?>">Daftar Transportasi</a></li>
                        <li class="breadcrumb-item active">Edit Transportasi</li>
                    </ol>
                </div>
                <div class="card-body">
                    <?php if (!empty($bis) && is_array($bis)): ?>
                        <form action="<?= site_url('edit-transportasi/' . $bis['id_transportasi']); ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama bis</label>
                                <input type="text" class="form-control" value="<?= $bis['nama_bis'] ?>" name="nama_bis">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tujuan Awal</label>
                                <input type="text" class="form-control" value="<?= $bis['tujuan_awal'] ?>"
                                    name="tujuan_awal">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tujuan Akhir</label>
                                <input type="text" class="form-control" value="<?= $bis['tujuan_akhir'] ?>"
                                    name="tujuan_akhir">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input type="text" class="form-control" value="<?= $bis['price'] ?>" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Fasilitas</label>
                                <input type="text" class="form-control" value="<?= $bis['fasilitas'] ?>"
                                    name="fasilitas">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Gambar Bis</label>
                                <img src="<?= base_url('assets/img/' . $bis['gambar']) ?>"
                                    alt="<?= $bis['nama_bis'] ?>" width="100">
                                <input type="file" id="gambar" name="gambar_bis" class="form-control image_file"
                                    accept=".jpg,.png,.jpeg,.gif" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <?php else: ?>
                        <p>No bis data available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
</div>

=======
<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Transportasi
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/daftar-transportasi'); ?>">Daftar Transportasi</a></li>
                        <li class="breadcrumb-item active">Edit Transportasi</li>
                    </ol>
                </div>
                <div class="card-body">
                    <?php if (!empty($bis) && is_array($bis)): ?>
                        <form action="<?= site_url('edit-transportasi/' . $bis['id_transportasi']); ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama bis</label>
                                <input type="text" class="form-control" value="<?= $bis['nama_bis'] ?>" name="nama_bis">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tujuan Awal</label>
                                <input type="text" class="form-control" value="<?= $bis['tujuan_awal'] ?>"
                                    name="tujuan_awal">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tujuan Akhir</label>
                                <input type="text" class="form-control" value="<?= $bis['tujuan_akhir'] ?>"
                                    name="tujuan_akhir">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input type="text" class="form-control" value="<?= $bis['price'] ?>" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Fasilitas</label>
                                <input type="text" class="form-control" value="<?= $bis['fasilitas'] ?>"
                                    name="fasilitas">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Gambar Bis</label>
                                <img src="<?= base_url('assets/img/' . $bis['gambar']) ?>"
                                    alt="<?= $bis['nama_bis'] ?>" width="100">
                                <input type="file" id="gambar" name="gambar_bis" class="form-control image_file"
                                    accept=".jpg,.png,.jpeg,.gif" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <?php else: ?>
                        <p>No bis data available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
</div>

>>>>>>> 59b13ae2290c5f2f0f8d60c4f2e43f8e10c3dec5
<?= $this->endSection() ?>