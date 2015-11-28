<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . "controllers/Base.php");

class Product extends Base_Controller {
	

	 var $layout = 'layout_peera';

    public function __construct() {
    	parent::__construct();
		$this->load->library('zanox/apiclient');
		$this->data['data']['site_title'] = 'O Shopping de Moda Online';

    	$this->data['data']['menu']['mulheres']['mulheres/calcinha-sutia'] = 'Moda Íntima';
    	$this->data['data']['menu']['mulheres']['mulheres/'.urlencode('calças-femininas')]   = 'Calças';
    	$this->data['data']['menu']['mulheres']['mulheres/'.urlencode('camisas-femininas')]  = 'Camisas';
    	$this->data['data']['menu']['mulheres']['mulheres/'.urlencode('jaquetas-femininas')] = 'Jaquetas';
    	$this->data['data']['menu']['mulheres']['mulheres/'.urlencode('vestidos')] 			 = 'Vestidos';
    	$this->data['data']['menu']['mulheres']['mulheres/'.urlencode('saias')]				 = 'Saias';
    	$this->data['data']['menu']['mulheres']['mulheres/'.urlencode('shorts-feminino')] 	 = 'Shorts';

    	$this->data['data']['menu']['homens']['homens/bermuda-masculina'] = 'Bermudas';
    	$this->data['data']['menu']['homens']['homens/'.urlencode('calça-masculina')] = 'Calças';
    	$this->data['data']['menu']['homens']['homens/camisetas-masculinas'] = 'Camisetas';
    	$this->data['data']['menu']['homens']['homens/camisa-masculina'] = 'Camisas';
    	$this->data['data']['menu']['homens']['homens/jaqueta-masculina'] = 'Jaquetas';
    	
    	$this->data['data']['menu']['calcados']['feminino']['calcados/'.urlencode('tênis-feminino')]     = 'Tênis';
    	$this->data['data']['menu']['calcados']['feminino']['calcados/'.urlencode('bota-feminina')]     = 'Botas';
    	$this->data['data']['menu']['calcados']['feminino']['calcados/'.urlencode('rasteiras-feminino')]     = 'Rasteiras';
    	$this->data['data']['menu']['calcados']['feminino']['calcados/'.urlencode('sapatilha-feminina')]     = 'Sapatilhas';
  
    	
    	$this->data['data']['menu']['calcados']['masculino']['calcados/'.urlencode('botas-masculino')] = 'Botas';
    	$this->data['data']['menu']['calcados']['masculino']['calcados/'.urlencode('sapatênis-masculino')] = 'Sapatênis';
    	$this->data['data']['menu']['calcados']['masculino']['calcados/'.urlencode('tênis-masculino')] = 'Tênis';
    	$this->data['data']['menu']['calcados']['masculino']['calcados/'.urlencode('chuteiras')] = 'Chuteiras';
    	
    	$this->data['data']['menu']['acessorios']['acessorios/'.urlencode('bolsa')] = 'Bolsas';
    	$this->data['data']['menu']['acessorios']['acessorios/'.urlencode('cachecol-e-lenços')] = 'Cachecol e Lenços';
    	$this->data['data']['menu']['acessorios']['acessorios/'.urlencode('cinto')] = 'Cinto';
    	$this->data['data']['menu']['acessorios']['acessorios/'.urlencode('colares')] = 'Colares';
    	$this->data['data']['menu']['acessorios']['acessorios/'.urlencode('pulseiras')] = 'Pulseiras';
    	$this->data['data']['menu']['acessorios']['acessorios/'.urlencode('anéis')] = 'Anéis';
    	$this->data['data']['menu']['acessorios']['acessorios/'.urlencode('brincos')] = 'Brincos';
    	$this->data['data']['menu']['acessorios']['acessorios/'.urlencode('óculos-de-sol')] = 'Óculos de Sol';
    	$this->data['data']['menu']['acessorios']['acessorios/'.urlencode('relógios')] = 'Relógios';

    	// $this->data['data']['menu']['shop']['shop/jeans-feminino'] = 'Jeans feminino';
    	// $this->data['data']['menu']['shop']['shop/top-esporte-feminino'] = 'Top Esporte Femininos';
    	// $this->data['data']['menu']['shop']['shop/'.urlencode('tênis-feminino')] = 'Tênis Femininos';
    	// $this->data['data']['menu']['shop']['shop/'.urlencode('acessórios-femininos')] = 'Acessórios Femininos';

    	// $this->data['data']['menu']['off']['off/acessorios-feminino'] = 'Acessórios Femininos';

    	$this->data['data']['filters']['q'] = '';

		$colors[1] = 'Verde';
		$colors[2] = 'Azul';
		$colors[3] = 'Laranja';
		$colors[4] = 'Vermelho';
		$colors[5] = 'Cinza';
		$colors[6] = 'Roxo';
		$colors[7] = 'Rosa';
		$this->colors = $colors;
	}

	public function index(){
		$this->output->cache(5);
		foreach (glob(ROOTPATH.'/assets/images/marca-*.png') as $l) {
			$logos[] = 'assets/images/' . basename($l);
		}
		$this->data['data']['logos'] = $logos;


		
		$this->load->view($this->layout, $this->data );
	}

	public function eu_quero($zupId = NULL){
		$this->load->model('zanox_model');
		$this->load->model('product_model');

		$redirect_link = $this->product_model->get_product_link($zupId);
		redirect($redirect_link);
	}
	
	public function auto_complete($str_q = NULL ){

		$this->load->model('zanox_model');
		$this->load->model('product_model');
		$arr = $this->product_model->get_auto_complete_terms($str_q);

		if (!isAjax()) {
			show_404();
		}
		echo json_encode($arr, true);
	}

