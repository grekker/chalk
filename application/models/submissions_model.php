<?php

class Submissions_model extends CI_Model{

	// Getters //

	function getAllGrades(){
		$query = $this->db->get('submissions');
		return $query->result();
	}

	function getStudentGrades($email){
		$query = $this->db->where('email', $email)->join('users', 'users.userID = submissions.userID')->get('submissions');
		return $query->row();
	}
	
	function getAssignmentGrades($assID){
		$query = $this->db->where('assignmentID', $assID)->get('submissions');
		return $query->result();
	}
	

	// Setters //

	function setGrade($assID, $email, $grade){
		$data = Array('assignmentID'=>$assID, 'email'=>$email, 'grade'=>$grade);
		$this->db->where('assignmentID',$assID)->where('userID',$userID)->update('submissions', $data);
	}


	// Create //

	function createSubmission($assID, $email, $dateSubmitted){
		$data = Array('assignmentID'=>$assID, 'email'=>$email, 'grade'=>NULL, 'dateSubmitted'=>$dateSubmitted);
		$this->db->insert('submissions', $data);
	}
	
	// Delete //
	
	function deleteSubmission($assID, $email){
		$this->db->where('assignmentID',$assID)->where('email', $email)->delete('submissions');
	}

	
}
?>
