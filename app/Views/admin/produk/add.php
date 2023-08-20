<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Destinasi Wisata
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Destinasi Wisata</li>
                    </ol>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('tambah-produk'); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Wisata</label>
                            <input type="text" class="form-control" name="nama_wisata">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="gambar_wisata">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endSection() ?>