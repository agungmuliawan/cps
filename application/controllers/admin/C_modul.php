<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller C_modul.php
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

class C_modul extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('admin/M_modul');
    
  }

  public function index()
  {
    $data['daftar_modul'] = $this->M_modul->select_all_modul();
	  //var_dump($data);
//	die();
		$this->load->view('admin/V_modul', $data);
  }
  public function perawat()
  {
    $data['daftar_perawat'] = $this->M_modul->select_all_perawat();
	  //var_dump($data);
//	die();
		$this->load->view('admin/V_perawat', $data);
  }
  public function perawat_null()
  {
    $limit = 40;
    echo "data perawat <br>";
    $data1['q1'] = $this->M_modul->query_1();
	  var_dump($data1);
    echo "<br><br>";
    echo "data libur pakai select button  <br>";
    $data2['q2'] = $this->M_modul->query_2();
	  var_dump($data2);
    echo "<br><br>";
    echo "libur pegawai menggunakan hari 1=5 dan hari 2 = 7 <br>";
    echo "<br>";
    $libur_hari1 = 5;
    echo "data jumlah pegawai masuk hari ke 1 = 40 - 5 = 35 orang  <br>";
    echo "<br>";
    $jumlah_kerja_hari1= 35;
    echo "data scheduling pakai for + 1  <br>";
    //$data2['q3'] = $this->M_modul->query_3();
    //$pegawai_masuk = "35";
    for ($i=6; $i <= $limit; $i++) { 
      echo "$i  ";
    }
    echo "<br><br>";
    echo "data awal libur +1 (5+1) = 6 <br>";
    $libur_hari2 = 7;
    echo "data jumlah pegawai masuk hari ke 2 = 40 - 7 = 33 orang  <br>";
    echo "<br>";
    $jumlah_kerja_hari2= 33;
    echo "data scheduling pakai for + 1  <br>";
    for ($i=12; $i <= $limit; $i++) { 
      echo "$i  ";
    }
    echo "<br> jumlah data dari data ke 6-40 = ada 29 data <br>";
    $jumlah_data_ke2 = 29;
    echo "karna di limit 40 balek ke 1 lagi<br>";
    $sisa = $jumlah_kerja_hari2 - $jumlah_data_ke2;
    echo "<br>sisa = $sisa <br>";
   // $pegawai_masuk_2 = $jumlah_kerja_hari1+1;
   // echo "mulai start = $jumlah_kerja_hari1 - 1 = $pegawai_masuk_2<br><br>";
   // echo "data jumlah pegawai masuk hari ke 2 = Dari data ke 36 di limit (query) sampai 40 pakai for <br>";
    
    for ($i=1; $i <= $sisa; $i++) { 
      echo "$i  ";
    }
    echo "<br>";
    echo "looping lagi cara sama<br>";
  	die();
		$this->load->view('admin/V_perawat', $data1);
  }
  public function libur()
  {
    $data['daftar_libur'] = $this->M_modul->select_all_libur();
	  //var_dump($data);
//	die();
		$this->load->view('admin/V_libur', $data);
  }
  public function tambah_data_libur()
  {
    $this->load->view('admin/V_tambah_libur');
  }
  public function proses_tambah_data_libur(){

			$dataku['S']   = $_POST['S'];
			$dataku['I']        = $_POST['I'];
			$dataku['R']        = $_POST['R'];
      $dataku['libur']    = $_POST['libur'];
      $dataku['tgl']    = $_POST['tgl'];
      var_dump($dataku);
			/*var_dump($dataku);
			die();*/
      die();
			$this->M_modul->insert_upload($dataku);
			redirect('admin/C_modul/libur','refresh');

		}
	}



/* End of file C_modul.php */
/* Location: ./application/controllers/C_modul.php */