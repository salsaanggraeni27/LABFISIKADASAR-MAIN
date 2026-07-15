<?php
class M_guru extends CI_Model{

    function get_all_guru(){
        $hsl=$this->db->query("SELECT * FROM tbl_guru");
        return $hsl;
    }

    function simpan_guru($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$wa,$email,$photo){
        $hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_wa,guru_email,guru_photo) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$wa','$email','$photo')");
        return $hsl;
    }
    function simpan_guru_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$wa,$email){
        $hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_wa,guru_email) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$wa','$email')");
        return $hsl;
    }

    function update_guru($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$wa,$email,$photo){
        $hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_wa='$wa',guru_email='$email',guru_photo='$photo' WHERE guru_id='$kode'");
        return $hsl;
    }
    function update_guru_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$wa,$email){
        $hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_wa='$wa',guru_email='$email' WHERE guru_id='$kode'");
        return $hsl;
    }
    function hapus_guru($kode){
        $hsl=$this->db->query("DELETE FROM tbl_guru WHERE guru_id='$kode'");
        return $hsl;
    }

    //front-end
    function guru(){
        $hsl=$this->db->query("SELECT * FROM tbl_guru");
        return $hsl;
    }
    function guru_perpage($offset,$limit){
        $hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
        return $hsl;
    }

    public function detail_data($id = NULL){
        $querry = $this->db->get_where('tbl_guru',array('guru_id' => $id))->row();
        return $querry;
    }

}