<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_data");
        $this->load->library('form_validation');
    }

    public function index()
    {
    	$data["pelanggan"] = $this->m_data->tampil_pelanggan();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('data/v_customers', $data);
    }

    public function daftar_asp()
    {
    	$data["asp"] = $this->m_data->daftar_asp();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('data/v_asp', $data);
    }


    public function riwayat()
    {
        $data["riwayat"] = $this->m_data->tampil_riwayat();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('data/v_riwayat', $data);
    }
    public function tes()
    {
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('data/tes');
    }

}