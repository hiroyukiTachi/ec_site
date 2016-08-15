<?php

App::uses('AppController', 'Controller');

/*
 * ショップコントローラ
 */
class ShopController extends AppController {
    
    // 使用モデル
    public $uses = array( 'Shop');
    
    public function shopList() {
        
    }
    
    public function shop($shopId){
        $productCategories = $this->getProductShopById($shopId);
        $this->set('productCategories', $productCategories);
    }
    
    /**
     * ショップIDから商品情報を取得する
     * @param int $shopId カテゴリID
     * @return array 商品情報配列
     */
    private function getProductShopById($shopId){
        return $this->Shop->getProductShopById($shopId);
    }
    
}


 