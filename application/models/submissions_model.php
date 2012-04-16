<?php

class Submissions_model extends CI_Model{

	// Getters //

	function getAllGrades(){
		$query = $this->db->get('submissions');
	}

	function getStudentGrades($userID){
		$query = $this->db->where('userID', $userID)->get('submissions');
	}
	
	function getAssignmentGrades($assID){
		$query = $this->db->where('assignmentID', $assID)->get('submissions');
	}
	

	// Setters //

	function setGrade($assID, $userID, $grade){
		$data = new Array('assignmentID'=>$assID, 'userID'=>$userID, 'grade'=>$grade);
		$this->db->where('assignmentID',$assID)->where('userID',$userID)->update('submissions', $data);
	}


	// Create //

	function createSubmission($assID, $userID, $dateSubmitted){
		$data = new Array('assignmentID'=>$assID, 'userID'=>$userID, 'grade'=>NULL, 'dateSubmitted'=>$dateSubmitted);
		$this->db->insert('submissions', $data);
	}
	
	// Delete //
	
	function deleteSubmission($assID, $userID){
		$this->db->where('assignmentID',$assID)->where('userID', $userID)->delete('submissions'));
	}

	
}
?>
