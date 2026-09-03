<?php
class Peminjaman extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect('administrator');
        }
        $this->load->model('m_peminjaman');
        $this->load->model('m_alat'); 
        $this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
    }

    function index(){
        $x['data_peminjaman'] = $this->m_peminjaman->get_all_peminjaman();
        $x['data_alat']       = $this->m_alat->get_all_alat();
        $this->load->view('depan/v_peminjaman', $x);
    }

    function simpan_peminjaman(){
        $nrp            = htmlspecialchars($this->input->post('xnrp', TRUE), ENT_QUOTES);
        $nama           = htmlspecialchars($this->input->post('xnama', TRUE), ENT_QUOTES);
        $jurusan        = htmlspecialchars($this->input->post('xjurusan', TRUE), ENT_QUOTES);
        $kelompok_kecil = htmlspecialchars($this->input->post('xkelompok_kecil', TRUE), ENT_QUOTES);
        $kelompok_besar = htmlspecialchars($this->input->post('xkelompok_besar', TRUE), ENT_QUOTES);
        $kelas          = htmlspecialchars($this->input->post('xkelas', TRUE), ENT_QUOTES);
        $hari_jam       = htmlspecialchars($this->input->post('xhari_jam', TRUE), ENT_QUOTES);
        $status         = 0; // 0 = Menunggu ACC Pinjam dari Admin

        // Set Waktu Real-Time Pengajuan Peminjaman (WIB)
        date_default_timezone_set('Asia/Jakarta');
        $waktu_pinjam   = date('Y-m-d H:i:s');

        $id_alat       = $this->input->post('xid_alat');
        $nama_alat     = $this->input->post('xnama_alat');
        $jumlah_pinjam = $this->input->post('xjumlah_pinjam');

        $alat_dipinjam        = [];
        $id_alat_dipinjam     = [];
        $jumlah_alat_dipinjam = [];

        if(!empty($id_alat)){
            for($i = 0; $i < count($id_alat); $i++){
                if($jumlah_pinjam[$i] > 0){
                    $alat_dipinjam[]        = $nama_alat[$i] . ' (' . $jumlah_pinjam[$i] . ')';
                    $id_alat_dipinjam[]     = $id_alat[$i];
                    $jumlah_alat_dipinjam[] = $jumlah_pinjam[$i];
                }
            }
        }

        $list_alat_text   = implode(", ", $alat_dipinjam);
        $id_list_text     = implode(",", $id_alat_dipinjam);
        $jumlah_list_text = implode(",", $jumlah_alat_dipinjam);

        if (method_exists($this->m_peminjaman, 'simpan_peminjaman')) {
            $this->m_peminjaman->simpan_peminjaman($nrp, $nama, $jurusan, $kelompok_kecil, $kelompok_besar, $kelas, $hari_jam, $list_alat_text, $id_list_text, $jumlah_list_text, $status);
            
            // Update kolom waktu_pinjam secara presisi untuk ID transaksi yang baru masuk
            $insert_id = $this->db->insert_id();
            if($insert_id){
                $this->db->set('waktu_pinjam', $waktu_pinjam);
                $this->db->where('id_peminjaman', $insert_id);
                $this->db->update('tbl_peminjaman');
            }
        } else {
            $data_insert = array(
                'nrp'            => $nrp,
                'nama'           => $nama,
                'jurusan'        => $jurusan,
                'kelompok_kecil' => $kelompok_kecil,
                'kelompok_besar' => $kelompok_besar,
                'kelas'          => $kelas,
                'hari_jam'       => $hari_jam,
                'nama_alat'      => $list_alat_text,
                'id_alat_list'   => $id_list_text,
                'jumlah_list'    => $jumlah_list_text,
                'status'         => $status,
                'waktu_pinjam'   => $waktu_pinjam
            );
            $this->db->insert('tbl_peminjaman', $data_insert);
        }
        
        $this->session->set_flashdata('msgdepan', '<p><strong> NB: </strong> Pengajuan peminjaman berhasil dicatat! Menunggu konfirmasi Admin.</p>');
        redirect('peminjaman');
    }

    // Pengembalian per item barang dengan Validasi Pemilik Akun & Real-Time Timestamp
    function kembalikan(){
        $id             = $this->input->post('xid_peminjaman');
        $id_alats       = $this->input->post('xid_alat');
        $nama_alats     = $this->input->post('xnama_alat');
        $jumlah_pinjams = $this->input->post('xjumlah_pinjam');
        $kondisis       = $this->input->post('xkondisi_item');
        $jumlah_rusaks  = $this->input->post('xjumlah_rusak');

        // Set Waktu Real-Time saat User Menekan Kirim Pengembalian (WIB)
        date_default_timezone_set('Asia/Jakarta');
        $waktu_kembali  = date('Y-m-d H:i:s');

        // Validasi Keamanan: Ambil data peminjaman dari DB
        $data_pinjam = $this->m_peminjaman->get_peminjaman_by_id($id)->row();
        
        $session_nama = $this->session->userdata('nama');
        $session_user = $this->session->userdata('user');
        $session_nrp  = $this->session->userdata('nrp');

        if($data_pinjam && $data_pinjam->status == 1 && ($data_pinjam->nama == $session_nama || $data_pinjam->nama == $session_user || $data_pinjam->nrp == $session_user || $data_pinjam->nrp == $session_nrp)){
            
            $rincian_kondisi = [];

            if(!empty($id_alats)){
                for($i = 0; $i < count($id_alats); $i++){
                    $nama       = trim($nama_alats[$i]);
                    $qty_pinjam = (int)$jumlah_pinjams[$i];
                    $kondisi    = $kondisis[$i];
                    $qty_rusak  = (int)$jumlah_rusaks[$i];

                    if($kondisi == 'Aman'){
                        $rincian_kondisi[] = $nama . ' (' . $qty_pinjam . ' Aman)';
                    } else {
                        if($qty_rusak > $qty_pinjam) $qty_rusak = $qty_pinjam;
                        if($qty_rusak <= 0) $qty_rusak = 1;
                        $qty_aman = $qty_pinjam - $qty_rusak;
                        
                        $text = $nama . ' (';
                        if($qty_aman > 0){
                            $text .= $qty_aman . ' Aman, ';
                        }
                        $text .= $qty_rusak . ' Rusak/Hilang)';
                        $rincian_kondisi[] = $text;
                    }
                }
            }

            $kondisi_text = implode("; ", $rincian_kondisi);
            
            // Update status ke 2 dan SIMPAN waktu_kembali real-time
            $this->db->set('kondisi', $kondisi_text);
            $this->db->set('status', 2); 
            $this->db->set('waktu_kembali', $waktu_kembali); // <--- SIMPAN WAKTU PENGAMBALIAN
            $this->db->where('id_peminjaman', $id);
            $this->db->update('tbl_peminjaman');
            
            $this->session->set_flashdata('msgdepan', '<p><strong> NB: </strong> Keterangan pengembalian berhasil dikirim! Menunggu konfirmasi Admin.</p>');
        } else {
            $this->session->set_flashdata('msgdepan', '<p style="color:red;"><strong> ERROR: </strong> Anda tidak memiliki hak untuk mengembalikan transaksi ini!</p>');
        }

        redirect('peminjaman');
    }
}