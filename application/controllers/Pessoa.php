<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pessoa extends CI_Controller {
	
	 
   	public function index(){
		
		$data['site_name'] = "Corre D'água";
		$data['site_title'] = "Corre D'água - Consultar Área de Risco";
		$data['site_page'] = "index";
		 $this->load->view('template/header', $data);
		 $this->load->view('pessoa/index', $data);
		 $this->load->view('template/footer', $data);
	}

	public function mostrarRisco(){

		$post = (!empty($_POST)) ? true : false;

		if($post)
		{
			$bairro = stripslashes($_POST['strDados']);
			
			if (!empty($bairro)) {
				
				//Carrega o banco de dados
				$this->load->database();
				$this->load->model('dados_model');
				
				//Não usado devido ao problema com extensao com o postgreSQL
				//$query = $this->dados_model->buscar($bairro);

				$query = $this->dados_model->buscaArrray();

				$data['dados'] = $query;
				
			}
			$error = '';

			if(!$error)
			{
				
				$data['erro'] = TRUE;

			}
		}
	}

	public function inserirDadosUsuario()
	{
		$data['site_name'] = "Corre D'água";
		$data['site_title'] = "Corre D'água - Alerte-me";
		$data['site_page'] = "inserirDadosUsuario";

		if(isset($_POST)){
			$this->load->view('template/header', $data);
			$this->load->view('pessoa/inserirDadosUsuario', $data);
			$this->load->view('template/footer', $data);
		}	 

	}
}
