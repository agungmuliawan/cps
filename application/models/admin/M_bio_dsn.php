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

class M_bio_dsn extends CI_Model {

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

  // ------------------------------------------------------------------------

}

/* End of file M_bio_dsn.php */
/* Location: ./application/models/M_bio_dsn.php */