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
 
                            <form action="<?= site_url('edit-produk/' . $product['id_wisata']); ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Wisata</label>
                                    <input type="text" class="form-control" value="<?= $product['nama_wisata']?>"
                                        name="nama_wisata">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" value="<?= $product['lokasi'] ?>" name="lokasi">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input type="text" class="form-control" value="<?= $product['price'] ?>" name="price">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi"
                                        rows="3"><?= $product['deskripsi']?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Image</label>
                                    <img src="<?= base_url('assets/img/' . $product['gambar']) ?>"
                                            alt="<?= $product['nama_wisata'] ?>" width="100">
                                    <!-- <input type="file" class="form-control" name="gambar"> -->
                                    <input type="file" id="gambar" name="gambar_wisata" class="form-control image_file" accept=".jpg,.png,.jpeg,.gif" />
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
 
                    <?php else: ?>
                        <p>No product data available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?= $this->endSection() ?>