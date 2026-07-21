<?php
class Jadwal extends CI_Controller{
    function __construct(){
        parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			redirect('administrator');
		}
        $this->load->model('m_jadwal');
        $this->load->helper('download');
        $this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
    }
    function index(){
        $x['data']=$this->m_jadwal->get_all_files();
        $this->load->view('depan/v_jadwal',$x);
    }

}
