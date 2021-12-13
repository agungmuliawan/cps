<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_user');
		
	}
	public function index()
	{
	//	$data['daftar_user'] = $this->M_user->select_all_user();
	//$this->load->view('admin/V_user');
	$data['daftar_user'] = $this->M_user->select_all_user();
	//var_dump($data);
	//die();
		$this->load->view('admin/V_user', $data);
	}
	public function tambah_data_user()
	{
		
		$this->load->view('admin/V_tambah_user');
	}
}

/* End of file C_home.php */
/* Location: ./application/controllers/admin_area/C_home.php */