<?php 

class us_bbn_dua_model extends CI_Model {


	function us_bbn_dua_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"id",
		 					"tgl_entri",
							"no_rangka",
							"no_faktur",
							"rp_daftar",
							"rp_biaya", 
							"rp_admin_fee",
							"status"
							
		 	);



		 	$this->db->select('*')->from("bj_bbn_dua");
		 	$this->db->where('user_entri', $id);		


		  $tanggal_awal = flipdate($tanggal_awal);
			$tanggal_akhir = flipdate($tanggal_akhir);
		 
		if(!empty($tanggal_awal) and !empty($tanggal_akhir) ) {
		 	$this->db->where("tgl_entri between '$tanggal_awal' and '$tanggal_akhir'",null,false);	 	
		 }

		 if(!empty($no_rangka)) {
		 	$this->db->like("no_rangka",$no_rangka);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
 		return $res;
	}

		function datawilayah($id, $table, $condition, $nama){
		$this->db->select($nama);
		$this->db->where($id, $condition);
		$this->db->order_by($nama);
		$rs = $this->db->get($table);
		return $rs;

	}


	function biaya($tipe, $tahun, $warna, $samsat){
		$this->db->where('tipe_kendaraan', $tipe);
		$this->db->where('tahun_kendaraan', $tahun);
		$this->db->where('id_warna', $warna);
		$this->db->where('id_samsat', $samsat); 
		$rs = $this->db->get('estimasi_bbn_satu');
		return $rs;
	}


	


}

?>