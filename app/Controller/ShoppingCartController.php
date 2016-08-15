<?php

App::uses('AppController', 'Controller');

/*
 * ショッピングカートコントローラ
 */
class ShoppingCartController extends AppController {

    // 使用モデル
    public $uses = array( 'Cart');
    
    public function cart(){
        $productCart = $this->getProductOfCart(0);
        $this->set('productCart', $productCart);
    }
    
    public function cartAdd($customerId, $productId){
        $this->addProductToCart($customerId, $productId);
        $this->redirect(['controller'=>'ShoppingCart','action'=>'cart']);
    }
    
    public function getProductOfCart($custumerId){
        return $this->Cart->getProductOfCart($custumerId);
    }
    
    public function addProductToCart($orderId, $productId){
        return $this->Cart->addProductToCart($orderId, $productId);
    }
    
}
    


 