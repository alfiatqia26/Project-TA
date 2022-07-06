<?php
class Login_model extends CI_Model {

	public function login($username,$password) {
 
		$query=$this->db->query("SELECT * from admin where username='$username' and password='$password' LIMIT 1 ");
		return $user=$query->row();
		
	}
 
}