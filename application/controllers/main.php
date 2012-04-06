<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://chalk-cms.org/main
	 *	- or -  
	 * 		http://chalk-cms.org/main/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://chalk-cms.org/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /main/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('main');
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */