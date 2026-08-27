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
        $x['data_alat'] = $this->m_alat->get_all_alat();
        $this->load->view('depan/v_peminjaman', $x);
    }

    function simpan_peminjaman(){
        $nrp = htmlspecialchars($this->input->post('xnrp', TRUE), ENT_QUOTES);
        $nama = htmlspecialchars($this->input->post('xnama', TRUE), ENT_QUOTES);
        $jurusan = htmlspecialchars($this->input->post('xjurusan', TRUE), ENT_QUOTES);
        $kelompok_kecil = htmlspecialchars($this->input->post('xkelompok_kecil', TRUE), ENT_QUOTES);
        $kelompok_besar = htmlspecialchars($this->input->post('xkelompok_besar', TRUE), ENT_QUOTES);
        $kelas = htmlspecialchars($this->input->post('xkelas', TRUE), ENT_QUOTES);
        $hari_jam = htmlspecialchars($this->input->post('xhari_jam', TRUE), ENT_QUOTES);
        $status = 0; 

        $id_alat = $this->input->post('xid_alat');
        $nama_alat = $this->input->post('xnama_alat');
        $jumlah_pinjam = $this->input->post('xjumlah_pinjam');

        $alat_dipinjam = [];
        $id_alat_dipinjam = [];
        $jumlah_alat_dipinjam = [];

        if(!empty($id_alat)){
            for($i = 0; $i < count($id_alat); $i++){
                if($jumlah_pinjam[$i] > 0){
                    $alat_dipinjam[] = $nama_alat[$i] . ' (' . $jumlah_pinjam[$i] . ')';
                    $id_alat_dipinjam[] = $id_alat[$i];
                    $jumlah_alat_dipinjam[] = $jumlah_pinjam[$i];
                    
                    $this->m_peminjaman->update_stok_alat($id_alat[$i], $jumlah_pinjam[$i]);
                }
            }
        }

        $list_alat_text = implode(", ", $alat_dipinjam);
        $id_list_text = implode(",", $id_alat_dipinjam);
        $jumlah_list_text = implode(",", $jumlah_alat_dipinjam);

        $this->m_peminjaman->simpan_peminjaman($nrp, $nama, $jurusan, $kelompok_kecil, $kelompok_besar, $kelas, $hari_jam, $list_alat_text, $id_list_text, $jumlah_list_text, $status);
        
        echo $this->session->set_flashdata('msgdepan', '<p><strong> NB: </strong> Peminjaman berhasil dicatat!</p>');
        redirect('peminjaman');
    }

    // Fungsi saat asisten/user mengisi form pengembalian
    function kembalikan(){
        $id = $this->input->post('xid_peminjaman');
        $kondisi = $this->input->post('xkondisi');
        $this->m_peminjaman->set_pengembalian_user($id, $kondisi);
        
        echo $this->session->set_flashdata('msgdepan', '<p><strong> NB: </strong> Keterangan berhasil dikirim. Menunggu konfirmasi Admin!</p>');
        redirect('peminjaman');
    }
}