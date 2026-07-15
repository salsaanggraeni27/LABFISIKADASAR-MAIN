<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class ImportExcel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_excel');
    }

    public function index()
    {
        $this->load->view('admin/v_siswa');
    }


    public function upload_data()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc'. time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel'))
        {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('uploads/' . $file['file_name']);

            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $datasiswa = array(
                            'siswa_nis'  => $row->getCellAtIndex(0),
                            'siswa_nama'  => $row->getCellAtIndex(1),
                            'siswa_jurusan'       => $row->getCellAtIndex(2),
                            'siswa_kelompok' => $row->getCellAtIndex(3),
                            'siswa_kelompok_besar' => $row->getCellAtIndex(4),
                            'kelas_siswa	' => $row->getCellAtIndex(5),
                            'harijam_siswa' => $row->getCellAtIndex(6),
                        );
                        $this->M_excel->import_data($datasiswa);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('admin/siswa');
            }
        }else{
            echo "Error : " . $this->upload->display_errors();
        }
    }
}
