<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_bio_dsn
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

class M_sir extends CI_Model {

  // ------------------------------------------------------------------------

 public function select_bio_dsn($id_user)
  {
    $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->row();
  }
}
  public function select_sir()
  {
    $query = $this->db->query('select * from tb_prediksi_sir');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function prediksi()
  {
    $query = $this->db->query('select * from tb_prediksi_sir');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
}

  // ------------------------------------------------------------------------


/* End of file M_sir.php */
/* Location: ./application/models/M_sir.php */