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
	function logout_bj(){
		$this->session->unset_userdata("bj_login",true);
		redirect("login");
	}
	function logout_user(){
		$this->session->unset_userdata("user_login",true);
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

		 $this->db->select('p.*,b.nama as birojasa')->from('pengguna p')
		 ->join('biro_jasa b','p.birojasa_id = b.id','left');
		 $this->db->where("p.email",$username);
		 $this->db->where("p.password",$password);
		 $res = $this->db->get();

		 if($res->num_rows()==0) {

		 	redirect('login');
		 	// $ret = array("error"=>true,"message"=>"Kombinasi Email Dan Password Tidak Dikenali");

		 }
		 else {

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
		 		
		 		$this->session->set_userdata('bj_login', $member);
		 		$datalogin = $this->session->userdata("bj_login");
		 		redirect('biro_jasa');
		 	}

		 	else if ($member['level'] == 3) {

		 		$this->session->set_userdata('user_login', $member);

		 		$datalogin = $this->session->userdata("user_login");

		 		redirect('user');
		 	}

		 	else {
		 		$ret = array("error"=>true,"message"=>"NOT An Option");
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