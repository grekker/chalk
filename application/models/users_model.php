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
	
	function getStudentGrades($userID = false){
		if (!empty($userID)) $this->db->where('userID',$userID);
		//$query = $this->db->//RESUME HERE
	}

	// Setters //
	
	function setData($userID, $data){
		$this->db->where('userID',$userID)->update('users', $data);
	}

	function setFirstName($userID, $fname){
		$data = Array('firstName'=>$fname);
		$this->setData($userID, $data);
	}

	function setLastName($email, $lname){
		$data = Array('lastName'=>$lname);
		$this->setData($userID, $data);
	}

	function setEmail($email, $newemail){
		$data = Array('email'=>$newemail);
		$this->setData($userID,$data);
	}

	function setPassword($email, $pass){
		$data = Array('passwd'=>$pass);
		$this->setData($userID,$data);
	}

	// Create //

	function createUser($data){
		//$data = Array('firstName'=>$fname, 'lastName'=>$lname, 'passwd'=>$password, 'email'=>$email, 'userLevelID'=>$lid);
		$this->db->insert('users', $data);
	}

	function createStudent($fname, $lname, $password,  $email){
		$this->createUser($fname, $lname, $password, $email, STUDENT_LEVEL);	
	}

	function createTeacher($fname, $lname, $password, $email){
		$this->createUser($fname, $lname, $password, $email, TEACHER_LEVEL);	
	}
	
	
	// Delete //
	
	function deleteUser($userID){
		$this->db->where('userID', $userID)->delete('users');
	}
	
	
	
}
?>
