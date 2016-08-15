<?php
App::uses('AppModel', 'Model');

/*
 * カートモデル
 */
class Cart extends AppModel{    
    
    // 使用モデル
    public $useTable = 'order_detail';
    
    /**
     * データべースからカートの商品情報を取得する
     * @param int $custumerId ユーザId
     * @return 商品情報配列
     */
    public function getProductOfCart($custumerId){
    
        $sql = "SELECT ec.order_detail.product_id, ec.products.name, ec.products.price, ec.order.order_id "
             . "FROM ec.order_detail "
             . "LEFT JOIN ec.products ON ec.order_detail.product_id = ec.products.product_id "
             . "LEFT JOIN ec.order ON ec.order.customer_id = ?";
        
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql, array($custumerId), true);
        
        return $result;
    }
    
    /**
     * カートへ商品情報を追加する
     * @param int $orderId 注文ID
     * @param int $productId 商品ID
     * @return bool クエリ実行結果
     */
    public function addProductToCart($orderId, $productId) {
        
        $sql = "INSERT INTO ec.order_detail (order_id, product_id) VALUES (?, ?)";
        
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql, array($orderId, $productId), true);
        
        return $result;
    }
    
}