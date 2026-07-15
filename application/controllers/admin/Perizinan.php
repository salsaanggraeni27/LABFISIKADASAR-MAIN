<?php
class Perizinan extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_perizinan');
        $this->load->helper('download');

    }

    function index(){
        $x['data']=$this->m_perizinan->get_all_perizinan();
        $this->load->view('admin/v_perizinan',$x);
    }

    function download(){
        $id=$this->uri->segment(4);
        $get_db=$this->m_perizinan->get_file_byid($id);
        $q=$get_db->row_array();
        $file=$q['surat_izin'];
        $path='./assets/surat_izin/'.$file;
        $data =  file_get_contents($path);
        $name = $file;

        force_download($name, $data);
        redirect('admin/perizinan');
    }

    function clear(){
        $kode = htmlspecialchars($this->uri->segment(4),ENT_QUOTES);
        $this->db->query("UPDATE tbl_perizinan SET perizinan_status='1' WHERE id_perizinan='$kode'");
        echo $this->session->set_flashdata('msg','success');
        redirect('admin/perizinan');
    }

    function tolak(){
        $kode = htmlspecialchars($this->uri->segment(4),ENT_QUOTES);
        $this->db->query("UPDATE tbl_perizinan SET perizinan_status='2' WHERE id_perizinan='$kode'");
        echo $this->session->set_flashdata('msg','error');
        redirect('admin/perizinan');
    }

    function hapus(){
        $kode=$this->input->post('kode');
        $this->m_perizinan->hapus_perizinan($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/perizinan');
    }
}