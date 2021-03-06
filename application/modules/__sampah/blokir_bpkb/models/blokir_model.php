<?php
class blokir_model extends CI_Model {
	function blokir_model() {
		parent::__construct();
	}
	
	function get_list_daftar($data){
		extract($data);
		if ($is_cari!="bpkb") { 
			$TGL_DAFTAR1 = ora_date($TGL_DAFTAR1);
			$TGL_DAFTAR2 = ora_date($TGL_DAFTAR2);
		}
		$this->db->select("P.DAFT_ID,P.LEASING_ID,L.LEASING_NAMA,P.NO_BPKB,P.NREG_BPKB,P.NO_RANGKA,P.NO_MESIN,P.NO_POLISI,P.TGL_BPKB,P.NAMA_PEMILIK,
	      P.ALAMAT_PEMILIK,P.MERK_ID,P.TYPE_KENDARAAN,P.WARNA_ID,P.TAHUN_KENDARAAN,P.USER_ID,P.STATUS,P.DAFT_DATE,P.DAFT_BY,P.NAMA_PENGAJUAN_LEASING,
	      P.ALAMAT_PENGAJUAN_LEASING,M.MERK_NAMA,M.MERK_NAMA_R,P.VERIFIKASI_DATE,P.VERIFIKASI_BY,P.VERIFIKASI_KET,P.DAFT_LEVEL2_DATE,P.DAFT_LEVEL2_BY,
	      P.DAFT_LEVEL3_DATE,P.DAFT_LEVEL3_BY,P.NAMA_PENGAJUAN_LEASING,P.ALAMAT_PENGAJUAN_LEASING,
	      P.LEPAS_DAFT_BY,P.LEPAS_DAFT_DATE",false)
		->from("T_PENDAFTARAN P")
		->join("M_LEASING L","L.LEASING_ID = P.LEASING_ID",'LEFT')
		->join("V_MERK M","M.MERK_ID = P.MERK_ID",'LEFT')
		->where("P.LEASING_ID",$LEASING_ID);
		($is_cari=="bpkb")?$this->db->where("(P.NO_BPKB = '$NO_BPKB' or P.NO_RANGKA ='$NO_BPKB')",null,false):
		$this->db->where("DAFT_DATE BETWEEN '$TGL_DAFTAR1' AND '$TGL_DAFTAR2'",null,false);

		$res = $this->db->get();
		//echo $this->db->last_query(); exit;

		if($res->num_rows() > 0) 
		{

			foreach($res->result_array() as $val) : 
			$arr[]=array($val['DAFT_ID'],
				"<a href='#' onclick='detail(\"".$val['DAFT_ID']."\")'>".$val['NO_BPKB']."</a>",
				$val['NO_RANGKA'],
				$val['NO_MESIN'],
				$val['NAMA_PEMILIK'],
				$val['DAFT_DATE'],
				$val['VERIFIKASI_DATE']
				 
				);

			endforeach;
			$ret = array("error"=>false,"message"=>$arr);
		}
		else {
			$ret = array("error"=>true,"message"=>"DATA TIDAK DITEMUKAN");
		}
		return $ret;

	} 

	

	function get_detail_pendaftaran($id){
		$arr=$this->cm->get_detail_pendaftaran($id);
		echo $this->db->last_query(); exit;
		return json_encode($arr);
	}

function verifikasi_level2($data){
	extract($data);
	$this->db->where("DAFT_ID",$DAFT_ID);
	$this->db->where("LEASING_ID",$LEASING_ID);
	$res = $this->db->get("T_PENDAFTARAN");
	$jumlah = $res->num_rows();
	if($jumlah > 0){
		$data_daftar = $res->row();
			$arr_daftar = array(
					
					"LEVEL2_NOSURAT"=>$LEVEL2_NOSURAT,
					"LEVEL2_TGLSURAT"  => ora_date($LEVEL2_TGLSURAT)
				);
			$this->db->where("DAFT_ID",$DAFT_ID);
			$this->db->where("LEASING_ID",$LEASING_ID);
			$res  = $this->db->update("T_PENDAFTARAN",$arr_daftar);

		// cek apakah sudah diverifikasi atau belum 
		
		if($data_daftar->VERIFIKASI_BY==""){ // belum terverifikasi
			$ret = array("error"=>true,"message"=>"GAGAL, BERKAS BELUM TERVERIFIKASI OLEH PIHAK KEPOLISIAN");
		}
		else if($data_daftar->DAFT_LEVEL2_DATE!="") { //
			$ret = array("error"=>true,"message"=>"GAGAL, BERKAS TELAH DIVERIFIKASI  LEVEL 2");
		}
		else if($data_daftar->DAFT_LEVEL3_DATE!="") { //
			$ret = array("error"=>true,"message"=>"GAGAL, BERKAS TELAH DIVERIFIKASI  LEVEL 3");
		}
		/// seharusnya ada pengecekan lagi untuk verifikasi level 3, level 3 atau sudah diblokir
		else {
			$arr_daftar = array(

					"DAFT_LEVEL2_DATE"=>$VERIFIKASI_DATE,
					"DAFT_LEVEL2_BY"  =>$VERIFIKASI_BY
				);
			$this->db->where("DAFT_ID",$DAFT_ID);
			$this->db->where("LEASING_ID",$LEASING_ID);
			$res  = $this->db->update("T_PENDAFTARAN",$arr_daftar);
			if($res){
				$ret = array("error"=>false,"message"=>"SUKSES, BERKAS DATA BERHASIL DIVERIFIKASI LEVEL 2");
			}
			else {
				$ret = array("error"=>true,"message"=>$this->db->_error_message());
			}
		}
	}
	else {
		$ret = array("error"=>true,"message"=>"GAGAL, BERKAS TIDAK DITEMUKAN DI SERVER");
	}

	return $ret;
}



function verifikasi_level3($data){
	extract($data);
	$this->db->where("DAFT_ID",$DAFT_ID);
	$this->db->where("LEASING_ID",$LEASING_ID);
	$res = $this->db->get("T_PENDAFTARAN");
	$jumlah = $res->num_rows();
	if($jumlah > 0){
		// cek apakah sudah diverifikasi atau belum 
		$data_daftar = $res->row();
		if($data_daftar->VERIFIKASI_BY==""){ // belum terverifikasi
			$ret = array("error"=>true,"message"=>"GAGAL, BERKAS BELUM TERVERIFIKASI OLEH PIHAK KEPOLISIAN");
		}
		else if($data_daftar->DAFT_LEVEL2_DATE=="") { //
			$ret = array("error"=>true,"message"=>"GAGAL, BERKAS BELUM DIVERIFIKASI  LEVEL 2");
		}
		else if($data_daftar->DAFT_LEVEL3_DATE!="") { //
			$ret = array("error"=>true,"message"=>"GAGAL, BERKAS TELAH DIVERIFIKASI  LEVEL 3");
		}
		/// seharusnya ada pengecekan lagi untuk verifikasi level 3, level 3 atau sudah diblokir
		else {
			$arr_daftar = array(
					"DAFT_LEVEL3_DATE"=>$VERIFIKASI_DATE,
					"DAFT_LEVEL3_BY"  =>$VERIFIKASI_BY
				);
			$this->db->where("DAFT_ID",$DAFT_ID);
			$this->db->where("LEASING_ID",$LEASING_ID);
			$res  = $this->db->update("T_PENDAFTARAN",$arr_daftar);
			if($res){
				$ret = array("error"=>false,"message"=>"SUKSES, BERKAS DATA BERHASIL DIVERIFIKASI LEVEL 3");
			}
			else {
				$ret = array("error"=>true,"message"=>$this->db->_error_message());
			}
		}
	}
	else {
		$ret = array("error"=>true,"message"=>"GAGAL, BERKAS TIDAK DITEMUKAN DI SERVER");
	}

	return $ret;
}

function no_urut(){
	$sql="SELECT CEK_NOURUT AS NOURUT FROM DUAL";
	$data = $this->db->query($sql)->row();
	return $data->NOURUT;
}

function simpan_blokir($data) {
	extract($data);
	// firstly, get BPKBID
	$query = "SELECT B.BPKB_ID, B.NO_BPKB
			 FROM T_BPKB_MASTER@TESTLINK.TPMM.COM B 
			 JOIN T_PENDAFTARAN P ON B.NO_BPKB = P.NO_BPKB 
			WHERE P.DAFT_ID = '$DAFT_ID'";


	$dbpkb = $this->db->query($query)->row();
	 

	$arr_blokir['BPKB_ID'] = $dbpkb->BPKB_ID;
	$BPKB_ID = $arr_blokir['BPKB_ID'];


	// CEK APAKAH SUAH DIBLOKRI ATAU TIDAK.
	$sql="SELECT * FROM V_T_BPKB_MASTER
			WHERE BPKB_ID = '$BPKB_ID'
			AND BPKB_STATUS = '2'";
	$jml_status = $this->db->query($sql)->num_rows();
	// echo $this->db->last_query();
	// echo "jumlah $jml_status "; exit;

	if($jml_status == 0 ) 
	{ // tidak dalam keadaan blokir. jadi boleh..

		if($HB_BLOKIR == 0) {
		$sql="UPDATE V_T_BPKB_MASTER
         SET BPKB_STATUS = 2, INACTIVE_DATE = SYSDATE
       		WHERE BPKB_ID = '$BPKB_ID'";
		}
		else {
			$sql="UPDATE V_T_BPKB_MASTER
	         SET BPKB_STATUS = 1, INACTIVE_DATE = NULL
	       		WHERE BPKB_ID = '$BPKB_ID'";
		}
		$resx = $this->db->query($sql);

		// get nomor urut
		$sql_urut = "SELECT  'B/'
	      || TRIM (TO_CHAR (CEK_NOURUT, '09999'))
	      || '/'
	      || TRIM (TO_CHAR (TO_CHAR (SYSDATE, 'mm'), 'RN'))
	      || '/'
	      || TO_CHAR (SYSDATE, 'yyyy') AS NOSURAT FROM DUAL";

	    $durut = $this->db->query($sql_urut)->row();
	    
    


     
	    $arr_blokir['HB_ID'] 	  = $this->no_urut();
	    $arr_blokir['TGL_ENTRI']  = ora_date(date("d-m-Y"));
	    $arr_blokir['HB_BLOKIR']  = $data['HB_BLOKIR'];
	    $arr_blokir['HB_NOSURAT'] = $durut->NOSURAT;
	    $arr_blokir['HB_TANGGAL'] =  ora_date(date("d-m-Y"));
	    $arr_blokir['HB_ALASAN'] =  "kendaraan untuk jaminan/ angsuran";
	    $arr_blokir['HB_PEMOHON'] = $data['HB_PEMOHON'];
	    $arr_blokir['HB_ALAMATPEMOHON'] = $data['HB_ALAMATPEMOHON'];
	    $arr_blokir['HB_NOSURATPEMOHON'] =  $data['HB_NOSURATPEMOHON'];
	    $arr_blokir['HB_TGLSURATPEMOHON'] =  ora_date($data['HB_TGLSURATPEMOHON']);
	    $arr_blokir['HB_PERIHALSRTPMHN'] =  $data['HB_PERIHALSRTPMHN'];
	    $arr_blokir['OP_ID'] =  $data['OP_ID'];
	    $arr_blokir['OPERATOR_NAMA'] =  $data['OPERATOR_NAMA'];
	    $arr_blokir['PRINTED'] =  $data['PRINTED'];
	    $arr_blokir['PIDANA'] =  $data['PIDANA'];
	    $arr_blokir['JENIS_BLOKIR'] =  $data['JENIS_BLOKIR'];
	    $arr_blokir['HB_TGL_AKHIR'] =  ora_date(date('d-m-Y', strtotime("+12 months", strtotime(date('Y-m-d')) )));
	    $arr_blokir['HB_KOTAPMH'] =  $data['HB_KOTAPMH'];
	    $res = $this->db->insert("V_HIST_BLOKIR",$arr_blokir);
	    //echo $this->db->last_query(); exit;

	    if($res){
	    	$this->db->where("TAHUN",date("Y"));
	    	$this->db->update("T_NODOC", array("NO_BLOKIR"=>$arr_blokir['HB_ID'] ) );

	    	$arr_t_blokir['DAFT_ID']  = $DAFT_ID;
		    $arr_t_blokir['BPKB_ID']  = $BPKB_ID;
		    $arr_t_blokir['NO_BPKB']  = $dbpkb->NO_BPKB;
		    $arr_t_blokir['BLOKIR_STATUS']  = $data['HB_BLOKIR'] ;
		    $arr_t_blokir['BLOKIR_NO']  =  $arr_blokir['HB_ID'];
		    $arr_t_blokir['BLOKIR_DATE']  = ora_date(date("d-m-Y"));
		    $arr_t_blokir['BLOKIR_BY']  = $data['OP_ID'];
		    $arr_t_blokir['LEASING_ID']  = $data['LEASING_ID'];
		    $arr_t_blokir['PERIHAL_PEMOHON']  = $data['HB_PERIHALSRTPMHN'];
		    $arr_t_blokir['NOSURAT_PEMOHON']  = $data['HB_NOSURATPEMOHON'];
		    $arr_t_blokir['TGLSURAT_PEMOHON']  = ora_date($data['HB_TGLSURATPEMOHON']);
		    // $arr_t_blokir['OPEN_BLOKIR_DATE']  = $BPKB_ID;
		    // $arr_t_blokir['OPEN_BLOKIR_BY']  = $BPKB_ID;
		    $arr_t_blokir['BLOKIR_JENIS']  = $JENIS_BLOKIR;
		    $this->db->insert("T_BLOKIR",$arr_t_blokir);


		    $arr_langsung = array("BLOKIR_DATE"	=>$arr_t_blokir['BLOKIR_DATE'],
		    					  "BLOKIR_BY"	=>$arr_t_blokir['BLOKIR_BY']
		    	);
		   	$this->db->update("V_T_BLOKIR_LANGSUNG",$arr_langsung);


		    //echo $this->db->last_query(); exit;
		    $ret = array("error"=>false,"message"=>"PROSES BLOKIR SUKSES");
	    }
	    else {
	    	$ret = array("error"=>true,"message"=>"PROSES BLOKIR GAGAL");
	    }	

	} // endif jumlah status ==0
	else {
		$ret = array("error"=>true,"message"=>"PROSES BLOKIR GAGAL. KENDARAAN SUDAH DIBLOKIR ");
	}

	return $ret;
}

	function get_blokir($DAFT_ID) {
		$this->db->select("B.*, TO_CHAR(BLOKIR_DATE,'DD-MM-YYYY') AS BLOKIR_DATE2,
			TO_CHAR(TGLSURAT_PEMOHON,'DD-MM-YYYY') AS TGLSURAT_PEMOHON2",false)
		->where("BLOKIR_STATUS",0)
		->where("DAFT_ID",$DAFT_ID)
		->from("T_BLOKIR B");
		//->join("M_LEASING L")
		
		$res =  $this->db->get();
		//echo $this->db->last_query(); exit;
		$ret = $res->row_array();
		//show_array($ret); exit;
		return $ret;

	}



}


?>