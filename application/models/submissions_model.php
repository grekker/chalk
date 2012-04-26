<?php

class Submissions_model extends CI_Model{

	// Getters //

	function getAllGrades(){
		$query = $this->db->get('submissions');
		return $query->result();
	}

<<<<<<< HEAD
	function getStudentGrades($email){
		$query = $this->db->where('email', $email)->join('users', 'users.userID = submissions.userID')->get('submissions');
		return $query->row();
=======
	function getStudentGrades($userID){
		$query = $this->db->where('userID', $userID)->get('submissions');
		return $query->result();
>>>>>>> 46255f869e0d47a8b353624987bd4626266fd1de
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
