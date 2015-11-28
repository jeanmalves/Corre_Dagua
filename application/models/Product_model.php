<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH . "models/Zanox_model.php");

Class Product_model extends Zanox_model {

    var $total = 0;

    function __construct($id = NULL) {
        parent::__construct($id);
        //$this->load->helper('favicon');
    }

    public function get_auto_complete_terms($str_q = '') {
        $filters['q'] =  $str_q;
        $args = array();
        //$args['page'] = 5

        $products = $this->get_products($filters, $args);

        $arr = array();
        foreach( $products as $p){
            // if(substr($p->name, 0, strlen($str_q) ) == $str_q ){
            // }
                $arr[] = $p->name;
        }
        $arr = array_unique($arr);

        return $arr;
    }

    public function get_total() {
        return number_format( $this->total, 0, ',', '.');
    }

    public function get_products($filters = array(), $args = array() ) {
        $res = parent::get_products($filters, $args);
        $this->total = $res->total;
        // Caso nao tenha retornado resultados
        if( $res->items == 0 ) {
            return false;
        }
        
        foreach($res->productItems->productItem as $k => $p){
            // Obtem a primeira imagem que estiver no objeto $p->image
            $p->image = current(get_object_vars($p->image));
            $p->program = current(get_object_vars($p->program));
            
            // Se for um numero entao remove o produto
            if( filter_var($p->image, FILTER_VALIDATE_URL) == FALSE ){
                unset($res->productItems->productItem[$k]);
            }

        }
        
        $products = $res->productItems->productItem; 

        return $products;
    }

    public function get_products_brands($products = array()){
        if( empty($products) ) {
            return false;
        }
        
        $brands_arr = array();
        foreach( $products as $p ){
            // Se a marca comeca com numeros remove ela
            if( isset($p->manufacturer) AND $p->manufacturer != 'NONE' AND ! empty(trim($p->manufacturer)) AND ! is_numeric( substr($p->manufacturer, 0, 2) ) /*AND strlen($p->manufacturer) <= 18*/ ) {
                $brands_arr[] = trim($p->manufacturer);
            }
            //$p = $p->merchantCategory;
        }
        // remove duplicados
        $brands_arr = array_unique($brands_arr);
        
        // ordena
        sort($brands_arr);

        // somente 10 resultados
        //$brands_arr = array_slice($brands_arr, 0, 10);
        
        return $brands_arr;

    }

    public function get_product_link($zupId = null) {
        $res = $this->get_product($zupId);
        $product = $res->productItem;

        if (! $product ) {
            return false;
        }

        return $product->trackingLinks->trackingLink[0]->ppc;
    }

    // public function get_favicon($url = '') {
    //     return 'http://www.google.com/s2/favicons?domain=' . get_domain_name($url);
    // }
// var $products = array();
//         $xml = parent::get_products($filters, $args);
//         $products = $xml['productItems']['productItem'];

//         // TODO
//         // Receber variaveis com filtro
//         foreach ($products as $key => $p) {
//             $this->products[$key] = $p;
//         }


//             // if($key == '@id'){
//             //     $this->aff_id = $p[$key];
//             //     continue;
//             // }
//             // if ( isset($p['trackingLinks']['trackingLink'][0]) ){
//             //     $this->products[$key]->aff_url = $p['trackingLinks']['trackingLink'][0]['ppc'];
//             // }


//     }

    public function get_category($p, $n = 0) {
        $categories = explode(' / ', $p['merchantCategory']);
        if ( !isset($categories[$n]) ){
            return false;
        }
        return $categories[$n];


    }

    public function get_categories(){

    }

    public function get_aff_id() {
        return $this->aff_id;
    }

    public function get_lojas(){

        $res = parent::get_lojas();
        if( $res->items == 0 ) {
            return false;
        }
        $lojas = array();
      
        foreach ($res->programApplicationItems->programApplicationItem as $key => $value) {
            $lojas[] = $value->program;
        }
        sort($lojas);
        return $lojas;

    }
}