<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content') ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-md-9 mt-2">
                                    <p>Data Wisata</p>
                                </div>
                                <div class="text-end col-md-3">
                                    <h2>12</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9 mt-2">
                                    <p>Data Penginapan</p>
                                </div>
                                <div class="text-end col-md-3">
                                    <h2>7</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-md-9 mt-2">
                                    <p>Data Transportasi</p>
                                </div>
                                <div class="text-end col-md-3">
                                    <h2>5</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                        <div class="row">
                                <div class="col-md-9 mt-2">
                                    <p>Data Bookings</p>
                                </div>
                                <div class="text-end col-md-3">
                                    <h2>3</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Bookings
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