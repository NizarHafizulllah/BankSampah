<?php 

class sa_model_model extends CI_Model {


	function sa_model_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"id_model",
							"model",
							"id_jenis",
							
							);


		
 $this->db->select('s.*, j.jenis as nm_jenis')->from("m_model s");
		 $this->db->join('m_jenis j','s.id_jenis=j.id_jenis');



		 

		 if(!empty($model)) {
		 	$this->db->like("model",$model);
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