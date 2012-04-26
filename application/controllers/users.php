<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

error_reporting(E_ALL);
ini_set('display_errors',1);


class Users extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Users_model');
	}

	public function index(){
	
		echo "Reached the index of Users.<br />";
		echo 'loaded model<br />';

	
	}

	public function create(){
	
		$this->Users_model->createStudent('Anu', 'Uzer', 'auzer@gmail.com', 'Student');
	
	}
	
	public function edit(){
	
		$this->Users_model->setFirstName('auzer@gmail.com', 'Anold');
		$this->Users_model->setLastName('auzer@gmail.com', 'One');
		$this->Users_model->setPassword('auzer@gmail.com', 'student');
		$this->Users_model->setEmail('auzer@gmail.com', 'aone@gmail.com');

	
	}

	public function delete(){
	
		$this->Users_model->deleteUser('auzer@gmail.com');
	
	}

	public function viewAll() {	
	
		$data = $this->Users_model->getAllStudents();
		//foreach($data as $row) {
		//	echo 'First Name: ' . $row->firstName . '<br />';
		//	echo 'Last Name: ' . $row->lastName . '<br />';
		//	echo 'Password: ' . $row->passwd . '<br />';
		//	echo 'Email: ' . $row->email . '<br />';
		//	echo 'Level: ' . $row->userLevelID . '<br /><br />';
		//}
		
		$send = array('entry' => $data);
		
		$this->load->view('view_all_students', $send);
		
	}

	public function viewSingle(){
	
		$row = $this->Users_model->getUser('student@gmail.com');
		//echo 'First Name: ' . $row->firstName . '<br />';
		//echo 'Last Name: ' . $row->lastName . '<br />';
		//echo 'Password: ' . $row->passwd . '<br />';
		//echo 'Email: ' . $row->email . '<br />';
		//echo 'Level: ' . $row->userLevelID . '<br /><br />';
		
		
		
		$this->load->view('view_single_student', $row);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
