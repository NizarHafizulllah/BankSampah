<?php 
class us_bbn_satu extends user_controller{
	var $controller;
	function us_bbn_satu(){
		parent::__construct();

		$this->controller = get_class($this);
		$this->load->model('us_bbn_satu_model','dm');
        $this->load->model("coremodel","cm");
		
		//$this->load->helper("serviceurl");
		
	}


// Untuk View



var $status_button = array(1=>"Konfirmasi berkas masuk samsast",
    2=>"Konfirmasi STNK sudah jadi",
    "Konfirmasi BPKB sudah jadi ",
    "Input kelebihan Biaya",
    "Penyerahan STNK",
    "Penyerahan BPKB",
    "Input Invoice","
    SELESAI");


    function lihatdata(){
         $get = $this->input->get(); 
         $id = $get['id'];

         $this->db->where('id',$id);
         $bbn = $this->db->get('bj_bbn_satu');
         // echo $this->db->last_query(); exit();

         $data = $bbn->row_array();
        

         // show_array($data);exit;


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

          if ($data['status'] > 0) {
              $data['img_status'] = 'Selsai.png';
          }else{
                $data['img_status'] = 'blm_selsai.png';
          }
         



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
        $data['nama_status'] = $this->status_button[$data['status']];
    



        

        $content = $this->load->view("us_bbn_satu_detail_view",$data,true);

         // $content = $this->load->view($this->controller."_form_view",$data,true);

        $this->set_subtitle("Detail Data");
        $this->set_title("Detail Data BBN 1");
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

    






   function get_data() {

        $userdata = $this->session->userdata('user_login');
        $pengguna = $userdata['id'];
        // echo $userdata['nama']; 
        $id_birojasa = $userdata['birojasa_id']; 
        // echo $userdata['birojasa']; 
        // show_array($userdata); exit();

        $draw = $_REQUEST['draw']; // get the requested page 
        $start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
  
        $tanggal_awal = $_REQUEST['columns'][1]['search']['value'];
        $tanggal_akhir = $_REQUEST['columns'][2]['search']['value'];
        $no_rangka = $_REQUEST['columns'][3]['search']['value'];
      //  order[0][column]
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null,
                "tanggal_awal" => $tanggal_awal,
                "tanggal_akhir" => $tanggal_akhir,
                "no_rangka" => $no_rangka, 
                "id_birojasa" => $id_birojasa, 
                "id" => $pengguna,    
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

        if ($row['status'] < 8) {
        $hapus = "<a href ='us_bbn_satu/lihatdata?id=$id' class='btn btn-primary btn-xs'><i class='fa fa-edit'></i> Detail</a>";
        
        $nama ="<a href='us_bbn_satu/lihatdata?id=$id'>$no_rangka</a>";
        }else{
         $hapus = '<button type="button" class="btn btn-success btn-xs">Selesai</button>';
         $nama = $row['no_rangka'];
        }
        
            
             
            $arr_data[] = array(
                $row['id'],
                $row['tgl_entri'],
                $nama,
                $row['no_mesin'],
                $row['nama_pemilik'],
                $row['rp_daftar_stnk'],
                $row['rp_daftar_bpkb'],
                $row['rp_pajak_kendaraan'],
                $row['rp_admin_fee'],
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
    $id = $post['id'];


    $this->load->library('form_validation');

    $this->db->where('id', $id);
    $this->db->where('status', 0);
    $vld = $this->db->get('bj_bbn_satu');

    
    if($vld->num_rows() > 0){


        $post['status']=1;
        $this->db->where("id",$id);
        $this->db->set('tgl_update', 'NOW()', FALSE);
        $res = $this->db->update('bj_bbn_satu', $post);
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
    }
    else{
        $arr = array("error"=>true, 'message'=>"DATA BBN INI TELAH ANDA KONFIRMASI SEBELUMNYA");
    }
        echo json_encode($arr);

}




function update1(){

    $userdata = $this->session->userdata('user_login');
    $post = $this->input->post();
    $id = $post['id'];
    $post['samsat_masuk_user'] = $userdata['id'];
    $post['samsat_masuk_tgl'] = flipdate($post['samsat_masuk_tgl']);


    $this->load->library('form_validation');

    $this->db->where('id', $id);
    $this->db->where('status', 1);
    $vld = $this->db->get('bj_bbn_satu');

    
    if($vld->num_rows() > 0){


        $post['status']=2;
        $this->db->where("id",$id);
        $res = $this->db->update('bj_bbn_satu', $post);
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
            $arr['status'] = ".".$post['status'];
            $arr['nama_status'] = $this->status_button[$post['status']];
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
    }
    else{
        $arr = array("error"=>true, 'message'=>"DATA BBN INI TELAH ANDA KONFIRMASI SEBELUMNYA");
    }
        echo json_encode($arr);

}

function update2(){

    
    $post = $this->input->post();
    $id = $post['id'];
    

    $this->load->library('form_validation');

    $this->db->where('id', $id);
    $this->db->where('status', 2);
    $vld = $this->db->get('bj_bbn_satu');

    
    if($vld->num_rows() > 0){


        $post['status']=3;
        $this->db->where("id",$id);
        $post['stnk_tgl'] = flipdate($post['stnk_tgl']);
        $res = $this->db->update('bj_bbn_satu', $post);
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
            $arr['status'] = ".".$post['status'];
            $arr['nama_status'] = $this->status_button[$post['status']];
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
    }
    else{
        $arr = array("error"=>true, 'message'=>"DATA BBN INI TELAH ANDA KONFIRMASI SEBELUMNYA");
    }
        echo json_encode($arr);

}

function update3(){

    
    $post = $this->input->post();
    $id = $post['id'];


    $this->load->library('form_validation');

    $this->db->where('id', $id);
    $this->db->where('status', 3);
    $vld = $this->db->get('bj_bbn_satu');

    
    if($vld->num_rows() > 0){


        $post['status']=4;
        $this->db->where("id",$id);
        $post['bpkb_tgl'] = flipdate($post['bpkb_tgl']);
        $res = $this->db->update('bj_bbn_satu', $post);
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
            $arr['status'] = ".".$post['status'];
            $arr['nama_status'] = $this->status_button[$post['status']];
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
    }
    else{
        $arr = array("error"=>true, 'message'=>"DATA BBN INI TELAH ANDA KONFIRMASI SEBELUMNYA");
    }
        echo json_encode($arr);

}


function update4(){

    $userdata = $this->session->userdata('user_login');
    $post = $this->input->post();
    $id = $post['id'];
    $post['biaya_lebih_user'] = $userdata['id'];


    $this->load->library('form_validation');

    $this->db->where('id', $id);
    $this->db->where('status', 4);
    $vld = $this->db->get('bj_bbn_satu');

    
    if($vld->num_rows() > 0){


        $post['status']=5;
        $this->db->where("id",$id);
        $res = $this->db->update('bj_bbn_satu', $post);
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
             $arr['status'] = ".".$post['status'];
            $arr['nama_status'] = $this->status_button[$post['status']];
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
    }
    else{
        $arr = array("error"=>true, 'message'=>"DATA BBN INI TELAH ANDA KONFIRMASI SEBELUMNYA");
    }
        echo json_encode($arr);

}

function update5(){

    $userdata = $this->session->userdata('user_login');
    $post = $this->input->post();
    $id = $post['id'];
    $post['stnk_serah_user'] = $userdata['id'];


    $this->load->library('form_validation');

    $this->db->where('id', $id);
    $this->db->where('status', 5);
    $post['stnk_serah_tgl'] = flipdate($post['stnk_serah_tgl']);
    $vld = $this->db->get('bj_bbn_satu');

    
    if($vld->num_rows() > 0){


        $post['status']=6;
        $this->db->where("id",$id);
        $res = $this->db->update('bj_bbn_satu', $post);
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
             $arr['status'] = ".".$post['status'];
            $arr['nama_status'] = $this->status_button[$post['status']];
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
    }
    else{
        $arr = array("error"=>true, 'message'=>"DATA BBN INI TELAH ANDA KONFIRMASI SEBELUMNYA");
    }
        echo json_encode($arr);

}

function update6(){

    $userdata = $this->session->userdata('user_login');
    $post = $this->input->post();
    $id = $post['id'];
    $post['bpkb_serah_user'] = $userdata['id'];


    $this->load->library('form_validation');

    $this->db->where('id', $id);
    $this->db->where('status', 6);
    $post['bpkb_serah_tgl'] = flipdate($post['bpkb_serah_tgl']);
    $vld = $this->db->get('bj_bbn_satu');

    
    if($vld->num_rows() > 0){


        $post['status']=7;
        $this->db->where("id",$id);
        $res = $this->db->update('bj_bbn_satu', $post);
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
             $arr['status'] = ".".$post['status'];
            $arr['nama_status'] = $this->status_button[$post['status']];
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
    }
    else{
        $arr = array("error"=>true, 'message'=>"DATA BBN INI TELAH ANDA KONFIRMASI SEBELUMNYA");
    }
        echo json_encode($arr);

}


function update7(){

    $userdata = $this->session->userdata('user_login');
    $post = $this->input->post();
    $id = $post['id'];
    $post['bayar_user'] = $userdata['id'];


    $this->load->library('form_validation');

    $this->db->where('id', $id);
    $this->db->where('status', 7);
    $post['bayar_tgl'] = flipdate($post['bayar_tgl']);
    $vld = $this->db->get('bj_bbn_satu');

    
    if($vld->num_rows() > 0){


        $post['status']=8;
        $this->db->where("id",$id);
        $res = $this->db->update('bj_bbn_satu', $post);
        if($res){
            $arr = array("error"=>false,'message'=>"BERHASIL DISIMPAN");
             $arr['status'] = ".".$post['status'];
            $arr['nama_status'] = $this->status_button[$post['status']];
        }
        else {
             $arr = array("error"=>true,'message'=>"GAGAL  DISIMPAN");
        }
    }
    else{
        $arr = array("error"=>true, 'message'=>"DATA BBN INI TELAH ANDA KONFIRMASI SEBELUMNYA");
    }
        echo json_encode($arr);

}

 



   
        // Delete







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

	

}

?>