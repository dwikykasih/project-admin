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

    function update()
    {
        $id = $this->input->post('id_pelanggan');
        $catatan = $this->input->post('catatan_admin');
        $status = $this->input->post('status');
        $asp = $this->input->post('asp');
        $tgl_persetujuan = $this->input->post('tgl_persetujuan');
        $file_akad = $this->input->post('file_akad');
        
     
        $data = array(
            'catatan_admin' => $catatan,
            'status' => $status,
            'asp' => $asp,
            'tgl_persetujuan' => $tgl_persetujuan,
            'file_akad' => $file_akad
        );
     
        $where = array(
            'id_pelanggan' => $id
        );
     
        $this->m_data->update_data($where,$data,'pengajuan');
        redirect('kelola');
    }

    function update_asp()
    {
        $id = $this->input->post('id_asp');
        $catatan = $this->input->post('catatan_admin');
        $status = $this->input->post('status');
        
     
        $data = array(
            'catatan_admin' => $catatan,
            'status' => $status
        );
     
        $where = array(
            'id_asp' => $id
        );
     
        $this->m_data->update_data($where,$data,'pengajuan_asp');
        redirect('kelola/asp');
    }

    function pilih_asp()
    {
        $id = $this->input->post('id_pelanggan');
        $asp = $this->input->post('asp');
     
        $data = array(
            'asp' => $asp
        );
     
        $where = array(
            'id_pelanggan' => $id
        );
     
        $this->m_data->update_data($where,$data,'pengajuan');
        redirect('kelola');
    }

    function update_tgl()
    {
        $status = $this->input->post('status');
        $tgl_sekarang = $this->input->post('tgl_sekarang');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
     
        $data = array(
            'tgl_sekarang' => $tgl_sekarang,
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir
        );

        $where = array(
            'status' => $status
        );
     
     
        $this->m_data->update_data($where,$data,'pengajuan');
        redirect('admin');
    }

    function update_akad()
    {
        $id = $this->input->post('id_pelanggan');
        $catatan_akad = $this->input->post('catatan_akad');
        $tgl_akad = $this->input->post('tgl_akad');
        $file_akad = $this->input->post('file_akad');
        
     
        $data = array(
            'catatan_akad' => $catatan_akad,
            'tgl_akad' => $tgl_akad,
            'file_akad' => $file_akad
        );
     
        $where = array(
            'id_pelanggan' => $id
        );
     
        $this->m_data->update_data($where,$data,'pengajuan');
        redirect('kelola');
    }

}