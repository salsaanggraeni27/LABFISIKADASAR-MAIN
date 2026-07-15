<?php
class Kelprak extends CI_Controller{
	function __construct(){
		parent::__construct();
        $this->load->model('m_siswa');
        $this->load->model('m_kelas');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
        $x['kelas']=$this->m_kelas->get_all_kelas();
        $x['data']=$this->m_siswa->get_all_siswa();
        $this->load->view('depan/v_siswa',$x);
	}



}
