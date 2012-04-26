<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
		//foreach($data as $row){
		//	echo 'title: ' . $row->title . '<br />';
		//	echo 'setDate: ' . $row->setDate . '<br />';
		//	echo 'dueDate: ' . $row->dueDate . '<br />';
		//	echo 'courseId: ' . $row->courseID . '<br />';
		//	echo 'maxPoints: ' . $row->maxPoints . '<br />';
		//	echo 'information: ' . $row->information . '<br />';
		//}
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
	
	// CREATE //
	
	public function createAssignment(){
		$this->load->view('create_assignment');
	}
	
	public function insertAssignment(){
		$this->Assignments_model->createAssignment($_POST);
		redirect('assignments/viewAllAssignments', 'location');
	}

	// EDIT //

	public function editAssignment(){
		$id = $this->uri->segment(3);
		$row = $this->Assignments_model->getAssignment($id);
		$this->load->view('edit_assignment', $row);
	}
	
	// DELETE //
	
	public function delete(){
		$this->Assignments_model->deleteAssignment(5);
	}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
