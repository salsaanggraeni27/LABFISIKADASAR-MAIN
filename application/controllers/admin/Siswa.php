<?php
class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_kelas');
		$this->load->library('upload');
	}


	function index(){
		$x['kelas']=$this->m_kelas->get_all_kelas();
		$x['data']=$this->m_siswa->get_all_siswa();
		$this->load->view('admin/v_siswa',$x);
	}
	
	function simpan_siswa(){

							$nis=strip_tags($this->input->post('xnis'));
                            $nama=strip_tags($this->input->post('xnama'));
                            $jurusan=strip_tags($this->input->post('xjurusan'));
                            $kelompok=strip_tags($this->input->post('xkelompok'));


							$this->m_siswa->simpan_siswa($nis,$nama,$jurusan,$kelompok);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/siswa');

	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/siswa');

	}
	
	function update_siswa(){


	                        $kode=$this->input->post('kode');
                            $nis=strip_tags($this->input->post('xnis'));
                            $nama=strip_tags($this->input->post('xnama'));
                            $jurusan=strip_tags($this->input->post('xjurusan'));
                            $kelompok=strip_tags($this->input->post('xkelompok'));

							$this->m_siswa->update_siswa($kode,$nis,$nama,$jurusan,$kelompok);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/siswa');


	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/siswa');
	                }

	function hapus_siswa(){
		$kode=$this->input->post('kode');
		$this->m_siswa->hapus_siswa($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/siswa');
	}

}
