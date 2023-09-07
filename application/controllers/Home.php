<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('data_model');
		$this->load->library('session');
		// $this->init();
	}

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('dashboard');
		$this->load->view('layout/bottom');

		
		
	}

	
	public function profile()
	{


		// $this->load->model('Data_model');

		$data['detailProfile'] = $this->db->get_where('karyawan',['karyawan_email'=> $this->session->userdata('email')])->row_array();
		$data['kantor'] = $this->db->get_where('kantor',['id_kantor'=>$data['detailProfile']['id_kantor']])->row_array();
		
		// $hasil = $query->result();
		

		$this->load->helper('url');
		$this->load->view('user/profile',$data);
		$this->load->view('layout/bottom');
	}

	public function updatePassword(){

		$password = $this->input->post('passwordBaru');
		$id = $this->input->post('idKaryawan');
		$data = [
			'karyawan_password' => password_hash ($password, PASSWORD_DEFAULT)
		];

		

		$this->db->where('id_karyawan',$id);
		$this->db->update('karyawan',$data);
		// var_dump($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success mb-4">Password berhasil diubah!</div>');
			redirect('home/index');

		
		// if ( $this->db->update('karyawan',$data)) {    
		// 	$this->session->set_flashdata('message', '<div class="alert alert-success mb-4">Password berhasil diubah!</div>');
		// 	redirect('home/index');
		// } else {
		// 	$this->session->set_flashdata('message', '<div class="alert alert-danger mb-4">Password gagal diubah</div>');
		// 	redirect('home/index');
		// }
	}
	public function cuti()
	{

		$this->load->helper('url');
		$this->load->view('user/cuti');
		$this->load->view('layout/bottom');
	}
	public function history()
	{

		$this->load->helper('url');
		$this->load->view('user/history');
		$this->load->view('layout/bottom');
	}
	public function izin()
	{

		$this->load->helper('url');
		$this->load->view('user/izin');
		$this->load->view('layout/bottom');
	}
	public function absen()
	{

		$this->load->helper('url');
		$this->load->view('user/absen');
		$this->load->view('layout/bottom');
	}
	
}
