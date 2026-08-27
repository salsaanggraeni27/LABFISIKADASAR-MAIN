<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab. Fisika Dasar Itenas - Peminjaman Alat Praktikum</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="<?php echo base_url().'theme/css/dataTables.bootstrap4.min.css'?>" rel="stylesheet">
    <style>
        .keterangan{
            color: #FFFFFF;
        }
    </style>
</head>

<body class="content-animated">
<!-- PRELOADER
==================================================-->
<div class="page-loader">
    <div class="loader-area"></div>
    <div class="loader font-face1">loading...</div>
</div>
<!--============================= HEADER =============================-->
<marquee class="header-topbar">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-8 col-md-9">
                <div class="header-top_address">
                    <div class="header-top_list">
                        Halaman Peminjaman Alat Praktikum Laboratorium Fisika Dasar Itenas
                    </div>
                </div>
            </div>
        </div>
    </div>
</marquee>
<div data-toggle="affix" style="background-color: #FFFFFF;">
    <div class="container nav-menu2">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                    <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                        <span class="icon-menu"></span>
                    </button>
                    <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="250px;" src="<?php echo base_url().'theme/images/logo-biru.png'?>"></a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('home');?>"><i class="fa fa-home" aria-hidden="true"></i>  Home</a>
                            </li>
                            
                            <?php if($this->session->userdata('masuk') == TRUE): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('asisten');?>"><i class="fa fa-users" aria-hidden="true"></i>  Asisten</a>
                                </li>
                                <div class="dropdown">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-flask" aria-hidden="true"></i>  Praktikum</a>
                                        <div class="dropdown-content">
                                            <a href="<?php echo site_url('blog/kategori/Peraturan');?>">Peraturan Praktikum</a>
                                            <a href="<?php echo site_url('kelprak');?>">Kelompok Praktikum</a>
                                            <a href="<?php echo site_url('jadwal');?>">Jadwal Praktikum</a>
                                            <a href="<?php echo site_url('nilai');?>">Nilai Praktikum</a>
                                            <a href="<?php echo site_url('modul');?>">Modul Praktikum</a>
                                            <a href="<?php echo site_url('perizinan');?>">Perizinan Praktikum</a>
                                            <a href="<?php echo site_url('peminjaman');?>">Peminjaman Alat Praktikum</a>
                                        </div>
                                    </li>
                                </div>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog/kategori/Info-Praktikum');?>"><i class="fa fa-rss-square" aria-hidden="true"></i>  Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>"><i class="fa fa-bullhorn" aria-hidden="true"></i>  Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>"><i class="fa fa-download" aria-hidden="true"></i>  Download</a>
                                </li>
                            <?php endif; ?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('contact');?>"><i class="fa fa-phone" aria-hidden="true"></i>  Contact</a>
                            </li>

                            <?php if($this->session->userdata('masuk') == TRUE): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.instagram.com/labfisdasitenas?igsh=MWJqZXE3NXNnem84dQ==" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>  Instagram</a>
                                </li>
                            <?php endif; ?>

                            <?php if($this->session->userdata('masuk') == TRUE): ?>
                                <div class="dropdown">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i>  Akun</a>
                                        <div class="dropdown-content" style="min-width: 240px; padding: 15px; border-radius: 6px; text-align: left; box-shadow: 0px 8px 24px rgba(0,0,0,0.15); border: 1px solid #e0e0e0; right: 0; background-color: #ffffff; z-index: 1000;">
                                            <div style="font-size: 13px; color: #666; margin-bottom: 3px;">Nama:</div>
                                            <div style="font-size: 14px; font-weight: bold; color: #333; margin-bottom: 10px; word-wrap: break-word;"><?php echo $this->session->userdata('nama');?></div>
                                            
                                            <div style="font-size: 13px; color: #666; margin-bottom: 3px;">Username:</div>
                                            <div style="font-size: 14px; font-weight: bold; color: #333; margin-bottom: 10px; word-wrap: break-word;"><?php echo $this->session->userdata('user');?></div>
                                            
                                            <div style="font-size: 13px; color: #666; margin-bottom: 3px;">Sandi:</div>
                                            <div style="font-size: 14px; font-weight: bold; color: #333; margin-bottom: 15px;">••••••••</div>
                                            
                                            <hr style="margin: 10px 0; border: 0; border-top: 1px solid #eee;">
                                            <a href="<?php echo site_url('admin/login/logout');?>" style="color: #d9534f !important; padding: 8px 12px !important; display: block; font-size: 14px; font-weight: bold; text-align: center; background-color: #fdf2f2; border-radius: 4px; border: 1px solid #f5c2c2; text-decoration: none;"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout</a>
                                        </div>
                                    </li>
                                </div>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('administrator');?>"><i class="fa fa-sign-in" aria-hidden="true"></i>  Login</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--//END HEADER -->

