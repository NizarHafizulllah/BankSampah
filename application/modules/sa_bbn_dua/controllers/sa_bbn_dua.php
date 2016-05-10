<?php 
class sa_bbn_dua extends admin_controller{
	var $controller;
	function sa_bbn_dua(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model('bbn_dua_model','dm');
        $this->load->model("coremodel","cm");
		
		//$this->load->helper("serviceurl");
		
	}







function index(){
		$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Estimasi Pengurusan");
		$this->set_title("BBN 2");
		$this->set_content($content);
		$this->cetak();
}

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



function baru(){
        $data_array=array();

        $data_array['action'] = 'simpan';
        $data_array['arr_polda'] = $this->cm->arr_dropdown("m_polda", "polda_id", "polda_nama", "polda_nama");

        $data_array['arr_perubahan'] = $this->cm->arr_dropdown("perubahan", "id", "nama", "nama");
        $data_array['arr_warna'] = $this->cm->arr_dropdown("m_warna", "WARNA_ID", "WARNA_NAMA", "WARNA_NAMA");

        
        $content = $this->load->view($this->controller."_form_view",$data_array,true);

        $this->set_subtitle("Tambah BBN 1");
        $this->set_title("Tambah BBN 1");
        $this->set_content($content);
        $this->cetak();
}



function simpan(){


    $post = $this->input->post();
    unset($post['id']);
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('tipe_kendaraan','Tipe Kendaraan','required');    
        $this->form_validation->set_rules('tahun_kendaraan','Tahun Kendaraan','required');
           
        $this->form_validation->set_rules('rp_pendaftaran','Daftar STNK','required');
        $this->form_validation->set_rules('rp_perubahan','Daftar BPKB','required');    
        $this->form_validation->set_rules('rp_admin_fee','Admin Fee','required');    
        // $this->form_validation->set_rules('pelaksana_nip','NIP','required');         
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        
        $res = $this->db->insert('estimasi_bbn_dua', $post); 
        
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}
        echo json_encode($arr);
}

function update(){

    $post = $this->input->post();
   
       
        $this->load->library('form_validation'); 
        $this->form_validation->set_rules('tipe_kendaraan','Tipe Kendaraan','required');    
        $this->form_validation->set_rules('tahun_kendaraan','Tahun Kendaraan','required');    
        
        $this->form_validation->set_rules('rp_pendaftaran','Daftar BPKB','required');    
        $this->form_validation->set_rules('rp_perubahan','Pajak Kendaraan','required');
        $this->form_validation->set_rules('rp_admin_fee','Admin Fee','required');     
        // $this->form_validation->set_rules('email','Email','callback_cek_email');    
        // $this->form_validation->set_rules('pelaksana_nip','NIP','required');         
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        $this->db->where("id",$post['id']);
        $res = $this->db->update('estimasi_bbn_dua', $post); 
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DIUPDATE");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DIUPDATE");
        }
}
else {
    $arr = array("error"=>true,'message'=>validation_errors());
}

        echo json_encode($arr);
}


    function get_data() {

    	
    	// show_array($userdata);

    	$draw = $_REQUEST['draw']; // get the requested page 
    	$start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $tipe_kendaraan = $_REQUEST['columns'][1]['search']['value'];


      //  order[0][column]
        $req_param = array (
				"sort_by" => $sidx,
				"sort_direction" => $sord,
				"limit" => null,
				"tipe_kendaraan" => $tipe_kendaraan
				
				 
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
        $hapus = "<a href ='#' onclick=\"hapus('$id')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i>Hapus</a>
        <a href ='sa_bbn_dua/editdata?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a>";
        	
        	 
        	$arr_data[] = array(
        		$row['id'],
        		$row['tipe_kendaraan'],
        		$row['tahun_kendaraan'],
        		$row['nm_perubahan'],
                $row['nm_samsat'],
                $row['nm_polda'],
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

   
    function editdata(){
    	 $get = $this->input->get(); 
    	 $id = $get['id'];

    	 $this->db->where('id',$id);
    	 $estimasi_bbn_satu = $this->db->get('estimasi_bbn_dua');
    	 $data = $estimasi_bbn_satu->row_array();

         $data['action'] = 'update';

         $data['arr_polda'] = $this->cm->arr_dropdown("m_polda", "polda_id", "polda_nama", "polda_nama");

         $data['arr_warna'] = $this->cm->arr_dropdown("m_warna", "WARNA_ID", "WARNA_NAMA", "WARNA_NAMA");
         
          $data['arr_samsat'] = $this->cm->arr_dropdown("samsat", "id","nama", "nama", "nama");

        $data['arr_perubahan'] = $this->cm->arr_dropdown("perubahan", "id", "nama", "nama");

		$content = $this->load->view("sa_bbn_dua_form_edit_view",$data,true);

         // $content = $this->load->view($this->controller."_form_view",$data,true);

		$this->set_subtitle("Edit Biro Jasa");
		$this->set_title("Edit Biro Jasa");
		$this->set_content($content);
		$this->cetak();

    }




    function hapusdata(){
    	$get = $this->input->post();
    	$id = $get['id'];

    	$data = array('id' => $id, );

    	$res = $this->db->delete('estimasi_bbn_dua', $data);
        if($res){
            $arr = array("error"=>false,"message"=>"DATA BERHASIL DIHAPUS");
        }
        else {
            $arr = array("error"=>true,"message"=>"DATA GAGAL DIHAPUS ".mysql_error());
        }
    	//redirect('sa_birojasa');
        echo json_encode($arr);
    }







	

}

?>