<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_modul');
		
	}
	public function index()
	{
		$data['daftar_pengumuman'] = $this->M_modul->select_all_pengumuman();
        $this->load->view('admin/V_home', $data);
	}
	
}

/* End of file C_home.php */
/* Location: ./application/controllers/admin_area/C_home.php */