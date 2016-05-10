<?php 
class bj_bbn_satu extends biro_jasa_controller{
	var $controller;
	function bj_bbn_satu(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model('bj_bbn_satu_model','dm');
        $this->load->model("coremodel","cm");
        $this->load->helper("tanggal");
		
		//$this->load->helper("serviceurl");
		
	}


// Untuk View


    function lihatdata(){
         $get = $this->input->get(); 
         $id = $get['id'];

         $this->db->where('id',$id);
         $bbn = $this->db->get('bj_bbn_satu');
         // echo $this->db->last_query(); exit();

         $data = $bbn->row_array();
        


         $kota = $this->dm->datawilayah('id', 'tiger_kota', $data['id_kota'], 'kota')->row_array();
         $provinsi = $this->dm->datawilayah('id', 'tiger_provinsi', $data['id_provinsi'], 'provinsi')->row_array();
          $kecamatan = $this->dm->datawilayah('id', 'tiger_kecamatan', $data['id_kecamatan'], 'kecamatan')->row_array();
          $desa = $this->dm->datawilayah('id', 'tiger_desa', $data['id_desa'], 'desa')->row_array();

          $jenis = $this->dm->datawilayah('id_jenis', 'm_jenis', $data['id_jenis'], 'jenis')->row_array();

          $polda = $this->dm->datawilayah('polda_id', 'm_polda', $data['id_polda'], 'polda_nama')->row_array();

          $samsat = $this->dm->datawilayah('id', 'samsat', $data['id_samsat'], 'nama')->row_array();
          $pengurus = $this->dm->datawilayah('id', 'pengguna', $data['user_entri'], 'nama')->row_array();

          

          $model = $this->dm->datawilayah('id_model', 'm_model', $data['id_model'], 'model')->row_array();

          $merek = $this->dm->datawilayah('kode', 'm_merek', $data['id_merek'], 'nama')->row_array();

          $warna = $this->dm->datawilayah('WARNA_ID', 'm_warna', $data['id_warna'], 'WARNA_NAMA')->row_array();
         



        $data["jenis"] = $jenis['jenis'];
        $data["model"] = $model['model'];
        $data["merek"] = $merek['nama'];
        $data["warna"] = $warna['WARNA_NAMA'];
        
        $data["kota"] = $kota['kota'];
        $data['provinsi'] = $provinsi['provinsi'];
        $data['desa'] = $desa['desa'];
        $data['kecamatan'] = $kecamatan['kecamatan'];
        $data['polda'] = $polda['polda_nama'];
        $data['samsat'] = $samsat['nama'];
        $data['pengurus'] = $pengurus['nama'];
    



        

        $content = $this->load->view("bj_bbn_satu_detail_view",$data,true);

         // $content = $this->load->view($this->controller."_form_view",$data,true);

        $this->set_subtitle("Detail Data");
        $this->set_title("Detail Data BBN 2");
        $this->set_content($content);
        $this->cetak();

    }




function index(){
		$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Pengurusan BBN 1");
		$this->set_title("Pngurusan BBN 1");
		$this->set_content($content);
		$this->cetak();
}

    



function baru(){

        $data_array=array();
        $data_array['action'] = 'simpan';
        $userdata = $this->session->userdata('bj_login');
        $id_birojasa = $userdata['birojasa_id'];
        

        // Dropdown Array
        $data_array['arr_polda'] = $this->cm->arr_dropdown("m_polda", "polda_id", "polda_nama", "polda_nama");

        $data_array['arr_merek'] = $this->cm->arr_dropdown("m_merek", "kode", "nama", "nama");

        $data_array['arr_jenis'] = $this->cm->arr_dropdown("m_jenis", "id_jenis", "jenis", "jenis");

        $data_array['arr_provinsi'] = $this->cm->arr_dropdown("tiger_provinsi", "id", "provinsi", "provinsi");

        $data_array['arr_warna'] = $this->cm->arr_dropdown("m_warna", "WARNA_ID", "WARNA_NAMA", "WARNA_NAMA");
        
        $data_array['arr_user'] = $this->cm->arr_dropdown2("pengguna", "id", "nama", "nama", "birojasa_id", $id_birojasa);



        // Load Page
        $content = $this->load->view($this->controller."_form_view",$data_array,true);

        $this->set_subtitle("Tambah BBN 1");
        $this->set_title("Tambah BBN 1");
        $this->set_content($content);
        $this->cetak();
} 


