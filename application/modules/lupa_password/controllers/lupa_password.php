
<?php 
session_start();
class lupa_password extends coba_controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("tanggal");
		$this->load->helper("url");
		$this->load->helper("kirimemail");
		//$this->load->helper("serviceurl");
		
	}
	
	function index(){
		$this->load->view('lupa_password');
	}
	
	function cekEmail(){
		$email = $this->input->post('email');
		$valid = true;
		$this->db->where('email', $email);
		$jumlah = $this->db->get("members")->num_rows();	
		if($jumlah == 0) {
			$valid = false;
		}
		
		echo json_encode(array('valid' => $valid));
	
	}
	
	function send_hash_password(){
		$post = $this->input->post();
		$email = $post['email'];
		$this->db->where("email",$email)	;
		$rs = $this->db->get("members"); 

		if($rs->num_rows() == 1){
			
			$data_member = $rs->row();
//			/$data['id'] = ' ';
			$data['tanggal'] = date('Y-m-d h:i:s');
			$data['id_user'] =  $data_member->id;//$this->db->query('select id from members where email = '.$email);
			$data['hash'] = md5(date('Ymdhis').'r^7dfjdfdkf');
			$user_id = $data['id_user'];
			$hash = $data['hash'];
			$date = $data['tanggal'];
			
			$email_body = "<p>Kami Telah Menerima Permintaan <b>Recovery Password<b> anda <p>
				        	<p>
				        		Silahkan klik link ". anchor("ubah_password?id_user=$user_id&hash=$hash")  ."
				        	</p>";
			
			$res = $this->db->insert('lupa_password', $data);
			
//			$ret = array("error"=>false, "message"=>"Permintaan Anda Telah Di Konfirmasi <br/> Silahkan Cek Email ".$email." Untuk Melanjutkan");
//			
				

				kirimemail($data_member->email,'Reset Password',$email_body,false);
			
			$this->load->view('succes_send_hash');
			
		}
		else{
			$ret = array("error"=>true,"message"=>$email." Tidak pernah terdaftar sebelumnya");
	}
		
	
	}
	
	

}
?> 