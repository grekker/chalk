<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);


class Users extends MY_Controller {

	//public function __construct(){
		//parent::MY_Controller();
	//}

	public function index()
	{
		echo "Reached the index of Users.<br />";
		$this->load->model('Users_model');
		echo 'loaded model<br />';

		$data = $this->Users_model->getAllStudents();
		//print_r($data);
		echo '<br /><br />';
		foreach($data as $row){
			echo 'First Name: ' . $row->firstName . '<br />';
			echo 'Last Name: ' . $row->lastName . '<br />';
			echo 'Password: ' . $row->passwd . '<br />';
			echo 'Email: ' . $row->email . '<br />';
			echo 'Level: ' . $row->userLevelID . '<br /><br />';
		}

	}

	public function create(){
		echo "This would be where you would create an assignment";
	}
	
	public function edit(){
		echo "edit Users here";
	}

	public function delete(){
		echo "delete Users here";
	}

	public function viewall(){
		echo "view all of the Users";
	}

	public function viewsingle(){
		echo "view the details of a single assignment";
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
