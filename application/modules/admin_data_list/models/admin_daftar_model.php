<?php 

class admin_daftar_model extends CI_Model {


	function admin_daftar_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"jenis_perubahan",
							"tanggal",
							"nomor_rangka",
							"nomor_mesin",
							"pemohon",
							"warna_tnkb",
							"approved"
		 	);


		$tanggal_awal = flipdate($tanggal_awal);
		$tanggal_akhir = flipdate($tanggal_akhir);

		 $this->db->select('*')->from("daftar_bbn");


		 if(!empty($tanggal_awal) and !empty($tanggal_akhir) ) {
		 	$this->db->where("tanggal between '$tanggal_awal' and '$tanggal_akhir'",null,false);	 	
		 }

		 if(!empty($no_rangka)) {
		 	$this->db->where("nomor_rangka",$no_rangka);
		 }

		 if(!empty($nama)) {
		 	$this->db->like("pemohon",$nama);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
 		return $res;
	}


	 function cari($param)
	{		

		// show_array($param);

		// exit;

		 extract($param);

		 $kolom = array(0=>"jenis_perubahan",
							"tanggal",
							"nomor_rangka",
							"nomor_mesin",
							"pemohon",
							"warna_tnkb",
							"approved"
		 	);

		 $this->db->select('*')->from("daftar_bbn");
		 $this->db->where("nama",$nama);

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
 		return $res;
	}


}

?>