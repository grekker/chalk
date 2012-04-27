<?php

class Submissions_model extends CI_Model{

	// Getters //

	function getAllGrades(){
		$query = $this->db->get('submissions');
		return $query->result();
	}

	function getStudentGrades($userID){
		$query = $this->db->where('userID', $userID)->join('assignments', 'submissions.assignmentID = assignments.assignmentID')->get('submissions');
		return $query->row();
	}	

	
	function getAssignmentGrades($assID){
		$query = $this->db->where('assignmentID', $assID)->join('users', 'users.userID = submissions.userID')->get('submissions');
		return $query->result();
	}

	function getSingleSubmission($submissionID){
		$query = $this->db->where('submissionID', $submissionID)->get('submissions');
		return $query->result();
	}

	function getStudentSubmissions($userID) {
		$query = $this->db->where('userID', $userID)->join('submissions', 'submissions.assignmentID = assignments.assignmentID', 'right')->get('assignments');
		return $query->result();
	}

	function calculateStudentGrade($grade) {
		$max = "";
		$user = "";
		foreach ($grade as $g) {
			$max += $g->maxPoints;
			$user += $g->grade;
		}
		$user_grade = $user / $max;
		$user_grade *= 100;
		$user_grade = ceil($user_grade);
		return $user_grade;
	}
	

	// Setters //

	function setGrade($assID, $userID, $grade){
		$data = Array('assignmentID'=>$assID, 'userID'=>$userID, 'grade'=>$grade);
		$this->db->where('assignmentID',$assID)->where('userID',$userID)->update('submissions', $data);
	}
	
	function updateGrade($submissionID, $data){
		$this->db->where('submissionID',$submissionID)->update('submissions', $data);
	}


	// Create //

	function createSubmission($assID, $userID, $attachedFiles = NULL){
		$this->load->helper('date');
		$data = Array('assignmentID'=>$assID, 'userID'=>$userID, 'grade'=>NULL, 'submissionDate'=>date('Y-m-d h:i:s'), 'attachedFiles'=>serialize($attachedFiles));
		$this->db->insert('submissions', $data);
	}
	
	// Delete //
	
	function deleteSubmission($assID, $userID){
		$this->db->where('assignmentID',$assID)->where('userID', $userID)->delete('submissions');
	}

}
?>
