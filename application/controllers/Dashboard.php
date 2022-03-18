<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('nama')) {
			redirect('auth');
		}
	}

	public function index()
	{
		$this->load->view('v_header');
		$this->load->view('v_dashboard');
		$this->load->view('v_footer');
	}
}
