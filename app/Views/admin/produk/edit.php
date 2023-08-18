<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Destinasi Wisata
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Destinasi</li>
                    </ol>
                </div>
                <div class="card-body">
                    <?php if (!empty($product) && is_array($product)): ?>
                        <?php foreach ($product as $item): ?>
                            <form action="<?= site_url('edit/' . $item['id']); ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Wisata</label>
                                    <input type="text" class="form-control" value="<?= $item['nama_wisata'] ?>"
                                        name="nama_wisata">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" value="<?= $item['lokasi'] ?>" name="lokasi">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input type="text" class="form-control" value="<?= $item['price'] ?>" name="price">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi"
                                        rows="3"><?= $item['deskripsi'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="gambar_wisata">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>No product data available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?= $this->endSection() ?>