<section class="contact" style="padding-bottom: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Halaman Peminjaman Alat Praktikum</h2>
                    <br>
                    <h3 align="center" class="bold">Status Peminjaman</h3>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped" id="example1">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Kel. Kecil</th>
                            <th>Kel. Besar</th>
                            <th>Kelas</th>
                            <th>Hari/Jam</th>
                            <th>Alat Dipinjam</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no=1;
                        foreach ($data_peminjaman->result() as $row):
                            ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $row->nrp;?></td>
                                <td><?php echo $row->nama;?></td>
                                <td><?php echo $row->jurusan;?></td>
                                <td><?php echo $row->kelompok_kecil;?></td>
                                <td><?php echo $row->kelompok_besar;?></td>
                                <td><?php echo $row->kelas;?></td>
                                <td><?php echo $row->hari_jam;?></td>
                                
                                <!-- FORM UNTUK USER KONFIRMASI KONDISI ALAT -->
                                <td>
                                    <strong><?php echo $row->nama_alat;?></strong>
                                    
                                    <?php if($row->status == 0): ?>
                                        <!-- Jika status masih dipinjam, munculkan form -->
                                        <form action="<?php echo site_url('peminjaman/kembalikan');?>" method="post" style="margin-top: 10px; background: #f8f9fa; padding: 10px; border-radius: 5px;">
                                            <input type="hidden" name="xid_peminjaman" value="<?php echo $row->id_peminjaman; ?>">
                                            <select name="xkondisi" class="form-control" style="font-size: 13px; height: 30px; margin-bottom: 5px;" required>
                                                <option value="">-- Keterangan Alat --</option>
                                                <option value="Aman">Aman (Lengkap)</option>
                                                <option value="Rusak/Hilang">Rusak/Hilang</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary btn-sm btn-block" style="font-size: 12px; padding: 3px;">Kirim Pengembalian</button>
                                        </form>
                                    <?php elseif($row->status == 1): ?>
                                        <!-- Jika user sudah mengisi, tampilkan keterangannya -->
                                        <br><span style="font-size: 13px; color: #ff9800;"><strong>Keterangan:</strong> <?php echo $row->kondisi; ?> (Menunggu Konfirmasi)</span>
                                    <?php else: ?>
                                        <!-- Jika admin sudah ACC, tampilkan kondisi akhirnya -->
                                        <br><span style="font-size: 13px; color: #4caf50;"><strong>Kondisi Akhir:</strong> <?php echo $row->kondisi; ?></span>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php if ($row->status == 0) {
                                        echo "<span class='badge badge-danger'>Dipinjam</span>";
                                    } elseif ($row->status == 1) {
                                        echo "<span class='badge badge-warning'>Menunggu Admin</span>";
                                    } else {
                                        echo "<span class='badge badge-success'>Selesai</span>";
                                    } ?>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
        
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form" style="margin-bottom: 30px;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp contact-address" style="margin-bottom: 20px;">
                                <h3>Form Peminjaman Alat</h3>
                                
                                <form class="form-horizontal" action="<?php echo base_url().'Peminjaman/simpan_peminjaman'?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="NRP" name="xnrp" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="NAMA" name="xnama" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="JURUSAN" name="xjurusan" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="KELOMPOK KECIL (Contoh: A31-1414)" name="xkelompok_kecil" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="KELOMPOK BESAR (Contoh: TKB04)" name="xkelompok_besar" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="KELAS" name="xkelas" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="HARI/JAM (Contoh: Rabu Pagi/08.00-12.00)" name="xhari_jam" required>
                                    </div>

                                    <h4 class="mt-4 mb-3" style="color: #fff;">Pilih Alat yang Dipinjam</h4>
                                    <div style="background: #fff; padding: 15px; border-radius: 5px; color: #333; max-height: 300px; overflow-y: auto; width: 100%;">
                                        <table class="table table-bordered table-sm" style="width: 100%;">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Nama Alat</th>
                                                    <th class="text-center" style="width: 20%;">Tersedia</th>
                                                    <th style="width: 35%;">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data_alat->result() as $alat): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $alat->nama_alat; ?>
                                                        <input type="hidden" name="xid_alat[]" value="<?php echo $alat->id_alat; ?>">
                                                        <input type="hidden" name="xnama_alat[]" value="<?php echo $alat->nama_alat; ?>">
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                                            if($alat->stok_tersedia > 0){
                                                                echo "<span class='badge badge-success'>".$alat->stok_tersedia."</span>";
                                                            } else {
                                                                echo "<span class='badge badge-danger'>Habis</span>";
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-sm" name="xjumlah_pinjam[]" min="0" max="<?php echo $alat->stok_tersedia; ?>" value="0" <?php echo ($alat->stok_tersedia == 0) ? 'disabled' : ''; ?>>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <br>
                                    <button type="submit" class="btn btn-default btn-submit">KONFIRMASI PEMINJAMAN</button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address" style="margin-bottom: 20px;">
                                <h3>Panduan Peminjaman Alat</h3>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    <h6>Input Data</h6>
                                    <p>Pastikan identitas NRP, Nama, dan Kelompok diisi sesuai dengan data praktikan yang bertugas melakukan peminjaman.</p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    <h6>Input Nama Alat Dinamis</h6>
                                    <p>List alat di atas diambil langsung dari stok ketersediaan admin. Cukup ubah angka 0 menjadi jumlah alat yang ingin dipinjam. Stok akan otomatis berkurang.</p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    <h6>Konfirmasi Pengembalian</h6>
                                    <p>Jika praktikum selesai, asisten WAJIB melapor ke Admin agar status diubah menjadi "Selesai" dan stok alat kembali bertambah ke jumlah semula.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logo-white2.png'?>" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by <br><a target="_blank">Divisi Media & Informasi</a><br>Laboratorium Fisika Dasar Itenas <br>All rights reserved.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sitemap">
                    <h3>Menu Utama</h3>
                    <ul>
                        <li><a href="<?php echo site_url();?>">Home</a></li>
                        <li><a href="<?php echo site_url('artikel');?>">Blog </a></li>
                        <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                        <li><a href="<?php echo site_url('alumni');?>">Alumni</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sitemap">
                    <h3>Akademik</h3>
                    <ul>
                        <li><a href="<?php echo site_url('jadwal');?>">Jadwal Praktikum</a></li>
                        <li><a href="<?php echo site_url('nilai');?>">Nilai Praktikum</a></li>
                        <li><a href="<?php echo site_url('kelprak');?>">Kelompok Praktikum </a></li>
                        <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                        <li><a href="<?php echo site_url('modul');?>">Modul Praktikum</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address">
                    <h3>Hubungi Kami</h3>
                    <p><span>Alamat: <br> </span>  Gedung 16, Jl. PH.H. Mustofa No.23, Bandung</p>
                    <p>Email : labfisikadasar@itenas.ac.id</p>
                    <ul class="footer-social-icons">
                        <li><a href="https://www.instagram.com/labfisdasitenas/"><i class="fa fa-instagram fa-fb" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/laboratorium-fisika-dasar-institut-teknologi-nasional-bandung-63830321a/"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC7lNoOy5i_o1XL-P7qDQo2A"><i class="fa fa-youtube fa-tw" aria-hidden="true"></i></a></li>
                        <li><a href="mailto:labfisikadasar@itenas.ac.id"><i class="fa fa-google-plus fa-tw" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--//END FOOTER -->

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="<?php echo base_url('tema/js/jquery-2.2.4.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/jquery.easing.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/waypoints.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/jquery.scrollTo.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/jquery.localScroll.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/jquery.viewport.mini.js')?>"></script>
<script src="<?php echo base_url('tema/js/jquery.sticky.js')?>"></script>
<script src="<?php echo base_url('tema/js/jquery.fitvids.js')?>"></script>
<script src="<?php echo base_url('tema/js/jquery.parallax-1.1.3.js')?>"></script>
<script src="<?php echo base_url('tema/js/isotope.pkgd.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/imagesloaded.pkgd.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/masonry.pkgd.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/jquery.counterup.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/slick.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/wow.min.js')?>"></script>
<script src="<?php echo base_url('tema/js/script.js')?>"></script>

<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
<script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
<script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
<script src="<?php echo base_url().'theme/js/script.js'?>"></script>
<script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>

<script>
    $(document).ready(function () {
        $("#example1").DataTable();
    });
</script>
</body>
</html>