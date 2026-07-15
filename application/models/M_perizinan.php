<?php
class M_perizinan extends CI_Model{

    function simpan_file($nama,$nrp,$jurusan,$modul,$tanggal,$shift,$alasan,$file,$status){
        $hsl=$this->db->query("INSERT INTO tbl_perizinan(nama,nrp,jurusan,modul,tanggal,shift,alasan,surat_izin,perizinan_status) VALUES ('$nama','$nrp','$jurusan','$modul','$tanggal','$shift','$alasan','$file','$status')");
        return $hsl;
    }

    function get_all_perizinan(){
        $hsl=$this->db->query("SELECT tbl_perizinan.*,DATE_FORMAT(tanggal,'%d %M %Y') AS tanggal FROM tbl_perizinan ORDER BY id_perizinan DESC");
        return $hsl;
    }

    function get_all_susulan(){
        $hsl=$this->db->query("SELECT tbl_susulan.* FROM tbl_susulan ORDER BY id_susulan DESC");
        return $hsl;
    }

    function hapus_perizinan($kode){
        $hsl=$this->db->query("DELETE FROM tbl_perizinan WHERE id_perizinan='$kode'");
        return $hsl;
    }

    function hapus_susulan($kode){
        $hsl=$this->db->query("DELETE FROM tbl_susulan WHERE id_susulan='$kode'");
        return $hsl;
    }

    function get_file_byid($id){
        $hsl=$this->db->query("SELECT id_perizinan,nama,nrp,jurusan,modul,DATE_FORMAT(tanggal,'%d/%m/%Y') AS tanggal,shift,alasan,surat_izin FROM tbl_perizinan WHERE id_perizinan='$id'");
        return $hsl;
    }

    function update_status_perizinan(){
        $hsl=$this->db->query("UPDATE tbl_perizinan SET perizinan_status='0'");
        return $hsl;
    }
}