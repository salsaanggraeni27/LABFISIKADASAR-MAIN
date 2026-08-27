<?php
class Peminjaman extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect('administrator');
        }
        $this->load->model('m_peminjaman');
        $this->load->model('m_alat');
    }

    function index(){
        $x['data'] = $this->m_peminjaman->get_all_peminjaman();
        $this->load->view('admin/v_peminjaman', $x);
    }

    // Fungsi Jantung Utama Konfirmasi Admin
    function konfirmasi(){
        $id = $this->input->post('xid');
        $data_pinjam = $this->m_peminjaman->get_peminjaman_by_id($id)->row();

        // Pastikan statusnya memang lagi menunggu konfirmasi
        if($data_pinjam->status == 1){ 
            $ids = explode(",", $data_pinjam->id_alat_list);
            $jumlahs = explode(",", $data_pinjam->jumlah_list);
            $kondisi = $data_pinjam->kondisi;

            // Looping alat apa saja yang dipinjam pada transaksi ini
            for($i=0; $i < count($ids); $i++){
                $id_alat = $ids[$i];
                $qty = $jumlahs[$i];

                if($kondisi == 'Aman'){
                    // Kembalikan stok tersedia
                    $this->m_alat->kembalikan_stok_aman($id_alat, $qty);
                } else { 
                    // Jika Rusak/Hilang, potong stok awal permanen
                    $this->m_alat->kembalikan_stok_rusak($id_alat, $qty);
                }
            }
            // Ubah status jadi selesai (2)
            $this->m_peminjaman->update_status_peminjaman($id, 2);
            $this->session->set_flashdata('msg', '<div class="alert alert-success">Pengembalian Berhasil Dikonfirmasi. Stok telah disesuaikan!</div>');
        }
        redirect('admin/peminjaman');
    }

    // Fungsi Hapus Peminjaman
    function hapus_peminjaman(){
        $id = $this->input->post('kode');
        $this->m_peminjaman->hapus_peminjaman($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Peminjaman Berhasil Dihapus!</div>');
        redirect('admin/peminjaman');
    }
}