<?php 

class m_sub_jenis_model extends CI_Model {


	function m_sub_jenis_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 

		 $kolom = array(0=>"id",
		 					"sub_jenis"							 
		 	);

		 


		 

		 if(!empty($sub_jenis)) {
		 	$this->db->like("sub_jenis",$sub_jenis);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get('sub_jenis');
		// echo $this->db->last_query(); exit;
 		return $res;
	}


	


}

?>