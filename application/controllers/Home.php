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
		$data['detailProfile'] = $this->db->get_where('karyawan', ['karyawan_email' => $this->session->userdata('email')])->row_array();
		$cuti = $data['detailProfile']['nama_karyawan'];
		$this->load->helper('url');
		$this->load->view('user/cuti',$data);
		$this->load->view('layout/bottom');
		var_dump($cuti);
	}
	public function addCuti()
	{
		$data['detailProfile'] = $this->db->get_where('karyawan', ['karyawan_email' => $this->session->userdata('email')])->row_array();
		// $cuti = $data['detailProfile']['nama_karyawan'];
		$cuti = $data['detailProfile']['id_karyawan'];
		// $nama = $this->input->post('nama');
		$mulai_cuti = $this->input->post('mulai_cuti');
		$berakhir_cuti = $this->input->post('cuti_berakhir');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$jumlah_cuti = $this->input->post('jumlah_cuti');
		$keterangan = $this->input->post('keterangan_cuti');

		$data = array(
			'id_karyawan' => $cuti,
			'mulai_cuti' => $mulai_cuti,
			'selesai_cuti' => $berakhir_cuti,
			'tanggal_kerja' => $tanggal_masuk,
			'total_cuti' => $jumlah_cuti,
			'deskripsi_cuti' => $keterangan

		);
		$this->db->insert('cuti', $data);
		redirect('home/cuti');

	}
	public function history()
	{

		$this->load->helper('url');
		$this->load->view('user/history');
		$this->load->view('layout/bottom');
	}
	public function izin()
	{
		$data['detailProfile'] = $this->db->get_where('karyawan', ['karyawan_email' => $this->session->userdata('email')])->row_array();
		$izin = $data['detailProfile']['id_karyawan'];
		$this->load->helper('url');
		$this->load->view('user/izin',$data);
		$this->load->view('layout/bottom');
		// var_dump($data);
		var_dump($izin);
		var_dump($this->session->userdata('email'));
	}
	public function addIzin(){
		
		// $file_name = str_replace('.','',$data['current_user']->id);
		// $config['upload_path'] = FCPATH.'/uploads/avatar/';
		$data['detailProfile'] = $this->db->get_where('karyawan', ['karyawan_email' => $this->session->userdata('email')])->row_array();
		$izin = $data['detailProfile']['id_karyawan'];
		$nama_izin = $this->input->post('type');
		$mulai_izin = $this->input->post('permission_date');
		$selesai_izin = $this->input->post('permission_date_finish');
		// $status = $this->input->post('type');
		$allowed_type = array('jpg', 'jpeg', 'doc', 'docx', 'docm', 'pdf', 'png');
		$file_upload = $this->input->post('files');
		$file_name = $data['detailProfile']['karyawan_nip'].time().$allowed_type;
		file_put_contents(FCPATH.'/uploads/file/'.$file_name,$file_upload);
		$deskripsi = $this->input->post('permission_description');
		// $config['upload_path'] = './uploads/file/'; // Specify the upload directory
        // $config['allowed_types'] = 'jpg|jpeg|doc|docx|docm|pdf'; // Allowed file extensions
        // $config['max_size'] = 16384; // Maximum file size in kilobytes (16MB)

        // $this->load->library('upload', $config);

        // if (!$this->upload->do_upload('userfile')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     // $this->load->view('upload_', $error);
		// 	$this->session->set_flashdata('message', '<div class="alert alert-success mb-4">Upload Gagal</div>');
		// 	redirect('home/izin');
        // } else {
        //     $data = array('upload_data' => $this->upload->data());
        //     // Handle the file upload success here, e.g., save file info to database
        //     // $this->load->view('upload_success', $data);
		// 	$this->session->set_flashdata('message', '<div class="alert alert-success mb-4">Upload Berhasil</div>');
		// 	redirect('home/izin');
        // }

		$data = array(
			'id_karyawan' => $izin,
			'nama_izin' => $nama_izin,
			'mulai_izin' => $mulai_izin,
			'akhir_izin' => $selesai_izin,
			// 'status' => $status,
			'files' => $file_name,
			'deksripsi_izin' => $deskripsi

		);
		// file_put_contents(FCPATH.'/uploads/file/'.$file_upload);
		$this->db->insert('izin', $data);
		redirect('home/izin');
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
			//
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
