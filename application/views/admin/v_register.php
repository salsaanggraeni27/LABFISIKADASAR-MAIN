<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USER PAGE | Register</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/square/blue.css'?>">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="margin: 3% auto;">
    <div>
        <p><?php echo $this->session->flashdata('msg');?></p>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg"> <img width="250px;" height="60px" src="<?php echo base_url().'assets/images/logo-biru.png'?>"></p>
        <h4 class="text-center" style="margin-bottom: 20px;">Registrasi Akun Baru</h4>
        <hr/>

        <form action="<?php echo site_url().'admin/login/register_auth'?>" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            
            <div class="form-group">
                <label>Jenis Kelamin:</label><br/>
                <label class="radio-inline">
                    <input type="radio" name="jenkel" value="L" checked> Laki-Laki
                </label>
                <label class="radio-inline">
                    <input type="radio" name="jenkel" value="P"> Perempuan
                </label>
            </div>

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" name="nohp" class="form-control" placeholder="No. Telepon/HP" required>
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
                <span class="glyphicon glyphicon-tag form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" name="password_confirm" class="form-control" placeholder="Ulangi Password" required>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar Akun</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div style="margin-top: 15px; text-align: center;">
            <p>Sudah punya akun? <a href="<?php echo site_url('administrator');?>">Login di sini</a></p>
        </div>

        <hr/>
        <p><center>Copyright © <?php echo date('Y');?> by Divisi Humas & Media  <br/> All Right Reserved</center></p>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
</body>
</html>
