<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-lg-flex align-items-center justify-content-between mb-4">
        <div class="card-header col-sm-12">
            <h3 class="h4 mb-0 font-weight-bold text-gray-800">Mahasiswa</h3>
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
                <a href="<?= base_url('admin/mahasiswa/add') ?>"
                    class="btn btn-primary btn-sm mb-2">Tambah Data Mahasiswa</a>
                <table class="table table-hover table-sm">
                    <thead class="thead-light text-center">
                        <tr>
                            <!-- Add 'text-center' class to center-align the header cells -->
                            <th>Nama</th>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>NIM</th>
                            <th>E-Mail</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Jenjang</th>
                            <th>S-Awal</th>
                            <th>Prodi</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                 <td>
                                    <?= $datas->nama_lengkap ?>
                                </td>
                                <td>
                                    <?= $datas->id_mahasiswa ?>
                                </td>
                                <td>
                                    <?php if ($datas->foto): ?>
                                        <img src="<?= base_url('assets/img/' . $datas->foto) ?>" alt="Foto Profile"
                                            class="rounded" width="80">
                                    <?php else: ?>
                                        <p>No Images</p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?= $datas->nim ?>
                                </td>
                                <td>
                                    <?= $datas->email ?>
                                </td>
                                <td>
                                    <?= $datas->gender ?>
                                </td>
                                <td>
                                    <?= $datas->status_study ?>
                                </td>
                                <td>
                                    <?= $datas->jenjang_study ?>
                                </td>
                                <td>
                                    <?= $datas->semester_awal ?>
                                </td>
                                <td>
                                    <?= $datas->nama_prodi ?>
                                </td>
                                <td>
                                    <?= $datas->semester ?>
                                </td>
                                <td>
                                    <?= $datas->nama_kelas ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/mahasiswa/edit/' . $datas->id_mahasiswa) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('admin/mahasiswa/delete/' . $datas->id_mahasiswa) ?>"
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