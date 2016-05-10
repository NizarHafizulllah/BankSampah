<?php
class daftar extends user_controller{
	var $controller;
	function daftar(){
		$this->controller = get_class($this);

		parent::__construct();
		$this->load->model("daftar_model","dm");
	}
	
	
	function index(){
		
//		$cek_session = $this->session->userdata('session');
//			if(!empty($cek)){
		$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Daftar BBN");
		$this->set_title("Daftar BBN");
		$this->set_content($content);
		$this->cetak();
//			}else{
//				redirect('login');
//			}
		
		
	}



	function get_data_bbn(){
		$data = $this->input->post();

		// show_array($data); exit;
		$url = 'http://poldametro.bpkb.net/Blokir-Online/browsj.dll';
			$this->user = 'testblokir';
			$this->salt = "335353535323";
			$this->pass = "123456";


			$data_service = array("LoginInfo"=>array(
							"LoginName" => $this->user,
							"Salt"		=> $this->salt,
							"AuthHash" 	=> md5($this->salt . md5($this->user.$this->pass))
							),
							"Criteria"=>array(
								"Param" => $data['no_rangka'],
								"ParamKind" => 1
							)
							 
							);

			$json_data = json_encode($data_service);	

			// echo $json_data; 

			$ret_service = $this->execute_service($url,"ComplGetBerkasCheckPoint",$json_data);
			// show_array($ret_service);
			// echo $ret_service;
			if($ret_service['error'] == true){
				$ret = array("error"=>true,'pesan'=>"Gagal menghubungi server ");
			}
			else if($ret_service['data']['Result'] == true ) {
			    $ret = array("error"=>false, 
			    	'pesan'=>'Data ditemukan', 
			    	'data'=>$ret_service['data']['Data']);
			}
			else if($ret_service['data']['Result'] == false ) {
			    $ret = array("error"=>true, 
			    	'pesan'=>'Data tidak ditemukan. Silahkan ke loket');
			}
			else {
				$ret = array("error"=>true,'pesan'=>"Error not defined");
			}

			echo json_encode($ret);

	}
    
    


function cek_no_rangka($no_rangka) {


	if(empty($no_rangka)) {
		$this->form_validation->set_message('cek_no_rangka', '%s harus diisi   ');
		return false;
	}

	$this->db->where("nomor_rangka",$no_rangka); 
	$this->db->where("approved","0");
	$res = $this->db->get("daftar_bbn");

	// echo "fjdkfjd k" . $this->db->last_query(); 
	$jumlah = $res->num_rows();
	if($jumlah > 0 ) {
		$this->form_validation->set_message('cek_no_rangka', '%s sudah ada dan belum selesai diproses  ');
		return false;
	}
}




function cek_jenis_perubahan($jenis_perubahan) {


	if(empty($jenis_perubahan) or  $jenis_perubahan == "0"  ) {
		$this->form_validation->set_message('cek_jenis_perubahan', '%s harus dipilih   ');
		return false;
	}

	 
}







    function simpan(){
        $post = $this->input->post();

        $this->load->library('form_validation');
         $this->form_validation->set_rules('jenis_perubahan','Jenis Perubahan ','callback_cek_jenis_perubahan');

  		$this->form_validation->set_rules('nomor_rangka','Nomor Rangka','callback_cek_no_rangka');
  		$this->form_validation->set_rules('tanggal','Tanggal','required');
		
		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
 		$this->form_validation->set_error_delimiters('', '<br>');
		if($this->form_validation->run() == TRUE ) {  // validasi berhasil 

			$post['tanggal'] = flipdate($post['tanggal']);

			$login = $this->session->userdata("login");

			$post['user_id'] = $login['id_user'];

			$res = $this->db->insert("daftar_bbn",$post);
			if(!$res){
				$ret = array("error"=>true,"message"=>"gagal " . $this->db->last_query(). " " . mysql_error() );
			}
			else {
				$ret = array("error"=>false,"message"=>"DATA BERHASIL DISIMPAN");
			}
		}
		else { // validasi gagal 
			$ret = array("error"=>true,"message"=>validation_errors());
		}


		echo json_encode($ret);
    
    }



 function listdata(){
    	$data_array=array();
		$content = $this->load->view($this->controller."_list_view",$data_array,true);

		$this->set_subtitle("DATA PENDAFTARAN BBN");
		$this->set_title("DATA PENDAFTARAN BBN");
		$this->set_content($content);
		$this->cetak();
    }



    function get_data() {

    	$userdata = $this->session->userdata("login");
    	// show_array($userdata);

    	$draw = $_REQUEST['draw']; // get the requested page 
    	$start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
        // $no_rangka = $_REQUEST['columns'][5]['search']['value'];
        // $tanggal_awal = $_REQUEST['columns'][4]['search']['value'];
        // $tanggal_akhir = $_REQUEST['columns'][6]['search']['value'];
        // $status = $_REQUEST['columns'][7]['search']['value'];


      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
				"user_id" => $userdata['id_user']
				 
		);     
           
        $row = $this->dm->data($req_param)->result_array();
		
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->data($req_param)->result_array();
        

       
        $arr_data = array();
        foreach($result as $row) : 
		// $daft_id = $row['daft_id'];
        	 $approved = ($row['approved']=='0')?"<span class='merah'>Pending</span>":"<span class='hijau'>Approved</span>";

        	 
        	$arr_data[] = array(
        		$row['jenis_perubahan'],
        		flipdate($row['tanggal']), 
        		$row['nomor_rangka'],
        		$row['nomor_mesin'],
        		$row['pemohon'],
        		$row['warna_tnkb'],
        		$approved
         			 
        		  				);
        endforeach;

         $responce = array('draw' => $draw, // ($start==0)?1:$start,
        				  'recordsTotal' => $count, 
        				  'recordsFiltered' => $count,
        				  'data'=>$arr_data
        	);
         
        echo json_encode($responce); 
    }

}

?>