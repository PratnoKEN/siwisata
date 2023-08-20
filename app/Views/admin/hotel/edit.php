<<<<<<< HEAD
<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Hotel penginapan
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/daftar-hotel'); ?>">Daftar Hotel</a></li>
                        <li class="breadcrumb-item active">Edit Hotel</li>
                    </ol>
                </div>
                <div class="card-body">
                    <?php if (!empty($hotels) && is_array($hotels)): ?>
                        <form action="<?= site_url('edit-hotel/' . $hotels['id_penginapan']); ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama penginapan</label>
                                <input type="text" class="form-control" value="<?= $hotels['nama_penginapan'] ?>"
                                    name="nama_penginapan">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" value="<?= $hotels['lokasi'] ?>" name="lokasi">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input type="text" class="form-control" value="<?= $hotels['price'] ?>" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"
                                    rows="3"><?= $hotels['deskripsi'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <img src="<?= base_url('assets/img/' . $hotels['gambar']) ?>"
                                    alt="<?= $hotels['nama_penginapan'] ?>" width="100">
                                <input type="file" id="gambar" name="gambar_hotel" class="form-control image_file"
                                    accept=".jpg,.png,.jpeg,.gif" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <?php else: ?>
                        <p>No hotels data available.</p>
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
                    Edit Hotel penginapan
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('/daftar-hotel'); ?>">Daftar Hotel</a></li>
                        <li class="breadcrumb-item active">Edit Hotel</li>
                    </ol>
                </div>
                <div class="card-body">
                    <?php if (!empty($hotels) && is_array($hotels)): ?>
                        <form action="<?= site_url('edit-hotel/' . $hotels['id_penginapan']); ?>" method="post"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama penginapan</label>
                                <input type="text" class="form-control" value="<?= $hotels['nama_penginapan'] ?>"
                                    name="nama_penginapan">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" value="<?= $hotels['lokasi'] ?>" name="lokasi">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input type="text" class="form-control" value="<?= $hotels['price'] ?>" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"
                                    rows="3"><?= $hotels['deskripsi'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <img src="<?= base_url('assets/img/' . $hotels['gambar']) ?>"
                                    alt="<?= $hotels['nama_penginapan'] ?>" width="100">
                                <input type="file" id="gambar" name="gambar_hotel" class="form-control image_file"
                                    accept=".jpg,.png,.jpeg,.gif" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <?php else: ?>
                        <p>No hotels data available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
</div>

>>>>>>> 59b13ae2290c5f2f0f8d60c4f2e43f8e10c3dec5
<?= $this->endSection() ?>