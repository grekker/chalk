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

	function setGrade($assID, $userID, $grade){
		$data = Array('assignmentID'=>$assID, 'userID'=>$userID, 'grade'=>$grade);
		$this->db->where('assignmentID',$assID)->where('userID',$userID)->update('submissions', $data);
	}


	// Create //

	function createSubmission($assID, $userID, $dateSubmitted){
		$data = Array('assignmentID'=>$assID, 'userID'=>$userID, 'grade'=>NULL, 'dateSubmitted'=>$dateSubmitted);
		$this->db->insert('submissions', $data);
	}
	
	// Delete //
	
	function deleteSubmission($assID, $userID){
		$this->db->where('assignmentID',$assID)->where('userID', $userID)->delete('submissions');
	}


}
?>
