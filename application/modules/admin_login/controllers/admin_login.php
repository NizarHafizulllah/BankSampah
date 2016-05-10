<?php 
class admin_login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("tanggal");
		$this->load->helper("url");
		$this->load->helper("kirimemail");
		//$this->load->helper("serviceurl");
		
	}
	
	function index(){



		// $this->load->view("admin_login_view");
	}

 

	function ceklogin(){

		 $data = $this->input->post();
		 $username = $data['form-username'];
		 $password = $data['mask'];

		 $this->db->where("email",$username);
		 $this->db->where("password",$password);
		 $res = $this->db->get("admins");
		 // echo $this->db->last_query(); exit;

		 if($res->num_rows()==0) {
		 	$ret = array("error"=>true,"message"=>"Kombinasi Email Dan Password Tidak Dikenali");

		 }
		 else {

		 	$admin = $res->row();

		 	
		 		
				$jj = array (
					'login' => true,
					'id_user' => $admin->id,
					'email' => $admin->email,
					'nama' => $admin->nama,
					);

		 		$this->session->set_userdata('admin_login', $jj);

		 		$datalogin = $this->session->userdata("admin_login");


		 		$ret = array("error"=>false,"message"=>"Login sukses. Klik Oke untuk melanjutkan");
				


		 	}
		 	echo json_encode($ret);


		 }

		 function logout(){

		 	$this->session->unset_userdata("admin_login",true);
		 	redirect('login');
		 }

	


}

?>