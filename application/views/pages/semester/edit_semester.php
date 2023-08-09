<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Semester</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/semester/update/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_kaprodi">ID Semester</label>
                            <input type="text" class="form-control" name="id_semester"
                                value="<?= $data->id_semester ?>">
                            <input type="hidden" name="where" value="<?= $data->id_semester ?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_kaprodi">Semester</label>
                            <input type="text" class="form-control" name="semester" value="<?= $data->semester ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="<?= $data->keterangan ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <a href="<?= base_url('admin/semester/') ?>" class="btn btn-primary btn-sm">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>