  function editdata(){
         $get = $this->input->get(); 
         $id = $get['id'];
         $userdata = $this->session->userdata('bj_login');

        


         $this->db->where('id',$id);
         $bbn1 = $this->db->get('bj_bbn_satu');
         // echo $estimasi_bbn_satu->row_array(); exit();
         $data = $bbn1->row_array();
         $id_provinsi = $data['id_provinsi'];
         $id_kota = $data['id_kota'];
         $id_kecamatan = $data['id_kecamatan'];
         $id_polda = $data['id_polda'];
         $id_jenis = $data['id_jenis'];
         $data['tgl_faktur'] = flipdate($data['tgl_faktur']);
        $data['tgl_entri'] = flipdate($data['tgl_entri']);




         $id_birojasa = $userdata['birojasa_id'];
        // echo $this->db->last_query(); exit();

         

          $data['action'] = 'update';

         $data['arr_polda'] = $this->cm->arr_dropdown("m_polda", "polda_id", "polda_nama", "polda_nama");

         $data['arr_model'] = $this->cm->arr_dropdown3("m_model", "id_model", "model", "model", "id_jenis", $id_jenis  );

        $data['arr_merek'] = $this->cm->arr_dropdown("m_merek", "kode", "nama", "nama");

        $data['arr_jenis'] = $this->cm->arr_dropdown("m_jenis", "id_jenis", "jenis", "jenis");

        $data['arr_provinsi'] = $this->cm->arr_dropdown("tiger_provinsi", "id", "provinsi", "provinsi");

        $data['arr_kota'] = $this->cm->arr_dropdown3("tiger_kota", "id","kota", "kota", "id_provinsi", $id_provinsi );

        $data['arr_kecamatan'] = $this->cm->arr_dropdown3("tiger_kecamatan", "id","kecamatan", "kecamatan", "id_kota", $id_kota);

        $data['arr_desa'] = $this->cm->arr_dropdown3("tiger_desa", "id","desa", "desa", "id_kecamatan", $id_kecamatan);

         $data['arr_samsat'] = $this->cm->arr_dropdown3("samsat", "id","nama", "nama", "id_polda", $id_polda );

        $data['arr_warna'] = $this->cm->arr_dropdown("m_warna", "WARNA_ID", "WARNA_NAMA", "WARNA_NAMA");
        
        $data['arr_user'] = $this->cm->arr_dropdown2("pengguna", "id", "nama", "nama", "birojasa_id", $id_birojasa);
        

        $content = $this->load->view("bj_bbn_satu_form_edit_view",$data,true);

         // $content = $this->load->view($this->controller."_form_view",$data,true);

        $this->set_subtitle("Edit Estimasi");
        $this->set_title("BBN 1");
        $this->set_content($content);
        $this->cetak();

    }

    // function crud

    // Create

function simpan(){


    $post = $this->input->post();


        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_rangka','No. Rangka','required');
        $this->form_validation->set_rules('no_mesin','No. Mesin','required'); 
        $this->form_validation->set_rules('no_faktur','No. Faktur','required'); 
        $this->form_validation->set_rules('tgl_faktur','Tanggal Faktur','required'); 
        $this->form_validation->set_rules('id_merek','Merk','required'); 
        $this->form_validation->set_rules('type','Type','required'); 
        $this->form_validation->set_rules('id_model','Model','required');     
        $this->form_validation->set_rules('id_jenis','Jenis','required'); 
        $this->form_validation->set_rules('id_warna','Warna','required'); 
        $this->form_validation->set_rules('silinder','Silinder','required'); 
        $this->form_validation->set_rules('bahan_bakar','Bahan Bakar','required'); 
        $this->form_validation->set_rules('tahun_buat','Tahun Buat','required'); 
        $this->form_validation->set_rules('kode_dealer','Kode Dealer','required'); 
        $this->form_validation->set_rules('nama_dealer','Nama Dealer','required'); 
        $this->form_validation->set_rules('id_desa','Desa','required'); 
        $this->form_validation->set_rules('id_kecamatan','Kecamatan','required');
        $this->form_validation->set_rules('id_provinsi','Provinsi','required');
        $this->form_validation->set_rules('id_kota','Kota','required');
        $this->form_validation->set_rules('id_polda','Polda','required');
        $this->form_validation->set_rules('id_samsat','Samsat','required');
        $this->form_validation->set_rules('tgl_entri','Tanggal Entri','required');         
         
        $this->form_validation->set_message('required', 'Field %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');


        //show_array($data);



if($this->form_validation->run() == TRUE ) { 

        $post['status'] = 1;
        $post['tgl_faktur'] = flipdate($post['tgl_faktur']);
        $post['tgl_entri'] = flipdate($post['tgl_entri']);

        
        $biaya = $this->dm->biaya($post['type'], $post['tahun_buat'],$post['id_warna'], $post['id_samsat'])->row_array();
        if (empty($biaya)) {
            $arr = array("error"=>true,'message'=>"TERJADI KESALAHAN </BR> MOHON PERIKSA KEMBALI DATA ANDA");
        }
        else{
        $stnk = $biaya['rp_daftar_stnk'];
        $bpkb = $biaya['rp_daftar_bpkb'];
        $pajak = $biaya['rp_pajak_kendaraan'];
        $admin = $biaya['rp_admin_fee'];

        $post['rp_daftar_stnk']=$stnk;
        $post['rp_daftar_bpkb']=$bpkb;
        $post['rp_pajak_kendaraan']=$pajak;
        $post['rp_admin_fee']=$admin;

        
        

        $res = $this->db->insert('bj_bbn_satu', $post); 
        
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
    }
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}
        echo json_encode($arr);
}


