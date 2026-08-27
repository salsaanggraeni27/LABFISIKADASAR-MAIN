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
    <title>Admin | Data Peminjaman Alat</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->load->view('admin/v_header'); ?>
    
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header">Menu Utama</li>
                <li>
                    <a href="<?php echo base_url().'admin/dashboard'?>">
                        <i class="fa fa-home"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i> <span>Berita</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="fa fa-list"></i> List Berita</a></li>
                        <li><a href="<?php echo base_url().'admin/tulisan/add_tulisan'?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
                        <li><a href="<?php echo base_url().'admin/kategori'?>"><i class="fa fa-wrench"></i> Kategori</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url().'admin/pengguna'?>"><i class="fa fa-users"></i> <span>Pengguna</span></a></li>
                <li><a href="<?php echo base_url().'admin/agenda'?>"><i class="fa fa-calendar"></i> <span>Agenda</span></a></li>
                <li>
                    <a href="<?php echo base_url().'admin/perizinan'?>">
                        <i class="fa fa-check-circle"></i> <span>Perizinan</span>
                        <span class="pull-right-container"><small class="label pull-right bg-green"><?php echo $jum_perizinan;?></small></span>
                    </a>
                </li>
                <li><a href="<?php echo base_url().'admin/pengumuman'?>"><i class="fa fa-volume-up"></i> <span>Pengumuman</span></a></li>
                <li><a href="<?php echo base_url().'admin/files'?>"><i class="fa fa-download"></i> <span>Download</span></a></li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-camera"></i> <span>Gallery</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url().'admin/album'?>"><i class="fa fa-clone"></i> Album</a></li>
                        <li><a href="<?php echo base_url().'admin/galeri'?>"><i class="fa fa-picture-o"></i> Photos</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url().'admin/asisten'?>"><i class="fa fa-group"></i> <span>Data Asisten</span></a></li>
                <li><a href="<?php echo base_url().'admin/alumni'?>"><i class="fa fa-graduation-cap"></i> <span>Data Alumni</span></a></li>

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
                        <li><a href="<?php echo base_url().'admin/alat'?>"><i class="fa fa-wrench"></i>Alat Praktikum</a></li>
                        <li class="active"><a href="<?php echo base_url().'admin/peminjaman'?>"><i class="fa fa-exchange"></i>Peminjaman Alat</a></li>
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
                <li><a href="<?php echo base_url().'admin/login/logout'?>"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Konfirmasi Peminjaman Alat</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Peminjaman Alat</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Riwayat Peminjaman User</h3>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-striped" style="font-size:13px;">
                                <thead>
                                    <tr>
                                        <th>Waktu</th>
                                        <th>NRP - Nama</th>
                                        <th>Kelompok</th>
                                        <th>Alat Dipinjam</th>
                                        <th>Kondisi (User)</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi Admin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data->result_array() as $i) : ?>
                                    <tr>
                                        <td><?php echo $i['hari_jam'];?></td>
                                        <td><b><?php echo $i['nrp'];?></b><br><?php echo $i['nama'];?></td>
                                        <td><?php echo $i['kelompok_kecil'];?> - <?php echo $i['kelompok_besar'];?></td>
                                        <td><?php echo $i['nama_alat'];?></td>
                                        <td>
                                            <?php 
                                                if($i['kondisi'] == 'Aman') echo "<span class='text-green'><b>AMAN</b></span>";
                                                else if($i['kondisi'] == 'Rusak/Hilang') echo "<span class='text-red'><b>RUSAK/HILANG</b></span>";
                                                else echo "-";
                                            ?>
                                        </td>
                                        <td>
                                            <?php if ($i['status'] == 0) {
                                                echo "<span class='label bg-red'>Dipinjam</span>";
                                            } elseif ($i['status'] == 1) {
                                                echo "<span class='label bg-yellow'>Menunggu ACC</span>";
                                            } else {
                                                echo "<span class='label bg-green'>Selesai</span>";
                                            } ?>
                                        </td>
                                        <td style="text-align:center;">
                                            <?php if($i['status'] == 1): ?>
                                                <form action="<?php echo site_url('admin/peminjaman/konfirmasi');?>" method="post" onsubmit="return confirm('Konfirmasi pengembalian ini? Stok akan otomatis diperbarui sesuai kondisi.');" style="display:inline;">
                                                    <input type="hidden" name="xid" value="<?php echo $i['id_peminjaman'];?>">
                                                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Konfirmasi</button>
                                                </form>
                                            <?php elseif($i['status'] == 2): ?>
                                                <!-- Tombol Hapus hanya muncul kalau sudah Selesai -->
                                                <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $i['id_peminjaman'];?>"><span class="fa fa-trash"></span> Hapus</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2021 <a href="#">Media & Informasi Lab. Fisika Dasar Itenas</a>.</strong> All rights reserved.
    </footer>
</div>

<!--Modal Hapus Peminjaman-->
<?php foreach ($data->result_array() as $i) :
    $id=$i['id_peminjaman'];
    $nrp=$i['nrp'];
    $nama=$i['nama'];
?>
    <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Riwayat Peminjaman</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url().'admin/peminjaman/hapus_peminjaman'?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                        <p>Apakah Anda yakin mau menghapus riwayat peminjaman atas nama <b><?php echo $nama;?> (<?php echo $nrp;?>)</b> ?</p>
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

<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>

<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>
</body>
</html>