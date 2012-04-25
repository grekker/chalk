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
<<<<<<< HEAD
		//$this->load->view('dashboard_view');
		//$this->load->model('Assignments_model');
=======
>>>>>>> 1bac8943001bce251fd6d758d3fb971e9b934749
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

<<<<<<< HEAD
	public function create(){
		echo "This would be where you would create an assignment....";
		incorrectvalue=something;
		$this->Assignments_model->createAssignment('The NEW Assignment', '2012-5-3 14:00:00', '1', '333', 'This is a new assignment!');
		echo "...done!";
=======
	public function viewSingleAssignment(){
	
	$data = $this->Assignments_model->getAssignment(1);
			echo 'title: ' . $data->title . '<br />';
			echo 'setDate: ' . $data->setDate . '<br />';
			echo 'dueDate: ' . $data->dueDate . '<br />';
			echo 'courseId: ' . $data->courseID . '<br />';
			echo 'maxPoints: ' . $data->maxPoints . '<br />';
			echo 'information: ' . $data->information . '<br />';
			
>>>>>>> 1bac8943001bce251fd6d758d3fb971e9b934749
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

<<<<<<< HEAD
	public function delete(){
		echo "delete assignments here";
		$this->Assignments_model->deleteAssignment(1);
	}

	public function viewAll(){
		echo "view all of the assignments";
	}

	public function viewSingle(){
		echo "view the details of a single";
		$data = $this->Assignments_model->getAssignment(2);
		print_r($data);
	}
=======
	public function create(){
		$this->Assignments_model->createAssignment('Make a Magento site', '2012-10-12', 1, 100, 'make a site using Magento');
	}
	
	
	// DELETE //
	
	public function delete(){
		$this->Assignments_model->deleteAssignment(5);
	}

	
>>>>>>> 1bac8943001bce251fd6d758d3fb971e9b934749

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
