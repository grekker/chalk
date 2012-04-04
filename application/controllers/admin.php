<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		session_start();
	}

	public function index()
	{
	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		
		
		if($this->form_validation->run() !== FALSE){
			//valid login
			$this->load->model('admin_model');
			$res = $this
				->admin_model
				->verify_user(
					$this->input->post('email_address'), 
					$this->input->post('password')
				);
				
			if ($res !== FALSE){
				//person is valid
				$_SESSION['username'] = $this->input->post('email_address');
				redirect('dashboard');
			}	
		}
		
		$this->load->view('login_view');
	}
	
	public function logout(){
		$this->load->model('admin_model');
		$this->admin_model->logout();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */