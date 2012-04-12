<?php

class Users_model extends CI_Model{
	
	define('STUDENT_LEVEL', 1);
	define('TEACHER_LEVEL', 2);	

	// Getters //

	function getUser($email){
		//Returns a result set containing the student
		$query = $this->db->where('email',$email)->limit(1)->get('users');
	}
	
	function getAllStudents($email){
		$query = $this->db->get('users')->where('lid', STUDENT_LEVEL);
	}
	
	function getAllTeachers($email){
		$query = $this->db->get('users')->where('lid', TEACHER_LEVEL);
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

	function setEmail($email, $newemail){
		$data = new Array('email'=>$newemail);
		$this->setData($email,$data);
	}

	function setPassword($email, $pass){
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
		$this->db->delete('users', array('email', $email));
	}
	
	
	
}
?>
