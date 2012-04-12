<?php

class Courses_model extends CI_Model{
	
	//**NOTE: Since cname isn't a unique value, we're going to have to use CID as our reference

	// Getters //

	function getCourse($cid){
		//Returns a result set containing a single course
		$query = $this->db->where('cid',$cid)->limit(1)->get('courses');
	}
	function getAllCourses($cid){
		//Returns a result set containing all available courses
		$query = $this->db->get('courses');
	}

	// Setters //
	
	function setData($cid, $data){
		$this->db->where('cid',$cid)->update('courses', $data);
	}

	function setCourseName($cid, $cname){
		$data = new Array('cname'=>$cname);
		$this->setData($cid, $data);
	}

	function setCourseCode($cid, $ccode){
		$data = new Array('ccode'=>$ccode);
		$this->setData($cid, $data);
	}

	function setStartDate($cid, $startdate){
		//**NOTE: We may want to do some sort of date validation here
		$data = new Array('startdate'=>$startdate);
		$this->setData($cid,$data);
	}

	function setEndDate($cid, $enddate){
		//**NOTE: We may want to do some sort of date validation here
		$data = new Array('enddate'=>$enddate);
		$this->setData($cid,$data);
	}

	// Create //

	function createCourse($cname, $ccode, $startdate, $enddate){
		$data = new Array('cname'=>$cname, 'ccode'=>$ccode, 'startdate'=>$startdate, 'enddate'=>$enddate);
		$this->db->insert('courses', $data);
	}

	
	// Delete //
	
	function deleteCourse($cid){
		$this->db->delete('courses', array('cid', $cid));
	}
	
	
	
}
?>
