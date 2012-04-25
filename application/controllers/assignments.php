<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);
class Assignments extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Assignments_model');
	}

	public function index()
	{
		echo "Reached the index of assignments.<br />";
		//$this->load->view('dashboard_view');
		//$this->load->model('Assignments_model');
		echo 'loaded model<br />';

		$data = $this->Assignments_model->getAllAssignments();
		print_r($data);
		echo '<br /><br />';
		foreach($data as $row){
			echo 'title: ' . $row->title . '<br />';
			echo 'setDate: ' . $row->setDate . '<br />';
			echo 'dueDate: ' . $row->dueDate . '<br />';
			echo 'courseId: ' . $row->courseID . '<br />';
			echo 'maxPoints: ' . $row->maxPoints . '<br />';
			echo 'information: ' . $row->information . '<br />';
		}

	}

	public function create(){
		echo "This would be where you would create an assignment....";
		incorrectvalue=something;
		$this->Assignments_model->createAssignment('The NEW Assignment', '2012-5-3 14:00:00', '1', '333', 'This is a new assignment!');
		echo "...done!";
	}
	
	public function edit(){
		echo "edit assignments here<br /><br />";
		$this->Assignments_model->setTitle('1', 'Altered Assigment Title');
		$this->Assignments_model->setMaxPoints('1', '9999');
		$this->Assignments_model->setDueDate('1', '2013-9-09 12:00:00');
		$this->Assignments_model->setInformation('1', 'The information has changed dude!!!!');
	}

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

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