	public function search_lojas($programId = NULL, $programName = NULL){
		$this->action = 'search';
		$this->data['content'] = $this->ctrlr_name . '/' . $this->action . '_view';
		$_POST['programId'] = array($programId);
		$_POST['programName'] = $programName;
		$this->search();
	}

	public function pre_search(){
		redirect('buscar/q/'.urlencode($this->input->post('q') ));
	}

	public function search($q = NULL){
		//$this->output->cache(5);
		$this->load->model('zanox_model');
		$this->load->model('product_model');

		// Define valores padroes dos filtros
		// $defaults_filters['minPrice'] = NULL;
		// $defaults_filters['maxPrice'] = NULL;
		// $defaults_filters['color'] = '';
		// $defaults_filters['programId'] = '';
		// $defaults_filters['page'] = 0;
		// $defaults_filters['q'] = '';
		$args = array();
		
		// Junta Inputs de POST + URL + DEFAULT
		$post_filters = $this->input->post();
		
		// Quando o primeiro segmento for == 'buscar' o array comeca em 1
		// http://www.tagbox.com.br/homens/bermuda-masculina
		// http://www.tagbox.com.br/buscar/q/bermuda-masculina
		if( $this->uri->segment(1) == 'buscar') {
			$salto = 2;
		}else{
			$salto = 1;
		}

		$url_filters = $this->uri->uri_to_assoc($salto, array('minPrice', 'maxPrice', 'color', 'programId', 'page' => 0, 'q') );
		$filters = array_merge($url_filters, $post_filters);
		
		// trata array de lojas
		if (isset($filters['programId']) && !empty($filters['programId'])) {
			$filters['programId'] = implode(',', $filters['programId']);
		}
		
		// BLL - filtro de preco padrao
		if( empty($filters['maxPrice']) ) {
			$filters['maxPrice'] = 300;
		}

		if( ! isset($filters['page']) ){
			$filters['page'] = 0;
		}
		$arr_busca = array_filter(array_merge($filters, array('page' => $filters['page']+1)  ) );
		$string_busca = assoc_to_uri($arr_busca);

		$next_page = $this->uri->assoc_to_uri( $string_busca );
		$next_page = site_url(urldecode($next_page));
		$this->data['data']['next_page']  = $next_page;

		$filters['q'] = ( empty($filters['q']) ) ? $q : $filters['q'];
		$filters['q'] = urldecode($filters['q']);
		$filters['q'] = str_replace('-', ' ', $filters['q']);
		$this->data['data']['filters']  = $filters;
		
		// Seta o titulo da pagina
		if( isset($filters['programName']) ){
			$this->data['data']['site_title'] = urldecode($filters['programName']);
		}elseif( isset( $filters['brand']) ){
			$this->data['data']['site_title'] = 'Marca: '.urldecode($filters['brand']);
			// Filtro uma unica Marca
			//$filters['q'] = $filters['q'] . ' ' . $filters['brand'];
			$filters['brands'][] = url_title($filters['brand']);
		}elseif( in_array($this->uriaction, array('mulheres', 'homens', 'calcados', 'acessorios') ) ){
			$this->data['data']['site_title'] = ucfirst($filters['q']);
		}else{
			$this->data['data']['site_title'] = 'Busca por: "' . $filters['q'] . '"';
		}


		// Filtro de Cores
		if( ! empty($filters['color']) ){
			$filters['q'] = $filters['q'] . ' ' . $this->colors[$filters['color']];
		}
		// Filtro de Marcas
		if( isset($filters['brands']) ){
			// TODO Coloca as marcas na busca, solucao provisoria para filtrar por marcas
			$filters['q'] = $filters['q'] . ' ' . implode(' ', $filters['brands']);
		}

		// Argumentos de paginas
		if( $filters['page']) {
			$args['page'] = $filters['page'];
		}
		
		$products = $this->product_model->get_products($filters, $args);
		$this->data['data']['products'] = $products;
		// if( isAjax() AND !$products ) {
		// 	echo 'end';
		// 	exit;
		// }

		// Monta menu de filtros
		$this->data['data']['menu_filters']['brands'] = $this->product_model->get_products_brands($products);
		$this->data['data']['menu_filters']['colors'] = $this->colors;
		$this->data['data']['menu_filters']['lojas'] = $this->product_model->get_lojas();
		$this->data['data']['totals'] = $this->product_model->get_total();

		$this->load->view($this->layout, $this->data );

	}

	public function page($surl = NULL) {
		$this->output->cache(5);
		$this->data['content'] = 'pages/' . $surl . '_view';

		if ( ! file_exists( APPPATH . 'views/' . $this->data['content'] . '.php') ){
			show_404();
		}
		$this->load->view($this->layout, $this->data );
	}

	public function lojas(){
		$this->output->cache(5);
		$this->load->model('product_model');
    	
		$this->data['data']['lojas'] = $this->product_model->get_lojas();
		$this->load->view($this->layout, $this->data );
	}

    function newsletter() {
        if (empty($_POST) ) {
        	show_404();
            exit;
        }
        $this->load->library('MCAPI');
		$this->data['data']['erro'] = TRUE;

        $retval = $this->mcapi->lists();

        if ( empty($this->mcapi->errorCode) ) {

            if ($retval['total'] > 0) {

                // Inscreve o e-mail na ultima lista criada
                $listID = $retval['data'][0]['id'];
                $emailAddress = $this->input->post('email_newsletter');
                $retval = $this->mcapi->listSubscribe($listID, $emailAddress);

                if ( empty($this->mcapi->errorCode) ) {
        			$this->data['data']['erro'] = FALSE;
                }

            }

        }

		$this->load->view($this->layout, $this->data );
    }
}
