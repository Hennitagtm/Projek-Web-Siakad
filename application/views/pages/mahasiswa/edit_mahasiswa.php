<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Mahasiswa</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/mahasiswa/update/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_mahasiswa">ID Mahasiswa</label>
                            <input type="text" class="form-control" name="id_mahasiswa"
                                value="<?= $data['id_mahasiswa'] ?>">
                            <input type="hidden" name="where" value="<?= $data['id_mahasiswa'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" name="foto" value="" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama</label>
                            <input type="text" class="form-control" name="nama_lengkap"
                                value="<?= $data['nama_lengkap'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" value="<?= $data['nim'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="text" class="form-control" name="email" value="<?= $data['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="P" <?php if ($data['gender'] == 'P')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="gender">Perempuan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="L" <?php if ($data['gender'] == 'L')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="gender">Laki-Laki</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status_study">Status Study</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_study" value="Aktif" <?php if ($data['status_study'] == 'Aktif')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="status_study">Aktif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_study" value="Tidak Aktif" <?php if ($data['status_study'] == 'Tidak Aktif')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="status_study">Tidak Aktif</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenjang_study">Jenjang Study</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang_study" value="D2" <?php if ($data['jenjang_study'] == 'D2')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="jenjang_study">D2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang_study" value="D3" <?php if ($data['jenjang_study'] == 'D3')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="jenjang_study">D3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenjang_study" value="D4" <?php if ($data['jenjang_study'] == 'D4')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="jenjang_study">D4</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="semester_awal">Semester Awal</label>
                                <input type="text" class="form-control" name="semester_awal"
                                    value="<?= $data['semester_awal'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_prodi">Prodi</label>
                            <br>
                            <select name="kode_prodi" id="kode_prodi">
                                <?php foreach ($prodi_list as $prodi): ?>
                                    <option value="<?= $prodi['kode_prodi'] ?>" <?php if ($data['kode_prodi'] == $prodi['kode_prodi'])
                                          echo 'selected' ?>>
                                      <?= $prodi['nama_prodi'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_semester">Semester</label>
                            <br>
                            <select name="id_semester" id="id_semester">
                                <?php foreach ($semester_list as $semester): ?>
                                    <option value="<?= $semester['id_semester'] ?>" <?php if ($data['id_semester'] == $semester['id_semester'])
                                          echo 'selected' ?>>
                                      <?= $semester['semester'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_kelas">Kelas</label>
                            <br>
                            <select name="id_kelas" id="id_kelas">
                                <?php foreach ($kelas_list as $kelas): ?>
                                    <option value="<?= $kelas['id_kelas'] ?>" <?php if ($data['id_kelas'] == $kelas['nama_kelas'])
                                          echo 'selected' ?>>
                                      <?= $kelas['nama_kelas'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        <a href="<?= base_url('admin/mahasiswa/') ?>"
                        class="btn btn-primary btn-sm">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>