<?php

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
    }
    public function index(){
        $this->load->helper('url');
		

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            "required" => "Email tidak boleh kosong",
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            "required" => "Password tidak boleh kosong",
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = getenv('APP_NAME') . " - Masuk";
            
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
        $this->load->helper('url');
		$this->load->view('register');
    }
}


?>