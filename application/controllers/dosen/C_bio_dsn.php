<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller C_bio_dsn
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class C_bio_dsn extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('dosen/M_bio_dsn');
    
  }

  public function index()
  {
    $panggil = $this->session->userdata();
    $id_user = $panggil['id_user'];
    $data['bio_dsn'] = $this->M_bio_dsn->select_bio_dsn($id_user);
		$this->load->view('dosen/V_bio_dsn', $data);
  }
  public function proses_edit_dsn($id_user)
  {
   // echo $id_user;
       // die();
      $kirim = array('id_user' => $id_user ,
          'nama' => $_POST['nama'],
          'password' => md5($_POST['password']));
      $query = $this->db->where('id_user', $id_user)->update('tb_user', $kirim);
      if ($query == true) {
          echo '<script>alert("Sukses Update Data Dosen")</script>';
          redirect('dosen/C_bio_dsn');
      } else {
          echo '<script>alert("Gagal Update Data Dosen")</script>';
          redirect('dosen/C_bio_dsn');
      }
      echo json_encode($query);
  }
}


/* End of file C_bio_dsn.php */
/* Location: ./application/controllers/C_bio_dsn.php */