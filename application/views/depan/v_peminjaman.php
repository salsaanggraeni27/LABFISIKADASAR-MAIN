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
    <link href="<?php echo base_url().'theme/css/modern-custom.css'?>" rel="stylesheet">
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
        <!-- Hero Header -->
        <div class="row">
            <div class="col-md-12">
                <div class="peminjaman-hero-card">
                    <span class="hero-badge"><i class="fa fa-flask"></i> Laboratorium Fisika Dasar</span>
                    <h2>Peminjaman Alat Praktikum</h2>
                    <p>Kelola peminjaman dan pengembalian alat praktikum secara online dengan status real-time.</p>
                </div>
            </div>
        </div>

        <!-- Section Title for Status Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-modern">
                    <h3><i class="fa fa-list-alt"></i> Status Peminjaman Alat</h3>
                    <p>Daftar transaksi peminjaman alat praktikum yang aktif beserta riwayat pengembalian.</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped" id="example1">
                        <thead>
                        <tr>
                            <th>No.</th>
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
                                <td><strong><?php echo $row->nrp;?></strong></td>
                                <td><?php echo $row->nama;?></td>
                                <td><span class="badge badge-light" style="font-weight: 600; color: #475569; border: 1px solid #cbd5e1;"><?php echo $row->jurusan;?></span></td>
                                <td><?php echo $row->kelompok_kecil;?></td>
                                <td><?php echo $row->kelompok_besar;?></td>
                                <td><?php echo $row->kelas;?></td>
                                <td><small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $row->hari_jam;?></small></td>
                                
                                <!-- FORM UNTUK USER KONFIRMASI KONDISI ALAT -->
                                <td>
                                    <span style="font-weight: 700; color: #1e293b;"><?php echo $row->nama_alat;?></span>
                                    
                                    <?php if($row->status == 0): ?>
                                        <!-- Jika status masih dipinjam, munculkan form -->
                                        <form action="<?php echo site_url('peminjaman/kembalikan');?>" method="post" class="form-return-inline">
                                            <input type="hidden" name="xid_peminjaman" value="<?php echo $row->id_peminjaman; ?>">
                                            <select name="xkondisi" class="form-control" required>
                                                <option value="">-- Keterangan Alat --</option>
                                                <option value="Aman">Aman (Lengkap)</option>
                                                <option value="Rusak/Hilang">Rusak/Hilang</option>
                                            </select>
                                            <button type="submit" class="btn btn-action-return"><i class="fa fa-paper-plane"></i> Kirim Pengembalian</button>
                                        </form>
                                    <?php elseif($row->status == 1): ?>
                                        <!-- Jika user sudah mengisi, tampilkan keterangannya -->
                                        <div style="font-size: 12.5px; color: #d97706; margin-top: 6px; background: #fffbe6; padding: 4px 8px; border-radius: 6px; border: 1px solid #ffe58f;">
                                            <i class="fa fa-info-circle"></i> <strong>Kondisi:</strong> <?php echo $row->kondisi; ?> (Menunggu Konfirmasi)
                                        </div>
                                    <?php else: ?>
                                        <!-- Jika admin sudah ACC, tampilkan kondisi akhirnya -->
                                        <div style="font-size: 12.5px; color: #16a34a; margin-top: 6px; background: #f0fdf4; padding: 4px 8px; border-radius: 6px; border: 1px solid #bbf7d0;">
                                            <i class="fa fa-check-circle"></i> <strong>Kondisi Akhir:</strong> <?php echo $row->kondisi; ?>
                                        </div>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php if ($row->status == 0) {
                                        echo "<span class='badge-status badge-status-dipinjam'><i class='fa fa-clock-o'></i> Dipinjam</span>";
                                    } elseif ($row->status == 1) {
                                        echo "<span class='badge-status badge-status-menunggu'><i class='fa fa-hourglass-half'></i> Menunggu Admin</span>";
                                    } else {
                                        echo "<span class='badge-status badge-status-selesai'><i class='fa fa-check-circle'></i> Selesai</span>";
                                    } ?>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div style="height: 50px;"></div>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="modern-card-box">
                    <h3><i class="fa fa-plus-circle"></i> Form Peminjaman Alat</h3>
                    
                    <form action="<?php echo base_url().'Peminjaman/simpan_peminjaman'?>" method="post" class="contact-form" style="box-shadow: none; border: none; padding: 0;">
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">NRP Praktikan</label>
                            <input type="text" class="form-control" placeholder="Contoh: 142023001" name="xnrp" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="xnama" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">Jurusan / Program Studi</label>
                            <input type="text" class="form-control" placeholder="Contoh: Teknik Sipil" name="xjurusan" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-weight: 600; font-size: 13px; color: #475569;">Kelompok Kecil</label>
                                    <input type="text" class="form-control" placeholder="Contoh: A31-1414" name="xkelompok_kecil" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-weight: 600; font-size: 13px; color: #475569;">Kelompok Besar</label>
                                    <input type="text" class="form-control" placeholder="Contoh: TKB04" name="xkelompok_besar" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-weight: 600; font-size: 13px; color: #475569;">Kelas</label>
                                    <input type="text" class="form-control" placeholder="Contoh: A" name="xkelas" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-weight: 600; font-size: 13px; color: #475569;">Hari & Jam Praktikum</label>
                                    <input type="text" class="form-control" placeholder="Contoh: Rabu Pagi/08.00-12.00" name="xhari_jam" required>
                                </div>
                            </div>
                        </div>

                        <label style="font-weight: 700; font-size: 14px; color: #0f172a; margin-top: 15px; margin-bottom: 10px; display: block;">Pilih Alat yang Dipinjam</label>
                        <div class="tools-selection-table mb-4">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>Nama Alat</th>
                                        <th class="text-center" style="width: 25%;">Stok Tersedia</th>
                                        <th style="width: 30%;">Jumlah Pinjam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_alat->result() as $alat): ?>
                                    <tr>
                                        <td>
                                            <strong style="color: #334155;"><?php echo $alat->nama_alat; ?></strong>
                                            <input type="hidden" name="xid_alat[]" value="<?php echo $alat->id_alat; ?>">
                                            <input type="hidden" name="xnama_alat[]" value="<?php echo $alat->nama_alat; ?>">
                                        </td>
                                        <td class="text-center">
                                            <?php 
                                                if($alat->stok_tersedia > 0){
                                                    echo "<span class='badge-status badge-status-selesai' style='padding: 3px 10px;'>".$alat->stok_tersedia."</span>";
                                                } else {
                                                    echo "<span class='badge-status badge-status-dipinjam' style='padding: 3px 10px;'>Habis</span>";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm" name="xjumlah_pinjam[]" min="0" max="<?php echo $alat->stok_tersedia; ?>" value="0" <?php echo ($alat->stok_tersedia == 0) ? 'disabled' : ''; ?> style="border-radius: 6px; text-align: center;">
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <button type="submit" class="btn btn-submit"><i class="fa fa-paper-plane"></i> KONFIRMASI PEMINJAMAN</button>
                    </form>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="modern-card-box">
                    <h3><i class="fa fa-book"></i> Panduan Peminjaman Alat</h3>
                    <p style="color: #64748b; font-size: 14px; margin-bottom: 25px;">Petunjuk penting prosedur peminjaman dan pengembalian alat laboratorium:</p>
                    
                    <div class="contact-details mb-4">
                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        <div>
                            <h6>1. Pengisian Identitas Lengkap</h6>
                            <p>Pastikan identitas NRP, Nama, Jurusan, dan Kelompok diisi dengan teliti sesuai data praktikan yang bertugas meminjam alat.</p>
                        </div>
                    </div>
                    
                    <div class="contact-details mb-4">
                        <i class="fa fa-cubes" aria-hidden="true"></i>
                        <div>
                            <h6>2. Pemilihan Alat Dinamis</h6>
                            <p>Stok alat yang tampil diperbarui otomatis dari sistem admin. Tentukan jumlah unit alat yang ingin dipinjam sesuai kebutuhan modul praktikum.</p>
                        </div>
                    </div>
                    
                    <div class="contact-details mb-4">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <div>
                            <h6>3. Konfirmasi Pengembalian Alat</h6>
                            <p>Setelah praktikum selesai, praktikan WAJIB mengisi status pengembalian pada tabel di atas. Setelah dikonfirmasi oleh Admin, status akan menjadi "Selesai" dan stok otomatis bertambah kembali.</p>
                        </div>
                    </div>

                    <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-left: 4px solid #f97316; padding: 18px 20px; border-radius: 12px; margin-top: 30px;">
                        <h6 style="color: #0f172a; font-weight: 700; font-size: 14px; margin-bottom: 5px;"><i class="fa fa-exclamation-triangle" style="color: #f97316;"></i> Perhatian!</h6>
                        <p style="font-size: 13px; color: #475569; margin: 0;">Jagalah alat laboratorium dengan hati-hati. Kerusakan atau kehilangan alat menjadi tanggung jawab penuh kelompok peminjam.</p>
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