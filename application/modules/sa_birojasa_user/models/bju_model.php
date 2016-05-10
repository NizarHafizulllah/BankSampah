<?php 

class bju_model extends CI_Model {


	function bju_model(){
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
							"nomor_hp",
							"birojasa"							 
		 	);


		

		 $this->db->select('p.*, bj.nama as birojasa')->from("pengguna p");
		 $this->db->join('biro_jasa bj','p.birojasa_id=bj.id');
		 $this->db->where("p.level",2);


		 

		 if(!empty($nama)) {
		 	$this->db->like("p.nama",$nama);
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