    // Read


   function get_data() {

        
        // show_array($userdata);

        $draw = $_REQUEST['draw']; // get the requested page 
        $start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $tanggal_awal = $_REQUEST['columns'][1]['search']['value'];
        $tanggal_akhir = $_REQUEST['columns'][2]['search']['value'];
        $no_rangka = $_REQUEST['columns'][3]['search']['value'];
        $userdata = $this->session->userdata('bj_login');
        $id_birojasa = $userdata['birojasa_id'];
        // $userdata = $this->session->userdata('bj_login');
        // $id_birojasa = $userdata['birojasa_id'];



      //  order[0][column]
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null,
                "tanggal_awal" => $tanggal_awal,
                "tanggal_akhir" => $tanggal_akhir,
                "no_rangka" => $no_rangka, 
                "id_birojasa" => $id_birojasa    
        );     
           
        $row = $this->dm->data($req_param)->result_array();
        
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->data($req_param)->result_array();
        

       
        $arr_data = array();
        foreach($result as $row) : 
        // $daft_id = $row['daft_id'];
        $id = $row['id'];
        $no_rangka = $row['no_rangka'];
        $hapus = "<a href ='#' onclick=\"hapus('$id')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> Hapus</a>
        <a href ='bj_bbn_satu/editdata?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i> Edit</a>";
        // <a href ='bj_bbn_satu/editdata?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a>";
        $nama ="<a href='bj_bbn_satu/lihatdata?id=$id'>$no_rangka</a>";
        $tgl_entri = flipdate($row['tgl_entri']);
            
             
            $arr_data[] = array(

                
                $row['id'],
                $tgl_entri,
                $nama,
                $row['no_mesin'],
                $row['rp_daftar_bpkb'],
                $row['rp_daftar_stnk'],
                $row['rp_pajak_kendaraan'],
                $row['rp_admin_fee'],
                $row['bj_nama_user'],
                
                $hapus
                
                     
                                );
        endforeach;

         $responce = array('draw' => $draw, // ($start==0)?1:$start,
                          'recordsTotal' => $count, 
                          'recordsFiltered' => $count,
                          'data'=>$arr_data
            );
         
        echo json_encode($responce); 
    }


    // Update

