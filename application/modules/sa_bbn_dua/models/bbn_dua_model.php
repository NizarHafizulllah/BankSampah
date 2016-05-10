<?php 

class bbn_dua_model extends CI_Model {


	function bbn_satu_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"bbn2.id",
							"tipe_kendaraan",
							"tahun_kendaraan",
							"nm_perubahan",
							"nm_samsat",
							"nm_polda",
							
		 	);


		

		 $this->db->select('bbn2.*, polda.polda_nama as nm_polda, s.nama as nm_samsat, p.nama as nm_perubahan,');

		 	$this->db->from("estimasi_bbn_dua bbn2");
		 	$this->db->join('m_polda polda','bbn2.id_polda=polda.polda_id');
		 	$this->db->join('samsat s', 'bbn2.id_samsat = s.id');
		 	$this->db->join('perubahan p', 'bbn2.id_perubahan = p.id');

		 

		 if(!empty($tipe_kendaraan)) {
		 	$this->db->like("bbn2.tipe_kendaraan",$tipe_kendaraan);
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