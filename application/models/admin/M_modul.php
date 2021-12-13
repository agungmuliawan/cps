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
}

/* End of file M_modul_model.php */
/* Location: ./application/models/M_modul_model.php */