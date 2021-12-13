<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller C_modul_dsn.php
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

class C_modul_dsn extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('dosen/M_modul_dsn');
    
  }

  public function index()
  {
    $data['daftar_modul'] = $this->M_modul_dsn->select_all_modul();
	  //var_dump($data);
//	die();
		$this->load->view('dosen/V_modul_dsn', $data);
    
  }

  public function tambah_data_modul_dsn()
  {
    $this->load->view('dosen/V_tambah_modul_dsn');
  }

  public function proses_tambah_data_modul(){
		$config['upload_path']   = './assets/modul';
		$config['allowed_types'] = 'pdf';
		$config['max_size']      = '20000';
		$config['max_width']     = '20000';
		$config['max_height']    = '20000';

    $panggil = $this->session->userdata();
    $id_userku = $panggil["id_user"];
		$this->load->library('upload', $config);

      
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			echo "<script>alert('gagal')</script>";
			//redirect('C_menu_awal_remedial','refresh');
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "<script>alert('sukses')</script>";
			//$username              = $this->session->userdata; 
			//$waktu                 = date("Ymdhisa");
			//$convert_nama          = $waktu.'.jpg';
			$dataku['id_akademik']   = $_POST['id_akademik'];
			$dataku['id_user']        = $id_userku;
			$dataku['id_matkul']        = $_POST['id_matkul'];
			$dataku['nama_modul']        = $_POST['nama_modul'];
			$dataku['file']        = $data['upload_data']['file_name'];
      $dataku['status']    = $_POST['status'];
      //var_dump($dataku);
			/*var_dump($dataku);
			die();*/
      //die();
			$this->M_modul_dsn->insert_upload($dataku);
			redirect('dosen/C_modul_dsn','refresh');

		}
	}

}


/* End of file C_modul_dsn.php*/
/* Location: ./application/controllers/C_modul_dsn.php*/