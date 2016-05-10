<?php 

class bj_add_user_model extends CI_Model {


	function bj_add_user_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"id",
							"nama",
							"email",
							"alamat",
							"nomor_hp"
							
		 	);

		 	$this->db->select('*')->from("pengguna");
		 	$this->db->where('level', 3);
		 	$this->db->where('birojasa_id', $id_birojasa);
		 	


		 

		 if(!empty($nama)) {
		 	$this->db->like("nama",$nama);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
 		return $res;
	}


	


}

?>