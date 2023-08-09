<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card-header col-sm-12">
            <h3 class="h4 mb-0 text-gray-800 font-weight-bold">User Management</h3>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-header">Form Edit User</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/user/update') ?>" class="form-horizontal"
                        method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>">
                            <input type="hidden" name="where" value="<?=$data->username?>">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" value="<?= $data->username ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" value="<?= $data->password ?>">
                        </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            <a href="<?= base_url('admin/user') ?>" class="btn btn-primary btn-sm">Back</a>
                    </form>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
