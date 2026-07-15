<?php
class M_alumni extends CI_Model{

    function get_all_alumni(){
        $hsl=$this->db->query("SELECT * FROM tbl_alumni");
        return $hsl;
    }

    function simpan_alumni($nama,$jurusan,$wa,$line,$linkedin,$email,$angkatan, $pesan ,$photo){
        $hsl=$this->db->query("INSERT INTO tbl_alumni (nama_alumni,jurusan_alumni ,wa_alumni , line_alumni, linkedin_alumni, email_alumni ,angkatan_alumni , pesan_alumni, foto_alumni) VALUES ('$nama','$jurusan','$wa','$line','$linkedin','$email','$angkatan', '$pesan' ,'$photo')");
        return $hsl;
    }
    function simpan_alumni_tanpa_img($nama,$jurusan,$wa,$line,$linkedin,$email,$angkatan, $pesan){
        $hsl=$this->db->query("INSERT INTO tbl_alumni (nama_alumni,jurusan_alumni,wa_alumni,line_alumni,linkedin_alumni, email_alumni,angkatan_alumni ,pesan_alumni) VALUES ('$nama','$jurusan','$wa','$line','$linkedin','$email','$angkatan', '$pesan')");
        return $hsl;
    }

    function update_alumni($kode,$nama,$jurusan,$wa,$line,$linkedin,$email,$angkatan, $pesan ,$photo){
        $hsl=$this->db->query("UPDATE tbl_alumni SET nama_alumni='$nama',jurusan_alumni='$jurusan',wa_alumni='$wa',line_alumni='$line',linkedin_alumni='$linkedin',email_alumni='$email',angkatan_alumni='$angkatan',pesan_alumni='$pesan',foto_alumni='$photo' WHERE alumni_id='$kode'");
        return $hsl;
    }
    function update_alumni_tanpa_img($kode,$nama,$jurusan,$wa,$line,$linkedin,$email,$angkatan, $pesan){
        $hsl=$this->db->query("UPDATE tbl_alumni SET nama_alumni='$nama',jurusan_alumni='$jurusan',wa_alumni='$wa',line_alumni='$line',linkedin_alumni='$linkedin',email_alumni='$email',angkatan_alumni='$angkatan',pesan_alumni='$pesan'  WHERE alumni_id='$kode'");
        return $hsl;
    }
    function hapus_alumni($kode){
        $hsl=$this->db->query("DELETE FROM tbl_alumni WHERE alumni_id='$kode'");
        return $hsl;
    }

    //front-end
    function alumni(){
        $hsl=$this->db->query("SELECT * FROM tbl_alumni");
        return $hsl;
    }
    function alumni_perpage($offset,$limit){
        $hsl=$this->db->query("SELECT * FROM tbl_alumni limit $offset,$limit");
        return $hsl;
    }

}