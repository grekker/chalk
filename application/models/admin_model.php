<?php 


class Admin_model extends CI_Model {

	
	function verify_user($email, $password){
	//reads: use db library, set where clause for email and pass, limit to 1 item, get (SELECT).
		$q = $this
			->db
			->where('email', $email)
			->where('passwd', $password)
			->limit(1)
			->get('users');
			
		
		//if there is a user, return the row. No need to foreach with q->result.
		if ($q->num_rows() > 0){
			return $q->row();
		}
		return false;		
	}
	
	function login($email){
	//creates session var used for durarion of login, sends user to dashboard controller.
		$_SESSION['username'] = $email;
		redirect('dashboard');
	}
	
	function logout(){
	//blows up session, ending the user's login. Shows login page.
		session_destroy();
		redirect('admin');
	}

}


?>