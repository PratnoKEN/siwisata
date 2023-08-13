<?= $this->extend('admin/layout/template') ?>

<?= $this->Section('content'); ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Daftar Transportasi
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Static Navigation</li>
                    </ol>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama Transportasi</th>
                                <th>Dari - Ke</th>
                                <th>Harga Tiket</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>TransNusa</td>
                                <td>Jakarta - Surabaya</td>
                                <td>Rp.15.000</td>
                                <td style="white-space:nowrap;">
                                    <a class="btn btn-success btn-sm" href="#"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" href="#"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Lion</td>
                                <td>Jakarta - Surabaya</td>
                                <td>Rp.100.000</td>
                                <td style="white-space:nowrap;">
                                    <a class="btn btn-success btn-sm" href="#"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" href="#"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pelita</td>
                                <td>Jakarta - Surabaya</td>
                                <td>Rp.100.000</td>
                                <td style="white-space:nowrap;">
                                    <a class="btn btn-success btn-sm" href="#"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" href="#"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Super Air Jet</td>
                                <td>Jakarta - Surabaya</td>
                                <td>Rp.100.000</td>
                                <td style="white-space:nowrap;">
                                    <a class="btn btn-success btn-sm" href="#"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger btn-sm" href="#"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Citilink</td>
                                <td>Jakarta - Surabaya</td>
                                <td>Rp.15.000</td>
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
