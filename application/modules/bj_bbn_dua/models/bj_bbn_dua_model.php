<?php 

class bj_bbn_dua_model extends CI_Model {


	function bj_bbn_dua_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"bbn2.id",
							"no_rangka",
							"no_faktur",
							"tgl_faktur",
							"tgl_entri",
							"bj_nama_user",
							"rp_daftar",
							"rp_biaya",
							"rp_admin_fee"
							
		 	);



		 	$this->db->select('bbn2.*, p.nama as bj_nama_user');

		 	$this->db->from("bj_bbn_dua bbn2");
		 	$this->db->join('pengguna p','bbn2.user_entri=p.id');
		 	$this->db->where('id_birojasa', $id_birojasa);
		

		 	$tanggal_awal = flipdate($tanggal_awal);
			$tanggal_akhir = flipdate($tanggal_akhir);
		 
		if(!empty($tanggal_awal) and !empty($tanggal_akhir) ) {
		 	$this->db->where("tgl_entri between '$tanggal_awal' and '$tanggal_akhir'",null,false);	 	
		 }

		 if(!empty($no_rangka)) {
		 	$this->db->like("bbn2.no_rangka",$no_rangka);
		 }

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
 		return $res;
	}


		function datawilayah($id, $table, $condition, $nama){
		$this->db->select($nama);
		$this->db->where($id, $condition);
		$this->db->order_by($nama);
		$rs = $this->db->get($table);
		return $rs;

	}


	function biaya($tipe, $tahun, $warna, $samsat, $perubahan){
		$this->db->where('tipe_kendaraan', $tipe);
		$this->db->where('id_perubahan', $perubahan);
		$this->db->where('tahun_kendaraan', $tahun);
		$this->db->where('id_warna', $warna);
		$this->db->where('id_samsat', $samsat); 
		$rs = $this->db->get('estimasi_bbn_dua');
		return $rs;
	}


}

?>