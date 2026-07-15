<?php
class Nilai extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_nilai');
        $this->load->model('m_pengguna');
        $this->load->library('upload');
        $this->load->helper('download');
    }


    function index(){

        $x['data']=$this->m_nilai->get_all_files();
        $this->load->view('admin/v_nilai',$x);
    }

    function simpan_file(){
        
                $gbr = $this->upload->data();
               
                $judul=strip_tags($this->input->post('xjudul'));
                $deskripsi=$this->input->post('xdeskripsi');
                $jurusan=strip_tags($this->input->post('xjurusan'));
                
                $link=strip_tags($this->input->post('xlink'));

                $this->m_nilai->simpan_file($judul,$deskripsi,$jurusan,$link);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/nilai');
           

    }

    function update_file(){

                $gbr = $this->upload->data();
                $file=$gbr['file_name'];
                $kode=$this->input->post('kode');
                $judul=strip_tags($this->input->post('xjudul'));
                $deskripsi=$this->input->post('xdeskripsi');
                $jurusan=strip_tags($this->input->post('xjurusan'));
                
                $link=strip_tags($this->input->post('xlink'));
                
                
                
                $this->m_nilai->update_file($kode,$judul,$deskripsi,$jurusan,$link);
                echo $this->session->set_flashdata('msg','info');
                redirect('admin/nilai');

    }

    function hapus_file(){
        $kode=$this->input->post('kode');
       
        $this->m_nilai->hapus_file($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/nilai');
    }

}