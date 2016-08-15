<?php
App::uses('AppModel', 'Model');

/**
 * ショップモデル
 */
class Shop extends AppModel{
    
    // 使用テーブル
    public $useTable = 'products';
    
    // データベースから商品カテゴリ情報を取得する
    public function getProductShopById($shopId){
       
        $sql = "SELECT ec.products.product_id, ec.products.name, ec.products.price "
             . "FROM ec.products "
             . "WHERE ec.products.shop_type = ?";
        
        $result = $this->query($sql,array($shopId), true);
        
        return $result;
    }
}