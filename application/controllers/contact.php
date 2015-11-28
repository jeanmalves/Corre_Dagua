<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . "controllers/Base.php");

class Product extends Base_Controller {
	

	 var $layout = 'layout_peera';

    public function __construct() {
    	parent::__construct();
    	error_reporting (E_ALL ^ E_NOTICE);
    	configEmail();
	}

	public function index(){
		
		$this->data['data']['logos'] = $logos;
		$this->load->view($this->layout, $this->data );
	}

	public function send(){

		$post = (!empty($_POST)) ? true : false;

		if($post)
		{

			$name = stripslashes($_POST['name']);
			$email = trim($_POST['email']);
			$subject = stripslashes($_POST['subject']);
			$message = stripslashes($_POST['message']);

			$error = '';

			if(!$error)
			{
				$mail = mail(WEBMASTER_EMAIL, $subject, $message,
				     "From: ".$name." <".$email.">\r\n"
				    ."Reply-To: ".$email."\r\n"
				    ."X-Mailer: PHP/" . phpversion()
				);

				if($mail)
				{
					//echo 'OK';
					$this->data['data']['erro'] = TRUE;
				}

			}
		}
	}
}
