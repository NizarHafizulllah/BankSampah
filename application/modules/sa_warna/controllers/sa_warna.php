<?php 
class sa_warna extends admin_controller{
    var $controller;
    function sa_warna(){
        parent::__construct();

        $this->controller = get_class($this);
        $this->load->model('sa_warna_model','dm');



        
        //$this->load->helper("serviceurl");
        
    }








function index(){
        $data_array=array();
        $content = $this->load->view($this->controller."_view",$data_array,true);

        $this->set_subtitle("Data Warna");
        $this->set_title("Data Warna");
        $this->set_content($content);
        $this->cetak();
}


function baru(){
    
        $data_array['action'] = 'simpan';
        $content = $this->load->view($this->controller."_form_view",$data_array,true);
        $this->set_subtitle("Tambah Warna");
        $this->set_title("Tambah Warna");
        $this->set_content($content);
        $this->cetak();
    }




function simpan(){


    $post = $this->input->post();
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('WARNA_ID','Id','required');
        $this->form_validation->set_rules('WARNA_NAMA','Warna','required');
          
          
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        
        $res = $this->db->insert('m_warna', $post); 
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
        $this->form_validation->set_rules('WARNA_ID','Id','required');
        $this->form_validation->set_rules('WARNA_NAMA','Warna','required');     
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        $this->db->where("WARNA_ID",$post['WARNA_ID1']);
        unset($post['WARNA_ID1']);
        $res = $this->db->update('m_warna', $post); 
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
        
  
        $WARNA_NAMA = $_REQUEST['columns'][1]['search']['value'];


      //  order[0][column]
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null,
                "WARNA_NAMA" => $WARNA_NAMA     
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
        $warna_nama = $row['WARNA_NAMA'];
        $hapus = "<a href ='#' onclick=\"hapus('$warna_nama')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i>Hapus</a>
        <a href ='sa_warna/editdata?WARNA_NAMA=$warna_nama' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a>";
            
             
            $arr_data[] = array(
                $row['WARNA_ID'],
                $row['WARNA_NAMA'],
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

    function editsimpan(){

        
        $post = $this->input->post();
        $warna = $post['WARNA_NAMA'];


        $data = array(  
                        'warna_kode' => $post['warna_kode'],
                        'warna_nama' => $post['warna_nama'],
                        );
        
        $this->db->where('WARNA_NAMA', $WARNA_NAMA);
        $this->db->update('m_warna', $data);
        redirect('sa_warna');

    }

    function editdata(){
        
         $get = $this->input->get(); 
         $WARNA_NAMA = $get['WARNA_NAMA'];

         $this->db->where('WARNA_NAMA',$WARNA_NAMA);
         $warna = $this->db->get('m_warna');
         $data_array= $warna->row_array();

         $data_array['action'] = 'update';
         // show_array($data); exit;
         
        

        // $data_array=array(
        //      'id' => $data->id,
        //      'nama' => $data->nama,
        //      'no_siup' => $data->no_siup,
        //      'no_npwp' => $data->no_npwp,
        //      'no_tdp' => $data->no_tdp,
        //      'telp' => $data->telp,
        //      'alamat' => $data->alamat,
        //      'email' => $data->email,
        //      'hp' => $data->hp,

        //  );

        

        $content = $this->load->view("sa_warna_form_edit_view",$data_array,true);

        $this->set_subtitle("Edit Warna");
        $this->set_title("Edit Warna");
        $this->set_content($content);
        $this->cetak();

    }




    function hapusdata(){
        $get = $this->input->post();
        $warna_nama = $get['id'];

        $data = array('warna_nama' => $warna_nama);

        $res = $this->db->delete('m_warna', $data);
        if($res){
            $arr = array("error"=>false,"message"=>"DATA BERHASIL DIHAPUS");
        }
        else {
            $arr = array("error"=>true,"message"=>"DATA GAGAL DIHAPUS ".mysql_error());
        }
        //redirect('sa_birojasa');
        echo json_encode($arr);
    }



    // function simpan(){
    //  $post = $this->input->post();
    //  $password = md5($post['password']);
    //  $data = array('nama' => $post['nama'],
    //                  'email' => $post['email'],
    //                  'alamat' => $post['alamat'],
    //                  'password' => $password,
    //                  'level' => 2);
    //  $this->db->insert('sa_birojasa', $data); 

    //  redirect('sa_birojasa');
    // }





    

}

?>