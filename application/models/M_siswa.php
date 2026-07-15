<?php 
class M_siswa extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa");
		return $hsl;
	}

	function simpan_siswa($nis,$nama,$jurusan, $kelompok){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jurusan,siswa_kelompok) VALUES ('$nis','$nama','$jurusan','$kelompok')");
		return $hsl;
	}
	function update_siswa($kode,$nis,$nama,$jurusan, $kelompok){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jurusan='$jurusan',siswa_kelompok='$kelompok' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_siswa WHERE siswa_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa limit $offset,$limit");
		return $hsl;
	}

}