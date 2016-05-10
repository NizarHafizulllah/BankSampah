<?php 

class sa_warna_model extends CI_Model {


	function sa_warna_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"WARNA_ID",
							"WARNA_NAMA",
							
							);


		

		 $this->db->select('*')->from("m_warna");


		 

		  if(!empty($WARNA_NAMA)) {
		 	$this->db->like("WARNA_NAMA",$WARNA_NAMA);
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