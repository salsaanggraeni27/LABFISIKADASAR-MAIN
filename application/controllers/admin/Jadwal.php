<?php
class  Jadwal extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_jadwal');
        $this->load->model('m_pengguna');
        $this->load->library('upload');
        $this->load->helper('download');
    }


    function index(){

        $x['data']=$this->m_jadwal->get_all_files();
        $this->load->view('admin/v_jadwal',$x);
    }

    

    function simpan_file(){
        
                $judul=strip_tags($this->input->post('xjudul'));
                $deskripsi=$this->input->post('xdeskripsi');
                $jurusan=strip_tags($this->input->post('xjurusan'));
                $link=strip_tags($this->input->post('xlink'));
                $this->m_jadwal->simpan_file($judul,$deskripsi,$jurusan,$link);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/jadwal');
    
    }

    function update_file(){
                $kode=$this->input->post('kode');
                $judul=strip_tags($this->input->post('xjudul'));
                $deskripsi=$this->input->post('xdeskripsi');
                $jurusan=strip_tags($this->input->post('xjurusan'));
                
                $link=strip_tags($this->input->post('xlink'));
                
                
                $this->m_jadwal->update_file($kode,$judul,$deskripsi,$jurusan,$link);
                echo $this->session->set_flashdata('msg','info');
                redirect('admin/jadwal');

         
    }

    function hapus_file(){
        $kode=$this->input->post('kode');
        
        
        $this->m_jadwal->hapus_file($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/jadwal');
    }

}