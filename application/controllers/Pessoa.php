<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . "controllers/Base.php");

class Pessoa extends Base_Controller {
	

	 var $layout = 'layout_peera';
	 
    public function __construct() {
    	parent::__construct();
	}

	public function index(){
		
		//$this->data['data']['logos'] = $logos;
		$this->load->view($this->layout, $this->data );
	}

	// public function mostrarRisco(){

	// 	$post = (!empty($_POST)) ? true : false;

	// 	if($post)
	// 	{

	// 		$name = stripslashes($_POST['name']);
	// 		$email = trim($_POST['email']);
	// 		$subject = stripslashes($_POST['subject']);
	// 		$message = stripslashes($_POST['message']);

	// 		$error = '';

	// 		if(!$error)
	// 		{
				
	// 			$this->data['data']['erro'] = TRUE;

	// 		}
	// 	}
	// }
}
