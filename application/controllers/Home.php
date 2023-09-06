<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('dashboard');
		$this->load->view('layout/bottom');

		
		
	}

	public function dashboard(){
		
	}
	public function profile()
	{

		$this->load->helper('url');
		$this->load->view('user/profile');
		$this->load->view('layout/bottom');
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
