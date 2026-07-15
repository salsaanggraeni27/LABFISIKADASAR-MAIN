<?php
class M_nilai extends CI_Model{

    function get_all_files(){
        $hsl=$this->db->query("SELECT nilai_id,nilai_judul,nilai_deskripsi,DATE_FORMAT(nilai_tanggal,'%d/%m/%Y') AS tanggal,nilai_jurusan,nilai_link FROM tbl_nilai ORDER BY nilai_id DESC");
        return $hsl;
    }
    function simpan_file($judul,$deskripsi,$jurusan,$link){
        $hsl=$this->db->query("INSERT INTO tbl_nilai(nilai_judul,nilai_deskripsi,nilai_jurusan,nilai_link) VALUES ('$judul','$deskripsi','$jurusan','$link')");
        return $hsl;
    }
    function update_file($kode,$judul,$deskripsi,$jurusan,$link){
        $hsl=$this->db->query("UPDATE tbl_nilai SET nilai_judul='$judul',nilai_deskripsi='$deskripsi',nilai_jurusan='$jurusan',nilai_link='$link' WHERE nilai_id='$kode'");
        return $hsl;
    }
    
    function hapus_file($kode){
        $hsl=$this->db->query("DELETE FROM tbl_nilai WHERE nilai_id='$kode'");
        return $hsl;
    }

    function get_file_byid($id){
        $hsl=$this->db->query("SELECT nilai_id,nilai_judul,nilai_deskripsi,DATE_FORMAT(nilai_tanggal,'%d/%m/%Y') AS tanggal,nilai_jurusan,nilai_link,nilai_data FROM tbl_nilai WHERE nilai_id='$id'");
        return $hsl;
    }

    //Front-end
    function get_files_home(){
        $hsl=$this->db->query("SELECT nilai_id,nilai_judul,nilai_deskripsi,DATE_FORMAT(nilai_tanggal,'%d/%m/%Y') AS tanggal,nilai_jurusan,nilai_link FROM tbl_nilai ORDER BY nilai_id DESC limit 7");
        return $hsl;
    }

}