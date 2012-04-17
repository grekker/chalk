<?php

class Assignments_model extends CI_Model{

	// Getters //

	function getAssignment($assID){
		$query = $this->db->where('assignmentID',$assID)->limit(1)->get('assignments');
	}
	
	function getAllAssignments($courseId = false){
		if (!empty($courseId)) $this->db->where('cid', $courseId)
		$query = $this->db->get('assignments');
	}

	
	// Setters //

	function setAssignment($assID, $data){
		$this->db->where('assignmentID',$assID)->update('assignments', $data);
	}

	function setTitle($assID, $assTitle){
		$data = new Array('title'=>$assTitle);
		$this->setData($assID, $data);
	}

	function setDateSet($assID, $dateSet){
		$data = new Array('dateSet'=>$dateSet);
		$this->setData($assID, $data);
	}

	function setDateDue($assID, $dateDue){
		$data = new Array('dateDue'=>$dateDue);
		$this->setData($assID,$data);
	}

	function setMaxPoints($assID, $maxPoints){
		$data = new Array('maxPoints'=>$maxPoints);
		$this->setData($assID,$data);
	}

	function setCourseId($assID, $courseId){
		$data = new Array('cid'=>$courseId);
		$this->setData($assId,$data);
	}


	// Create //

	function createAssignment($assTitle, $dateDue, $courseId, $maxPoints, $information = null){
		//Date set should correspond to time of calling this function
		$data = new Array('title'=>$assTitle, 'dateSet'=>$dateSet, 'dateDue'=>$dateDue, 'cid'=>$courseId, 'maxPoints'=>$maxPoints, 'information'=>$information);
		$this->db->insert('assignments', $data);
	}
	
	// Delete //
	
	function deleteAssignment($assID){
		$this->db->delete('assignments', array('assignmentID', $assID));
	}

	
}
?>
