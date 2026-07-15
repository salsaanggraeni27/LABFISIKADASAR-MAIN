<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_excel extends CI_Model
{
    public function import_data($datasiswa)
    {
        $jumlah = count($datasiswa);
        if ($jumlah > 0) {
            $this->db->replace('tbl_siswa', $datasiswa);
        }
    }

    public function getDataBarang()
    {
        return $this->db->get('tbl_siswa')->result_array();
    }
}
