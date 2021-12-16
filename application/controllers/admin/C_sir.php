<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_sir extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_sir');
		
	}
	public function index()
	{
        $this->load->view('admin/V_proses_sir');
	//	$data['sir'] = $this->M_sir->select_sir();
      //  $this->load->view('admin/V_sir', $data);
       //echo "sa";
      // die();
    //    $day_sir = 50;
    //     $s = [];
    //     $i = [];
    //     $r = [];

    //     for ($index = 1; $index < ($day_sir - 1); $index++){
    //         $before_index = $index -1;
    //         $s[0] = 34;
    //         $i[0] = 250;
    //         $r[0] = 61;
    //         $beta = 0.001;
    //         $gamma = 0.07;

    //         $s[$i] = round(-($beta * $s[$before_index] * $i[$before_index]) + $s[$before_index]);
    //         $r[$i] = round(($beta * $i[$before_index]) - ($gamma * $i[$before_index]) + $i[$before_index]);
    //         $i[$i] = round(($gamma * $i[$before_index]) + $r[$before_index]);
    //         pre($r);
    //         pre($s);
    //         pre($i);    
    //  }
    }
     public function tambah_prediksi()
     {
        $this->load->view('admin/V_proses_sir');
     }
     public function proc()
     {
        $s_input = $_POST['s'];
        $i_input = $_POST['i'];
        $r_input = $_POST['r'];
        $jml = $_POST['jml'];

        $set_input[0] = [
            's' => $s_input,
            'i' => $i_input,
            'r' => $r_input,
        ];

        $day_sir = $jml;
        $s = [];
        $i = [];
        $r = [];

        for ($index = 1; $index <= ($day_sir - 1); $index++){
            $before_index = $index -1;
            $s[0] = $s_input;
            $i[0] = $i_input;
            $r[0] = $r_input;
            $s[$index] = 0;
            $i[$index] = 0;
            $r[$index] = 0;
            $beta = 0.001;
            $gamma = 0.07;
            $s[$index] = ((-$beta * $s[$before_index] * $i[$before_index]) + $s[$before_index]);
            $i[$index] = (($beta * $s[$before_index] * $i[$before_index]) - ($gamma * $i[$before_index]) + $i[$before_index]);
            $r[$index] = (($gamma * $i[$before_index]) + $r[$before_index]);
            $set_input[$index] = [
                's' => $s[$index],
                'i' => $i[$index],
                'r' => $r[$index],
            ];
            // pre($r);
            //pre($s);
            //pre($i);   
        }
        //echo "sukses";
        $this->db->insert_batch('tb_prediksi_sir', $set_input);
        //redirect('admin/C_sir/hasil_prediksi','refresh');//ini directnya
        //echo '<script>alert("Sukses Prediksi SIR")</script>';
       pre($set_input);
        // 
     }
     public function hasil_prediksi()
     {
      
        $data['prediksi'] = $this->M_sir->prediksi();
        $this->load->view('admin/V_hasil_prediksi', $data);
     }
     public function truncate()
     {
        //$data['prediksi'] = $this->M_sir->truncate();
        $this->db->truncate('tb_prediksi_sir');
        redirect('admin/C_sir','refresh');
     }
     public function truncate_data()
     {
        //$data['prediksi'] = $this->M_sir->truncate();
        $this->db->truncate('tb_prediksi_sir');
        redirect('admin/C_sir','refresh');
     }
     

    
    //    die();
    //    $day = 50;
    //    $sus[] = array();
    //    $S = 34 * $day;
    //    $I = 250 * $day;
    //    $R = 61 * $day;
    //    $beta = 0.001;
    //    $gamma = 0.07;
    //    //$sus[] = ;
    //    //for i in range(day_sir-1):
    //     //die();
    //     for ($i=0; $i < $day; $i++) { 
    //         $S[$i] = array(0 => 3);
        //$result = array();
       // $result2[] = array(
        //    'id_perawat'   => $val->id_perawat,
        //);
        
        //$data1() = $S[$i+1]; //= array(round((-$beta*$S[$i]*$I[$i]) + $S[$i]));
        // $I[$i+1] = round(($beta*$S[$i]*$I[$i]) - ($gamma*$I[$i]) + $I[$i]);
        // $R[$i+1] = round(($gamma*$I[$i]) + $R[$i]);
        // echo $data1
       }
	
    


/* End of file C_home.php */
