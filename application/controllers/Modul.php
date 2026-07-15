<?php
class Modul extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_modul');
        $this->load->helper('download');
        $this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
    }
    function index(){
        $x['data']=$this->m_modul->get_all_files();
        $this->load->view('depan/v_modul',$x);
    }

    function get_file(){
        $id=$this->uri->segment(3);
        $get_db=$this->m_modul->get_file_byid($id);
        $q=$get_db->row_array();
        $file=$q['modul_data'];
        $path='./assets/files/'.$file;
        $data = file_get_contents($path);
        $name = $file;
        force_download($name, $data);
    }

}
