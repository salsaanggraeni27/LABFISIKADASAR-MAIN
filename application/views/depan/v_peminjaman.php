<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lab. Fisika Dasar Itenas - Peminjaman Alat Praktikum</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="<?php echo base_url().'theme/css/dataTables.bootstrap4.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'theme/css/modern-custom.css'?>" rel="stylesheet">
    <style>
        .keterangan{ color: #FFFFFF; }
        /* Style untuk penyesuaian DataTables Tabel Alat */
        #tabelAlat_wrapper .dataTables_length select {
            border-radius: 6px;
            padding: 4px 8px;
            border: 1px solid #cbd5e1;
            margin: 0 5px;
        }
        #tabelAlat_wrapper .dataTables_filter input {
            border-radius: 6px;
            padding: 5px 12px;
            border: 1px solid #cbd5e1;
            margin-left: 8px;
        }
        .table td, .table th {
            vertical-align: middle !important;
        }
    </style>
</head>

<body class="content-animated">
<div class="page-loader">
    <div class="loader-area"></div>
    <div class="loader font-face1">loading...</div>
</div>

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

<section class="contact" style="padding-bottom: 80px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="peminjaman-hero-card">
                    <span class="hero-badge"><i class="fa fa-flask"></i> Laboratorium Fisika Dasar</span>
                    <h2>Peminjaman Alat Praktikum</h2>
                    <p>Kelola peminjaman dan pengembalian alat praktikum secara online dengan status real-time.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="section-title-modern">
                    <h3><i class="fa fa-list-alt"></i> Status Peminjaman Alat</h3>
                    <p>Daftar transaksi peminjaman alat praktikum yang aktif beserta riwayat pengembalian.</p>
                </div>
            </div>
        </div>
        
        <!-- TABEL STATUS PEMINJAMAN LENGKAP WAKTU PINJAM & WAKTU KEMBALI -->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="example1" style="font-size: 13px;">
                        <thead style="background: #f8fafc; color: #334155;">
                        <tr>
                            <th style="width: 4%;">No.</th>
                            <th style="width: 15%;">Praktikan</th>
                            <th style="width: 10%;">Jurusan</th>
                            <th style="width: 14%;">Kelompok / Kelas</th>
                            <th style="width: 13%;">Waktu Pinjam</th>
                            <th style="width: 14%;">Waktu Kembali</th>
                            <th style="width: 18%;">Alat Dipinjam</th>
                            <th style="width: 12%;">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no=1;
                        foreach ($data_peminjaman->result() as $row):
                            // Format Waktu Pinjam Real-Time
                            $waktu_pinjam_tampil = "-";
                            if(!empty($row->waktu_pinjam) && $row->waktu_pinjam != '0000-00-00 00:00:00'){
                                $waktu_pinjam_tampil = date('d M Y, H:i', strtotime($row->waktu_pinjam)) . ' WIB';
                            }

                            // Format Waktu Pengembalian Real-Time
                            $waktu_kembali_tampil = "-";
                            if(!empty($row->waktu_kembali) && $row->waktu_kembali != '0000-00-00 00:00:00'){
                                $waktu_kembali_tampil = date('d M Y, H:i', strtotime($row->waktu_kembali)) . ' WIB';
                            }
                        ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                
                                <!-- NRP & Nama -->
                                <td>
                                    <strong style="color: #0f172a; font-size: 13.5px;"><?php echo $row->nama;?></strong><br>
                                    <small class="text-muted"><i class="fa fa-id-card-o"></i> <?php echo $row->nrp;?></small>
                                </td>
                                
                                <td>
                                    <span class="badge badge-light" style="font-weight: 600; color: #475569; border: 1px solid #cbd5e1; padding: 4px 8px;">
                                        <?php echo $row->jurusan;?>
                                    </span>
                                </td>
                                
                                <!-- Kelompok & Kelas -->
                                <td>
                                    <span class="badge" style="background-color: #e0f2fe; color: #0369a1; border: 1px solid #bae6fd; font-size: 11px; padding: 3px 6px; font-weight: 600;">
                                        <?php echo !empty($row->kelompok_kecil) ? $row->kelompok_kecil : '-'; ?>
                                    </span>
                                    <span class="badge" style="background-color: #ffedd5; color: #c2410c; border: 1px solid #fed7aa; font-size: 11px; padding: 3px 6px; font-weight: 600;">
                                        <?php echo !empty($row->kelompok_besar) ? $row->kelompok_besar : '-'; ?>
                                    </span><br>
                                    <div style="margin-top: 3px;">
                                        <small class="text-muted">Kelas: <b><?php echo !empty($row->kelas) ? $row->kelas : '-'; ?></b></small><br>
                                        <small class="text-dark"><i class="fa fa-calendar-o"></i> <?php echo $row->hari_jam;?></small>
                                    </div>
                                </td>

                                <!-- KOLOM WAKTU PINJAM -->
                                <td>
                                    <span style="font-weight: 600; color: #2563eb; background: #eff6ff; padding: 4px 8px; border-radius: 6px; border: 1px solid #bfdbfe; font-size: 11.5px; display: inline-block;">
                                        <i class="fa fa-clock-o"></i> <?php echo $waktu_pinjam_tampil;?>
                                    </span>
                                </td>

                                <!-- KOLOM REAL-TIME WAKTU PENGEMBALIAN USER -->
                                <td>
                                    <?php if(!empty($row->waktu_kembali) && $row->waktu_kembali != '0000-00-00 00:00:00'): ?>
                                        <span style="font-weight: 600; color: #d97706; background: #fffbe6; padding: 4px 8px; border-radius: 6px; border: 1px solid #ffe58f; font-size: 11.5px; display: inline-block;">
                                            <i class="fa fa-paper-plane"></i> <?php echo $waktu_kembali_tampil;?>
                                        </span>
                                    <?php else: ?>
                                        <span class="badge badge-light" style="color: #94a3b8; border: 1px solid #e2e8f0; font-weight: normal;">Belum Dikembalikan</span>
                                    <?php endif; ?>
                                </td>
                                
                                <td>
                                    <strong style="color: #1e293b;"><?php echo $row->nama_alat;?></strong>
                                    
                                    <?php if($row->status == 0): ?>
                                        <div style="font-size: 11.5px; color: #2563eb; margin-top: 4px;">
                                            <i class="fa fa-hourglass-start"></i> Menunggu ACC Admin
                                        </div>

                                    <?php elseif($row->status == 1): ?>
                                        <?php 
                                            $session_user = $this->session->userdata('user');
                                            $session_nrp  = $this->session->userdata('nrp');
                                            
                                            if($row->nrp == $session_user || $row->nrp == $session_nrp): 
                                        ?>
                                            <br>
                                            <button type="button" class="btn btn-sm btn-warning mt-1" data-toggle="modal" data-target="#ModalKembali<?php echo $row->id_peminjaman; ?>">
                                                <i class="fa fa-paper-plane"></i> Kirim Pengembalian
                                            </button>
                                        <?php else: ?>
                                            <div style="font-size: 11.5px; color: #64748b; margin-top: 4px;">
                                                <i class="fa fa-lock"></i> Dipinjam oleh <?php echo $row->nama; ?>
                                            </div>
                                        <?php endif; ?>

                                    <?php elseif($row->status == 2): ?>
                                        <div style="font-size: 11.5px; color: #d97706; margin-top: 4px;">
                                            <i class="fa fa-info-circle"></i> <b>Dikirim:</b> <?php echo $row->kondisi; ?>
                                        </div>

                                    <?php else: ?>
                                        <div style="font-size: 11.5px; color: #16a34a; margin-top: 4px;">
                                            <i class="fa fa-check-circle"></i> <b>Selesai:</b> <?php echo $row->kondisi; ?>
                                        </div>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php if ($row->status == 0) {
                                        echo "<span class='badge-status badge-status-menunggu'><i class='fa fa-clock-o'></i> Pending</span>";
                                    } elseif ($row->status == 1) {
                                        echo "<span class='badge-status badge-status-dipinjam'><i class='fa fa-hourglass-half'></i> Dipinjam</span>";
                                    } elseif ($row->status == 2) {
                                        echo "<span class='badge-status badge-status-menunggu'><i class='fa fa-hourglass-half'></i> ACC Kembali</span>";
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
        
        <!-- FORM PEMINJAMAN ALAT -->
        <form action="<?php echo base_url().'Peminjaman/simpan_peminjaman'?>" method="post">
            <div class="row">
                <!-- BAGIAN 1: IDENTITAS USER -->
                <div class="col-md-6 mb-4">
                    <div class="modern-card-box" style="height: 100%;">
                        <h3><i class="fa fa-plus-circle"></i> Form Peminjaman Alat</h3>
                        
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">NRP Praktikan</label>
                            <input type="text" class="form-control" value="<?php echo $this->session->userdata('user');?>" name="xnrp" required readonly style="background-color: #f8fafc;">
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600; font-size: 13px; color: #475569;">Nama Lengkap</label>
                            <input type="text" class="form-control" value="<?php echo $this->session->userdata('nama');?>" name="xnama" required readonly style="background-color: #f8fafc;">
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
                    </div>
                </div>
                
                <!-- BAGIAN 2: PANDUAN PEMINJAMAN -->
                <div class="col-md-6 mb-4">
                    <div class="modern-card-box" style="height: 100%;">
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

                        <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-left: 4px solid #f97316; padding: 18px 20px; border-radius: 12px; margin-top: 15px;">
                            <h6 style="color: #0f172a; font-weight: 700; font-size: 14px; margin-bottom: 5px;"><i class="fa fa-exclamation-triangle" style="color: #f97316;"></i> Perhatian!</h6>
                            <p style="font-size: 13px; color: #475569; margin: 0;">Jagalah alat laboratorium dengan hati-hati. Kerusakan atau kehilangan alat menjadi tanggung jawab penuh kelompok peminjam.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BAGIAN 3: TABEL PEMILIHAN ALAT -->
            <div class="row mt-3">
                <div class="col-md-12 mb-4">
                    <div class="modern-card-box">
                        <h3><i class="fa fa-wrench"></i> Pilih Alat yang Dipinjam</h3>
                        <p style="color: #64748b; font-size: 14px; margin-bottom: 20px;">Cari alat dan tentukan jumlah unit yang akan dipinjam pada tabel di bawah ini:</p>

                        <div class="table-responsive mb-4">
                            <table class="table table-bordered table-striped" id="tabelAlat" style="width: 100%;">
                                <thead style="background-color: #f8fafc;">
                                    <tr>
                                        <th style="padding: 12px 15px;">Nama Alat Praktikum</th>
                                        <th class="text-center" style="width: 20%; padding: 12px 15px;">Stok Tersedia</th>
                                        <th class="text-center" style="width: 25%; padding: 12px 15px;">Jumlah Pinjam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_alat->result() as $alat): ?>
                                    <tr>
                                        <td>
                                            <strong style="color: #334155; font-size: 15px;"><?php echo $alat->nama_alat; ?></strong>
                                            <input type="hidden" name="xid_alat[]" value="<?php echo $alat->id_alat; ?>">
                                            <input type="hidden" name="xnama_alat[]" value="<?php echo $alat->nama_alat; ?>">
                                        </td>
                                        <td class="text-center">
                                            <?php 
                                                if($alat->stok > 0){
                                                    echo "<span class='badge-status badge-status-selesai' style='padding: 6px 15px; font-size: 13px;'>".$alat->stok." Unit</span>";
                                                } else {
                                                    echo "<span class='badge-status badge-status-dipinjam' style='padding: 6px 15px; font-size: 13px;'>Habis</span>";
                                                }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <input type="number" class="form-control" name="xjumlah_pinjam[]" min="0" max="<?php echo $alat->stok; ?>" value="0" <?php echo ($alat->stok == 0) ? 'disabled' : ''; ?> style="border-radius: 8px; text-align: center; font-weight: bold; width: 120px; margin: 0 auto;">
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <button type="submit" class="btn btn-submit btn-block style-btn-konfirmasi" style="padding: 15px; font-weight: bold; font-size: 16px;"><i class="fa fa-paper-plane"></i> KONFIRMASI PEMINJAMAN</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- MODAL POPUP PENGEMBALIAN USER PER ITEM -->
<?php foreach ($data_peminjaman->result() as $row): 
    $session_user = $this->session->userdata('user');
    $session_nrp  = $this->session->userdata('nrp');

    if($row->status == 1 && ($row->nrp == $session_user || $row->nrp == $session_nrp)):
        $ids_arr    = explode(",", $row->id_alat_list);
        $jumlah_arr = explode(",", $row->jumlah_list);
        $nama_arr   = explode(", ", $row->nama_alat);
