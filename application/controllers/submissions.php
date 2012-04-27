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
		foreach($data as $row){
			echo 'Submission Date: ' . $row->submissionDate . '<br />';
			echo 'Grade: ' . $row->grade . '<br />';
			echo 'Comments: ' . $row->comments . '<br />';
			echo 'Attached File: ' . $row->attachedFiles . '<br />';
			echo 'User ID: ' . $row->userID . '<br />';
			echo 'Assignment ID: ' . $row->assignmentID . '<br /><br />';
		}
	}
	
	public function viewAssignmentGrades(){
		$id = $this->uri->segment(3);
		$data = $this->Submissions_model->getAssignmentGrades($id);
	
		$send = array('entry' => $data);
	
		$this->load->view('assignment_grades', $send);
	}

	public function viewStudentGrades(){
		$row = $this->Submissions_model->getStudentGrades('student@gmail.com');
		echo 'First Name: ' . $row->firstName . '<br />';
		echo 'Last Name: ' . $row->lastName . '<br />';
		echo 'Password: ' . $row->passwd . '<br />';
		echo 'Email: ' . $row->email . '<br />';
		echo 'Level: ' . $row->userLevelID . '<br /><br />';
	}
	
	
	public function viewAllSubmissions() {
		$id = $this->uri->segment(3);

		$this->load->view('view_all_submissions');
	}
	
	// SETS //
	
	public function setGrade(){
		$this->Submissions_model->setGrade(1, 1, '98');
	}
	
	public function gradeAssignment() {
		$id = $this->uri->segment(3);
		$row = $this->Submissions_model->getSingleSubmission($id);
		$this->load->view('grade_assignment', $row);
	}
	
	function updateGrade(){
		$submissionID = $this->uri->segment(3);
		$this->Submissions_model->updateGrade($submissionID, $_POST);
		redirect('submissions/viewAssignmentGrades/'.$submissionID, 'location');
	}
	
	// CREATE //
	
	//Processes the actual submission
	public function insertSubmission(){
		//$this->Submissions_model->createSubmission(1, 1, '2012-07-12');
		$config = array(
		'upload_path' => APPPATH . 'uploads/',
		'allowed_types' => 'gif|jpg|png|doc|docx|pdf|txt|rtf',
		'max_size' => '1000',
		'max_width' => '3000',
		'max_height' => '3000',
		);
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			echo 'Shits fucked up.<br />';
			print_r($error);			
//$this->load->view('submit_assignment', $error);
		}
		else{
			$data = array('upload_data' => $this->upload->data());
echo 'Peachy Keen!';			
//$this->load->view('view_all_assignments');
		}
	}

	//Loads the submission form for the user to fill out	
	public function submitAssignment() {
		$submissionID = $this->uri->segment(3);
		$this->load->model('Assignments_model');
		$data = $this->Assignments_model->getAssignment($submissionID);
		$this->load->view('submit_assignment', $data);
	}

	
	// DELETE //
	
	public function delete(){
		$this->Submissions_model->deleteSubmission(1, 1);
	
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
