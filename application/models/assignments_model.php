<?php

class Assignments_model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	// Getters //
	
	function getAssignment($assID){
		return $this->db->where('assignmentID',$assID)->limit(1)->get('assignments');
	}
	
	function getAllAssignments($courseId = false){
		if (!empty($courseId))
			$this->db->where('cid', $courseId);
		$query = $this->db->get('assignments');
		return $query->result();
	}

	
	// Setters //

	function setData($assID, $data){
		$this->db->where('assignmentID',$assID)->update('assignments', $data);
	}

	function setTitle($assID, $assTitle){
		$data = array('title'=>$assTitle);
		$this->setData($assID, $data);
	}

	function setSetDate($assID, $setDate){
		$data = array('setDate'=>$setDate);
		$this->setData($assID, $data);
	}

	function setDueDate($assID, $dueDate){
		$data = array('dateDue'=>$dueDate);
		$this->setData($assID,$data);
	}

	function setMaxPoints($assID, $maxPoints){
		$data = array('maxPoints'=>$maxPoints);
		$this->setData($assID,$data);
	}

	function setCourseId($assID, $courseId){
		$data = array('cid'=>$courseId);
		$this->setData($assId,$data);
	}
	function setInformation($assID, $information){
		$data = array('information'=>$information);
		$this->setData($assID, $data);
	}


	// Create //

	function createAssignment($assTitle, $dueDate, $courseId, $maxPoints, $information = null){
		//Date set should correspond to time of calling this function
		$data = array('title'=>$assTitle, 'setDate'=>date('Y-m-d H:i:s'), 'dueDate'=>$dueDate, 'courseID'=>$courseId, 'maxPoints'=>$maxPoints, 'information'=>$information);
		$this->db->insert('assignments', $data);
	}
	
	// Delete //
	
	function deleteAssignment($assID){
		$this->db->delete('assignments', array('assignmentID', $assID));
	}

	
}
?>
