<?php

App::uses('AppController', 'Controller');

/*
 * 商品コントローラ
 */
class ProductsController extends AppController {
    
    // 使用モデル
    public $uses = array('Product');
    
    // 商品情報取得
    public function getProducts(){
        return $this->Product->getProducts();
    }
}


 