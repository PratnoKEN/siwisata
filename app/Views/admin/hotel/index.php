<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Hotel
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Daftar Hotel</li>
                    </ol>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama Hotel</th>
                                <th>Tempat</th>
                                <th>Harga Tiket</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hotel as $item): ?>
                                <tr>
                                    <td>
                                        <?= $item['nama_penginapan'] ?>
                                    </td>
                                    <td>
                                        <?= $item['lokasi'] ?>
                                    </td>
                                    <td>Rp.
                                        <?= number_format($item['price'], 0, ',', '.') ?>
                                    </td>
                                    <td>
                                        <?= $item['deskripsi'] ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>



    <?= $this->endSection() ?>