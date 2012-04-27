<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/New_York');
error_reporting(E_ALL);
ini_set('display_errors',1);

class Assignments extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Assignments_model');
	}

	public function index()	{
		echo "Reached the index of assignments.<br />";
		echo 'loaded model<br />';

	}
	
	// GETTERS //
	
	public function viewAllAssignments(){
	
		$data = $this->Assignments_model->getAllAssignments();
		$send = array('entry' => $data);
		$this->load->view('view_all_assignments', $send);	
	}
	
	public function viewAssignment(){
		$id = $this->uri->segment(3);
		$row = $this->Assignments_model->getAssignment($id);
		$this->load->view('assignment_details', $row);
	}
	
	// SETTERS //
	
	public function edit(){
		echo "edit assignments here<br /><br />";
		$this->Assignments_model->setTitle('1', 'Altered Assigment Title');
		$this->Assignments_model->setMaxPoints('1', '9999');
		$this->Assignments_model->setDueDate('1', '2013-9-09 12:00:00');
		$this->Assignments_model->setInformation('1', 'The information has changed dude!!!!');
	}
	
	public function editAssignment(){
		$id = $this->uri->segment(3);
		$row = $this->Assignments_model->getAssignment($id);
		$this->load->view('edit_assignment', $row);
	}
	
	public function updateAssignment(){
		$assID = $this->uri->segment(3);
		$this->Assignments_model->setData($assID, $_POST);
		redirect('assignments/viewAllAssignments', 'location');
	}
	
	
	// CREATE //
	
	public function createAssignment(){
		$this->load->view('create_assignment');
	}
	
	public function insertAssignment(){
		$this->Assignments_model->createAssignment($_POST);
		redirect('assignments/viewAllAssignments', 'location');
	}
	
	
	// DELETE //
	
	public function delete(){
		$this->Assignments_model->deleteAssignment(5);
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
