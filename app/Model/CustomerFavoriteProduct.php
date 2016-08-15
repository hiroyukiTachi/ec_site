<?php
App::uses('AppModel', 'Model');

/**
 * お気に入り商品モデル
 */
class CustomerFavoriteProduct extends AppModel{
    
    // データベースからお気に入り商品情報を取得する
    public function getFavoriteProducts($customerId, $getCount){
    
        $sql = "SELECT ec.products.product_id, ec.products.name, ec.products.price "
             . "FROM ec.customer_favorite_products "
             . "LEFT JOIN ec.products "
             . "ON ec.customer_favorite_products.favorite_product_id = ec.products.product_id "
             . "AND ec.customer_favorite_products.favorite_customer_id = ? "
             . "LIMIT $getCount";
    
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql,array($customerId), true);
        
        return $result; 
    }
 
}