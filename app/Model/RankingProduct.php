<?php
App::uses('AppModel', 'Model');

/*
 * 商品モデル
 */
class RankingProduct extends AppModel{
    
    /**
     * データベースからランキング入りの商品情報を取得する
     * @param int $getCount 取得レコード数
     * @return array データべースからの取得結果
     */
    public function getRankingProducts($getCount){

        $sql = "SELECT ec.products.product_id, ec.products.name, ec.products.price "
             . "FROM ec.products "
             . "LEFT JOIN ec.ranking_products "
             . "ON ec.products.product_id = ec.ranking_products.product_id "
             . "LIMIT $getCount";
        
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql,true);
        
        return $result;        
    }                       
}