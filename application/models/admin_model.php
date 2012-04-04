<?php 


class Admin_model extends CI_Model {

	
	function verify_user($email, $password){
	//reads: use db library, set where clause for email and pass, limit to 1 item, get (SELECT)
		$q = $this
			->db
			->where('email', $email)
			->where('passwd', $password)
			->limit(1)
			->get('users');
			
			
		if ($q->num_rows() > 0){
			return $q->row();
		}
		return false;		
	}
	
	function logout(){
		session_destroy();
		redirect('admin');
	}

}


?>