?>
<div class="modal fade" id="ModalKembali<?php echo $row->id_peminjaman; ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-refresh"></i> Form Pengembalian Alat</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form action="<?php echo site_url('peminjaman/kembalikan');?>" method="post" class="form-pengembalian">
                <div class="modal-body">
                    <input type="hidden" name="xid_peminjaman" value="<?php echo $row->id_peminjaman; ?>">
                    <p style="font-size: 14px; color: #475569;">Pilih kondisi untuk setiap barang yang Anda pinjam:</p>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-light">
                                <th>Nama Alat</th>
                                <th class="text-center" style="width: 15%;">Jumlah Pinjam</th>
                                <th style="width: 30%;">Kondisi</th>
                                <th style="width: 25%;">Jumlah Rusak/Hilang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($k = 0; $k < count($ids_arr); $k++): 
                                $nama_clean = preg_replace('/\s*\(\d+\)$/', '', $nama_arr[$k]);
                            ?>
                            <tr>
                                <td>
                                    <strong><?php echo trim($nama_clean); ?></strong>
                                    <input type="hidden" name="xid_alat[]" value="<?php echo $ids_arr[$k]; ?>">
                                    <input type="hidden" name="xnama_alat[]" value="<?php echo trim($nama_clean); ?>">
                                    <input type="hidden" name="xjumlah_pinjam[]" value="<?php echo $jumlah_arr[$k]; ?>">
                                </td>
                                <td class="text-center">
                                    <span class="badge badge-info"><?php echo $jumlah_arr[$k]; ?></span>
                                </td>
                                <td>
                                    <select name="xkondisi_item[]" class="form-control form-control-sm select-kondisi" data-target="rusak_<?php echo $row->id_peminjaman.'_'.$k; ?>" data-max="<?php echo $jumlah_arr[$k]; ?>" required>
                                        <option value="Aman">Aman (Lengkap)</option>
                                        <option value="Rusak/Hilang">Rusak/Hilang</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="number" name="xjumlah_rusak[]" id="rusak_<?php echo $row->id_peminjaman.'_'.$k; ?>" class="form-control form-control-sm input-rusak" min="0" max="<?php echo $jumlah_arr[$k]; ?>" value="0" readonly required>
                                </td>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-submit-kembali"><i class="fa fa-paper-plane"></i> Kirim Pengembalian</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endif; endforeach; ?>

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
                    <p><span>Alamat: <br> </span> Gedung 16, Jl. PH.H. Mustofa No.23, Bandung</p>
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

        var tableAlat = $('#tabelAlat').DataTable({
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
            "pageLength": 10,
            "language": {
                "lengthMenu": "Tampilkan _MENU_ alat per halaman",
                "zeroRecords": "Alat tidak ditemukan",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ alat",
                "infoEmpty": "Tidak ada alat tersedia",
                "infoFiltered": "(difilter dari _MAX_ total alat)",
                "search": "Cari Alat:",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Lanjut",
                    "previous": "Sebelumnya"
                }
            }
        });

        $('form').has('#tabelAlat').on('submit', function (e) {
            var form = this;
            tableAlat.$('input').each(function () {
                if (!$.contains(document, this)) {
                    if (this.name) {
                        $(form).append(
                            $('<input>')
                                .attr('type', 'hidden')
                                .attr('name', this.name)
                                .attr('value', this.value)
                        );
                    }
                }
            });
        });

        $(document).on('change', '.select-kondisi', function(){
            var targetId = $(this).data('target');
            var inputRusak = $('#' + targetId);

            if($(this).val() === 'Rusak/Hilang'){
                inputRusak.prop('readonly', false);
                if(parseInt(inputRusak.val()) <= 0){
                    inputRusak.val(1);
                }
                inputRusak.attr('min', 1);
            } else {
                inputRusak.prop('readonly', true);
                inputRusak.val(0);
                inputRusak.attr('min', 0);
            }
        });

        $(document).on('submit', '.form-pengembalian', function(){
            if (document.activeElement) {
                document.activeElement.blur();
            }

            $(this).find('.input-rusak').each(function(){
                var val = parseInt($(this).val());
                var max = parseInt($(this).attr('max'));
                var selectKondisi = $(this).closest('tr').find('.select-kondisi').val();

                if(selectKondisi === 'Rusak/Hilang'){
                    if(isNaN(val) || val <= 0){
                        $(this).val(1);
                    } else if(val > max){
                        $(this).val(max);
                    }
                } else {
                    $(this).val(0);
                }
            });

            $(this).find('.btn-submit-kembali').prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Mengirim...');
        });
    });
</script>
</body>
</html>