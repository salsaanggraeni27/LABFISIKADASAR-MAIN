<?php
class M_peminjaman extends CI_Model {
    
    function get_all_peminjaman() {
        $this->db->order_by('id_peminjaman', 'DESC');
        return $this->db->get('tbl_peminjaman');
    }

    function get_peminjaman_by_id($id) {
        return $this->db->get_where('tbl_peminjaman', array('id_peminjaman' => $id));
    }

    function simpan_peminjaman($nrp, $nama, $jurusan, $kelompok_kecil, $kelompok_besar, $kelas, $hari_jam, $list_alat_text, $id_list_text, $jumlah_list_text, $status) {
        $data = array(
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
            'status'         => $status
        );
        $this->db->insert('tbl_peminjaman', $data);
    }

    // Pengajuan Pengembalian dari User (Simpan Rincian Kondisi Per Alat)
    function set_pengembalian_user($id, $kondisi_text) {
        $this->db->set('kondisi', $kondisi_text);
        $this->db->set('status', 1); // 1 = Menunggu Konfirmasi Admin
        $this->db->where('id_peminjaman', $id);
        $this->db->update('tbl_peminjaman');
    }

    function update_status_peminjaman($id, $status) {
        $this->db->set('status', $status);
        $this->db->where('id_peminjaman', $id);
        $this->db->update('tbl_peminjaman');
    }

    function hapus_peminjaman($id) {
        $this->db->where('id_peminjaman', $id);
        $this->db->delete('tbl_peminjaman');
    }
}