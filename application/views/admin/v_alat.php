<!-- Counter Inbox -->
<?php
error_reporting(0);
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$query3 = $this->db->query("SELECT * FROM tbl_perizinan WHERE perizinan_status='0'");

$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
$jum_perizinan = $query3->num_rows();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Data Alat Praktikum</title>
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

    <!-- SIDEBAR -->
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
                        <i class="fa fa-user"></i> <span>Data Praktikum</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url().'admin/siswa'?>"><i class="fa fa-group"></i> Kelompok Praktikum</a></li>
                        <li><a href="<?php echo base_url().'admin/jadwal'?>"><i class="fa fa-calendar"></i> Jadwal Praktikum</a></li>
                        <li><a href="<?php echo base_url().'admin/nilai'?>"><i class="fa fa-star-o"></i> Data Nilai</a></li>
                        <li><a href="<?php echo base_url().'admin/modul'?>"><i class="fa fa-book"></i> Modul & LJK Praktikum</a></li>
                        <li class="active"><a href="<?php echo base_url().'admin/alat'?>"><i class="fa fa-wrench"></i> Alat Praktikum</a></li>
                        <li><a href="<?php echo base_url().'admin/peminjaman'?>"><i class="fa fa-exchange"></i> Peminjaman Alat</a></li>
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

    <!-- CONTENT -->
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Data Alat Praktikum</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Alat Praktikum</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <button type="button" class="btn btn-success btn-flat" data-toggle="modal" data-target="#ModalPilihTambah">
                                <span class="fa fa-plus"></span> Add Alat
                            </button>
                        </div>

                        <div class="box-body">
                            <table id="example1" class="table table-striped" style="font-size:13px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat</th>
                                        <th>Deskripsi</th>
                                        <th>Stok</th>
                                        <th>Dipinjam</th>
                                        <th>Rusak/Hilang</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($data->result_array() as $i):
                                        $no++;
                                        $id           = $i['id_alat'];
                                        $nama_alat    = $i['nama_alat'];
                                        $deskripsi    = $i['deskripsi'];
                                        $stok         = $i['stok'];
                                        $dipinjam     = $i['dipinjam'];
                                        $rusak_hilang = $i['rusak_hilang'];
                                    ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $nama_alat;?></td>
                                        <td><?php echo $deskripsi;?></td>
                                        <td><b><?php echo $stok;?></b></td>
                                        <td><span class="text-yellow"><b><?php echo $dipinjam;?></b></span></td>
                                        <td><span class="text-red"><b><?php echo $rusak_hilang;?></b></span></td>
                                        <td style="text-align:center;">
                                            <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a class="btn btn-sm btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>">
                                                <span class="fa fa-trash"></span>
                                            </a>
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

    <!-- FOOTER -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs"><b>Version</b> 2.0</div>
        <strong>Copyright &copy; 2021 <a href="#">Media & Informasi Lab. Fisika Dasar Itenas</a>.</strong> All rights reserved.
    </footer>
</div>

<!-- MODAL PILIH TAMBAH -->
<div class="modal fade" id="ModalPilihTambah" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span class="fa fa-close"></span></button>
                <h4 class="modal-title">Tambah Data Alat</h4>
            </div>
            <div class="modal-body text-center">
                <p>Silahkan pilih cara menambahkan alat.</p>
                <br>
                <button type="button" class="btn btn-success btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#myModal">
                    <span class="fa fa-file-excel-o"></span> Import Excel
                </button>
                <button type="button" class="btn btn-primary btn-flat" data-dismiss="modal" data-toggle="modal" data-target="#ModalTambahManual">
                    <span class="fa fa-plus"></span> Tambah Manual
                </button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL IMPORT EXCEL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span class="fa fa-close"></span></button>
                <h4 class="modal-title">Add Data Alat (Import Excel)</h4>
            </div>
            <form class="form-horizontal" action="<?php echo site_url('admin/alat/import_csv');?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="col-4">
                        Silahkan Pilih File Excel (.xlsx)
                        <br><br>
                        <input type="file" class="form-control-file" name="file" accept=".xlsx,.xls" required>
                        <br>
                        <small class="text-red">
                            <i>
                                *Perhatian: Upload file akan me-reset/menghapus seluruh data alat sebelumnya!
                                <br>Kolom 1: Nama | Kolom 2: Deskripsi | Kolom 3: Stok
                                <br>Baris pertama dianggap header.
                            </i>
                        </small>
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

<!-- MODAL TAMBAH ALAT MANUAL -->
<div class="modal fade" id="ModalTambahManual" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span class="fa fa-close"></span></button>
                <h4 class="modal-title">Tambah Alat Manual</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'admin/alat/tambah_alat';?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nama Alat</label>
                        <div class="col-sm-7">
                            <input type="text" name="nama_alat" class="form-control" placeholder="Nama Alat" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Stok</label>
                        <div class="col-sm-7">
                            <input type="number" name="stok" class="form-control" placeholder="Stok" min="0" required>
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

<!-- MODAL EDIT ALAT -->
<?php foreach ($data->result_array() as $i):
    $id           = $i['id_alat'];
    $nama_alat    = $i['nama_alat'];
    $deskripsi    = $i['deskripsi'];
    $stok         = $i['stok'];
    $dipinjam     = $i['dipinjam'];
    $rusak_hilang = $i['rusak_hilang'];
?>
<div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span class="fa fa-close"></span></button>
                <h4 class="modal-title">Edit Alat</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'admin/alat/update_alat';?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="xid" value="<?php echo $id;?>"/>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nama Alat</label>
                        <div class="col-sm-7">
                            <input type="text" name="xnama" value="<?php echo $nama_alat;?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Deskripsi</label>
                        <div class="col-sm-7">
                            <input type="text" name="xdeskripsi" value="<?php echo $deskripsi;?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Stok</label>
                        <div class="col-sm-7">
                            <input type="number" name="xstok" value="<?php echo $stok;?>" class="form-control" min="0" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Dipinjam</label>
                        <div class="col-sm-7">
                            <input type="number" name="xdipinjam" value="<?php echo $dipinjam;?>" class="form-control" min="0" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Rusak/Hilang</label>
                        <div class="col-sm-7">
                            <input type="number" name="xrusak_hilang" value="<?php echo $rusak_hilang;?>" class="form-control" min="0" required>
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

<!-- MODAL HAPUS ALAT -->
<?php foreach ($data->result_array() as $i):
    $id        = $i['id_alat'];
    $nama_alat = $i['nama_alat'];
?>
<div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span class="fa fa-close"></span></button>
                <h4 class="modal-title">Hapus Alat</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'admin/alat/hapus_alat';?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                    <p>Apakah Anda yakin mau menghapus alat <b><?php echo $nama_alat;?></b> ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger btn-flat">Hapus</button>
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