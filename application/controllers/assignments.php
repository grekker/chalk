<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);
class Assignments extends MY_Controller {

	//public function __construct(){
		//parent::MY_Controller();
	//}

	public function index()
	{
		echo "Reached the index of assignments.<br />";
		//$this->load->view('dashboard_view');
		$this->load->model('Assignments_model');
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
		echo "This would be where you would create an assignment";
	}
	
	public function edit(){
		echo "edit assignments here";
	}

	public function delete(){
		echo "delete assignments here";
	}

	public function viewall(){
		echo "view all of the assignments";
	}

	public function viewsingle(){
		echo "view the details of a single assignment";
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
