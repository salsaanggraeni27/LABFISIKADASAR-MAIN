<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab. Fisika Dasar Itenas - Perizinan Praktikum</title>
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
    <div class="loader font-face1">loading...
    </div>
</div>
<!--============================= HEADER =============================-->
<marquee class="header-topbar">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-8 col-md-9">
                <div class="header-top_address">
                    <div class="header-top_list">
                        Halaman Perizinan Praktikum Laboratorium Fisika Dasar Itenas
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
        <!-- Hero Banner -->
        <div class="row">
            <div class="col-md-12">
                <div class="peminjaman-hero-card">
                    <span class="hero-badge"><i class="fa fa-envelope-o"></i> Administrasi Praktikan</span>
                    <h2>Perizinan & Susulan Praktikum</h2>
                    <p>Pengajuan surat izin ketidakhadiran praktikum dan informasi pelaksanaan praktikum susulan.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="section-title-modern">
                    <h3><i class="fa fa-file-text-o"></i> Data Perizinan Praktikum</h3>
                </div>
                <div class="table-responsive mb-5">
                    <table class="table table-striped" id="example1">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Jurusan</th>
                            <th>Modul</th>
                            <th>Tanggal</th>
                            <th>Shift</th>
                            <th>Status Perizinan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no=1;
                        foreach ($data->result() as $row):
                            ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><strong><?php echo $row->nama;?></strong></td>
                                <td><?php echo $row->nrp;?></td>
                                <td><span class="badge badge-light" style="font-weight: 600; color: #475569; border: 1px solid #cbd5e1;"><?php echo $row->jurusan;?></span></td>
                                <td><?php echo $row->modul;?></td>
                                <td><small class="text-muted"><i class="fa fa-calendar"></i> <?php echo $row->tanggal;?></small></td>
                                <td><?php echo $row->shift;?></td>
                                <td><?php if ($row->perizinan_status==0)
                                    {
                                        echo "<span class='badge-status badge-status-dipinjam'><i class='fa fa-clock-o'></i> Belum Dilihat</span>";
                                    }elseif($row->perizinan_status==1){
                                        echo "<span class='badge-status badge-status-selesai'><i class='fa fa-check-circle'></i> Approved</span>";
                                    }else{
                                        echo "<span class='badge-status' style='background: #fef2f2; color: #dc2626; border: 1px solid #fecaca;'><i class='fa fa-times-circle'></i> Ditolak</span>";
                                    }
                                    ?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="section-title-modern">
                    <h3><i class="fa fa-refresh"></i> Data Susulan Praktikum</h3>
                </div>
                <div class="table-responsive mb-5">
                    <table class="table table-striped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Jurusan</th>
                            <th>Kelompok Susulan</th>
                            <th>Modul</th>
                            <th>Hari Tanggal / Jam</th>
                            <th>Asisten</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no=1;
                        foreach ($susulan->result() as $row):
                            ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><strong><?php echo $row->nama;?></strong></td>
                                <td><?php echo $row->nrp;?></td>
                                <td><span class="badge badge-light" style="font-weight: 600; color: #475569; border: 1px solid #cbd5e1;"><?php echo $row->jurusan;?></span></td>
                                <td><span class="badge-status badge-status-menunggu"><?php echo $row->kelompok;?></span></td>
                                <td><?php echo $row->modul;?></td>
                                <td><small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $row->haritanggal;?></small></td>
                                <td><?php echo $row->asisten;?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div style="height: 30px;"></div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="modern-card-box">
                    <h3><i class="fa fa-pencil-square-o"></i> Form Pengajuan Perizinan</h3>
                    
                    <form action="<?php echo base_url().'Perizinan/simpan_file'?>" method="post" enctype="multipart/form-data" class="contact-form" style="box-shadow: none; border: none; padding: 0;">
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="xnama" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">NRP</label>
                            <input type="text" class="form-control" placeholder="Contoh: 15-2018-085" name="xnrp" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">Jurusan</label>
                            <input type="text" class="form-control" placeholder="Jurusan / Program Studi" name="xjurusan" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-weight: 600; font-size: 13px; color: #475569;">Modul Praktikum</label>
                                    <input type="text" class="form-control" placeholder="Contoh: L1" name="xmodul" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-weight: 600; font-size: 13px; color: #475569;">Shift Praktikum</label>
                                    <input type="text" class="form-control" placeholder="Pagi / Siang" name="xshift" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">Tanggal Praktikum</label>
                            <input type="date" class="form-control" name="xtanggal" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">Alasan Tidak Hadir</label>
                            <textarea placeholder="Tuliskan alasan berhalangan hadir..." class="form-control" name="xalasan" required rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">Upload Surat Izin & Bukti (PDF)</label>
                            <input type="file" class="form-control" name="xsurat" required accept=".pdf">
                        </div>

                        <button type="submit" class="btn btn-submit"><i class="fa fa-paper-plane"></i> KIRIM PERIZINAN</button>
                        <div class="keterangan mt-3"><?php echo $this->session->flashdata('msg');?></div>
                    </form>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="modern-card-box">
                    <h3><i class="fa fa-info-circle"></i> Panduan Pengisian Data</h3>
                    <p style="color: #64748b; font-size: 14px; margin-bottom: 25px;">Petunjuk persyaratan pengajuan perizinan dan susulan praktikum:</p>

                    <div class="contact-details mb-4">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <div>
                            <h6>1. Shift Praktikum</h6>
                            <p>Diisi dengan <strong>Pagi</strong> atau <strong>Siang</strong> sesuai dengan jadwal reguler praktikum Anda.</p>
                        </div>
                    </div>

                    <div class="contact-details mb-4">
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                        <div>
                            <h6>2. Alasan Ketidakhadiran</h6>
                            <p>Tuliskan alasan jelas mengapa Anda tidak dapat mengikuti praktikum pada tanggal yang ditentukan.</p>
                        </div>
                    </div>

                    <div class="contact-details mb-4">
                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        <div>
                            <h6>3. Berkas Surat Izin & Bukti</h6>
                            <p>Upload surat izin yang telah ditandatangani orangtua/wali serta lampirkan bukti resmi (surat sakit dokter/surat lomba). Disatukan dalam 1 file PDF.</p>
                        </div>
                    </div>

                    <div class="contact-details mb-4">
                        <i class="fa fa-font" aria-hidden="true"></i>
                        <div>
                            <h6>4. Format Penamaan File</h6>
                            <p>Gunakan format penamaan file: <code>SuratIzin_NRP_Nama.pdf</code></p>
                        </div>
                    </div>

                    <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-left: 4px solid #0284c7; padding: 18px 20px; border-radius: 12px; margin-top: 20px;">
                        <h6 style="color: #0f172a; font-weight: 700; font-size: 14px; margin-bottom: 5px;"><i class="fa fa-map-marker" style="color: #0284c7;"></i> Lokasi Laboratorium</h6>
                        <p style="font-size: 13px; color: #475569; margin: 0;">Gedung 16 ITENAS, Jl. PH.H. Mustofa No.23, Bandung.<br>Email: labfisikadasar@itenas.ac.id | Telp: (+62)85324172245</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <div class="row">
            <div class="col-md-12">
                <p class="contact-center">OR</p>
            </div>
        </div>
    </div>
</section>
<!--//END  ABOUT IMAGE -->
<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logo-white2.png'?>" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by <br><a  target="_blank">Divisi Media & Informasi</a><br>Laboratorium Fisika Dasar Itenas <br>All rights reserved.</p>
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
<!-- jQuery, Bootstrap JS. -->
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
<!-- Subscribe / Contact-->
<script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
<script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
<!-- Script JS -->
<script src="<?php echo base_url().'theme/js/script.js'?>"></script>
<script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>

<script>
    var mymap = L.map('mapid').setView([-6.896563, 107.635969], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(mymap);
    L.marker([-6.896563, 107.635969]).addTo(mymap)
        .bindPopup("Laboratorium Fisika Dasar ITENAS").openPopup();


</script>
<script>
    $(document).ready(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });
    });
</script>
</body>

</html>
