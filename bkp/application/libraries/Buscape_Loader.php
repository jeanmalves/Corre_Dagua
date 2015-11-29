<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH . "libraries/Apiki_Buscape_API.php");

class Buscape_Loader extends Apiki_Buscape_API {

	public function __construct( $config ) {
		$config['applicationId'] = ( isset($config['applicationId']) ) ? $config['applicationId'] : '';
		$config['sourceId'] 	 = ( isset($config['sourceId']) ) ? $config['sourceId'] : '';
		parent::__construct( $config['applicationId'], $config['sourceId'] );
	}
}