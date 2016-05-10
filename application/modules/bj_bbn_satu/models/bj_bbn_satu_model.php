<?php 

class bj_bbn_satu_model extends CI_Model {


	function bj_bbn_satu_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"bbn1.id",
							"no_rangka",
							"no_faktur",
							"tgl_faktur",
							"tgl_entri",
							"bj_nama_user",
							"rp_daftar_stnk",
							'rp_daftar_bpkb',
							"rp_pajak_kendaraan",
							"rp_admin_fee"
							
		 	);



		 	$this->db->select('bbn1.*, p.nama as bj_nama_user');

		 	$this->db->from("bj_bbn_satu bbn1");
		 	$this->db->join('pengguna p','bbn1.user_entri=p.id');
		 	$this->db->where('id_birojasa', $id_birojasa);
		


		 	$tanggal_awal = flipdate($tanggal_awal);
			$tanggal_akhir = flipdate($tanggal_akhir);
		 
		if(!empty($tanggal_awal) and !empty($tanggal_akhir) ) {
		 	$this->db->where("tgl_entri between '$tanggal_awal' and '$tanggal_akhir'",null,false);	 	
		 }

		 if(!empty($no_rangka)) {
		 	$this->db->like("bbn1.no_rangka",$no_rangka);
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


	function biaya($tipe, $tahun, $warna, $samsat){
		$this->db->where('tipe_kendaraan', $tipe);
		$this->db->where('tahun_kendaraan', $tahun);
		$this->db->where('id_warna', $warna);
		$this->db->where('id_samsat', $samsat); 
		$rs = $this->db->get('estimasi_bbn_satu');
		return $rs;
	}


	


}

?>