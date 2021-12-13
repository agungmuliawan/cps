<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_user
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

class M_user extends CI_Model {

  // ------------------------------------------------------------------------
  public function select_all_user()
  {
    $query = $this->db->query('select * from tb_user');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }

  // ------------------------------------------------------------------------

}

/* End of file M_user_model.php */
/* Location: ./application/models/M_user_model.php */