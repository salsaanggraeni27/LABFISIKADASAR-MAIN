<?php
class M_jadwal extends CI_Model{

    function get_all_files(){
        $hsl=$this->db->query("SELECT jadwal_id,jadwal_judul,jadwal_deskripsi,jadwal_jurusan,jadwal_link FROM tbl_jadwal ORDER BY jadwal_id DESC");
        return $hsl;
    }
    function simpan_file($judul,$deskripsi,$jurusan,$link){
        $hsl=$this->db->query("INSERT INTO tbl_jadwal(jadwal_judul,jadwal_deskripsi,jadwal_jurusan,jadwal_link) VALUES ('$judul','$deskripsi','$jurusan','$link')");
        return $hsl;
    }
    function update_file($kode,$judul,$deskripsi,$jurusan,$link){
        $hsl=$this->db->query("UPDATE tbl_jadwal SET jadwal_judul='$judul',jadwal_deskripsi='$deskripsi',jadwal_jurusan='$jurusan',jadwal_link='$link' WHERE jadwal_id='$kode'");
        return $hsl;
    }
    
    function hapus_file($kode){
        $hsl=$this->db->query("DELETE FROM tbl_jadwal WHERE jadwal_id='$kode'");
        return $hsl;
    }

    function get_file_byid($id){
        $hsl=$this->db->query("SELECT jadwal_id,jadwal_judul,jadwal_deskripsi,DATE_FORMAT(jadwal_tanggal,'%d/%m/%Y') AS tanggal,jadwal_jurusan,jadwal_link FROM tbl_jadwal WHERE jadwal_id='$id'");
        return $hsl;
    }

    //Front-end
    function get_files_home(){
        $hsl=$this->db->query("SELECT jadwal_id,jadwal_judul,jadwal_deskripsi,DATE_FORMAT(jadwal_tanggal,'%d/%m/%Y') AS tanggal,jadwal_jurusan,jadwal_link FROM tbl_jadwal ORDER BY jadwal_id DESC limit 7");
        return $hsl;
    }

}