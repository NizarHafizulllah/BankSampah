<?php 

class nasabah_transaksi_model extends CI_Model {


	function nasabah_transaksi_model(){
		parent::__construct();
	}






 function transaksi($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 

		 $kolom = array(0=>"id",
		 					"tgl",
		 					"nasabah",
		 					"debit",
		 					"kredit",
							"saldo",							 
		 	);


		$this->db->where('id_nasabah', $id_nasabah);


		 

		 if(!empty($nama)) {
		 	$this->db->like("ns.nama",$nama);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get('m_transaksi');
		// echo $this->db->last_query(); exit;
 		return $res;
	}


	


}

?>