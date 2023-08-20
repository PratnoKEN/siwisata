<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Transportasi
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Transportasi</li>
                    </ol>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('tambah-transportasi'); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Transportasi</label>
                            <input type="text" class="form-control" name="nama_bis">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tujuan Awal</label>
                            <input type="text" class="form-control" name="tujuan_awal">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tujuan Akhir</label>
                            <input type="text" class="form-control" name="tujuan_akhir">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Fasilitas</label>
                            <input type="text" class="form-control" name="fasilitas">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Gambar Bis</label>
                            <input type="file" class="form-control" name="gambar_bis">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endSection() ?>