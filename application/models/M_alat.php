<?php
class M_alat extends CI_Model {

    function get_all_alat() {
        $this->db->order_by('nama_alat', 'ASC');
        return $this->db->get('tbl_alat');
    }

    // Ambil data 1 alat berdasarkan ID untuk pembanding angka lama
    function get_alat_by_id($id) {
        return $this->db->get_where('tbl_alat', array('id_alat' => $id))->row();
    }

    function hapus_semua_alat() {
        $this->db->truncate('tbl_alat');
    }

    function simpan_batch_alat($data) {
        $this->db->insert_batch('tbl_alat', $data);
    }

    function tambah_alat($data) {
        $this->db->insert('tbl_alat', $data);
    }

    // Ketentuan 1: Saat dikonfirmasi Peminjaman Baru -> Dipinjam (+), Stok (-)
    function proses_pinjam($id_alat, $jumlah) {
        $this->db->set('stok', 'stok - ' . (int)$jumlah, FALSE);
        $this->db->set('dipinjam', 'dipinjam + ' . (int)$jumlah, FALSE);
        $this->db->where('id_alat', $id_alat);
        $this->db->update('tbl_alat');
    }

    // Ketentuan 2: Pengembalian Rusak/Hilang -> Dipinjam (-), Rusak/Hilang (+)
    function proses_rusak($id_alat, $jumlah) {
        $this->db->set('dipinjam', 'dipinjam - ' . (int)$jumlah, FALSE);
        $this->db->set('rusak_hilang', 'rusak_hilang + ' . (int)$jumlah, FALSE);
        $this->db->where('id_alat', $id_alat);
        $this->db->update('tbl_alat');
    }

    // Ketentuan 3: Pengembalian Aman -> Dipinjam (-), Stok (+)
    function proses_aman($id_alat, $jumlah) {
        $this->db->set('dipinjam', 'dipinjam - ' . (int)$jumlah, FALSE);
        $this->db->set('stok', 'stok + ' . (int)$jumlah, FALSE);
        $this->db->where('id_alat', $id_alat);
        $this->db->update('tbl_alat');
    }

    // Update data alat hasil kalkulasi edit manual admin
    function update_alat($id, $nama, $deskripsi, $stok, $dipinjam, $rusak_hilang) {
        $data = array(
            'nama_alat'    => $nama,
            'deskripsi'    => $deskripsi,
            'stok'         => $stok,
            'dipinjam'     => $dipinjam,
            'rusak_hilang' => $rusak_hilang
        );

        $this->db->where('id_alat', $id);
        $this->db->update('tbl_alat', $data);
    }

    function hapus_alat($id) {
        $this->db->where('id_alat', $id);
        $this->db->delete('tbl_alat');
    }
}