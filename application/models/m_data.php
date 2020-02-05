<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model
{
    function tampil_data()
    {
        $this->db->order_by("id_pelanggan", "desc");
        return $this->db->get('pengajuan')->result_array();
    }

    function tampil_angsuran()
    {
        $this->db->order_by("id_order", "desc");
        return $this->db->get_where('pengajuan', ['status' => 1])->result_array();
    }

    function tampil_asp()
    {
        $this->db->order_by("id_asp", "desc");
        return $this->db->get('pengajuan_asp')->result_array();
        
    }

    function tampil_pelanggan()
    {
        $this->db->order_by("id_pelanggan", "desc");
        return $this->db->get('daftar_pelanggan')->result_array();
    }

    
    function tampil_riwayat()
    {
        
        $this->db->order_by("id_pelanggan", "desc");
        return $this->db->get_where('pengajuan', ['status' => 1])->result_array();
    }

    function select_asp()
    {
        $query = $this->db->select('*')->from('pengajuan_asp')->get();
        return $query->result();
    }

    function daftar_asp()
    {
        $this->db->order_by("id_asp", "desc");
        return $this->db->get_where('pengajuan_asp', ['status' => 1])->result_array();
    }
    

    public function detailPengajuan()
    {
        $id = $_GET["detail_id"];
        $query = $this->db->get_where('pengajuan', array('id_pelanggan' => $id));
        return $query->result_array();
    }

    public function detailAsp()
    {
        $id = $_GET["detail_id"];
        $query = $this->db->get_where('pengajuan_asp', array('id_asp' => $id));
        return $query->result_array();
    }

    public function detailPelanggan()
    {
        $id = $_GET["detail_id"];
        $query = $this->db->get_where('daftar_pelanggan', array('id_pelanggan' => $id));
        return $query->result_array();
    }

    public function pilih_asp()
    {
        $hasil = $this->db->query('SELECT * FROM pengajuan_asp')->result_array();
        return $hasil;
    }

    public function hapus()
    {
        $id = $_GET["delete_id"];
        $this->db->delete('pengajuan', array('id' => $id));
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>location='kelola';</script>"; 
     
    }

    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }   
    
    public function hitungJumlahAsset($table, $stat)
    {   
        $query = $this->db->get_where($table, ['status' => $stat]);
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function hitungJumlahInventori($sum, $table)
    {
       $this->db->select_sum($sum);
       $query = $this->db->get($table);
       if($query->num_rows()>0)
       {
         return $query->row()->$sum;
       }
       else
       {
         return 0;
       }
    }


}