function update(){

    $post = $this->input->post();
   
        $this->load->library('form_validation');
        $this->form_validation->set_rules('no_rangka','No. Rangka','required');
        $this->form_validation->set_rules('no_mesin','No. Mesin','required'); 
        $this->form_validation->set_rules('no_faktur','No. Faktur','required'); 
        $this->form_validation->set_rules('tgl_faktur','Tanggal Faktur','required'); 
        $this->form_validation->set_rules('id_merek','Merk','required'); 
        $this->form_validation->set_rules('type','Type','required'); 
        $this->form_validation->set_rules('id_model','Model','required');   
        $this->form_validation->set_rules('silinder','Silinder','required'); 
        $this->form_validation->set_rules('bahan_bakar','Bahan Bakar','required'); 
        $this->form_validation->set_rules('tahun_buat','Tahun Buat','required'); 
        $this->form_validation->set_rules('kode_dealer','Kode Dealer','required'); 
        $this->form_validation->set_rules('nama_dealer','Nama Dealer','required'); 
        $this->form_validation->set_rules('id_desa','Desa','required'); 
        $this->form_validation->set_rules('id_kecamatan','Kecamatan','required');
        $this->form_validation->set_rules('id_provinsi','Provinsi','required');
        $this->form_validation->set_rules('id_kota','Kota','required');
        $this->form_validation->set_rules('id_polda','Polda','required');
        $this->form_validation->set_rules('id_samsat','Samsat','required');
        $this->form_validation->set_rules('tgl_entri','Tanggal Entri','required');         
         
        $this->form_validation->set_message('required', 'Field %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');
       
        

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 


        $post['tgl_faktur'] = flipdate($post['tgl_faktur']);
        $post['tgl_entri'] = flipdate($post['tgl_entri']);

        
        $biaya = $this->dm->biaya($post['type'], $post['tahun_buat'],$post['id_warna'], $post['id_samsat'])->row_array();
        if(empty($biaya)){
            $arr = array("error"=>true,'message'=>"TERJADI KESALAHAN </BR> MOHON PERIKSA KEMBALI DATA EDITAN ANDA");
        }

        else{
        $stnk = $biaya['rp_daftar_stnk'];
        $bpkb = $biaya['rp_daftar_bpkb'];
        $pajak = $biaya['rp_pajak_kendaraan'];
        $admin = $biaya['rp_admin_fee'];

        $post['rp_daftar_stnk']=$stnk;
        $post['rp_daftar_bpkb']=$bpkb;
        $post['rp_pajak_kendaraan']=$pajak;
        $post['rp_admin_fee']=$admin;
   


        $this->db->where("id",$post['id']);
        $res = $this->db->update('bj_bbn_satu', $post); 
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DIUPDATE");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DIUPDATE");
        }
    }
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}

        echo json_encode($arr);
}


 



   
        // Delete




    function hapusdata(){
    	$get = $this->input->post();
    	$id = $get['id'];

    	$data = array('id' => $id, );

    	$res = $this->db->delete('bj_bbn_satu', $data);
        if($res){
            $arr = array("error"=>false,"message"=>"DATA BERHASIL DIHAPUS");
        }
        else {
            $arr = array("error"=>true,"message"=>"DATA GAGAL DIHAPUS ".mysql_error());
        }
    	//redirect('sa_birojasa');
        echo json_encode($arr);
    }




// Untuk Menu DropDown

        function get_samsat(){
    $data = $this->input->post();

    $id_polda = $data['id_polda'];
    $this->db->where("id_polda",$id_polda);
    $this->db->order_by("nama");
    $rs = $this->db->get("samsat");
    foreach($rs->result() as $row ) :
        echo "<option value=$row->id>$row->nama </option>";
    endforeach;


}

function get_model(){
    $data = $this->input->post();

    $id_jenis = $data['id_jenis'];
    $this->db->where("id_jenis",$id_jenis);
    $this->db->order_by("model");
    $rs = $this->db->get("m_model");
    foreach($rs->result() as $row ) :
        echo "<option value=$row->id_model>$row->model </option>";
    endforeach;


}

 function get_kabupaten(){
    $data = $this->input->post();

    $id_provinsi = $data['id_provinsi'];
    $this->db->where("id_provinsi",$id_provinsi);
    $this->db->order_by("kota");
    $rs = $this->db->get("tiger_kota");
    foreach($rs->result() as $row ) :
        echo "<option value=$row->id>$row->kota </option>";
    endforeach;


}

 function get_kecamatan(){
    $data = $this->input->post();

    $id_kota = $data['id_kota'];
    $this->db->where("id_kota",$id_kota);
    $this->db->order_by("kecamatan");
    $rs = $this->db->get("tiger_kecamatan");
    foreach($rs->result() as $row ) :
        echo "<option value=$row->id>$row->kecamatan </option>";
    endforeach;


}

 function get_desa(){
    $data = $this->input->post();

    $id_kecamatan = $data['id_kecamatan'];
    $this->db->where("id_kecamatan",$id_kecamatan);
    $this->db->order_by("desa");
    $rs = $this->db->get("tiger_desa");
    foreach($rs->result() as $row ) :
        echo "<option value=$row->id>$row->desa </option>";
    endforeach;


}




function get_biaya(){
    $post = $this->input->post();

    extract($post);
    $this->db->where("id_warna",$id_warna);
    $this->db->where("id_samsat",$id_samsat);
    $this->db->where("tahun_kendaraan",$tahun_buat);
    $this->db->where("tipe_kendaraan",$type);

    $data = $this->db->get("estimasi_bbn_satu")->row_array();
    // echo $this->db->last_query(); 

    // show_array($data);

 $data['total'] = rupiah($data['rp_daftar_bpkb'] + $data['rp_daftar_stnk']  + $data['rp_pajak_kendaraan'] +  $data['rp_admin_fee'] );


    $data['rp_daftar_bpkb'] = rupiah( $data['rp_daftar_bpkb']);
    $data['rp_daftar_stnk'] = rupiah( $data['rp_daftar_stnk']);
    $data['rp_pajak_kendaraan'] = rupiah( $data['rp_pajak_kendaraan']);
    $data['rp_admin_fee'] = rupiah( $data['rp_admin_fee']);

   

    echo json_encode($data);

}


	

}

?>