<?php
class Nilai extends CI_Controller{
    function __construct(){
        parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			redirect('administrator');
		}
        $this->load->model('m_nilai');
        $this->load->helper('download');
        $this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
    }
    function index(){
        $x['data']=$this->m_nilai->get_all_files();
        $this->load->view('depan/v_nilai',$x);
    }

    function get_file(){
        $id=$this->uri->segment(3);
        $get_db=$this->m_nilai->get_file_byid($id);
        $q=$get_db->row_array();
        $file=$q['nilai_data'];
        $path='./assets/files/'.$file;
        $data = file_get_contents($path);
        $name = $file;
        force_download($name, $data);
    }

}
