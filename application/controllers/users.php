<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);


class Users extends MY_Controller {

	//public function __construct(){
		//parent::__construct();
	//}

	public function index(){
	
		echo "Reached the index of Users.<br />";
		$this->load->model('Users_model');
		echo 'loaded model<br />';

	
	}

	public function create(){
	
		$this->load->model('Users_model');
		$this->Users_model->createStudent('Anu', 'Uzer', 'auzer@gmail.com', 'Student');
	
	}
	
	public function edit(){
	}

	public function delete(){
	
		$this->load->model('Users_model');
		$this->Users_model->deleteUser('auzer@gmail.com');
	
	}

	public function viewAll() {	
	
		$this->load->model('Users_model');
		$data = $this->Users_model->getAllStudents();
		foreach($data as $row) {
			echo 'First Name: ' . $row->firstName . '<br />';
			echo 'Last Name: ' . $row->lastName . '<br />';
			echo 'Password: ' . $row->passwd . '<br />';
			echo 'Email: ' . $row->email . '<br />';
			echo 'Level: ' . $row->userLevelID . '<br /><br />';
		}
	}

	public function viewSingle(){
	
		$this->load->model('Users_model');
		$row = $this->Users_model->getUser('student@gmail.com');
		echo 'First Name: ' . $row->firstName . '<br />';
		echo 'Last Name: ' . $row->lastName . '<br />';
		echo 'Password: ' . $row->passwd . '<br />';
		echo 'Email: ' . $row->email . '<br />';
		echo 'Level: ' . $row->userLevelID . '<br /><br />';
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
