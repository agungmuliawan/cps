<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_modul_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class M_modul extends CI_Model {

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function select_all_modul()
  {
    $query = $this->db->query('select * from tb_modul');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function select_all_pengumuman()
  {
    $query = $this->db->query('select * from tb_pengumuman');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function select_all_perawat()
  {
    $query = $this->db->query('select * from tb_perawat');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function select_all_data_pegawai_libur()
  {
    $query = $this->db->query('select tb_penjadwalan.*, tb_perawat.nama_perawat as nama from tb_penjadwalan, tb_perawat where tb_penjadwalan.id_perawat = tb_perawat.id_perawat');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
    public function select_all_libur()
  {
    $query = $this->db->query('select * from tb_libur');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }

  // ------------------------------------------------------------------------
  //code scheduling
  // ------------------------------------------------------------------------
  public function query_1()
  {
    $query = $this->db->query('select count(id_perawat) as jumlah_perawat from tb_perawat');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function query_2()
  {
    $query = $this->db->query('select * from tb_libur where tgl = "2021-12-02"');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function query_3()
  {
    $query = $this->db->query('select * from tb_libur where tgl = "2021-12-02"');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function select_lihat()
  {
    $query = $this->db->query('select tb_masuk.*, tb_perawat.nama_perawat as nama from tb_masuk, tb_perawat where tb_masuk.id_perawat = tb_perawat.id_perawat');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function query_4()
  {
    $query = $this->db->query('select tb_perawat.nama_perawat as nama_perawat from tb_penjadwalan, tb_perawat 
    where tb_penjadwalan.id_perawat = tb_perawat.id_perawat');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function proses($id_libur)
  {
     // $panggil = $this->session->userdata();
      $query = $this->db->query('select * from');
      $num = $query->num_rows();
      if ($num>0) {
          //Mengirimkan data array hasil query
          return $query->result();
      //Function result() hampir sama dengan function mysql_fetch_array()
      } else {
          return 0;
          //Kirimkan 0 jika tidak ada datanya
      }
  }

  public function getPerawatNotInJadwal($perawat_ids){
    // $query = $this->db->from('tb_perawat')
    //         ->where_not_in('id_perawat', $perawat_ids)
    //         ->get();
    $query = $this->db->query('
          select 
            *
          from tb_perawat 
          where id_perawat not in ('.$perawat_ids.')')
          ->result();
            // print_r($this->db->last_query());  
    #kenapa ini gung ? kwkw 
    #buat ngedump sqlnya gimana gung di ci ? gak tau ab wkwk'
    return $query;
  }
}

/* End of file M_modul_model.php */
/* Location: ./application/models/M_modul_model.php */