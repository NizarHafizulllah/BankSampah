<?php 

class bbn_satu_model extends CI_Model {


	function bbn_satu_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"bbn1.id",
							"tipe_kendaraan",
							"tahun_kendaraan",
							"nm_warna",
							"nm_samsat",
							"nm_polda",
							
		 	);



		 	$this->db->select('bbn1.*, polda.polda_nama as nm_polda, s.nama as nm_samsat, w.WARNA_NAMA as nm_warna');

		 	$this->db->from("estimasi_bbn_satu bbn1");
		 	$this->db->join('m_polda polda','bbn1.id_polda=polda.polda_id');
		 	$this->db->join('samsat s', 'bbn1.id_samsat = s.id');
		 	$this->db->join('m_warna w', 'bbn1.id_warna = w.WARNA_ID');

		


		 

		 if(!empty($tipe_kendaraan)) {
		 	$this->db->like("bbn1.tipe_kendaraan",$tipe_kendaraan);
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