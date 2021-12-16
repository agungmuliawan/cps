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
  public function penjadwalan()
  {
    // $limit = 40;
    // echo "data perawat <br>";
    // $data1['q1'] = $this->M_modul->query_1();
	  // var_dump($data1);
    // echo "<br><br>";
    // echo "data libur pakai select button  <br>";
    // $data2['q2'] = $this->M_modul->query_2();
	  // var_dump($data2);
    // echo "<br><br>";
    // echo "libur pegawai menggunakan hari 1=5 dan hari 2 = 7 <br>";
    // echo "<br>";
    // $libur_hari1 = 5;
    // echo "data jumlah pegawai masuk hari ke 1 = 40 - 5 = 35 orang  <br>";
    // echo "<br>";
    // $jumlah_kerja_hari1= 35;
    // echo "data scheduling pakai for + 1  <br>";
    // for ($i=6; $i <= $limit; $i++) { 
    //   echo "$i  ";
    // }
    // echo "<br><br>";
    // echo "data awal libur +1 (5+1) = 6 <br>";
    // $libur_hari2 = 7;
    // echo "data jumlah pegawai masuk hari ke 2 = 40 - 7 = 33 orang  <br>";
    // echo "<br>";
    // $jumlah_kerja_hari2= 33;
    // echo "data scheduling pakai for + 1  <br>";
    // for ($i=12; $i <= $limit; $i++) { 
    //   echo "$i  ";
    // }
    // echo "<br> jumlah data dari data ke 6-40 = ada 29 data <br>";
    // $jumlah_data_ke2 = 29;
    // echo "karna di limit 40 balek ke 1 lagi<br>";
    // $sisa = $jumlah_kerja_hari2 - $jumlah_data_ke2;
    // echo "<br>sisa = $sisa <br>";
    // for ($i=1; $i <= $sisa; $i++) { 
    //   echo "$i  ";
    // }
    // echo "<br>";
    // echo "looping lagi cara sama<br>";
    $data['jumlah_perawat'] = $this->M_modul->query_1();
    //var_dump($data);
    $data['penjadwalan'] = $this->M_modul->query_4();
    //var_dump($data2);
  	//die();
		$this->load->view('admin/V_penjadwalan', $data);
  }
  public function libur()
  {
    $data['daftar_libur'] = $this->M_modul->select_all_libur();
	  //var_dump($data);
//	die();
		$this->load->view('admin/V_libur', $data);
  }
  public function pegawai_libur()
  {
    $data['daftar_libur'] = $this->M_modul->select_all_data_pegawai_libur();
	  //var_dump($data);
//	die();
		$this->load->view('admin/V_pegawai_libur', $data);
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
    public function proses()
    {
      $jumlah_perawat        = $_POST['jumlah_perawat'];
      $jml_libur        = $_POST['jml_libur'];
      $sql = "INSERT INTO tb_penjadwalan (id_perawat) VALUES ";
      //$result= $this->db->query("SELECT libur FROM tb_libur where id_libur = '".$id_libur."'")->result();
     // $jumlah_libur = $result['0'];
     // var_dump($result);
    //  echo "<br>";
  //    echo $jumlah_libur;
      //echo "<br>";
     // $data['id_libur'] = $this->M_modul->proses($id_libur);
     echo $jumlah_perawat;
      echo "<br>";
      echo $jml_libur;
      echo "<br>";
     $jumlah_pegawai_masuk = $jumlah_perawat - $jml_libur;
      for ($i=$jml_libur; $i < $jumlah_pegawai_masuk ; $i++) { 
        echo "$i " ;
       // $sql .= "('".$i[$i]."'), ";
      }
    //  $sql = rtrim($sql, ', ');
     // mysql_query($sql);
      
      die();
    }
    public function proses_baru2()
    {
    //   $jumlah_perawat        = $_POST['jumlah_perawat'];
    //   $tgl        = $_POST['tgl'];
    //   $cek = $_POST['id_perawat'];
    //   $result = array();
    //   foreach($_POST['id_perawat'] AS $key => $val){
    //     $result[] = array(
    //      'id_perawat'   => $_POST['id_perawat'][$key],
    //      'tgl'   => $_POST['tgl']
    //     );
    //     // array_push($arr_id_perawat, $_POST['id_perawat'][$key]);
    //   //  $this->db->insert_batch('tb_penjadwalan', $result);
    //   }
    // $arr_id_perawat = $_POST['id_perawat'];
    // $count_id_perawat = count($arr_id_perawat) -2;
    // $in_perawat = '';
    // foreach ($arr_id_perawat as $key => $value) {
    //   $semicolon = ',';
    //   if($count_id_perawat < $key)
    //     $semicolon = '';
    //   $in_perawat.= "'$value'". $semicolon;
    // }
    // $perawat_not_in = $this->M_modul->getPerawatNotInJadwal($in_perawat);
    //  echo "<pre>";
    //  var_dump($result); 
    //  echo "</pre>"; 
    //   echo "<br>simpan data libur <br> ";
    //   //$this->db->insert_batch('tb_penjadwalan', $result); //kalau ini yg tb_libur
    //   $result2 = array();
    //   foreach($perawat_not_in AS $key => $val){
    //     $result2[] = array(
    //      'id_perawat'   => $val->id_perawat,
    //      'tgl_masuk'   => $_POST['tgl']
    //     );
    //    // $this->db->insert_batch('tb_masuk', $result2); //ini ab
    //   }
    //  // $this->db->insert_batch('tb_masuk', $result2); //ini yg tb_masuk
    //   echo '<script>alert("Sukses Penjadwalan")</script>';
    //   redirect('admin/C_modul/pegawai_libur','refresh');
    // }
    // public function proses_baru2()
    // {
    //   $jumlah_perawat        = $_POST['jumlah_perawat'];
    //   $tgl        = $_POST['tgl'];
    //   //$cek = $_POST['id_perawat'];
    //   $result= $this->db->query("SELECT * FROM tb_libur where tgl = '".$tgl."'")->result();
    //   foreach ($result as $row) {
    //     $banyak_libur = $row->libur;
    //   }
      
    //   echo $banyak_libur;
    //   echo $tgl;
    //   echo "<br>";
    //   die();
    //   for ($i=1; $i <= $banyak_libur; $i++) { 
    //     echo $i;
    //   }
    //  // $perawat_not_in = $this->M_modul->getPerawatNotInJadwal($in_perawat);
      
    //  // die();
    //   $result = array();
    //   foreach($_POST['id_perawat'] AS $key => $val){
    //     $result[] = array(
    //      'id_perawat'   => $_POST['id_perawat'][$key],
    //      'tgl'   => $_POST['tgl'] 
    //     );
    //     // array_push($arr_id_perawat, $_POST['id_perawat'][$key]);
    //     $this->db->insert_batch('tb_penjadwalan', $result); 
    //   }
    // $arr_id_perawat = $_POST['id_perawat'];
    // $count_id_perawat = count($arr_id_perawat) -2;
    // $in_perawat = '';
    // foreach ($arr_id_perawat as $key => $value) {
    //   $semicolon = ',';
    //   if($count_id_perawat < $key)
    //     $semicolon = '';
    //   $in_perawat.= "'$value'". $semicolon;
    // }
    // $perawat_not_in = $this->M_modul->getPerawatNotInJadwal($in_perawat);
    //  echo "<pre>";
    //  var_dump($result); 
    //  echo "</pre>"; 
    //   echo "<br>simpan data libur <br> ";
    //   //$this->db->insert_batch('tb_penjadwalan', $result);
    //   $result2 = array();
    //   foreach($perawat_not_in AS $key => $val){
    //     $result2[] = array(
    //      'id_perawat'   => $val->id_perawat,
    //      'tgl_masuk'   => $_POST['tgl']
    //     );
    //    // $this->db->insert_batch('tb_masuk', $result2);
    //   }
    //   //$this->db->insert_batch('tb_masuk', $result2);
    //   echo '<script>alert("Sukses Penjadwalan")</script>';
    //   redirect('admin/C_modul/pegawai_libur','refresh');
      //$perawat_not_in = $this->M_modul->getPerawatNotInJadwal($in_perawat);
      $tanggal_libur= $this->db->query("SELECT * FROM tb_libur ")->result();
      //$tanggal_libur = $this->M_modul->get_libur();
      
      $take_libur = 0;
      $skip_libur= 0;
      $take = 0;
      $skip = 0;
      $total_data = $this->db->query('select count(id_perawat) as jumlah from tb_perawat')->result()[0];
      
      $arr_perawat_libur_b4 = [];
      $arr_perawat_masuk = [];
      foreach ($tanggal_libur as $key => $value) {
        # code...
        $take_libur = $value->libur;
        $skip += $take_libur;
        $arr_perawat_masuk[$key] = [];
        $arr_perawat_libur_b4[$key] = [];
        if($key == 0){
          $take = $total_data->jumlah;
        }else{
          $take -= $value->libur;
        }
        
        $perawat = $this->db->query("select id_perawat from tb_perawat limit $take offset $skip")->result(); //36
        $perawat_libur = $this->db->query("select id_perawat from tb_perawat limit $take_libur offset $skip_libur")->result(); //4
        // dd($this->db->last_query(), $perawat_libur);
        foreach ($perawat_libur as $key_perawat => $value_perawat_libur) {
          # code...
          $set_jadwal_perawat[$key][] = array(
                 'id_perawat'   => $value_perawat_libur->id_perawat,
                 'tgl'   => $value->tgl 
                );
          array_push($arr_perawat_libur_b4[$key], $value_perawat_libur->id_perawat);
        }
        if($key > 0){
          foreach ($arr_perawat_libur_b4[$key - 1] as $key_b4 => $value_b4) {
            $set_perawat_masuk = [
              'id_perawat' => $value_b4,
              'tgl_masuk' => $value->tgl,
            ];
            array_push($arr_perawat_masuk[$key], $set_perawat_masuk);
          }
        }

        foreach ($perawat as $key_perawat => $value_perawat) {
          $set_perawat_masuk = [
            'id_perawat' => $value_perawat->id_perawat,
            'tgl_masuk' => $value->tgl,
          ];
          array_push($arr_perawat_masuk[$key], $set_perawat_masuk);
        }        

        $skip_libur += $take_libur;
       $this->db->insert_batch('tb_masuk', $arr_perawat_masuk[$key]);
        $this->db->insert_batch('tb_penjadwalan', $set_jadwal_perawat[$key]); 
        
        
      }
      //dd($set_jadwal_perawat);
     pre($set_jadwal_perawat);
      pre($arr_perawat_masuk);
      //var_dump($set_jadwal_perawat);
      //var_dump($arr_perawat_masuk);
      echo '<script>alert("Sukses Penjadwalan")</script>'; //ini direct
     // redirect('admin/C_modul/lihat', 'refresh');
    }
    public function lihat()
    {
      $data['daftar'] = $this->M_modul->select_lihat();
	  //var_dump($data);
//	die();
		$this->load->view('admin/V_lihat_masuk', $data);
    }
    public function truncate_data()
     {
        //$data['prediksi'] = $this->M_sir->truncate();
        $this->db->truncate('tb_penjadwalan');
        redirect('admin/C_modul/pegawai_libur','refresh');
     }
     public function truncate_masuk()
     {
        //$data['prediksi'] = $this->M_sir->truncate();
        $this->db->truncate('tb_masuk');
        redirect('admin/C_modul/lihat','refresh');
     }
     
    
	}



/* End of file C_modul.php */
/* Location: ./application/controllers/C_modul.php */