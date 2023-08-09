<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-lg-flex align-items-center justify-content-between mb-4">
        <div class="card-header col-sm-12">
            <h3 class="h4 mb-0 font-weight-bold text-gray-800">Semester</h3>
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
                <a href="<?= base_url('admin/semester/add') ?>"
                    class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                <table class=" table table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>ID Semester</th>
                            <th>Semester</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td>
                                    <?= $datas->id_semester ?>
                                </td>
                                <td>
                                    <?= $datas->semester ?>
                                </td>
                                <td>
                                    <?= $datas->keterangan ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/semester/edit/' . $datas->id_semester) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('admin/semester/delete/' . $datas->id_semester) ?>"
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