<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Zanox_model extends CI_Model
{
    private $connectId;
    private $secretKey;
    private $api;
    private $total = 0;
    
    public function __construct()
    {
        parent::__construct();
        $this->conexao_zanox();
    }
    
    private function conexao_zanox()
    {
        if (empty($this->api)) {
            //$this->api       = ApiClient::factory(PROTOCOL_XML, VERSION_DEFAULT);
            $this->api       = ApiClient::factory(PROTOCOL_SOAP, VERSION_DEFAULT);
            //$this->api       = ApiClient::factory(PROTOCOL_JSON, VERSION_DEFAULT);
            $this->connectId = "3D536CE42D798BBAA2D7";
            $this->secretKey = "0aeD8Fd923ee48+d8f31715e7973a6/3a179dc4d";
            if (!empty($this->api)) {
                $this->api->setConnectId($this->connectId);
            }
            
        } else {
            return $this->api;
        }
    }

    public function tests(){
        
        //$res = $this->api->getProduct('5dc402eb2884cb551cd93b360f5c850d');
        $res = $this->api->searchPrograms(NULL, NULL, NULL, false,'BR', NULL, 0, 50);
        var_dump($res);
        exit;
    }
    
    public function get_product($zupId = null)
    {
        if (empty($zupId)) {
            return false;
        }
        
        $produto = $this->api->getProduct($zupId);
        
        if ( ! $produto ) {
            return false;
        }

        return $produto;
    }
    
    public function get_products($filters = array(), $args = array())
    {
        $query      = (isset($filters['q'])) ? $filters['q'] : '';
        $region     = 'BR';
        $searchType = 'phrase'; // phrase or contextual
        $categoryId = (isset($filters['categoryId'])) ? $filters['categoryId'] : NULL;
        $minPrice   = (isset($filters['minPrice']) AND !empty($filters['minPrice']) ) ? $filters['minPrice'] : NULL;
        $maxPrice   = (isset($filters['maxPrice']) AND !empty($filters['maxPrice']) ) ? $filters['maxPrice'] : NULL;
        $programId  = (isset($filters['programId']) AND !empty($filters['programId']))? $filters['programId']: NULL;
        
        $page        = (isset($args['page'])) ? $args['page'] : NULL;
        $hasImages   = true;
        $items       = 50;
        $partnership = 'all';
        $adspaceId   = NULL;
        $programs    = $programId;
        
        return $this->api->searchProducts($query, $searchType, $region, $categoryId, $programs, $hasImages, $minPrice, $maxPrice, $adspaceId, $page, $items);

    }
    
    public function get_lojas(){
        $this->api->setSecretKey($this->secretKey);
        $adspaceId = NULL;
        $programId = NULL;
        $status = 'confirmed';
        $page = 0;
        $items = 50;
        return $this->api->getProgramApplications($adspaceId, $programId, $status, $page, $items);

    }

    public function get_program($programId){

        if(empty($programId))
            return false;

        return $this->api->getProgram($programId);
    }
    // public function get_categories($filters = array(), $args = array())
    // {
    //     // $query      = (isset($filters['query'])) ? $filters['query'] : '';
    //     // $region     = 'BR';
    //     // $searchType = NULL;
    //     // $categoryId = (isset($filters['categoryId'])) ? $filters['categoryId'] : NULL;
    //     // $minPrice   = (isset($filters['minPrice'])) ? $filters['minPrice'] : NULL;
    //     // $maxPrice   = (isset($filters['maxPrice'])) ? $filters['maxPrice'] : NULL;
        
        
    //     // $page        = (isset($args['page'])) ? $args['page'] : NULL;
    //     // $hasImages   = true;
    //     // $items       = 50;
    //     // $partnership = 'all';
    //     // $adspaceId   = NULL;
    //     // $programs    = array();
        
    //     // $xml = $this->api->searchProducts($query, $searchType, $region, $categoryId, $programs, $hasImages, $minPrice, $maxPrice, $adspaceId, $page, $items);
        
        
    //     // $xml = $this->api->unserialize($xml);
    //     $xml = array('category1', 'category2', 'category3' );
        
    //     return $xml;
    // }

}
