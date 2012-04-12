<?php

class Assignments_model extends CI_Model{

	function getAssignment(){
		//Returns a result set containing the assignment
		$query = $this->db->where('assignmentID',$assID)->limit(1)->get('users');
	}

	function setAssignment($assID, $data){
		$this->db->where('assignmentID',$assID)->update('assignment', $data);
	}

	function setAssignmentNumber($assID, $assNum){
		$data = new Array('assignmentNumber'=>$assNum);
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


	function createAssignment($assNum, $dateSet, $dateDue, $maxPoints){
		$data = new Array('assignmentNumber'=>$assNum, 'dateSet'=>$dateSet, 'dateDue'=>$dateDue, 'maxPoints'=>$maxPoints);
		$this->db->insert('assignments', $data);
	}

	
}
?>
