<?php

class Users_model extends CI_Model{
	
	define('STUDENT_LEVEL', 1);
	define('TEACHER_LEVEL', 2);	

	// Getters //

	function getUser($email){
		//Returns a result set containing the student
		$query = $this->db->where('email',$email)->limit(1)->get('users');
	}

	// Setters //
	
	function setData($email, $data){
		$this->db->where('email',$email)->update('users', $data);
	}

	function setFirstName($email, $fname){
		$data = new Array('Fname'=>$fname);
		$this->setData($email, $data);
	}

	function setLastName($email, $lname){
		$data = new Array('Lname'=>$lname);
		$this->setData($email, $data);
	}

	function setEmail($email){
		$data = new Array('email'=>$email);
		$this->setData($email,$data);
	}

	function setPassword($pass){
		$data = new Array('password'=>$pass);
		$this->setData($email,$data);
	}

	// Create //

	function createUser($fname, $lname, $password, $email, $lid){
		$data = new Array('Fname'=>$fname, 'Lname'=>$lname, 'email'=>$email, 'password'=>$password, 'LID'=>$lid);
		$this->db->insert('users', $data);
	}

	function createStudent($fname, $lname, $email, $password){
		$this->createUser($fname, $lname, $email, STUDENT_LEVEL);	
	}

	function createTeacher($fname, $lname, $email, $password){
		$this->createUser($fname, $lname, $email, TEACHER_LEVEL);	
	}
	
	
	// Delete //
	
	function deleteUser($email){
		$this->db->delete('assignments', array('email', $email));
	}
	
	
	
}
?>
