<?php 

class pengepul_nasabah_model extends CI_Model {


	function pengepul_nasabah_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 

		 $kolom = array(0=>"id",
							"nama",
							"nomor_hp"							 
		 	);


		

		 
		 $this->db->where("id_pengepul", $pengepul);


		 

		 if(!empty($nama)) {
		 	$this->db->like("nama",$nama);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get('nasabah');
		// echo $this->db->last_query(); exit;
 		return $res;
	}


	


}

?>