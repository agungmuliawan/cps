<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function __construct()
	{
		parent::__construct();
		//Do your magic here
	}


	public function index($user,$pass)
	{
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		return $this->db->get('tb_user')->row();	
	}
	

	public function cek_user($data) {
		$query = $this->db->get_where('tb_user', $data);
		return $query;
	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */