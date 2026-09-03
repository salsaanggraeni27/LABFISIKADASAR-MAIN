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

                    if(count($allRows) > 1){
                        $headerRow = $allRows[0];
                        $colOffset = 0;

                        foreach($headerRow as $idx => $val){
                            if($val !== null && $val !== ''){
                                $colOffset = $idx;
                                break;
                            }
                        }

                        for($i = 1; $i < count($allRows); $i++){
                            $dataRow = $allRows[$i];

                            $nama = isset($dataRow[$colOffset]) ? trim($dataRow[$colOffset]) : '';
                            $deskripsi = isset($dataRow[$colOffset + 1]) ? trim($dataRow[$colOffset + 1]) : '';
                            $stok = isset($dataRow[$colOffset + 2]) ? trim($dataRow[$colOffset + 2]) : 0;

                            if(!empty($nama)){
                                $data[] = array(
                                    'nama_alat'    => $nama,
                                    'deskripsi'    => $deskripsi,
                                    'stok'         => $stok,
                                    'dipinjam'     => 0,
                                    'rusak_hilang' => 0
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
                }
            }
        }
        redirect('admin/alat');
    }

    function tambah_alat(){
        $nama      = $this->input->post('nama_alat');
        $deskripsi = $this->input->post('deskripsi');
        $stok      = $this->input->post('stok');

        if($stok < 0){ $stok = 0; }

        $data = array(
            'nama_alat'    => $nama,
            'deskripsi'    => $deskripsi,
            'stok'         => $stok,
            'dipinjam'     => 0,
            'rusak_hilang' => 0
        );

        $this->m_alat->tambah_alat($data);
        redirect('admin/alat');
    }

    function update_alat(){
        $id                = $this->input->post('xid');
        $nama              = $this->input->post('xnama');
        $deskripsi         = $this->input->post('xdeskripsi');
        $stok_input        = (int)$this->input->post('xstok');
        $dipinjam_baru     = (int)$this->input->post('xdipinjam');
        $rusak_hilang_baru = (int)$this->input->post('xrusak_hilang');

        if($stok_input < 0) $stok_input = 0;
        if($dipinjam_baru < 0) $dipinjam_baru = 0;
        if($rusak_hilang_baru < 0) $rusak_hilang_baru = 0;

        // Ambil data lama untuk menghitung selisih perubahan
        $alat_lama = $this->m_alat->get_alat_by_id($id);

        if($alat_lama){
            $selisih_dipinjam     = $dipinjam_baru - (int)$alat_lama->dipinjam;
            $selisih_rusak_hilang = $rusak_hilang_baru - (int)$alat_lama->rusak_hilang;

            // Hitung otomatis perubahan stok berdasarkan selisih
            $stok_akhir = $stok_input - ($selisih_dipinjam + $selisih_rusak_hilang);

            if($stok_akhir < 0) $stok_akhir = 0;

            $this->m_alat->update_alat($id, $nama, $deskripsi, $stok_akhir, $dipinjam_baru, $rusak_hilang_baru);
        }

        redirect('admin/alat');
    }

    function hapus_alat(){
        $id = $this->input->post('kode');
        $this->m_alat->hapus_alat($id);
        redirect('admin/alat');
    }
}