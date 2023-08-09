<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-lg-flex align-items-center justify-content-between mb-4">
        <div class="card-header col-sm-12">
            <h3 class="h4 mb-0 font-weight-bold text-gray-800">Data Kepala Program Studi</h3>
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
                <a href="<?= base_url('admin/Kaprodi/add/') ?>"
                    class="btn btn-primary btn-sm mb-2">Tambah Data</a>
                <table class=" table table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>ID Kaprodi</th>
                            <th>Kode Kaprodi</th>
                            <th>ID Dosen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td>
                                    <?= $datas->id_kaprodi ?>
                                </td>
                                <td>
                                    <?= $datas->kode_kaprodi ?>
                                </td>
                                <td>
                                    <?= $datas->id_dosen ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/Kaprodi/edit/' . $datas->id_kaprodi) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('admin/Kaprodi/delete/' . $datas->id_kaprodi) ?>"
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