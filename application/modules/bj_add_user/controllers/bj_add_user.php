<?php 
class bj_add_user extends biro_jasa_controller{
    var $controller;
    function bj_add_user(){
        parent::__construct();

        $this->controller = get_class($this);
        $this->load->model('bj_add_user_model','dm');



        
        //$this->load->helper("serviceurl");
        
    }








function index(){
        $data_array=array();
        $content = $this->load->view($this->controller."_view",$data_array,true);

        $this->set_subtitle("User Birojsa");
        $this->set_title("User Birojasa");
        $this->set_content($content);
        $this->cetak();
}


function baru(){
    
        $data_array['action'] = 'simpan';
        $content = $this->load->view($this->controller."_form_view",$data_array,true);
        $this->set_subtitle("Tambah User");
        $this->set_title("Tambah User");
        $this->set_content($content);
        $this->cetak();
    }

 function cek_email($email){
    $this->db->where("email",$email);
    if($this->db->get("pengguna")->num_rows() > 0)
    {
         $this->form_validation->set_message('cek_email', ' %s Sudah ada');
         return false;
    }

}

function cek_passwd($pswd){
    $re_pswd = $this->input->post('re_pswd');

    if(empty($pswd) or empty($re_pswd)){
         $this->form_validation->set_message('cek_passwd', ' %s harus diisi');
         return false;
    }
    if($pswd <> $re_pswd) {
        $this->form_validation->set_message('cek_passwd', ' %s tidak sama');
         return false;
    }
}


function cek_passwd2($pswd){
    $re_pswd = $this->input->post('re_pswd');

    
    if($pswd <> $re_pswd) {
        $this->form_validation->set_message('cek_passwd', ' %s tidak sama');
         return false;
    }
}

   function cekEmail(){
        $email = $this->input->post('email');
        $valid = true;
        $this->db->where('email', $email);
        $jumlah = $this->db->get("pengguna")->num_rows();    
        if($jumlah == 1) {
            $valid = false;
        }
        
        echo json_encode(array('valid' => $valid));
    
    }





function simpan(){


      $post = $this->input->post();
    
       


        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama','Nama Pengguna','required');    
        $this->form_validation->set_rules('nomor_hp','Nomor HP','required');   
        $this->form_validation->set_rules('pswd','callback_cek_passwd','required'); 
        $this->form_validation->set_rules('email','Email','callback_cek_email');    
        // $this->form_validation->set_rules('pelaksana_nip','NIP','required');         
         
        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');

     

        $post['password'] = md5($post['pswd']);

        $post['level'] = '3';
        unset($post['pswd']);
        unset($post['re_pswd']);
        //show_array($data);

if($this->form_validation->run() == TRUE ) { 

        
        $res = $this->db->insert('pengguna', $post); 
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

        $this->form_validation->set_rules('nama','Nama ','required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nomor_hp', 'No. HP', 'required'); 
        $this->form_validation->set_rules('email','Email','required');     
        $this->form_validation->set_rules('pswd','Password Tidak Sama','callback_cek_passwd2');

        

        $this->form_validation->set_message('required', ' %s Harus diisi ');
        
        $this->form_validation->set_error_delimiters('', '<br>');     

        


if($this->form_validation->run() == TRUE ) { 

        if(!empty($post['pswd']) or !empty($post['re_pswd'])) {
            $post['password'] = md5($post['pswd']);
        }
        
        unset($post['pswd']);
        unset($post['re_pswd']);

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


    function get_data() {

        
        // show_array($userdata);

        $draw = $_REQUEST['draw']; // get the requested page 
        $start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $nama = $_REQUEST['columns'][1]['search']['value'];
        $userdata = $this->session->userdata('bj_login');
        $id_birojasa = $userdata['birojasa_id'];

      //  order[0][column]
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null,
                "nama" => $nama,
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
        $hapus = "<a href ='#' onclick=\"hapus('$id')\" class='btn btn-danger btn-xs'><i class='fa fa-trash'></i>Hapus</a>
        <a href ='bj_add_user/editdata?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i>Edit</a>";
            
             
            $arr_data[] = array(
                $row['id'],
                $row['nama'],
                $row['alamat'],
                $row['nomor_hp'],
                $row['email'],
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
        $id = $post['birojsa_id'];


        $data = array(  
                        'nama' => $post['nama'],
                        );
        
        $this->db->where('birojasa_id', $birojasa_id);
        $this->db->update('pengguna', $data);
        redirect('bj_add_user');

    }

    function editdata(){
        
         $get = $this->input->get(); 
         $id= $get['id'];

         $this->db->where('id',$id);
         $pengguna = $this->db->get('pengguna');
         $data_array= $pengguna->row_array();

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

        

        $content = $this->load->view("bj_add_user_form_edit_view",$data_array,true);

        $this->set_subtitle("Edit User");
        $this->set_title("Edit User");
        $this->set_content($content);
        $this->cetak();

    }




    function hapusdata(){
        $get = $this->input->post();
        $birojasa_id = $get['id'];

        $data = array('id' => $birojasa_id, );

        $res = $this->db->delete('pengguna', $data);
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