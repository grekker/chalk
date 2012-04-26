<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);


class Submissions extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Submissions_model');

	}

	public function index()	{
		echo "Reached the index of Submissions.<br />";
		echo 'loaded model<br />';
	}
	
	// GETS //


	public function viewAllGrades(){

		$data = $this->Submissions_model->getAllGrades();
	
	}
	
	public function viewAssignmentGrades(){
	
		$data = $this->Submissions_model->getAssignmentGrades(2);
		foreach($data as $row){
			echo 'Submission Date: ' . $row->submissionDate . '<br />';
			echo 'Grade: ' . $row->grade . '<br />';
			echo 'Comments: ' . $row->comments . '<br />';
			echo 'Attached File: ' . $row->attachedFiles . '<br />';
			echo 'User ID: ' . $row->userID . '<br />';
			echo 'Assignment ID: ' . $row->assignmentID . '<br /><br />';
		}
	}

	public function viewStudentGrades(){
		$row = $this->Submissions_model->getStudentGrades('student@gmail.com');
		echo 'First Name: ' . $row->firstName . '<br />';
		echo 'Last Name: ' . $row->lastName . '<br />';
		echo 'Password: ' . $row->passwd . '<br />';
		echo 'Email: ' . $row->email . '<br />';
		echo 'Level: ' . $row->userLevelID . '<br /><br />';
	}
	
	// SETS //
	
	public function edit(){
	
		$this->Submissions_model->setFirstName('auzer@gmail.com', 'Anold');
	
	}
	
	// CREATE //
	
	public function create(){
	
		$this->Submissions_model->createStudent('Anu', 'Uzer', 'auzer@gmail.com', 'Student');
	
	}
	
	// DELETE //
	
	public function delete(){
	
		$this->Submissions_model->deleteSubmission('auzer@gmail.com');
	
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
