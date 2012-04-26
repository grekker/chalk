<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);


class Submissions extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Submissions_model');

	}

	public function index()
	{
		echo "Reached the index of Submissions.<br />";
		echo 'loaded model<br />';
	}

	
	// GETTERS //
	
	public function viewAllGrades(){
	
		$data = $this->Submissions_model->getAllGrades();
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
	
		$data = $this->Submissions_model->getStudentGrades('student@gmail.com');
		
			echo 'Submission Date: ' . $data->submissionDate . '<br />';
			echo 'Grade: ' . $data->grade . '<br />';
			echo 'Comments: ' . $data->comments . '<br />';
			echo 'Attached File: ' . $data->attachedFiles . '<br />';
			echo 'User ID: ' . $data->userID . '<br />';
			echo 'Assignment ID: ' . $data->assignmentID . '<br /><br />';
	
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
	
	// SETTERS //
	
	public function edit(){
		$this->Submissions_model->setFirstName('auzer@gmail.com', 'Anold');
	}
	
	// CREATE //
	
	public function create(){
		$this->Submissions_model->createSubmission('Anu', 'Uzer', 'auzer@gmail.com', 'Student');	
	}
	
	// DELETE //

	public function delete(){
		$this->Submissions_model->deleteSubmission('auzer@gmail.com', 'Final Project');
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
