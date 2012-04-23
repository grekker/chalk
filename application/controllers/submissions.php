<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);


class Submissions extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		echo "Reached the index of Submissions.<br />";
		$this->load->model('Submissions_model');
		echo 'loaded model<br />';

		$data = $this->Submissions_model->getAllGrades();
		//print_r($data);
		echo '<br /><br />';
		foreach($data as $row){
			echo 'Submission Date: ' . $row->submissionDate . '<br />';
			echo 'Grade: ' . $row->grade . '<br />';
			echo 'Comments: ' . $row->comments . '<br />';
			echo 'Attached File: ' . $row->attachedFiles . '<br />';
			echo 'User ID: ' . $row->userID . '<br />';
			echo 'Assignment ID: ' . $row->assignmentID . '<br /><br />';
		}

	}

	public function create(){
		echo "This would be where you would create an assignment";
	}
	
	public function edit(){
		echo "edit Submissions here";
	}

	public function delete(){
		echo "delete Submissions here";
	}

	public function viewall(){
		echo "view all of the Submissions";
	}

	public function viewsingle(){
		echo "view the details of a single assignment";
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
