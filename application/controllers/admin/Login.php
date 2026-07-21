<?php
ob_start();
?>
<?php
class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
        $this->load->model('m_pengguna');
    }
    function index(){
        $this->load->view('admin/v_login');
    }
    function register(){
        $this->load->view('admin/v_register');
    }
    function register_auth(){
        $nama = strip_tags($this->input->post('nama'));
        $jenkel = strip_tags($this->input->post('jenkel'));
        $username = strip_tags($this->input->post('username'));
        $password = strip_tags($this->input->post('password'));
        $password_confirm = strip_tags($this->input->post('password_confirm'));
        $email = strip_tags($this->input->post('email'));
        $nohp = strip_tags($this->input->post('nohp'));
        $level = '2'; // Default role is user/author

        if (empty($nama) || empty($jenkel) || empty($username) || empty($password) || empty($email)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Semua field wajib diisi!</div>');
            redirect('admin/login/register');
        }

        if ($password <> $password_confirm) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Password dan Konfirmasi Password tidak cocok!</div>');
            redirect('admin/login/register');
        }

        // Check duplicate username
        $check_user = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_username='$username'");
        if ($check_user->num_rows() > 0) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username sudah terdaftar!</div>');
            redirect('admin/login/register');
        }

        // Save
        $save = $this->m_pengguna->simpan_pengguna_tanpa_gambar($nama, $jenkel, $username, $password, $email, $nohp, $level);
        if ($save) {
            $cadmin = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_username='$username'");
            if ($cadmin->num_rows() > 0) {
                $xcadmin = $cadmin->row_array();
                $this->session->set_userdata('masuk', true);
                $this->session->set_userdata('user', $username);
                $this->session->set_userdata('akses', '2');
                $this->session->set_userdata('idadmin', $xcadmin['pengguna_id']);
                $this->session->set_userdata('nama', $xcadmin['pengguna_nama']);
                
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Registrasi Berhasil! Selamat datang.</div>');
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Gagal mendaftar. Silakan coba lagi.</div>');
            redirect('admin/login/register');
        }
    }
    function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('username')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $u=$username;
        $p=$password;
        $cadmin=$this->m_login->cekadmin($u,$p);
        if($cadmin->num_rows() > 0){
         $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u);
         $xcadmin=$cadmin->row_array();
         if($xcadmin['pengguna_level']=='1'){
            $this->session->set_userdata('akses','1');
            $idadmin=$xcadmin['pengguna_id'];
            $user_nama=$xcadmin['pengguna_nama'];
            $this->session->set_userdata('idadmin',$idadmin);
            $this->session->set_userdata('nama',$user_nama);
            redirect('admin/dashboard');
         }else{
             $this->session->set_userdata('akses','2');
             $idadmin=$xcadmin['pengguna_id'];
             $user_nama=$xcadmin['pengguna_nama'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);
             redirect('home');
         }

       }else{
         echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
         redirect('admin/login');
       }

    }

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
