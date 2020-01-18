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
	
	public function detail_pengajuan()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('kelola/v_detail_pengajuan');
	}

	public function detail_customers()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('data/v_detail_customers');
	}

	public function riwayat()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('data/v_riwayat');
	}

	public function down_payment()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('pembayaran/v_dp');
	}

	public function progres()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('pembayaran/v_progres');
	}

	public function detail_progres()
	{
		$this->load->view('templates/v_header');
		$this->load->view('templates/v_sidebar');
		$this->load->view('templates/v_navbar');
		$this->load->view('pembayaran/v_detail_pembayaran');
	}
}