<?php 
class sa_merk extends admin_controller{
    var $controller;
    function sa_merk(){
        parent::__construct();

        $this->controller = get_class($this);
        $this->load->model('sa_merk_model','dm');



        
        //$this->load->helper("serviceurl");
        
    }








function index(){
        $data_array=array();
        $content = $this->load->view($this->controller."_view",$data_array,true);

        $this->set_subtitle("Data Merk");
        $this->set_title("Data Merk");
        $this->set_content($content);
        $this->cetak();
}


function baru(){
    
        $data_array['action'] = 'simpan';
        $content = $this->load->view($this->controller."_form_view",$data_array,true);
        $this->set_subtitle("Tambah Merk");
        $this->set_title("Tambah Merk");
        $this->set_content($content);
        $this->cetak();
    }




function simpan(){


    $post = $this->input->post();
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode','KODE','required');
        $this->form_validation->set_rules('nama','NAMA','required');
          
          
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        $this->db->set('lastupdate', 'NOW()', FALSE);
        $res = $this->db->insert('m_merek', $post); 
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
        $this->form_validation->set_rules('kode','Kode','required'); 
        $this->form_validation->set_rules('nama','Nama','required');     
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        $this->db->where("kode",$post['kode1']);
        unset($post['kode1']);
        $res = $this->db->update('m_merek', $post); 
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DIUPDATE ");
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
        
  
        $nama = $_REQUEST['columns'][1]['search']['value'];


      //  order[0][column]
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null,
                "nama" => $nama
                
                 
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
        $id = $row['kode'];
        $hapus = "<a href ='#' onclick=\"hapus('$id')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i>Hapus</a>
        <a href ='sa_merk/editdata?kode=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a>";
            
             
            $arr_data[] = array(
                $row['kode'],
                $row['nama'],
                $row['lastupdate'],
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
        $id = $post['kode'];


        $data = array(  
                        'kode' => $post['kode'],
                        'nama' => $post['nama']
                        );
        
        $this->db->where('kode', $data);
        $this->db->update('m_merek', $data);
        redirect('sa_merk');

    }

    function editdata(){
        
         $get = $this->input->get(); 
         $kode = $get['kode'];

         $this->db->where('kode',$kode);
         $kode = $this->db->get('m_merek');
         $data_array= $kode->row_array();

         $data_array['action'] = 'update';
         // show_array($data); exit;
         
        


        

        $content = $this->load->view("sa_merk_form_edit_view",$data_array,true);

        $this->set_subtitle("Edit Merk");
        $this->set_title("Edit Merk");
        $this->set_content($content);
        $this->cetak();

    }




    function hapusdata(){
        $get = $this->input->post();
        $kode = $get['id'];

        $data = array('kode' => $kode, );

        $res = $this->db->delete('m_merek', $data);
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