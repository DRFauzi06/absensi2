<?php

class Login extends CI_Controller{
    public function index(){
        $this->load->helper('url');
		$this->load->view('login');

    }
    public function register(){
        $this->load->helper('url');
		$this->load->view('register');
    }
}


?>