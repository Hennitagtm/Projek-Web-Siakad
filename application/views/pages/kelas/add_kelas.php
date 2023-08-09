<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Tambah Data Kelas</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/kelas/create/') ?>" class="user form-horizontal"
                        method="POST">
                        <div class="form-group">
                            <label for="id_kaprodi">ID Kelas</label>
                            <input type="text" class="form-control" name="id_kelas" value="">
                        </div>
                        <div class="form-group">
                            <label for="kode_kaprodi">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas" value="">
                        </div>
                        <div class="form-group">
                            <label for="kode_prodi">Prodi</label>
                            <br>
                            <select name="nama_prodi" id="nama_prodi">
                                <?php foreach ($prodi_list as $prodi): ?>
                                    <option value="<?= $prodi['kode_prodi'] ?>">
                                        <?= $prodi['nama_prodi'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">Dosen Wali</label>
                            <br>
                            <select name="id_dosen" id="id_dosen">
                                <?php foreach ($dosen_list as $dosen): ?>
                                    <option value="<?= $dosen['id_dosen'] ?>">
                                        <?= $dosen['nama_lengkap'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <a href="<?= base_url('admin/kelas/') ?>" class="btn btn-primary btn-sm">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>