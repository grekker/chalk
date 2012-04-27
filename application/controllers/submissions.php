<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);
date_default_timezone_set('America/New_York');


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
		$id = $this->uri->segment(3);
		$data = $this->Submissions_model->getStudentGrades($id);
		$asssub = $this->Submissions_model->getStudentSubmissions($id);
		$grade = $this->Submissions_model->calculateStudentGrade($asssub);
		$send = array('entry' => $data, 'grade' => $grade);
		$this->load->view('view_student_grades', $send);
		/*echo 'First Name: ' . $row->firstName . '<br />';
		echo 'Last Name: ' . $row->lastName . '<br />';
		echo 'Password: ' . $row->passwd . '<br />';
		echo 'Email: ' . $row->email . '<br />';
		echo 'Level: ' . $row->userLevelID . '<br /><br />';*/
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
		$this->load->library('form_validation');
		$this->form_validation->set_rules('description', 'Description', '');//currently no rules
		$this->form_validation->set_rules('userfile', 'userfile', '');
		$this->form_validation->set_rules('assid', 'assid', 'required');
		if ($this->form_validation->run() !== FALSE){
			//everything's valid, go for it
			
			//conditionally upload file
			$myfile = $this->input->post('userfile');
			$config = array(
			'upload_path' => APPPATH . 'uploads/',
			'allowed_types' => 'gif|jpg|png|doc|docx|pdf|txt|rtf',
			'max_size' => '1000',
			'max_width' => '3000',
			'max_height' => '3000',
			);
			$this->load->library('upload', $config);
			$uploadedfile = '';
			if (!$this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
				echo 'Somethin broke.<br />';
				print_r($error);			
				//$this->load->view('submit_assignment', $error);
			}
			else{
				$uploadedfile = array('upload_data' => $this->upload->data());
				echo 'Peachy Keen!<br />';
				print_r($uploadedfile);	
				//$this->load->view('view_all_assignments');
			}
		echo 'cool<hr/>';
			print_r($this->input->post());
			echo 'ok...<hr/>';
			$this->Submissions_model->createSubmission($this->input->post('assid'), $_SESSION['userID'], $uploadedfile);
			echo 'done';
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
