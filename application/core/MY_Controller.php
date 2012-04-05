<?php


class MY_Controller extends CI_Controller { 

	public function __construct(){
	    	parent::__construct();
	    	session_start();
			if(!(isset($_SESSION['username']))){ 
				redirect('admin');
	    }
	}
    
}  
?>