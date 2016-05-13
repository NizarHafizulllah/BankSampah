<?php 

class pengepul_transaksi_model extends CI_Model {


	function pengepul_transaksi_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 

		 $kolom = array(0=>"id",
		 					"tgl",
							"nasabah",
							"harga",
							"saldo_awal",
							"saldo_akhir"							 
		 	);


		$this->db->select('tr.*, ns.nama as nasabah')->from("transaksi tr");
		 $this->db->join('nasabah ns','tr.id_nasabah=ns.id');
		 $this->db->where("ns.id_pengepul", $pengepul);


		 

		 if(!empty($nama)) {
		 	$this->db->like("ns.nama",$nama);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get('');
		// echo $this->db->last_query(); exit;
 		return $res;
	}


	


}

?>