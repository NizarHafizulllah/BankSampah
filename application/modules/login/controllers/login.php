<?php 
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("tanggal");
		$this->load->helper("url");
		$this->load->helper("kirimemail");
		//$this->load->helper("serviceurl");
		
	}
	
	function index(){
		$this->load->view("login_view");
	}
	
	
	function logout_admin(){
		$this->session->unset_userdata("admin_login",true);
		redirect("login");
	}
	function logout_pengepul(){
		$this->session->unset_userdata("pengepul_login",true);
		redirect("login");
	}
	function logout_nasabah(){
		$this->session->unset_userdata("nasabah_login",true);
		redirect("login");
	}
	

	
function cek_email($email) {
	$this->db->where("email",$email);
	$jumlah = $this->db->get("members")->num_rows();
	if($jumlah > 0) {
		$this->form_validation->set_message('cek_email', "Email $email sudah terdaftar  ");
		return false;
	}
}
	




function cek_password($password) {
	 $password2 = $_POST['password2'];

	 if($password == "" or $password2=="") {
	 	$this->form_validation->set_message('cek_password', 'Password harus diisi dengan benar ');
		return false;
	 }

	 if($password <> $password2 ) {
	 	$this->form_validation->set_message('cek_password', 'Password Harus sama');
		return false;
	 }


}



	function ceklogin(){

		 $data = $this->input->post();
		 $username = $data['form-username'];
		 $password = $data['mask'];

		 
		 $this->db->where("username",$username);
		 $this->db->where("password",$password);
		 $res = $this->db->get('super_admin');

		 if($res->num_rows()==1) {

		 	$member = $res->row_array();
		 	// show_array($member);
		 	// exit;

		 	$member['login'] = true;
		 	if($member['level'] == 1) {
		 		
				

				$this->session->set_userdata('admin_login', $member);
		 		$datalogin = $this->session->userdata("admin_login");
		 		redirect('admin');

		 		
				


		 	}
		 	else if ($member['level'] == 2) {
		 		
		 		$this->session->set_userdata('pengepul_login', $member);
		 		$datalogin = $this->session->userdata("pengepul_login");
		 		redirect('pengepul');
		 	}

		 	else {
		 		$ret = array("error"=>true,"message"=>"NOT An Option");
		 	}




		 	

		 		
		 	// $ret = array("error"=>true,"message"=>"Kombinasi Email Dan Password Tidak Dikenali");

		 }
		 else {

		 	$this->db->where("username",$username);
		 	$this->db->where("password",$password);
		 	$nasabah = $this->db->get('nasabah');

		 	if ($nasabah->num_rows()==0) {
		 		redirect('login');
		 	}else{

		 		$member = $nasabah->row_array();
		 	

		 		$member['login'] = true;

		 		$this->session->set_userdata('nasabah_login', $member);
		 		$datalogin = $this->session->userdata("nasabah_login");
		 		redirect('nasabah');
		 	}

		 }


		 echo json_encode($ret);
 
		 
		 
	}
	
		function cekEmail(){
		$email = $this->input->post('email');
		$valid = true;
		$query = $this->db->where('email', $email);
		$jumlah = $this->db->get("members")->num_rows();	
		if($jumlah > 0) {
			$valid = false;
		}
		
		echo json_encode(array('valid' => $valid));
	
	}

	
	


}

?>