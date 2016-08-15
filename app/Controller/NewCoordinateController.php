<?php

App::uses('AppController', 'Controller');

/*
 * 新着コーディネートコントローラ
 */
class NewCoordinateController extends AppController {
   
    // 使用モデル
    public $uses = array('Product');
    
    public function coordinate($getCount){
        $newProducts = $this->getNewProducts($getCount);
        $this->set('newProducts', $newProducts);
    }
    
    public function getNewProducts($getCount){
        return $this->Product->getNewProducts($getCount);
    }
}


 