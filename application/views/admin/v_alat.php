<!--Counter Inbox-->
<?php
error_reporting(0);
$query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$query3=$this->db->query("SELECT * FROM tbl_perizinan WHERE perizinan_status='0'");
$jum_comment=$query2->num_rows();
$jum_pesan=$query->num_rows();
$jum_perizinan=$query3->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Data Alat Praktikum</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('admin/v_header'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">Menu Utama</li>
                <li>
                    <a href="<?php echo base_url().'admin/dashboard'?>">
                        <i class="fa fa-home"></i> <span>Dashboard</span>
                        <span class="pull-right-container"><small class="label pull-right"></small></span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i>
                        <span>Berita</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="fa fa-list"></i> List Berita</a></li>
                        <li><a href="<?php echo base_url().'admin/tulisan/add_tulisan'?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
                        <li><a href="<?php echo base_url().'admin/kategori'?>"><i class="fa fa-wrench"></i> Kategori</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/pengguna'?>">
                        <i class="fa fa-users"></i> <span>Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/agenda'?>">
                        <i class="fa fa-calendar"></i> <span>Agenda</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/perizinan'?>">
                        <i class="fa fa-check-circle"></i> <span>Perizinan</span>
                        <span class="pull-right-container"><small class="label pull-right bg-green"><?php echo $jum_perizinan;?></small></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/pengumuman'?>">
                        <i class="fa fa-volume-up"></i> <span>Pengumuman</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/files'?>">
                        <i class="fa fa-download"></i> <span>Download</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-camera"></i>
                        <span>Gallery</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url().'admin/album'?>"><i class="fa fa-clone"></i> Album</a></li>
                        <li><a href="<?php echo base_url().'admin/galeri'?>"><i class="fa fa-picture-o"></i> Photos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/asisten'?>">
                        <i class="fa fa-group"></i> <span>Data Asisten</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/alumni'?>">
                        <i class="fa fa-graduation-cap"></i> <span>Data Alumni</span>
                    </a>
                </li>

                <!-- MENU DATA PRAKTIKUM -->
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Data Praktikum</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url().'admin/siswa'?>"><i class="fa fa-group"></i>Kelompok Praktikum</a></li>
                        <li><a href="<?php echo base_url().'admin/jadwal'?>"><i class="fa fa-calendar"></i>Jadwal Praktikum</a></li>
                        <li><a href="<?php echo base_url().'admin/nilai'?>"><i class="fa fa-star-o"></i> Data Nilai</a></li>
                        <li><a href="<?php echo base_url().'admin/modul'?>"><i class="fa fa-book"></i>Modul & LJK Praktikum</a></li>
                        <li class="active"><a href="<?php echo base_url().'admin/alat'?>"><i class="fa fa-wrench"></i>Alat Praktikum</a></li>
                        <li><a href="<?php echo base_url().'admin/peminjaman'?>"><i class="fa fa-exchange"></i>Peminjaman Alat</a></li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo base_url().'admin/inbox'?>">
                        <i class="fa fa-envelope"></i> <span>Inbox</span>
                        <span class="pull-right-container"><small class="label pull-right bg-green"><?php echo $jum_pesan;?></small></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/komentar'?>">
                        <i class="fa fa-comments"></i> <span>Komentar</span>
                        <span class="pull-right-container"><small class="label pull-right bg-green"><?php echo $jum_comment;?></small></span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/login/logout'?>">
                        <i class="fa fa-sign-out"></i> <span>Sign Out</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Alat Praktikum
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Alat Praktikum</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        
                        <div class="box-header">
                            <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Alat</a>
                        </div>
                        
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-striped" style="font-size:13px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat</th>
                                        <th>Spesifikasi</th>
                                        <th>Total Stok</th>
                                        <th>Sisa Stok</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=0;
                                    foreach ($data->result_array() as $i) :
                                        $no++;
                                        $id=$i['id_alat'];
                                        $nama_alat=$i['nama_alat'];
                                        $spesifikasi=$i['spesifikasi'];
                                        $stok_awal=$i['stok_awal'];
                                        $stok_tersedia=$i['stok_tersedia'];
                                    ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $nama_alat;?></td>
                                        <td><?php echo $spesifikasi;?></td>
                                        <td><?php echo $stok_awal;?></td>
                                        <td>
                                            <?php 
                                                if($stok_tersedia < $stok_awal) {
                                                    echo "<span class='text-red'><strong>".$stok_tersedia."</strong></span>";
                                                } else {
                                                    echo "<span class='text-green'><strong>".$stok_tersedia."</strong></span>";
                                                }
                                            ?>
                                        </td>
                                        <td style="text-align:center;">
                                            <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2021 <a href="#">Media & Informasi Lab. Fisika Dasar Itenas</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->


<!--Modal Add Alat (Form Upload Excel)-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                <h4 class="modal-title" id="myModalLabel">Add Data Alat (Import Excel)</h4>
            </div>
            <form class="form-horizontal" action="<?php echo site_url('admin/alat/import_csv');?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="col-4">
                        Silahkan Pilih File Excel (.xlsx)
                        <br>
                        <br>
                        <br>
                        <input type="file" class="form-control-file" name="file" accept=".xlsx,.xls" required>
                        <br>
                        <small class="text-red"><i>*Perhatian: Upload file akan me-reset/menghapus seluruh data alat sebelumnya! Pastikan format sudah benar (Kolom 1: Nama, Kolom 2: Spesifikasi, Kolom 3: Stok). Baris pertama dianggap header.</i></small>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal Edit Alat-->
<?php foreach ($data->result_array() as $i) :
    $id=$i['id_alat'];
    $nama_alat=$i['nama_alat'];
    $spesifikasi=$i['spesifikasi'];
    $stok_awal=$i['stok_awal'];
?>
    <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Alat</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/alat/update_alat'?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="xid" value="<?php echo $id;?>"/>
                        
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Alat</label>
                            <div class="col-sm-7">
                                <input type="text" name="xnama" value="<?php echo $nama_alat;?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Spesifikasi</label>
                            <div class="col-sm-7">
                                <input type="text" name="xspesifikasi" value="<?php echo $spesifikasi;?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Total Stok Awal</label>
                            <div class="col-sm-7">
                                <input type="number" name="xstok" value="<?php echo $stok_awal;?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach;?>

<!--Modal Hapus Alat-->
<?php foreach ($data->result_array() as $i) :
    $id=$i['id_alat'];
    $nama_alat=$i['nama_alat'];
?>
    <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Alat</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/alat/hapus_alat'?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                        <p>Apakah Anda yakin mau menghapus alat <b><?php echo $nama_alat;?></b> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-flat" id="simpan">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach;?>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- Toast -->
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>

<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>

<?php if($this->session->flashdata('msg')):?>
    <!-- Ini script kecil buat nangkap pesan sukses/gagal kalau beres upload -->
    <script type="text/javascript">
        $.toast({
            heading: 'Informasi',
            text: "Berhasil memproses permintaan.",
            showHideTransition: 'slide',
            icon: 'info',
            hideAfter: 3000,
            position: 'bottom-right',
            bgColor: '#00C9E6'
        });
    </script>
<?php endif;?>

</body>
</html>