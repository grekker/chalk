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
		foreach($data as $row){
			echo 'title: ' . $row->title . '<br />';
			echo 'setDate: ' . $row->setDate . '<br />';
			echo 'dueDate: ' . $row->dueDate . '<br />';
			echo 'courseId: ' . $row->courseID . '<br />';
			echo 'maxPoints: ' . $row->maxPoints . '<br />';
			echo 'information: ' . $row->information . '<br />';
		}	
	}

	public function viewSingleAssignment(){
	
	$data = $this->Assignments_model->getAssignment(1);
			echo 'title: ' . $data->title . '<br />';
			echo 'setDate: ' . $data->setDate . '<br />';
			echo 'dueDate: ' . $data->dueDate . '<br />';
			echo 'courseId: ' . $data->courseID . '<br />';
			echo 'maxPoints: ' . $data->maxPoints . '<br />';
			echo 'information: ' . $data->information . '<br />';
			
	}
	
	// SETTERS //
	
	public function edit(){
		echo "edit assignments here";
	}
	
	// CREATE //

	public function create(){
		$this->Assignments_model->createAssignment('Make a Magento site', '2012-10-12', 1, 100, 'make a site using Magento');
	}
	
	
	// DELETE //
	
	public function delete(){
		$this->Assignments_model->deleteAssignment(5);
	}

	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
