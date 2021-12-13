<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model M_modul_dsn_model
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

class M_modul_dsn extends CI_Model {


  // ------------------------------------------------------------------------
  public function select_all_modul()
  {
    $panggil = $this->session->userdata();
    $id_user = $panggil['id_user'];

      $query = $this->db->query('select tb_modul.*, tb_akademik.tahun_akademik, tb_akademik.semester,
      tb_matkul.nama_matkul from tb_modul, tb_akademik, tb_matkul
       where tb_modul.id_akademik = tb_akademik.id_akademik AND tb_modul.id_user = "'.$id_user.'" AND
       tb_matkul.id_matkul = tb_modul.id_matkul');
    $num = $query->num_rows();
    if($num>0){
      return $query->result();
    }
    else {
      return 0;
    }
  }
  public function insert_upload($dataku){
		return $this->db->insert('tb_modul',$dataku);
	}	


  // ------------------------------------------------------------------------

}

/* End of file M_modul_dsn_model.php */
/* Location: ./application/models/M_modul_dsn_model.php */