<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gallery Photo</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/magnific-popup.css'?>">
    <!-- Image Hover CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/normalize.css'?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/set2.css'?>" />
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">


    <!-- Masonry Gallery -->
    <link href="<?php echo base_url().'theme/css/animated-masonry-gallery.css'?>" rel="stylesheet" type="text/css" />
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
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
                        Halaman Galery Laboratorium Fisika Dasar Itenas
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
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('admin/login/logout');?>"><i class="fa fa-sign-out" aria-hidden="true"></i>  Logout (<?php echo $this->session->userdata('nama');?>)</a>
                                </li>
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
<!--============================= Gallery =============================-->
<div class="gallery-wrap">
    <div class="container">
        <!-- Style 2 -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="gallery-style">Gallery Photo</h3>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-12">
                <div id="gallery">
                    <div id="gallery-content">
                        <div id="gallery-content-center">
                            <?php foreach ($all_galeri->result() as $row) : ?>
                                <a href="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" class="image-link2">
                                    <img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" class="all img-fluid" alt="#" />
                                </a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//End Style 2 -->

    </div>
</div>
<!--//End Gallery -->
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
<script src="<?php echo base_url('theme/js/particles.js')?>"></script>
<script src="<?php echo base_url('theme/js/particles.min.js')?>"></script>
<script src="<?php echo base_url('theme/js/app.js')?>"></script>

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
<!-- Plugins -->
<script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
<script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
<!-- Subscribe -->
<script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>

<script src="<?php echo base_url().'theme/js/jquery-ui-1.10.4.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/jquery.isotope.min.js'?>"></script>
<script src="<?php echo base_url().'theme/js/animated-masonry-gallery.js'?>"></script>
<!-- Magnific popup JS -->
<script src="<?php echo base_url().'theme/js/jquery.magnific-popup.js'?>"></script>
<!-- Script JS -->
<script src="<?php echo base_url().'theme/js/script.js'?>"></script>

</body>

</html>
