<?php

App::uses('AppController', 'Controller');

/*
 * ランキングコントローラ
 */
class RankingController extends AppController {
    
    public $uses = array('RankingProduct');
    
    public function ranking($getCount){
        $rankingProducts = $this->getRankingProducts($getCount);
        $this->set('rankingProducts', $rankingProducts);
    }
    
    public function getRankingProducts($getCount){
        return $this->RankingProduct->getRankingProducts($getCount);
    }
}


 