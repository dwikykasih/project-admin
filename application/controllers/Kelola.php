<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_data");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["pengajuan"] = $this->m_data->tampil_data();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('kelola/v_kelola_pengajuan', $data);
    }

    public function asp()
    {
        $data["asp"] = $this->m_data->tampil_asp();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('kelola/v_kelola_asp', $data);
    }

    public function angsuran()
    {
        $data["angsuran"] = $this->m_data->tampil_angsuran();
        $this->load->view('templates/v_header');
        $this->load->view('templates/v_sidebar');
        $this->load->view('templates/v_navbar');
        $this->load->view('kelola/v_kelola_angsuran', $data);
    }
}