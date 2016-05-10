<?php 

class sa_jenis_model extends CI_Model {


	function sa_jenis_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"id_jenis",
							"jenis",
							
							);


		

		 $this->db->select('*')->from("m_jenis");


		 

		 if(!empty($jenis)) {
		 	$this->db->like("jenis",$jenis);
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