<?php
class M_modul extends CI_Model{

    function get_all_files(){
        $hsl=$this->db->query("SELECT modul_id,modul_judul,modul_deskripsi,DATE_FORMAT(modul_tanggal,'%d/%m/%Y') AS tanggal,modul_oleh,modul_link,modul_linkytb,modul_download,modul_data FROM tbl_modul ORDER BY modul_id DESC");
        return $hsl;
    }
    function simpan_file($judul,$deskripsi,$oleh,$link,$linkytb,$file){
        $hsl=$this->db->query("INSERT INTO tbl_modul(modul_judul,modul_deskripsi,modul_oleh,modul_link,modul_linkytb,modul_data) VALUES ('$judul','$deskripsi','$oleh','$link','$linkytb','$file')");
        return $hsl;
    }
    function update_file($kode,$judul,$deskripsi,$oleh,$link,$linkytb,$file){
        $hsl=$this->db->query("UPDATE tbl_modul SET modul_judul='$judul',modul_deskripsi='$deskripsi',modul_oleh='$oleh',modul_link='$link',modul_linkytb='$linkytb',modul_data='$file' WHERE modul_id='$kode'");
        return $hsl;
    }
    function update_file_tanpa_file($kode,$judul,$deskripsi,$oleh,$link,$linkytb){
        $hsl=$this->db->query("UPDATE tbl_modul SET modul_judul='$judul',modul_deskripsi='$deskripsi',modul_oleh='$oleh',modul_link='$link$',modul_linkytb='$linkytb' WHERE modul_id='$kode'");
        return $hsl;
    }
    function hapus_file($kode){
        $hsl=$this->db->query("DELETE FROM tbl_modul WHERE modul_id='$kode'");
        return $hsl;
    }

    function get_file_byid($id){
        $hsl=$this->db->query("SELECT modul_id,modul_judul,modul_deskripsi,DATE_FORMAT(modul_tanggal,'%d/%m/%Y') AS tanggal,modul_oleh,modul_link,modul_linkytb,modul_download,modul_data FROM tbl_modul WHERE modul_id='$id'");
        return $hsl;
    }

    //Front-end
    function get_files_home(){
        $hsl=$this->db->query("SELECT modul_id,modul_judul,modul_deskripsi,DATE_FORMAT(modul_tanggal,'%d/%m/%Y') AS tanggal,modul_oleh,modul_link,modul_linkytb,modul_download,modul_data FROM tbl_modul ORDER BY modul_id DESC limit 7");
        return $hsl;
    }

}