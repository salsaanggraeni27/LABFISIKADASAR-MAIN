<?php
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Alat extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect('administrator');
        }
        $this->load->model('m_alat');
    }

    function index(){
        $x['data'] = $this->m_alat->get_all_alat();
        $this->load->view('admin/v_alat', $x);
    }

    function import_csv(){
        if(isset($_FILES["file"]["name"]) && $_FILES["file"]["name"] != ''){

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'xlsx|xls';
            $config['file_name'] = 'alat_' . time();
            $this->load->library('upload', $config);

            if($this->upload->do_upload('file')){
                $uploaded = $this->upload->data();
                $filepath = 'uploads/' . $uploaded['file_name'];

                $reader = ReaderEntityFactory::createXLSXReader();
                $reader->open($filepath);

                $data = array();

                foreach($reader->getSheetIterator() as $sheet){
                    $allRows = array();

                    // 1. Kumpulkan semua baris dulu, buang baris yang benar-benar kosong total
                    foreach($sheet->getRowIterator() as $row){
                        $rowArray = $row->toArray();
                        $isRowEmpty = true;
                        foreach($rowArray as $cell){
                            if($cell !== null && $cell !== ''){
                                $isRowEmpty = false;
                                break;
                            }
                        }
                        if(!$isRowEmpty){
                            $allRows[] = $rowArray;
                        }
                    }

                    // 2. Baris pertama yang tidak kosong dianggap HEADER, sisanya data
                    if(count($allRows) > 1){
                        $headerRow = $allRows[0];

                        // Cari kolom pertama yang ada isinya (buat geser offset kolom kosong di kiri)
                        $colOffset = 0;
                        foreach($headerRow as $idx => $val){
                            if($val !== null && $val !== ''){
                                $colOffset = $idx;
                                break;
                            }
                        }

                        // 3. Loop semua baris data (mulai index 1, skip header)
                        for($i = 1; $i < count($allRows); $i++){
                            $dataRow = $allRows[$i];

                            $nama         = isset($dataRow[$colOffset])   ? trim($dataRow[$colOffset])   : '';
                            $spesifikasi  = isset($dataRow[$colOffset+1]) ? trim($dataRow[$colOffset+1]) : '';
                            $stok         = isset($dataRow[$colOffset+2]) ? trim($dataRow[$colOffset+2]) : 0;

                            if(!empty($nama)){
                                $data[] = array(
                                    'nama_alat'     => $nama,
                                    'spesifikasi'   => $spesifikasi,
                                    'stok_awal'     => $stok,
                                    'stok_tersedia' => $stok
                                );
                            }
                        }
                    }
                }
                $reader->close();
                unlink($filepath);

                if(!empty($data)){
                    $this->m_alat->hapus_semua_alat();
                    $this->m_alat->simpan_batch_alat($data);
                    $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Alat Berhasil Diperbarui dari Excel!</div>');
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger">File Excel Kosong atau Format Salah!</div>');
                }

            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Upload Gagal: '.$this->upload->display_errors('', '').'</div>');
            }

            redirect('admin/alat');
        }
    }

    // Fungsi Edit Manual di Web Admin
    function update_alat(){
        $id = $this->input->post('xid');
        $nama = $this->input->post('xnama');
        $spesifikasi = $this->input->post('xspesifikasi');
        $stok = $this->input->post('xstok');

        $this->m_alat->update_alat($id, $nama, $spesifikasi, $stok);
        $this->session->set_flashdata('msg', '<div class="alert alert-info">Data Alat Berhasil Diedit!</div>');
        redirect('admin/alat');
    }

    function hapus_alat(){
        $id = $this->input->post('kode');
        $this->m_alat->hapus_alat($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success">Data Alat Berhasil Dihapus!</div>');
        redirect('admin/alat');
    }
}