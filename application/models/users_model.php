<?php

class Users_model extends CI_Model{
	
	function __construct(){
		parent::__construct();
		define('STUDENT_LEVEL', 1);
		define('TEACHER_LEVEL', 2);	
	}

	// Getters //

	function getUser($userID){
		//Returns a result set containing the student
		$query = $this->db->where('userID',$userID)->limit(1)->get('users');
		return $query->row();
	}
	
	function getAllStudents(){
		$query = $this->db->where('userLevelID', STUDENT_LEVEL)->get('users');
		return $query->result();
	}
	
	function getAllTeachers(){
		$query = $this->db->where('lid', TEACHER_LEVEL)->get('users');
		return $query->result();
	}
	
	function getStudentGrades($email = false){
		if (!empty($email)) $this->db->where('email',$email);
		//$query = $this->db->//RESUME HERE
	}

	// Setters //
	
	function setData($email, $data){
		$this->db->where('email',$email)->update('users', $data);
	}

	function setFirstName($email, $fname){
		$data = Array('firstName'=>$fname);
		$this->setData($email, $data);
	}

	function setLastName($email, $lname){
		$data = Array('lastName'=>$lname);
		$this->setData($email, $data);
	}

	function setEmail($email, $newemail){
		$data = Array('email'=>$newemail);
		$this->setData($email,$data);
	}

	function setPassword($email, $pass){
		$data = Array('passwd'=>$pass);
		$this->setData($email,$data);
	}

	// Create //

	function createUser($fname, $lname, $email, $password, $lid){
		$data = Array('firstName'=>$fname, 'lastName'=>$lname, 'email'=>$email, 'passwd'=>$password, 'userLevelID'=>$lid);
		$this->db->insert('users', $data);
	}

	function createStudent($fname, $lname, $email, $password){
		$this->createUser($fname, $lname, $email, $password, STUDENT_LEVEL);	
	}

	function createTeacher($fname, $lname, $email, $password){
		$this->createUser($fname, $lname, $email, TEACHER_LEVEL);	
	}
	
	
	// Delete //
	
	function deleteUser($email){
		$this->db->where('email', $email)->delete('users');
	}
	
	
	
}
?>
