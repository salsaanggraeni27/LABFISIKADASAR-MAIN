<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab. Fisika Dasar Itenas - Blog</title>
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
    <?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
    ?>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* ===== Blog Section Layout ===== */
        .blog-wrap {
            padding: 60px 0 80px !important;
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%) !important;
        }

        /* ===== Blog Post Card ===== */
        .blog-single-item {
            background: #ffffff !important;
            border-radius: 20px !important;
            border: 1px solid rgba(226, 232, 240, 0.7) !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04) !important;
            overflow: hidden;
            margin-bottom: 30px !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .blog-single-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.07) !important;
        }
        .blog-img_block {
            position: relative;
            overflow: hidden;
            border-radius: 20px 20px 0 0 !important;
        }
        .blog-img_block img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .blog-single-item:hover .blog-img_block img {
            transform: scale(1.05);
        }
        .blog-date {
            position: absolute !important;
            bottom: 14px !important;
            left: 14px !important;
            background: linear-gradient(135deg, #0284c7, #0369a1) !important;
            color: #ffffff !important;
            padding: 6px 14px !important;
            border-radius: 10px !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 12px !important;
            font-weight: 600 !important;
            box-shadow: 0 3px 10px rgba(2, 132, 199, 0.3);
        }
        .blog-date span {
            color: #ffffff !important;
        }
        .blog-tiltle_block {
            padding: 24px 28px 20px !important;
        }
        .blog-tiltle_block h4 {
            margin-bottom: 10px !important;
        }
        .blog-tiltle_block h4 a {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 18px !important;
            font-weight: 700 !important;
            color: #1e293b !important;
            text-decoration: none !important;
            transition: color 0.2s ease !important;
            line-height: 1.4;
        }
        .blog-tiltle_block h4 a:hover {
            color: #f97316 !important;
        }
        .blog-tiltle_block h6 {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 12.5px !important;
            color: #94a3b8 !important;
            font-weight: 500 !important;
            margin-bottom: 12px !important;
        }
        .blog-tiltle_block h6 a {
            color: #64748b !important;
            text-decoration: none !important;
        }
        .blog-tiltle_block h6 a span {
            margin-left: 4px;
        }
        .blog-tiltle_block h6 a i {
            color: #94a3b8;
            margin-right: 3px;
        }
        .blog-icons {
            margin-top: 16px !important;
            padding-top: 16px !important;
            border-top: 1px solid #f1f5f9 !important;
        }
        .blog-share_block a {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            background: linear-gradient(135deg, #f97316, #ea580c) !important;
            color: #ffffff !important;
            padding: 8px 22px !important;
            border-radius: 10px !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            text-decoration: none !important;
            transition: all 0.25s ease !important;
            display: inline-block;
        }
        .blog-share_block a:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.35) !important;
        }

        /* ===== Sidebar ===== */
        /* Search */
        .blog-search {
            width: 100% !important;
            border: 1px solid #cbd5e1 !important;
            border-radius: 12px !important;
            padding: 12px 16px !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 14px !important;
            background-color: #ffffff !important;
            transition: all 0.2s ease;
            margin-bottom: 10px !important;
        }
        .blog-search:focus {
            border-color: #f97316 !important;
            box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.12) !important;
            outline: none !important;
        }
        .btn-blogsearch {
            background: linear-gradient(135deg, #0284c7, #0369a1) !important;
            border: none !important;
            color: #ffffff !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-weight: 700 !important;
            font-size: 13px !important;
            border-radius: 10px !important;
            padding: 10px 24px !important;
            letter-spacing: 0.5px;
            transition: all 0.25s ease !important;
            width: 100%;
        }
        .btn-blogsearch:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.3) !important;
        }

        /* Category Block */
        .blog-category_block {
            background: #ffffff !important;
            border-radius: 16px !important;
            border: 1px solid rgba(226, 232, 240, 0.7) !important;
            padding: 24px !important;
            margin-top: 25px !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03) !important;
        }
        .blog-category_block h3 {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 18px !important;
            font-weight: 800 !important;
            color: #0f172a !important;
            margin-bottom: 16px !important;
            padding-bottom: 12px;
            border-bottom: 2px solid #f1f5f9;
        }
        .blog-category_block ul {
            list-style: none !important;
            padding: 0 !important;
            margin: 0 !important;
        }
        .blog-category_block ul li {
            margin-bottom: 0 !important;
        }
        .blog-category_block ul li a {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            padding: 12px 14px !important;
            color: #475569 !important;
            font-size: 14px !important;
            font-weight: 500 !important;
            text-decoration: none !important;
            border-radius: 10px !important;
            transition: all 0.2s ease !important;
        }
        .blog-category_block ul li a:hover {
            background-color: rgba(249, 115, 22, 0.06) !important;
            color: #f97316 !important;
            padding-left: 18px !important;
        }
        .blog-category_block ul li a i {
            color: #cbd5e1;
            transition: color 0.2s ease;
        }
        .blog-category_block ul li a:hover i {
            color: #f97316;
        }

        /* Popular Posts */
        .blog-featured_post {
            background: #ffffff !important;
            border-radius: 16px !important;
            border: 1px solid rgba(226, 232, 240, 0.7) !important;
            padding: 24px !important;
            margin-top: 25px !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03) !important;
        }
        .blog-featured_post h3 {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 18px !important;
            font-weight: 800 !important;
            color: #0f172a !important;
            margin-bottom: 16px !important;
            padding-bottom: 12px;
            border-bottom: 2px solid #f1f5f9;
        }
        .blog-featured-img_block {
            display: flex !important;
            align-items: center !important;
            gap: 14px !important;
            padding: 10px 0;
            transition: transform 0.2s ease;
        }
        .blog-featured-img_block:hover {
            transform: translateX(4px);
        }
        .blog-featured-img_block img {
            width: 65px !important;
            height: 50px !important;
            border-radius: 10px !important;
            object-fit: cover !important;
        }
        .blog-featured-img_block h5 {
            margin: 0 !important;
        }
        .blog-featured-img_block h5 a {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            color: #1e293b !important;
            text-decoration: none !important;
            transition: color 0.2s ease !important;
        }
        .blog-featured-img_block h5 a:hover {
            color: #f97316 !important;
        }
        .blog-featured-img_block p {
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-size: 12px !important;
            color: #94a3b8 !important;
            margin: 3px 0 0 !important;
        }
        .blog-featured_post hr {
            border-color: #f1f5f9 !important;
            margin: 5px 0 !important;
        }

        /* ===== Pagination ===== */
        .blog-wrap nav .pagination li a,
        .blog-wrap nav .pagination li span {
            border-radius: 10px !important;
            margin: 0 3px;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            font-weight: 600;
            font-size: 14px;
            border: 1px solid #e2e8f0;
            color: #475569;
            transition: all 0.2s ease;
        }
        .blog-wrap nav .pagination li.active a {
            background: linear-gradient(135deg, #0284c7, #0369a1) !important;
            border-color: transparent !important;
            color: #fff !important;
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
                        Halaman Blog Laboratorium Fisika Dasar Itenas
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
<section>
</section>
<!--//END HEADER -->
<!--============================= BLOG =============================-->
<section class="blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php echo $this->session->flashdata('msg');?>
                <?php foreach ($data->result() as $row) : ?>
                    <div class="blog-single-item">
                        <div class="blog-img_block">
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="blog-img">
                            <div class="blog-date">
                                <span><?php echo $row->tanggal;?></span>
                            </div>
                        </div>
                        <div class="blog-tiltle_block">
                            <h4><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo $row->tulisan_judul;?></a></h4>
                            <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $row->tulisan_author;?></span> </a>  |   <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $row->tulisan_kategori_nama;?></span></a></h6>
                            <?php echo limit_words($row->tulisan_isi,10).'...';?>
                            <div class="blog-icons">
                                <div class="blog-share_block">
                                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                <nav>
                    <?php error_reporting(0); echo $page;?>
                </nav>
            </div>
            <div class="col-md-4">
                <form action="<?php echo site_url('blog/search');?>" method="get">
                    <input type="text" name="keyword" placeholder="Search" class="blog-search" required>
                    <button type="submit" class="btn btn-warning btn-blogsearch">SEARCH</button>
                </form>
                <div class="blog-category_block">
                    <h3>Kategori</h3>
                    <ul>
                        <?php foreach ($category->result() as $row) : ?>
                            <li><a href="<?php echo site_url('blog/kategori/'.str_replace(" ","-",$row->kategori_nama));?>"><?php echo $row->kategori_nama;?><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <div class="blog-featured_post">
                    <h3>Populer</h3>
                    <?php foreach ($populer->result() as $row) :?>
                        <div class="blog-featured-img_block">
                            <img width="35%" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="blog-featured-img">
                            <h5><a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>"><?php echo limit_words($row->tulisan_judul,3).'...';?></a></h5>
                            <p><?php echo limit_words($row->tulisan_isi,4).'...';?></p>
                        </div>
                        <hr>
                    <?php endforeach;?>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END BLOG -->
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
<!-- jQuery, Bootstrap JS. -->
<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
<!-- Plugins -->
<script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
<script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
<!-- Subscribe -->
<script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
<!-- Script JS -->
<script src="<?php echo base_url().'theme/js/script.js'?>"></script>
</body>

</html>
