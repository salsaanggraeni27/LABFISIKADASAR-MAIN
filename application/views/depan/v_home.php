<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab. Fisika Dasar Itenas - Home</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">

    <?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
    ?>
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
                        Selamat Datang di Official Website Laboratorium Fisika Dasar Itenas V.2.0
                    </div>
                </div>
            </div>

        </div>
    </div>
</marquee>
<div data-toggle="affix" style="background-color: #FFFFFF ">
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
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/bg-utamaa.png'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Selamat Datang</h1>
                            <h4>kepada seluruh praktikan<br> Laboratorium Fisika Dasar Itenas. <br> Semester Genap 2022/2023</h4>
                            <div class="slider-btn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/bg-info.png'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Info Lab. Fisika Dasar</h1>
                            <h4>Bagi praktikan yang belum membawa pas foto, diharapkan untuk membawa pas foto ketika praktikum modul pertama.<br> Kelalaian akan berakibat tidak diperbolehkan mengikuti praktikum di hari tersebut. <br> Mohon praktikan mempersiapkan dengan baik.</h4>
                            <div class="slider-btn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/bg-filosopii.png'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Bepikir Kreatif &amp; Inovatif</h1>
                            <h4>Bagi kami kreativitas merupakan gerbang masa depan.<br> kreativitas akan mendorong inovasi. <br> Itulah yang kami lakukan.</h4>
                            <div class="slider-btn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->
<!--============================= TESTIMONIAL =============================-->
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Apa Kata Mereka Tentang Lab. Fisika Dasar Itenas ? </h2>
            </div>
            <div class="col-md-12">
                <div class="single-item">
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">Selama praktikum di laboratorium fisika dasar, saya mempelajari banyak hal terutama materi-materi fisika dasar yang terdapat di dalam modul & video yang dijelaskan oleh asisten dengan baik dan mudah dimengerti. Selain itu, ketelitian dan kedisiplinan pada saat praktikum berlangsung dan pada saat pengerjaan laporan praktikum. Selain itu juga, alat-alat di lab fisika dasar kondisinya baik sehingga praktikum dapat berjalan dengan lancar. Terima kasih banyak Lab. Fisika Dasar Itenas.</p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url().'theme/images/sabrina-putri.jpeg'?>" class="img-fluid" alt="#">
                            <p><span>Sabrina Putri Nurlian</span>Praktikan Terbaik 2021/2022 Genap | Teknik Kimia</p>
                        </div>
                    </div>
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">Dengan adanya praktikum fisika dasar yang telah dilakukan secara offline maupun online, saya mendapatkan ilmu-ilmu baru yang sebelumnya belum saya dapatkan. Selain itu juga saya menjadi lebih mengerti bagaimana untuk taat kepada aturan dan tata tertib yang berlaku. Terima kasih Laboratorium Fisika Dasar.</p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url().'theme/images/selia-farah.png'?>" class="img-fluid" alt="#">
                            <p><span>Selia Farah Devina</span>Praktikan Terbaik 2021/2022 Ganjil & Genap | Teknik Industri</p>
                        </div>
                    </div>
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">Setelah beberapa bulan terakhir saya mengikuti praktikum Fisika Dasar, banyak sekali hal yang saya dapatkan dan pelajari darinya. Mulai dari pengetahuan akademik hingga kedisiplinan. Ilmu yang diberikan juga sangat bermanfaat dan menambah serta memperluas wawasan saya. Selain itu, melalui praktikum Fisika Dasar, kami juga dilatih mengenai kedisiplinan, tanggung jawab, dan juga cara memanfaatkan waktu dengan baik.</p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url().'theme/images/foto thalitha.jpeg'?>" class="img-fluid" alt="#">
                            <p><span>Thalitha Zharifa</span>Praktikan Terbaik 2021/2022 Ganjil | Informatika</p>
                        </div>
                    </div>
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">Seluruh materi di Praktikum fisika Dasar Itenas  disampaikan dengan sangat baik oleh para asisten, selain itu kami juga selalu termotivasi untuk terus aktif menjawab pertanyaan yang diajukan atau sebaliknya. Selain dari segi pemahaman, kami juga dilatih untuk terampil dalam membuat laporan dengan sistematika yang sesuai.</p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url().'theme/images/foto najla.jpeg'?>" class="img-fluid" alt="#">
                            <p><span>Najla Shalmabillah Hidayat</span>Praktikan Terbaik 2021/2022 Ganjil | Teknik Lingkungan</p>
                        </div>
                    </div>
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">Kesan saya saat belajar praktikum fisdas kali ini karena dilaksanakan secara offline lebih asik dan lebih dapat dipahami, karena kita dapat melakukannya secara langsung sehingga lebih mudah dipahami serta aslab yang selalu sabar membantu.</p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url().'theme/images/abdul-rahman.jpeg'?>" class="img-fluid" alt="#">
                            <p><span>Abdul Rahman</span>Praktikan Terbaik 2021/2022 Ganjil & Genap | Teknik Elektro </p>
                        </div>
                    </div>
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">praktikum fisika dasar sangat terstruktur dengan baik menurut saya mulai dari modul hingga asisten lab nya, dan dari praktikum fisika dasar ini saya mempelajari banyak hal baru dan ketepatan waktu dalam mengumpulan laporan tidak hanya ketepatan tapi mengerti dan teliti dalam mengerjakan.</p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url().'theme/images/foto vanya.jpg'?>" class="img-fluid" alt="#">
                            <p><span>Vanya Nurulita</span>Praktikan Terbaik 2021/2022 Ganjil | Teknik Lingkungan</p>
                        </div>
                    </div>
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">di lab. fisika dasar itenas, belajarnya asik karena walaupun daring tetap bisa belajar juga, terus enak juga kalau aslabnya suka bikin pptnya menarik jadi selama praktikum engga bosen gitu.</p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url().'theme/images/Aprilliza_Napisah.jpeg'?>" class="img-fluid" alt="#">
                            <p><span>Aprilliza Napisah</span>Praktikan Terbaik 2020/2021 Ganjil | Teknik Kimia</p>
                        </div>
                    </div>
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">Terbaik, praktikumnya terlaksana dengan baik dan terstruktur sehingga tidak hanya asal praktikum tapi memahami apa yang dikerjakan. </p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url().'theme/images/Muhammad_Syabil.jpg'?>" class="im  g-fluid" alt="#">
                            <p><span>Muhammad Syabil</span>Praktikan Terbaik 2020/2021 Ganjil | Teknik Elektro</p>
                        </div>
                    </div>
                    <div class="quote">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p class="quote_text">saat kuliah, ada tugas pendahuluan tentang praktikum agar bisa dipelajari dan paham lebih awal. Dan karena masih pandemi maka praktikum dilakukan online, saya juga bisa melihat prosedur praktikum yang dilakukan melalui video, yang mana sangat membantu saya untuk memahami lebih lagi tentang praktikum fisika ini. Maka dari itu, saya terbantu dengan adanya praktikum fisika ini karena saya bisa lebih paham tentang materi fisika.</p>
                        <div class="testi-img_block">
                            <img src="<?php echo base_url().'theme/images/foto gisela.jpeg'?>" class="img-fluid" alt="#">
                            <p><span>Gisela Khairunnisa</span>Praktikan Terbaik 2021/2022 Ganjil | Teknik Kimia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//END TESTIMONIAL -->
