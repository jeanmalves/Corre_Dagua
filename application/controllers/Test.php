<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . "controllers/Base.php");

class Test extends Base_Controller {
	

    public function __construct() {
    	parent::__construct();
    	error_reporting(-1);
		ini_set('display_errors', 'On');

		$this->load->library('Buscape_Loader', array('applicationId' => '757347736264524b6936303d'), 'buscape' );
	}

	public function index(){
		echo 'aturalizado';
		$this->buscape->setSandbox();
		$this->buscape->setFormat('json');
		$res = $this->buscape->findProductList( array( 'keyword' => 'camisa' ), false );
		
		$res = json_decode($res);

		debug($res, 'findProductList');
	}

}