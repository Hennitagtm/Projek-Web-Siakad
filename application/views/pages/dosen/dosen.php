<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-lg-flex align-items-center justify-content-between mb-4">
        <div class="card-header col-sm-12">
            <h3 class="h4 mb-0 font-weight-bold text-gray-800">Dosen</h3>
        </div>
    </div>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('admin/dosen/add') ?>" class="btn btn-primary btn-sm mb-2">Tambah
                    Data</a>
                <table class="table table-hover table-sm">
                    <thead class="thead-light text-wrap text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>ID</th>
                            <th>Gelar</th>
                            <th>NRP</th>
                            <th>NIDN</th>
                            <th>E-Mail</th>
                            <th>Gender</th>
                            <th>Pendidikan</th>
                            <th>Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td>
                                    <?= $datas->nama_lengkap ?>
                                </td>
                                <td>
                                    <?php if ($datas->foto): ?>
                                        <img src="<?= base_url('assets/img/' . $datas->foto) ?>" alt="Foto Profile"
                                            class="rounded" width="80">
                                    <?php else: ?>
                                        <p>No Images</p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?= $datas->id_dosen ?>
                                </td>
                                <td>
                                    <?= $datas->gelar ?>
                                </td>
                                <td>
                                    <?= $datas->nrp ?>
                                </td>
                                <td>
                                    <?= $datas->nidn ?>
                                </td>
                                <td>
                                    <?= $datas->email ?>
                                </td>
                                <td>
                                    <?= $datas->gender ?>
                                </td>
                                <td>
                                    <?= $datas->pendidikan_terakhir ?>
                                </td>
                                <td>
                                    <?= $datas->nama_prodi ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/dosen/edit/' . $datas->id_dosen) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('admin/dosen/delete/' . $datas->id_dosen) ?>"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>