<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('v_admin');
		$this->load->view('templates/v_footer');
	}
	public function pengajuan()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('kelola/v_kelola_pengajuan');
	}

	public function detail()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('kelola/v_detail_pengajuan');
	}

	public function asp()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('kelola/v_kelola_asp');
	}

	public function detail_asp()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('kelola/v_detail_asp');
	}
}
