<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{

		$this->load->helper('url');
		$this->load->view('dashboard');
		$this->load->view('layout/bottom');
	}
	public function profile()
	{

		$this->load->helper('url');
		$this->load->view('admin/profile');
		$this->load->view('layout/bottom');
	}
	public function cuti()
	{

		$this->load->helper('url');
		$this->load->view('admin/cuti');
		$this->load->view('layout/bottom');
	}
	public function history()
	{

		$this->load->helper('url');
		$this->load->view('admin/history');
		$this->load->view('layout/bottom');
	}
	public function izin()
	{

		$this->load->helper('url');
		$this->load->view('admin/izin');
		$this->load->view('layout/bottom');
	}
	
}
