<?php $base_url= base_url().'assets/';?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Sistem Informasi POLTEK-Kampar</title>

    <!-- Custom fonts for this template-->
    <link href="<?= $base_url ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= $base_url ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-warning">

    <div class="container">


        <!-- Outer Row -->
        <div class="row justify-content-center"> <!--row= untuk mengatur baris-->

            <div class="col-xl-10 col-lg-10 col-md-8 bg-warning"> 

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-3">
                        <center>
                            <img src="<?= $base_url ?>img/Logopolkam.png" alt="" width="200px">
                        </center>
                        <div class="text-center">
                            <h3 class="h4 text-gray-900 mb-2">SIAKAD Poltek-Kampar</h3>
                            <h6 class="h4 text-gray-900 mb-4">Sistem Informasi Akademik Politeknik Kampar</h6>
                            <?php if ($this->session->flashdata('error')) :?>
                            <div class="alert alert-danger" role="alert">
                                <?= $this->session->flashdata('error') ?> 
                            </div>
                                <?php endif ?>
                            </div>
                            <center>
                            <div class="col-lg-8"> <!--col= untuk mengatur kolom-->
                                <div class="p-2"> <!--p= untuk mengatur jarak-->
                                    <form class="user" action="<?=base_url('auth/checklogin') ?>" method="POST">
                                        <div class="form-group">
                                            <input type="text"  name="username" class="form-control form-control-user"
                                                id="exampleInputUsername" aria-describedby="usernameHelp"
                                                placeholder="Enter username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder=" Enter Password...">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">login</button>
                                    </form>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= $base_url ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= $base_url ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= $base_url ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= $base_url ?>js/sb-admin-2.min.js"></script>

</body>

</html>