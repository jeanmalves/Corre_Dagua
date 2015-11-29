<?php
/**
 * Base controller Class to extends in a controller class
 *
 * @copyright  2015 tagbox
 * @version    $Id$
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Base_Controller extends CI_Controller {

    /**
     * The construct of Base_controller
     *
     * Definitions of what is done in this constructor:
     * Set the default timezone configured in the codeigniter
     *
     * Initializate the variable $jsfile and $css_files for use in the views
     *
     * Load the language file
     *
     */
    function __construct() {
    	parent::__construct();
    	$this->data['data'] = array();

        //Set the default timezone configured in the codeigniter
        date_default_timezone_set($this->config->item('default_timezone'));

        //set default for ctrlr_name and class_name
        $class_name = get_class($this);
        
        $this->ctrlr_name = strtolower($class_name);
        $this->class_name = $class_name;

        //Set default for header and ctrl
        //$this->_set_title($class_name);
        $this->data['ctrlr_name'] = $this->ctrlr_name;

        //Verifica se a função que chamou esta função é 'show', se não for chama a view com o nome dela
        //$this->router = & load_class('Router');
        $class = $this->router->fetch_class();
        $action = $this->router->fetch_method();
        $this->action = $action;
        $this->data['data']['action'] = $this->action;

        $this->uriaction = $this->uri->segment(1);
        $this->data['data']['uriaction'] = $this->uriaction;

        $this->data['data']['site_name'] = "Corre D'água";

        $this->data['content'] = $this->ctrlr_name . '/' . $this->action . '_view';
        $this->data['data']['pagination'] = (!empty($this->data['data']['pagination'])) ? $this->data['data']['pagination'] : '';
        
        $this->data['data']['site_name'] = (!empty($this->data['data']['site_name'])) ? $this->data['data']['site_name'] : '';
        $this->data['data']['site_title'] = (!empty($this->data['data']['site_title'])) ? $this->data['data']['site_title'] : '';

		if (!isAjax()) {
            //$this->output->enable_profiler(true);
        } else {
            $this->output->set_content_type('application/json');
        }

    }
}