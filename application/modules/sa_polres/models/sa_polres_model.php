<?php 

class sa_polres_model extends CI_Model {


	function sa_polres_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"polres_id",
							"polres_nama",
							"polres_kode",
							"polda_id",
							);


		

		 $this->db->select('*')->from("m_polres");


		 

		 if(!empty($polres_nama)) {
		 	$this->db->like("polres_nama",$polres_nama);
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