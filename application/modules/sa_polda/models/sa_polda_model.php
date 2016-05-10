<?php 

class sa_polda_model extends CI_Model {


	function sa_polda_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"polda_id",
							"polda_nama",
							
							);


		

		 $this->db->select('*')->from("m_polda");


		 

		 if(!empty($polda_nama)) {
		 	$this->db->like("polda_nama",$polda_nama);
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