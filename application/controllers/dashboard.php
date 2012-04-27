<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	//public function __construct(){
		//parent::MY_Controller();
	//}

	public function index()
	{
		$this->load->model('Assignments_model');
		$data = $this->Assignments_model->getAllAssignments();
		$send = array('entry' => $data);
		$this->load->view('dashboard_view', $send);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */