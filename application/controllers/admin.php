<?php 


class admin extends admin_controller {
	
	var $controller;
	public function admin(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
		function index(){
		



		$data_array=array();
		// $content = "WELCOME MR. ADMIN "; 
		$birojasa = $this->db->get('biro_jasa')->num_rows();
		$this->db->where('level', 2);
		$birojasa_user = $this->db->get('pengguna')->num_rows();
		$samsat = $this->db->get('samsat')->num_rows();
		$dealer = $this->db->get('dealer')->num_rows();
		$bbn1 = $this->db->get('estimasi_bbn_satu')->num_rows();
		$polres = $this->db->get('m_polres')->num_rows();
		$polda = $this->db->get('m_polda')->num_rows();
		$bbn2 = $this->db->get('estimasi_bbn_dua')->num_rows();
		$warna = $this->db->get('m_warna')->num_rows();
		$jenis = $this->db->get('m_jenis')->num_rows();
		$model = $this->db->get('m_model')->num_rows();
		$merk = $this->db->get('m_merek')->num_rows();

		$data_array = array(
								"biro_jasa" => $birojasa, 
								"samsat" => $samsat,
								"dealer" => $dealer,
								"birojasa_user" => $birojasa_user,
								"bbn1" => $bbn1, 
								"polres" => $polres,
								"bbn2" => $bbn2,
								'polda' => $polda,
								'warna' => $warna,
								'jenis' => $jenis,
								'model' => $model,
								'merk' => $merk
								);

		$content = $this->load->view("admin/index_view",$data_array,true);

		$this->set_subtitle("DASHBOARD");
		$this->set_title("DASHBOARD");
		$this->set_content($content);
		$this->cetak();


				
			
		
	}


}
?>