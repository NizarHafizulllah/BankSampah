<?php 
class nasabah_transaksi extends nasabah_controller{
	var $controller;
	function nasabah_transaksi(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model('nasabah_transaksi_model','dm');
        $this->load->helper("tanggal");
        $this->load->model("coremodel","cm");
		
		//$this->load->helper("serviceurl");
		
	}





function index(){
		$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Transaksi");
		$this->set_title("Transaksi");
		$this->set_content($content);
		$this->cetak();
}


function baru(){
        $data_array=array();

        $data_array['action'] = 'simpan';

       
        $content = $this->load->view($this->controller."_form_view",$data_array,true);

        $this->set_subtitle("Ambil Uang");
        $this->set_title("Ambil Uang");
        $this->set_content($content);
        $this->cetak();
}



    function get_data() {

        $userdata = $this->session->userdata('nasabah_login');
        $id_nasabah = $userdata['id'];
        // show_array($userdata);

        $draw = $_REQUEST['draw']; // get the requested page 
        $start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $nama = $_REQUEST['columns'][1]['search']['value'];
        $get = $this->input->get(); 
         


      //  order[0][column]
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null,
                "nama" => $nama,
                "id_nasabah" => $id_nasabah
                 
        );     
           
        $row = $this->dm->transaksi($req_param)->result_array();
        
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->transaksi($req_param)->result_array();
        

       
        $arr_data = array();
        
        foreach($result as $row) : 
        // $daft_id = $row['daft_id'];
        $id = $row['id'];
         // echo $this->db->last_query(); exit();
        
            
             
            $arr_data[] = array(
                $row['tgl'],
                $row['no_transaksi'],
                $row['debit'],
                $row['kredit'],
                $row['saldo'],

                                );
            
        endforeach;

         $responce = array('draw' => $draw, // ($start==0)?1:$start,
                          'recordsTotal' => $count, 
                          'recordsFiltered' => $count,
                          'data'=>$arr_data
            );
         
        echo json_encode($responce); 
    }


function simpan(){

    $userdata = $this->session->userdata('nasabah_login');
    $id_nasabah = $userdata['id']; 

    
    $post = $this->input->post();
    
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('nominal','Nominal','required'); 
        $this->form_validation->set_rules('jenis_kirim','Jenis Kirim','required');      
          
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');



if($this->form_validation->run() == TRUE ) { 

        $post['id_nasabah'] = $id_nasabah;
        $res = $this->db->insert('ambil_uang', $post); 
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



}

?>