<?php
class Perizinan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_perizinan');
        $this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();

        $this->load->library('upload');
        $this->load->helper('download');
    }
    function index(){
        $x['data']=$this->m_perizinan->get_all_perizinan();
        $x['susulan']=$this->m_perizinan->get_all_susulan();
        $this->load->view('depan/v_perizinan',$x);
    }

    function download()
    {
            $id=$this->uri->segment(4);
            $get_db=$this->m_perizinan->get_file_byid($id);
            $q=$get_db->row_array();
            $file=$q['surat_izin'];
            $path='./assets/surat_izin/'.$file;
            $data =  file_get_contents($path);
            $name = $file;

            force_download($name, $data);
            redirect('perizinan');
    }

    function simpan_file(){
        $config['upload_path'] = './assets/surat_izin/'; //path folder
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan


        $this->upload->initialize($config);
        if(!empty($_FILES['xsurat']['name']))
        {
            if ($this->upload->do_upload('xsurat'))
            {
                $gbr = $this->upload->data();
                $file=$gbr['file_name'];
                $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
                $nrp=htmlspecialchars($this->input->post('xnrp',TRUE),ENT_QUOTES);
                $jurusan=htmlspecialchars($this->input->post('xjurusan',TRUE),ENT_QUOTES);
                $modul=htmlspecialchars($this->input->post('xmodul',TRUE),ENT_QUOTES);
                $tanggal=htmlspecialchars($this->input->post('xtanggal',TRUE),ENT_QUOTES);
                $shift=htmlspecialchars($this->input->post('xshift',TRUE),ENT_QUOTES);
                $alasan=htmlspecialchars($this->input->post('xalasan',TRUE),ENT_QUOTES);
                $status= 0;

                $this->m_perizinan->simpan_file($nama,$nrp,$jurusan,$modul,$tanggal,$shift,$alasan,$file,$status);
                echo $this->session->set_flashdata('msg','<p><strong> NB: </strong> Terima Kasih Telah Mengisi Tunggu Info Selanjutnya.</p>');
                redirect('perizinan');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('perizinan');
            }

        }else{
            redirect('perizinan');
        }

    }
}
