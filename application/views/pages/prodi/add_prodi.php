<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Tambah Program Studi</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/prodi/create/') ?>" class="user form-horizontal"
                        method="POST">
                        <div class="form-group">
                            <label for="id_kaprodi">Kode Prodi</label>
                            <input type="text" class="form-control" name="kode_prodi" value="">
                        </div>
                        <div class="form-group">
                            <label for="kode_kaprodi">Kode Dikti</label>
                            <input type="text" class="form-control" name="kode_dikti" value="">
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">Nama Prodi</label>
                            <input type="text" class="form-control" name="nama_prodi" value="">
                        </div>
                        <div class="form-group">
                            <label for="id_kaprodi">Singkatan</label>
                            <input type="text" class="form-control" name="singkatan" value="">
                        </div>
                        <div class="form-group">
                            <label for="kode_kaprodi">Jenjang</label>
                            <input type="text" class="form-control" name="jenjang" value="">
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">Akreditasi</label>
                            <input type="text" class="form-control" name="akreditasi" value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <a href="<?= base_url('admin/Prodi/') ?>" class="btn btn-primary btn-sm">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>