<section class="event">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Pengumuman & Agenda</h2>
            </div>
            <br>
            <div class="col-lg-6">
                <div class="event-img2">
                    <?php foreach ($pengumuman->result() as $row) :?>
                        <div class="row">
                            <div class="col-sm-3"> <img src="<?php echo base_url().'theme/images/announcement-icon.png'?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                            <div class="col-sm-9"> <h3><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h3>
                                <span><?php echo $row->tanggal;?></span>
                                <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>

                            </div><!-- // end .col-sm-7 -->
                        </div><!-- // end .row -->
                    <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($agenda->result() as $row):?>
                            <div class="event_date">
                                <div class="event-date-wrap">
                                    <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                    <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                                </div>
                            </div>
                            <div class="date-description">
                                <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                                <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                                <hr class="event_line">
                            </div>
                        <?php endforeach;?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END EVENTS -->
<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita->result() as $row) :?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="courses_box mb-4">
                        <div class="course-img-wrap">
                            <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                        </div>
                        <!-- // end .course-img-wrap -->
                        <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                            <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->
<!--============================= EVENTS =============================-->
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>About Us</h2>
                <p>Kami Menyambut baik terbitnya Website Lab Fisika Dasar ITENAS yang baru , dengan harapan dipublikasinya website ini diharapkan : Peningkatan layanan pendidikan kepada praktikan semakin meningkat.
                    dan menjadikan website lebih informatif</p>
                <br>
                <h2>Visi</h2>
                <p>Menjadikan Laboratorium Fisika Dasar sebagai laboratorium unggul yang memiliki sumber daya mumpuni agar mencetak mahasiswa berprestasi.</p>
                <br>
                <h2>Misi</h2>
                <p>Mengacu pada ketentuan yang berlaku di itenas, misi laboratorium Fisika Dasar  Itenas adalah sebagai berikut : </p>
                <p>
                    •	Melaksanakan pelayanan prima kegiatan praktikum fisika dasar yang didukung oleh sumber daya yang memadai
                </p>
                <p>                    •	Meningkatkan branding dan nama laboratorium itenas dengan memaksimalkan akun media sosial sebagai salah satu media pembelajaran.
                </p>
                <p>                    •	Melaksanakan kegiatan pengembangan dan penguatan sumber daya melalui kegiatan bonding asisten minimal 2x dalam setahun.
                </p>
                <p>                    •	Melaksanakan evaluasi rutin guna menjaga kualitas dan kuantitas pengajaran Laboratorium Fisika dasar Itenas.
                </p>
                <p>                    •	Melaksanakan tes alat yang dilakukan pada akhir semester pembelajaran.
                </p>
                <p>                    •	Melaksanakan pengecekan alat keseluruhan secara rutin minimal satu bulan sekali.
                </p>
            </div>
            <div class="col-md-5">
                <img src="<?php echo base_url().'theme/images/welcome-img.png'?>" class="img-fluid" alt="#">
            </div>
        </div>
    </div>
</section>
<!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_guru;?></span> Asisten
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_siswa;?></span> Praktikan
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_3.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_files;?></span> Download
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_4.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda;?></span> Agenda</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//END DETAILED CHART -->
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

<!-- jQuery, Bootstrap JS. -->
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
<!-- Script JS -->
<script src="<?php echo base_url().'theme/js/script.js'?>"></script>
</body>

</html>
