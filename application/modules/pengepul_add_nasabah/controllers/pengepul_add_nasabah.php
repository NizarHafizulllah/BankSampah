<?php 
class pengepul_add_nasabah extends pengepul_controller{
	var $controller;
	function pengepul_add_nasabah(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model('pengepul_nasabah_model','dm');
        $this->load->model("coremodel","cm");
		
		//$this->load->helper("serviceurl");
		
	}


    function cekEmail(){
        $no_hp = $this->input->post('no_hp');
        $valid = true;
        $this->db->where('no_hp', $no_hp);
        $jumlah = $this->db->get("nasabah")->num_rows();    
        if($jumlah == 1) {
            $valid = false;
        }
        
        echo json_encode(array('valid' => $valid));
    
    }






function index(){
		$data_array=array();
		$content = $this->load->view("pengepul_add_nasabah_view",$data_array,true);

		$this->set_subtitle("Data Nasabah");
		$this->set_title("Data Nasabah");
		$this->set_content($content);
		$this->cetak();
}


function baru(){
        $data_array=array();

        $data_array['action'] = 'simpan';

        $data_array['arr_kota'] = $this->cm->arr_dropdown("tiger_kota", "id", "kota", "kota");
       
        $content = $this->load->view($this->controller."_form_view",$data_array,true);

        $this->set_subtitle("Tambah Nasabah");
        $this->set_title("Tambah Nasabah");
        $this->set_content($content);
        $this->cetak();
}


function cek_email($no_hp){
    $this->db->where("no_hp",$no_hp);
    if($this->db->get("nasabah")->num_rows() > 0)
    {
         $this->form_validation->set_message('cek_email', ' %s Sudah ada');
         return false;
    }

}



function simpan(){


    $post = $this->input->post();
    
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama','Nama Pengguna','required');  
        $this->form_validation->set_rules('no_hp','Email','callback_cek_email');    
        // $this->form_validation->set_rules('pelaksana_nip','NIP','required');         
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        $post['password'] = md5($post['no_hp']);
        $post['username'] = $post['no_hp'];

        
        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        
        $res = $this->db->insert('nasabah', $post); 
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


    function get_data() {

    	
    	// show_array($userdata);

    	$draw = $_REQUEST['draw']; // get the requested page 
    	$start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $nama = $_REQUEST['columns'][1]['search']['value'];

        $userdata = $this->session->userdata('pengepul_login');
        $pengepul = $userdata['id'];


      //  order[0][column]
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null,
                "nama" => $nama,
                "pengepul" => $pengepul
				 
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
        $hapus = "<a href ='#' onclick=\"hapus('$id')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> Hapus</a>
        <a href ='pengepul_transaksi/transaction?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i> Edit</a>";
        	
        	 
        	$arr_data[] = array(
        		$row['id'],
        		$row['nama'],
        		$row['no_hp'],
                $row['saldo'],      		 
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
    	 $biro_jasa = $this->db->get('nasabah');
    	 $data = $biro_jasa->row_array();

        $data['arr_kota'] = $this->cm->arr_dropdown("tiger_kota", "id", "kota", "kota");


        $data['action'] = 'update';
         // show_array($data); exit;
    	 
		
		$content = $this->load->view($this->controller."_form_view",$data,true);

         // $content = $this->load->view($this->controller."_form_view",$data,true);

		$this->set_subtitle("Edit Nasabah");
		$this->set_title("Edit Nasabah");
		$this->set_content($content);
		$this->cetak();

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



function update(){

    $post = $this->input->post();
   
       


        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama','Nama Pengguna','required');    
        $this->form_validation->set_rules('nomor_hp','Nomor HP','required');   
        $this->form_validation->set_rules('p1','Password','callback_cek_passwd2'); 
        // $this->form_validation->set_rules('email','Email','callback_cek_email');   
        // $this->form_validation->set_rules('email','Email','callback_cek_email');    
        // $this->form_validation->set_rules('pelaksana_nip','NIP','required');         
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 




        if(!empty($post['p1']) or !empty($post['p2'])) {
            $post['password'] = md5($post['p1']);
        }
        
        unset($post['p1']);
        unset($post['p2']);




        $this->db->where("id",$post['id']);
        $res = $this->db->update('pengguna', $post); 
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



    function hapusdata(){
    	$get = $this->input->post();
    	$id = $get['id'];

    	$data = array('id' => $id, );

    	$res = $this->db->delete('nasabah', $data);
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