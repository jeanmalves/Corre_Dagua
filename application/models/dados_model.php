<?php

	class Dados_model extends Model {


		function Dados_model()
		{
			// Chamar o construtor do Model
			parent::Model();	
		}

		function buscar($bairro)
		{
			 $this->db->where('bairro', $bairro);
			return $this->db->get('soma_alagamentos_bairro'); 
		}

		/**
		*	Método para carregar um array com os dados dos índices de risco.
		**/
		function buscaArrray()
		{
			$dados = array();

			return $dados;
		}
	}