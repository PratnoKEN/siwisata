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
                                <th>Gambar</th>
                                <th>Action</th>
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
                                    <td>
                                        <!-- Use the img tag to display the image -->
                                        <img src="<?= base_url('assets/img/' . $item['gambar']) ?>"
                                            alt="<?= $item['nama_penginapan'] ?>" width="100">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm edit-btn" data-bs-toggle="modal"
                                            data-bs-target="#Detail<?= $item['id_penginapan']; ?>">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        |
                                        <a href="<?= base_url('edit-hotel/' . $item['id_penginapan']); ?>"
                                            class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        |
                                        <a href="<?= base_url('delete-hotel/' . $item['id_penginapan']); ?>"
                                            class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal for showing details -->
                                <div class="modal fade" id="Detail<?= $item['id_penginapan']; ?>" tabindex="-1"
                                    aria-labelledby="DetailLabel<?= $item['id_penginapan']; ?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="DetailLabel<?= $item['id_penginapan']; ?>">
                                                    Detail
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Content for the modal -->
                                                <img src="<?= base_url('assets/img/' . $item['gambar']) ?>"
                                                    alt="<?= $item['nama_penginapan'] ?>" width="100">
                                                <h4>
                                                    <?= $item['nama_penginapan'] ?>
                                                </h4>
                                                <p><strong>Price:</strong> Rp.
                                                    <?= number_format($item['price'], 0, ',', '.') ?>
                                                </p>
                                                <p><strong>Deskripsi:</strong>
                                                    <?= $item['deskripsi'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?= $this->endSection() ?>