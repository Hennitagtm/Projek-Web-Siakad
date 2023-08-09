<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Ubah Data Kepala Kaprodi</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/Kaprodi/update/' . $data->id_kaprodi) ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_kaprodi">ID Kaprodi</label>
                            <input type="text" class="form-control" name="id_kaprodi" value="<?= $data->id_kaprodi ?>">
                            <input type="hidden" name="where" value="<?= $data->id_kaprodi ?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_kaprodi">Kode Kaprodi</label>
                            <input type="text" class="form-control" name="kode_kaprodi"
                                value="<?= $data->kode_kaprodi ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">ID Dosen</label>
                            <input type="text" class="form-control" name="id_dosen" value="<?= $data->id_dosen ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <a href="<?= base_url('admin/Kaprodi/') ?>"
                        class="btn btn-primary btn-sm">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>