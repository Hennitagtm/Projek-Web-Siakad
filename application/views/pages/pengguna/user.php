<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card-header col-sm-12">
            <h3 class="h4 mb-0 text-gray-800 font-weight-bold">User Management</h3>
        </div>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('admin/user/add') ?>" class="btn btn-primary btn-sm mb-2">Tambah User</a>
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $this->session->flashdata('success') ?>
                    </div>
                <?php endif ?>
                <table class="table table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td>
                                    <?= $datas->nama ?>
                                </td>
                                <td>
                                    <?= $datas->jabatan ?>
                                </td>
                                <td>
                                    <?= $datas->username ?>
                                </td>
                                <td>
                                    <?= $datas->password ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/user/edit/' . $datas->username) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('admin/user/delete/' . $datas->username) ?>"
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