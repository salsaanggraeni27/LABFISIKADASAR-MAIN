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

    // ACC Peminjaman Baru (Dipinjam +, Stok -)
    function konfirmasi_pinjam(){
        $id = $this->input->post('xid');
        $data_pinjam = $this->m_peminjaman->get_peminjaman_by_id($id)->row();

        if($data_pinjam && $data_pinjam->status == 0){ 
            $ids     = explode(",", $data_pinjam->id_alat_list);
            $jumlahs = explode(",", $data_pinjam->jumlah_list);

            for($i=0; $i < count($ids); $i++){
                $id_alat = trim($ids[$i]);
                $qty     = (int)trim($jumlahs[$i]);
                if(!empty($id_alat) && $qty > 0){
                    $this->m_alat->proses_pinjam($id_alat, $qty);
                }
            }
            $this->m_peminjaman->update_status_peminjaman($id, 1);
            $this->session->set_flashdata('msg', '<div class="alert alert-success">Peminjaman Berhasil Dikonfirmasi!</div>');
        }
        redirect('admin/peminjaman');
    }

    // ACC Pengembalian Barang (Perbaikan Parsing Rusak/Hilang Fleksibel)
    function konfirmasi(){
        $id = $this->input->post('xid');
        $data_pinjam = $this->m_peminjaman->get_peminjaman_by_id($id)->row();

        if($data_pinjam && $data_pinjam->status == 2){ 
            $ids     = explode(",", $data_pinjam->id_alat_list);
            $jumlahs = explode(",", $data_pinjam->jumlah_list);
            $kondisi = $data_pinjam->kondisi;

            $items_kondisi = explode("; ", $kondisi);

            for($i = 0; $i < count($ids); $i++){
                $id_alat    = trim($ids[$i]);
                $qty_pinjam = (int)trim($jumlahs[$i]);

                if(empty($id_alat) || $qty_pinjam <= 0) continue;

                $qty_rusak = 0;
                $qty_aman  = $qty_pinjam;

                if(isset($items_kondisi[$i])){
                    $str_item = $items_kondisi[$i];
                    
                    // Regex fleksibel: Mencari angka sebelum kata Rusak/Hilang atau Rusak
                    if(preg_match('/(\d+)\s+Rusak/i', $str_item, $matches)){
                        $qty_rusak = (int)$matches[1];
                        if($qty_rusak > $qty_pinjam) $qty_rusak = $qty_pinjam;
                        $qty_aman = $qty_pinjam - $qty_rusak;
                    }
                }

                // Update stok di database
                if($qty_aman > 0){
                    $this->m_alat->proses_aman($id_alat, $qty_aman);
                }
                if($qty_rusak > 0){
                    $this->m_alat->proses_rusak($id_alat, $qty_rusak);
                }
            }

            // Ubah status menjadi 3 (Selesai)
            $this->m_peminjaman->update_status_peminjaman($id, 3);
            $this->session->set_flashdata('msg', '<div class="alert alert-success">Pengembalian Berhasil Dikonfirmasi! Stok telah diperbarui.</div>');
        }
        redirect('admin/peminjaman');
    }

    function hapus_peminjaman(){
        $id = $this->input->post('kode');
        $this->m_peminjaman->hapus_peminjaman($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Peminjaman Berhasil Dihapus!</div>');
        redirect('admin/peminjaman');
    }
}