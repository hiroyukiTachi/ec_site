<?php

App::uses('AppController', 'Controller');

/*
 * 商品情報詳細コントローラ
 */
class ProductDetailController extends AppController {
    
    // 使用モデル
    public $uses = array( 'ProductDetail', 'RecommendProduct');
    
    /**
     * 商品情報詳細
     * @param int $productId
     */
    public function productDetail($productId){
        $productDetail = $this->getProductDetailById($productId);
        
        $this->set('productDetail', $productDetail);
        $this->set('email', $this->Session->read('session_email'));
    }
    
    private function getProductDetailById($productId){
        return $this->ProductDetail->getProductDetailById(0, $productId);
    }
    
    private function getRecommendProduct($productId){
        $this->RecommendProduct->select($productId);
    }
}
    


 