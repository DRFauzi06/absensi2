<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Data_model');
		$this->load->model('User_model');
		$this->load->library('session');
		// $this->init();
	}

	
	public function index()
	{

		$tanggal = date('Y-m-d');
		$data['detailProfile'] = $this->db->get_where('karyawan',['karyawan_email'=> $this->session->userdata('email')])->row_array();
		$idKaryawan = $data['detailProfile']['id_karyawan'];

		$this->load->model('User_model');
		$data['jam'] = $this->User_model->getAbsen($idKaryawan,$tanggal);




		$this->load->helper('url');
		$this->load->view('dashboard',$data);
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
		$data['izin'] = $this->db->get_where();
		var_dump($this->session->userdata('email'));
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

	public function uploadAbsen(){
		// redirect('home/index');

		$data['detailProfile'] = $this->db->get_where('karyawan',['karyawan_email'=> $this->session->userdata('email')])->row_array();
		$idKaryawan = $data['detailProfile']['id_karyawan'];
		$latlong = $this->input->post('latlong');
		$tanggal = $this->input->post('tanggal');
		$jam = $this->input->post('jam');
		$image = $this->input->post('image');
		$image = str_replace('data:image/jpeg;base64,','', $image);
		$image = base64_decode($image);
		$filename = 'image_'.time().'.png';
		

		

		
		$this->load->model('User_model');
		$status = $this->User_model->getStatus($idKaryawan,$tanggal);
		var_dump($status);
		
		
		// $this->db->get_where('keterangan',['id_karyawan'=>$idKaryawan])

		if(!$status){
			file_put_contents(FCPATH.'/uploads/masuk/'.$filename,$image);
			$data = array(
				'id_karyawan' => $idKaryawan,
				'tanggal_absensi' => $tanggal,
				'waktu_masuk' => $jam,
				'foto_masuk' => $filename,
				'latitude_longtitude_masuk' => $latlong,
				'keterangan' => '1'
			);
			$this->db->insert('absensi', $data);
			
			redirect('home/index');

		}else if($status->keterangan == 1){
			file_put_contents(FCPATH.'/uploads/pulang/'.$filename,$image);
			$data = array(
				'waktu_pulang' => $jam,
				'foto_pulang' => $filename,
				'latitude_longtitude_pulang' => $latlong,
				'keterangan' => '2'
			);
			$this->db->where('id_karyawan',$idKaryawan);
			$this->db->where('tanggal_absensi',$tanggal);
			$this->db->update('absensi',$data);
			redirect('home/index');


		}
		else{
			redirect('home/index');
		}
		

		
		

		
	}

	public function cekAbsen(){
		
	}
	
}
