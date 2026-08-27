<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab. Fisika Dasar Itenas - Download</title>
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
    <link href="<?php echo base_url().'theme/css/dataTables.bootstrap4.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'theme/css/modern-custom.css'?>" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ===== Page Layout ===== */
        .contact {
            padding: 60px 0 80px !important;
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%) !important;
        }

        /* ===== Page Title ===== */
        .contact-title h2 {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 30px !important;
            font-weight: 800 !important;
            color: #0f172a !important;
            text-align: center !important;
            margin-bottom: 10px !important;
            position: relative;
            padding-bottom: 16px;
        }
        .contact-title h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #f97316, #fb923c);
            margin: 14px auto 0;
            border-radius: 10px;
        }

        /* ===== Table Container ===== */
        .table-responsive {
            background: #ffffff !important;
            border-radius: 20px !important;
            border: 1px solid rgba(226, 232, 240, 0.7) !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04) !important;
            padding: 28px !important;
            overflow: hidden;
        }

        /* ===== DataTable Overrides ===== */
        .table {
            margin-bottom: 0 !important;
            border-collapse: separate !important;
            border-spacing: 0 !important;
        }
        .table thead th {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            background-color: #f8fafc !important;
            border-bottom: 2px solid #e2e8f0 !important;
            border-top: none !important;
            color: #475569 !important;
            font-weight: 700 !important;
            font-size: 13px !important;
            text-transform: uppercase !important;
            letter-spacing: 0.8px;
            padding: 16px 20px !important;
        }
        .table tbody td {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            padding: 16px 20px !important;
            font-size: 14px !important;
            color: #334155 !important;
            border-top: 1px solid #f1f5f9 !important;
            vertical-align: middle !important;
            font-weight: 500;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #ffffff !important;
        }
        .table-striped tbody tr:nth-of-type(even) {
            background-color: #fafbfc !important;
        }
        .table tbody tr {
            transition: background-color 0.2s ease;
        }
        .table tbody tr:hover {
            background-color: rgba(249, 115, 22, 0.03) !important;
        }

        /* ===== Download Button ===== */
        .table .btn-info {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            background: linear-gradient(135deg, #f97316, #ea580c) !important;
            border: none !important;
            color: #ffffff !important;
            font-weight: 600 !important;
            font-size: 13px !important;
            border-radius: 10px !important;
            padding: 8px 22px !important;
            transition: all 0.25s ease !important;
            box-shadow: 0 2px 8px rgba(249, 115, 22, 0.2);
        }
        .table .btn-info:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 6px 16px rgba(249, 115, 22, 0.35) !important;
        }
        .table .btn-info i {
            margin-right: 5px;
        }

        /* ===== DataTables Search & Length ===== */
        .dataTables_wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
        }
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #cbd5e1 !important;
            border-radius: 10px !important;
            padding: 8px 14px !important;
            font-size: 14px !important;
            background-color: #f8fafc !important;
            transition: all 0.2s ease;
            outline: none !important;
        }
        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #f97316 !important;
            box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.12) !important;
            background-color: #ffffff !important;
        }
        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #cbd5e1 !important;
            border-radius: 8px !important;
            padding: 6px 10px !important;
            font-size: 14px !important;
            background-color: #f8fafc !important;
        }
        .dataTables_wrapper .dataTables_info {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 13px !important;
            color: #64748b !important;
            padding-top: 16px !important;
        }

        /* ===== DataTables Pagination ===== */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            border-radius: 10px !important;
            border: 1px solid #e2e8f0 !important;
            margin: 0 3px !important;
            padding: 6px 14px !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            color: #475569 !important;
            transition: all 0.2s ease !important;
            background: #ffffff !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: #f1f5f9 !important;
            color: #0284c7 !important;
            border-color: #cbd5e1 !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: linear-gradient(135deg, #0284c7, #0369a1) !important;
            border-color: transparent !important;
            color: #ffffff !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background: linear-gradient(135deg, #0284c7, #0369a1) !important;
            color: #ffffff !important;
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
                        Halaman Download File Praktikum
                    </div>
                </div>
            </div>

        </div>
    </div>
</marquee>
<div data-toggle="affix" style="background-color: #FFFFFF">
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
<section>
</section>
<!--//END HEADER -->
<section class="contact" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="peminjaman-hero-card">
                    <span class="hero-badge"><i class="fa fa-download"></i> Download Center</span>
                    <h2>Download Berkas & Modul</h2>
                    <p>Unduh berkas, modul, dan dokumen pendukung praktikum Laboratorium Fisika Dasar ITENAS.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped" id="display">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Files</th>

                            <th style="text-align:right;">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no=1;
                        foreach ($data->result() as $row):
                            ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $row->file_judul;?></td>

                                <td style="text-align:right;"><a href="<?php echo site_url('download/get_file/'.$row->file_id);?>" class="btn btn-info">Download</a></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
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
    $(document).ready(function() {
        $('#display').DataTable();
    });
</script>
</body>

</html>
