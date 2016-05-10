<?php 
session_start();
class ubah_password extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		//$this->load->helper("serviceurl");
		
	}
	



function index(){
		$get = $this->input->get();
		$id_user = $get['id_user'];
		$hash = $get['hash'];
		$data['id_user'] = $id_user; 
		$data['hash'] = $hash;
		$this->db->where("id_user",$get['id_user']);
		$this->db->where("hash",$get['hash']);
		$this->db->where("valid", 0);
		$rs = $this->db->get('lupa_password');
		if($rs->num_rows() == 1){
			$this->load->view('ubah_password', $data);
		}
}
	
function update_password(){
	
	$post = $this->input->post();
	$id = $post['id'];
	$pswd = $post['pswd'];
	$hash = $post['hash'];
	
	$password = md5($pswd);
	
	$data = array('password' => $password);
	
	$this->db->where('id', $id);
	$this->db->update('members', $data);

	$valid = array('valid' => 1);
	$this->db->where('hash', $hash);
	$this->db->update('lupa_password', $valid);

	$this->load->view('change_password_succes');
}
	
}

?>