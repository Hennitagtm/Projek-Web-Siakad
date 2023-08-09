<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Tambah Data Dosen</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/dosen/create/') ?>" class="user form-horizontal"
                        method="POST">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Profile</label>
                            <input type="file" class="form-control" name="foto" value="" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">ID Dosen</label>
                            <input type="text" class="form-control" name="id_dosen" value="">
                        </div>
                        <div class="form-group">
                            <label for="gelar">Gelar</label>
                            <input type="text" class="form-control" name="gelar" value="">
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control" name="nrp" value="">
                        </div>
                        <div class="form-group">
                            <label for="nidn">NIDN</label>
                            <input type="text" class="form-control" name="nidn" value="">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="P">
                                <label class="form-check-label" for="gender">Perempuan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="L">
                                <label class="form-check-label" for="gender">Laki-Laki</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                            <input type="text" class="form-control" name="pendidikan_terakhir" value="">
                        </div>
                        <div class="form-group">
                            <label for="kode_prodi">Prodi</label>
                            <br>
                            <select name="kode_prodi" id="kode_prodi">
                                <?php foreach ($prodi_list as $prodi): ?>
                                    <option value="<?= $prodi['kode_prodi'] ?>">
                                        <?= $prodi['nama_prodi'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <a href="<?= base_url('admin/dosen/') ?>" class="btn btn-primary btn-sm">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>