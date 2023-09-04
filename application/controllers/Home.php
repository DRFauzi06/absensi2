<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{

		$this->load->helper('url');
		$this->load->view('dashboard');
	}
	public function profile()
	{

		$this->load->helper('url');
		$this->load->view('home/profile');
	}
	public function cuti()
	{

		$this->load->helper('url');
		$this->load->view('cuti');
	}
	public function history()
	{

		$this->load->helper('url');
		$this->load->view('history');
	}
	public function lokasi()
	{

		$this->load->helper('url');
		$this->load->view('lokasi');
	}
	
}
