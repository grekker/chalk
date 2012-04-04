<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

	class Auth {
	
	    public function __construct(){
	    	session_start();
			if(!(isset($_SESSION['username']))){
				redirect('admin');
	    	
	    }
	}
}
