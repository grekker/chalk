<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);


class Users extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->model('Assignments_model');
		$this->load->model('Submissions_model');
	}

	public function index(){
	
		echo "Reached the index of Users.<br />";
		echo 'loaded model<br />';

	
	}
	
	// GET //

	public function viewAll() {	
	
		if($_SESSION['userLevelID']==1){
			redirect('users/viewSingle/'.$_SESSION['userID'], 'location');
		}
	
		$data = $this->Users_model->getAllStudents();
		
		$send = array('entry' => $data);
		
		$this->load->view('view_all_students', $send);
		
	}

	public function viewSingle(){
	
		$id = $this->uri->segment(3);
	
		$student = $this->Users_model->getUser($id);
		$assignment = $this->Assignments_model->getAllAssignments();
		$submissions = $this->Submissions_model->getStudentGrades($id);
		$asssub = $this->Submissions_model->getStudentSubmissions($id);
		$grade = $this->Submissions_model->calculateStudentGrade($asssub);
		
		$send = array('student' => $student, 'assignmentArray' => $assignment, 'submissionsArray' => $submissions, 'ass' => $asssub, 'grade' => $grade);
		
		$this->load->view('view_single_student', $send);
	}
	
	// CREATE //

	public function addStudent() {
		$this->load->view('add_student');
	}
	
	public function insertStudent() {
		$this->Users_model->createUser($_POST);
		redirect('users/viewAll', 'location');
	}
	
	// SET //

	public function editStudent() {
		$id = $this->uri->segment(3);
		$row = $this->Users_model->getUser($id);
		$this->load->view('edit_student', $row);
	}
	
	public function updateStudent() {
	
		$userID = $this->uri->segment(3);
		$this->Users_model->setData($userID, $_POST);
		redirect('users/viewAll', 'location');
	
	}
	
	// DELETE //

	public function deleteStudent() {
		$id = $this->uri->segment(3);
		$row = $this->Users_model->getUser($id);
		$this->load->view('delete_student', $row);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
