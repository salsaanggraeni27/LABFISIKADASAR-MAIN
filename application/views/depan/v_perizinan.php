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
                                <a class="nav-link" href="<?php echo site_url('blog/kategori/Info-Fisika');?>"><i class="fa fa-rss-square" aria-hidden="true"></i>  Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('pengumuman');?>"><i class="fa fa-bullhorn" aria-hidden="true"></i>  Pengumuman</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('download');?>"><i class="fa fa-download" aria-hidden="true"></i>  Download</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('contact');?>"><i class="fa fa-phone" aria-hidden="true"></i>  Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--//END HEADER -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Halaman Perizinan Praktikum</h2>
                    <br>
                    <h3 align="center" class="bold">Data Perizinan</h3>
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
                                <td><?php echo $row->nama;?></td>
                                <td><?php echo $row->nrp;?></td>
                                <td><?php echo $row->jurusan;?></td>
                                <td><?php echo $row->modul;?></td>
                                <td><?php echo $row->tanggal;?></td>
                                <td><?php echo $row->shift;?></td>
                                <td><?php if ($row->perizinan_status==0)
                                    {
                                        echo "Belum Dilihat";
                                    }elseif($row->perizinan_status==1){
                                        echo "Approved";
                                    }else{
                                        echo "Ditolak";
                                    }
                                    ?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
        <h3 align="center" class="bold">Data Susulan Praktikum</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
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
                                <td><?php echo $row->nama;?></td>
                                <td><?php echo $row->nrp;?></td>
                                <td><?php echo $row->jurusan;?></td>
                                <td><?php echo $row->kelompok;?></td>
                                <td><?php echo $row->modul;?></td>
                                <td><?php echo $row->haritanggal;?></td>
                                <td><?php echo $row->asisten;?></td>
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
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp contact-address">
                                <h3>Silahkan Diisi Data Berikut :</h3>

                                <form class="form-horizontal" action="<?php echo base_url().'Perizinan/simpan_file'?>" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="xnama" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="NRP contoh:(15-2018-085)" name="xnrp" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Jurusan" name="xjurusan" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Modul Praktikum contoh:(L1)" name="xmodul" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <h3 class="contact-details color-white">Tanggal Praktikum</h3>
                                        <input type="date" class="form-control" placeholder="Tanggal Praktikum" name="xtanggal" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Shift" name="xshift" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Alasan" class="form-control" name="xalasan" required rows="5"></textarea>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <h3>Surat Izin Praktikum</h3>
                                        <input type="file" class="form-control" placeholder="Surat Izin Praktikum" name="xsurat" required>
                                    </div>
                                    <!-- // end .form-group -->

                                    <!-- // end .form-group -->
                                    <button type="submit" class="btn btn-default btn-submit">SUBMIT</button>
                                    <br>
                                    <br>
                                    <div class="keterangan"><?php echo $this->session->flashdata('msg');?></div>
                                    <!-- // end #js-contact-result -->
                                    </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Lokasi</h3>
                                <div class="contact-details">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <h6>Alamat</h6>
                                    <p> Gedung 16 ITENAS,
                                        <br> , Jl. PH.H. Mustofa No.23
                                        <br>  Bandung. 11001</p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h6>Email</h6>
                                    <p>labfisikadasar@itenas.ac.id
                                    </p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h6>Phone</h6>
                                    <p>(+62)85324172245</p>
                                </div>
                                <br>
                                <br>
                                    <h3>Panduan Pengisian Data</h3>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <h6>Shift</h6>
                                    <p>Diisi Pagi / Siang</p>
                                </div>
                                <br>

                                <div class="contact-details">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <h6>Alasan</h6>
                                    <p>Diisi Alasan tidak mengikuti praktikum</p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <h6>Surat Izin Praktikum</h6>
                                    <p>Upload surat izin yang telah ditandatangani orangtua/wali dalam bentuk pdf. Formulir surat izin dapat diunduh di website Laboratorium Fisika Dasar. |
                                        sertakan bukti izin praktikum seperti surat keterangan sakit dari dokter, surat keterangan mengikuti perlombaan, dan sebagainya. | surat izin dan bukti izin disatukan dalan satu file word yang dijadikan pdf.
                                    </p>
                                </div>
                                <br>
                                <div class="contact-details">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <h6>Format File</h6>
                                    <p>Format File surat izin adalah : SuratIzin_NRP_Nama  bisa dengan format pdf.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
