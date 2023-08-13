<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Bookings
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Static Navigation</li>
                    </ol>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Date Time</th>
                                <th>User</th>
                                <th>Package</th>
                                <th>Scedule</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-08-13 10:35</td>
                                <td>Jhon Doe</td>
                                <td>Paket wisata ke Bali</td>
                                <td>2023-08-13</td>
                                <td><span class="badge bg-success">Done</span></td>
                                <td style="white-space:nowrap;">
                                    <a class="btn btn-success btn-sm" href="#"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" href="#"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>



    <?= $this->endSection() ?>
