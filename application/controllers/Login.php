<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		//$this->load->model('m_log');

	}

	public function index()
	{
		$this->load->view('login');
		$this->session->sess_destroy(); //
		//tetep
	}


	public function proses()
	{
		$data = array(
			'nip_user' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE)),
			'status' => "aktif"
		);
		/*var_dump ($data);
		die();*/
		$this->load->model('M_login'); // load model_user
		$hasil = $this->M_login->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				//$sess_data['logged_in'] = 'Sudah Loggin';
				/*$sess_data['username'] = $sess->username;*/
				/*$sess_data['nip'] = $sess->nip;*/
				$sess_data['nip_user'] = $sess->nip_user;
				$sess_data['password'] = $sess->password;
				$sess_data['nama'] = $sess->nama;
				$sess_data['id_user'] = $sess->id_user;
				/*$sess_data['cabang'] = $sess->cabang;*/
				$sess_data['jabatan'] = $sess->jabatan;

				/*$sess_data['jabatan'] = $sess->jabatan;*/
				$sess_data['jabatan'] = $sess->jabatan;
				$sess_data['cabang'] = $sess->cabang;
				$sess_data['level'] = $sess->level;
				$sess_data['foto'] = $sess->foto;
				$sess_data['status'] = $sess->status;
				//$sess_data['jabatan'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level') == 'administrator') {
				redirect('admin/C_home');
				//echo "sukses";
				/*redirect('http://localhost/siak_pmg/index.php/admin/C_home');*/
			} elseif ($this->session->userdata('level') == 'mahasiswa') {
				redirect('mahasiswa/C_home');
			} elseif ($this->session->userdata('level') == 'dosen') {
				redirect('dosen/C_home');
			}
		} else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$data = array(
			'alert' => $this->session->flashdata('Berhasil Logout')
		);
		//helper_log("logout", "logout data");
		//redirect('login','refresh',$data);
		redirect('http://localhost/cps_git', 'refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */