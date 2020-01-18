<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('m_data');
		
	}
    
    public function index()
    {
        $data ['detail'] = $this->m_data->detailPengajuan();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('kelola/v_detail_pengajuan', $data);
     
    }
    
    public function asp()
    {
        $data ['detail'] = $this->m_data->detailAsp();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('kelola/v_detail_asp', $data);
    }
    
     public function pelanggan()
    {
        $data ['detail'] = $this->m_data->detailPelanggan();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('data/v_detail_customers', $data);
    }
}

?>
