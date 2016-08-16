<?php 
class m_sub_jenis extends admin_controller{
	var $controller;
	function m_sub_jenis(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model('m_sub_jenis_model','dm');
        $this->load->helper("tanggal");
        $this->load->model("coremodel","cm");
		
		//$this->load->helper("serviceurl");
		
	}





function index(){
		$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Sub Jenis");
		$this->set_title("Sub Jenis");
		$this->set_content($content);
		$this->cetak();
}


function baru(){
        $data_array=array();

        $data_array['action'] = 'simpan';
        $data_array['arr_jenis'] = $this->cm->arr_dropdown("jenis", "id", "jenis", "jenis");
       
        $content = $this->load->view($this->controller."_form_view",$data_array,true);

        $this->set_subtitle("Tambah Sub Jenis");
        $this->set_title("Tambah Sub Jenis");
        $this->set_content($content);
        $this->cetak();
}



function simpan(){


    $post = $this->input->post();
    
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('sub_jenis','Sub Jenis','required');
        $this->form_validation->set_rules('harga_kg','Harga','required');      
          
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');



if($this->form_validation->run() == TRUE ) { 

        
        $res = $this->db->insert('sub_jenis', $post); 
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
        $this->form_validation->set_rules('sub_jenis','Sub Jenis','required');
        $this->form_validation->set_rules('harga_kg','Harga (Kg)','required');      
          
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');



if($this->form_validation->run() == TRUE ) { 

        $id = $post['id'];
        $this->db->where("id", $id);
        $res = $this->db->update('sub_jenis', $post); 
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




    function get_data() {

    	
    	// show_array($userdata);

    	$draw = $_REQUEST['draw']; // get the requested page 
    	$start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $sub_jenis = $_REQUEST['columns'][1]['search']['value'];

        


      //  order[0][column]
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null,
                "sub_jenis" => $sub_jenis,
				 
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
         // echo $this->db->last_query(); exit();
        
        	$id = $row['id'];
            $action = "<a href ='#' onclick=\"hapus('$id')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> Hapus</a>
            <a href ='$this->controller/editdata?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i> Edit</a>";
        	 
        	$arr_data[] = array(
        		$row['id'],
                $row['sub_jenis'],
                $row['harga_kg'],
                $action,
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
    	 $biro_jasa = $this->db->get('sub_jenis');
    	 $data = $biro_jasa->row_array();

         $data['arr_jenis'] = $this->cm->arr_dropdown("jenis", "id", "jenis", "jenis");
        $data['action'] = 'update';
   

		$content = $this->load->view($this->controller."_form_view",$data,true);

         // $content = $this->load->view($this->controller."_form_view",$data,true);

		$this->set_subtitle("Edit Jenis");
		$this->set_title("Edit Jenis");
		$this->set_content($content);
		$this->cetak();

    }







    function hapusdata(){
    	$get = $this->input->post();
    	$id = $get['id'];

    	$data = array('id' => $id, );

    	$res = $this->db->delete('sub_jenis', $data);
        if($res){
            $arr = array("error"=>false,"message"=>"DATA BERHASIL DIHAPUS");
        }
        else {
            $arr = array("error"=>true,"message"=>"DATA GAGAL DIHAPUS ".mysql_error());
        }
    	//redirect('sa_birojasa_user');
        echo json_encode($arr);
    }


}

?>