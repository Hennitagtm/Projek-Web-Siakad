<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Kelas</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/kelas/update/') ?>" class="user form-horizontal"
                        method="POST">
                        <div class="form-group">
                            <label for="id_kelas">ID Kelas</label>
                            <input type="text" class="form-control" name="id_kelas" 
                                value="<?= $kelas_data['id_kelas'] ?>">
                            <input type="hidden" name="where" value="<?= $kelas_data['id_kelas'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_kelas">Nama Kelas</label>
                            <input type="text" class="form-control" name="nama_kelas"
                                value="<?= $kelas_data['nama_kelas'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_prodi">Prodi</label>
                            <br>
                            <select name="kode_prodi" id="kode_prodi">
                                <?php foreach ($prodi_list as $prodi): ?>
                                    <option value="<?= $prodi['kode_prodi'] ?>" <?php if ($kelas_data['kode_prodi'] == $prodi['kode_prodi'])
                                          echo 'selected' ?>>
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
                                    <option value="<?= $dosen['id_dosen'] ?>" <?php if ($kelas_data['id_dosen'] == $dosen['id_dosen'])
                                          echo 'selected' ?>>
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