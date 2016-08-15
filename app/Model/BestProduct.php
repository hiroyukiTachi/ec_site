<?php
App::uses('AppModel', 'Model');
App::uses('IQuerySelectExecutor', '../Lib/interface');

/*
 * ベスト商品モデル
 */
class BestProduct extends AppModel{    
    
    // データベースからおすすめ商品情報を取得する
    public function select(){

        $sql = "SELECT ec.products.product_id, ec.products.name, ec.products.price "
             . "FROM ec.best_products "
             . "LEFT JOIN ec.products "
             . "ON ec.best_products.best_product_id = ec.products.product_id";
        
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql,true);
        
        return $result;
        
    }                       
}