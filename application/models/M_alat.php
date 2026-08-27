<?php
class M_alat extends CI_Model {
    
    function get_all_alat() {
        $this->db->order_by('nama_alat', 'ASC');
        return $this->db->get('tbl_alat');
    }

    function hapus_semua_alat() {
        $this->db->truncate('tbl_alat');
    }

    function simpan_batch_alat($data) {
        $this->db->insert_batch('tbl_alat', $data);
    }

    // Jika Kondisi AMAN -> Stok Tersedia kembali normal
    function kembalikan_stok_aman($id_alat, $jumlah) {
        $this->db->set('stok_tersedia', 'stok_tersedia + ' . (int)$jumlah, FALSE);
        $this->db->where('id_alat', $id_alat);
        $this->db->update('tbl_alat');
    }

    // Jika Kondisi RUSAK -> Stok Awal dipotong permanen
    function kembalikan_stok_rusak($id_alat, $jumlah) {
        $this->db->set('stok_awal', 'stok_awal - ' . (int)$jumlah, FALSE);
        $this->db->where('id_alat', $id_alat);
        $this->db->update('tbl_alat');
    }

    // Fungsi Edit Alat di Admin
    function update_alat($id, $nama, $spesifikasi, $stok_baru) {
        $alat = $this->db->get_where('tbl_alat', ['id_alat' => $id])->row();
        $selisih = $stok_baru - $alat->stok_awal;

        $this->db->set('nama_alat', $nama);
        $this->db->set('spesifikasi', $spesifikasi);
        $this->db->set('stok_awal', $stok_baru);
        $this->db->set('stok_tersedia', 'stok_tersedia + ' . (int)$selisih, FALSE);
        $this->db->where('id_alat', $id);
        $this->db->update('tbl_alat');
    }

    function hapus_alat($id) {
        $this->db->where('id_alat', $id);
        $this->db->delete('tbl_alat');
    }
}