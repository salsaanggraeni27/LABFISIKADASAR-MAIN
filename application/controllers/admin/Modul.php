<?php
class Modul extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_modul');
        $this->load->model('m_pengguna');
        $this->load->library('upload');
        $this->load->helper('download');
    }


    function index(){

        $x['data']=$this->m_modul->get_all_files();
        $this->load->view('admin/v_modul',$x);
    }

    function download(){
        $id=$this->uri->segment(4);
        $get_db=$this->m_modul->get_file_byid($id);
        $q=$get_db->row_array();
        $file=$q['modul_data'];
        $path='./assets/files/'.$file;
        $data =  file_get_contents($path);
        $name = $file;

        force_download($name, $data);
        redirect('admin/modul');
    }

    function simpan_file(){
        $config['upload_path'] = './assets/files/'; //path folder
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $file=$gbr['file_name'];
                $judul=strip_tags($this->input->post('xjudul'));
                $deskripsi=$this->input->post('xdeskripsi');
                $oleh=strip_tags($this->input->post('xoleh'));
                $link=strip_tags($this->input->post('xlink'));
                $linkytb=strip_tags($this->input->post('xlinkytb'));

                $this->m_modul->simpan_file($judul,$deskripsi,$oleh,$link,$linkytb,$file);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/modul');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/modul');
            }

        }else{
            redirect('admin/modul');
        }

    }

    function update_file(){

        $config['upload_path'] = './assets/files/'; //path folder
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $file=$gbr['file_name'];
                $kode=$this->input->post('kode');
                $judul=strip_tags($this->input->post('xjudul'));
                $deskripsi=$this->input->post('xdeskripsi');
                $oleh=strip_tags($this->input->post('xoleh'));
                $link=strip_tags($this->input->post('xlink'));
                $linkytb=strip_tags($this->input->post('xlinkytb'));
                $data=$this->input->post('file');
                $path='./assets/files/'.$data;
                unlink($path);
                $this->m_modul->update_file($kode,$judul,$deskripsi,$oleh,$link,$linkytb,$file);
                echo $this->session->set_flashdata('msg','info');
                redirect('admin/modul');

            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/modul');
            }

        }else{
            $kode=$this->input->post('kode');
            $judul=strip_tags($this->input->post('xjudul'));
            $deskripsi=$this->input->post('xdeskripsi');
            $oleh=strip_tags($this->input->post('xoleh'));
            $link=strip_tags($this->input->post('xlink'));
            $linkytb=strip_tags($this->input->post('xlinkytb'));
            $this->m_modul->update_file_tanpa_file($kode,$judul,$deskripsi,$oleh,$link,$linkytb);
            echo $this->session->set_flashdata('msg','info');
            redirect('admin/modul');
        }

    }

    function hapus_file(){
        $kode=$this->input->post('kode');
        $data=$this->input->post('file');
        $path='./assets/files/'.$data;
        unlink($path);
        $this->m_modul->hapus_file($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/modul');
    }

}