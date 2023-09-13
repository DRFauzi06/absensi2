<?php

/**
 * @property form_validation $form_validation
 * @property load $load
 * @property mixed $db
 * @property mixed $input
 * @property mixed $session
 * 
 */
class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->helper('url');
    }
    public function index(){

        // $this->_sudahLogin();
        
		

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            "required" => "Email tidak boleh kosong",
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            "required" => "Password tidak boleh kosong",
        ]);

        if ($this->form_validation->run() == FALSE) {
            
            
            
            $this->load->view('login');
        } else {
            $this->_masuk();
        }

    }


    private function _masuk()
    {
        $email = htmlspecialchars($this->input->post('email'), true);
        $password = $this->input->post('password');

        $user = $this->db->get_where('karyawan', ['karyawan_email' => $email])->row_array();
        // var_dump($user);
        if ($user) {
            if (password_verify($password, $user['karyawan_password'])) {
                $data = [
                    'email' => $user['karyawan_email']
                    
                ];
                $this->session->set_userdata($data);
                redirect('home/index');
                
            } else  {
                $this->session->set_flashdata('message', '<div class="alert alert-danger ml-4 mr-4 mb-4">Password salah</div>');
                redirect('login/index');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger ml-4 mr-4 mb-4">Email belum terdaftar</div>');
            redirect('login/index');
        }
    }


    public function register(){
        $data['unik']=uniqid();

        

        


        $this->load->helper('url');
		$this->load->view('register',$data);
    }

    public function registrasi(){
        $this->form_validation->set_rules('idUser', 'Id', 'required|trim', ['required' => 'Tidak boleh kosong1']);
        $this->form_validation->set_rules('namaUser', 'Nama', 'required|trim', ['required' => 'Tidak boleh kosong2']);
        $this->form_validation->set_rules('jabatanUser', 'Jabatan Kerja', 'required|trim', ['required' => 'Tidak boleh kosong3']);
        $this->form_validation->set_rules('jamKerja', 'Jam Kerja', 'required|trim', ['required' => 'Tidak boleh kosong4']);
        $this->form_validation->set_rules('lokasiUser', 'Lokasi Kerja', 'required|trim', ['required' => 'Tidak boleh kosong5']);
        $this->form_validation->set_rules('emailUser', 'Email User', 'required|trim|valid_email|is_unique[karyawan.karyawan_email]', [
            'required' => 'Tidak boleh kosong6',
            'is_unique' => 'Sudah digunakan'
        ]);
        $this->form_validation->set_rules('password', 'Kata Sandi', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Tidak boleh kosong7',
            'matches' => '',
            'min_length' => 'Terlalu pendek8'
        ]);
        $this->form_validation->set_rules('password2', 'Konfirmasi Kata Sandi', 'required|trim|matches[password]', [
            'required' => 'Tidak boleh kosong9',
            'matches' => 'Tidak sama',
        ]);

        if ($this->form_validation->run() ==false) {
            // $data['title'] = getenv("APP_NAME") . " - Daftar";
            // $this->load->view('layout/header', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success ml-4 mr-4">Pembuatan Akun Gagal!</div>');
            redirect('login/register');
            // echo validation_errors(); 
            // var_dump($this->form_validation->run());
        } else {
            $data = [
                'karyawan_nip' => htmlspecialchars(($this->input->post('idUser',true))),
                'nama_karyawan' => htmlspecialchars($this->input->post('namaUser', true)),
                'karyawan_email' => htmlspecialchars($this->input->post('emailUser', true)),
                // 'image' => 'default.png',
                'karyawan_password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'id_jabatan' => htmlspecialchars($this->input->post('jabatanUser', true)),
                'id_shift' => htmlspecialchars($this->input->post('jamKerja', true)),
                'id_kantor' => htmlspecialchars($this->input->post('lokasiUser', true)),
                'created_login' => time(),
                'created_cookies' => time()
            ];

            $this->db->insert('karyawan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success ml-4 mr-4">Akun berhasil dibuat! Silahkan Masuk</div>');
            redirect('login/index');
        }

    }

    public function _sudahLogin(){
        if($this->session->userdata['email']<> null){
            redirect('home/index');
        }else if($this->session->userdata['email'] == null){
            redirect('login/index');
        }
    }

    public function keluar()
    {
        unset($_SESSION['email']);
        // $this->session->unset_userdata('email');
        // $this->session->unset_userdata('password');
        var_dump($this->session->userdata('email'));
        var_dump($this->session->userdata('password'));

        $this->session->set_flashdata('message', '<div class="alert alert-success ml-4 mr-4">Anda telah keluar!</div>');
        redirect('login');
        // $this->_sudahLogin();
    }
}


?>