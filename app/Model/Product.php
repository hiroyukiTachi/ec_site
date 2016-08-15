<?php
App::uses('AppModel', 'Model');

/*
 * 商品モデル
 */
class Product extends AppModel{    
    
    /**
     * データべースから商品情報を全件取得する
     * @return array データベースからの取得結果
     */
    public function getAll(){

        $sql = "SELECT ec.products.product_id, ec.products.name, ec.products.price "
             . "FROM ec.products ";
        
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql,true);
        
        return $result;
        
    }     
    
    /**
     * データベースから商品情報を取得する
     * @param int $getCount 取得レコード数
     * @return array データべースからの取得結果
     */
    public function getNewProducts($getCount){

        $sql = "SELECT ec.products.product_id, ec.products.name, ec.products.price "
             . "FROM ec.products "
             . "ORDER BY ec.products.create_date DESC "
             . "LIMIT $getCount";
        
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql,true);
        
        return $result;        
    }  
    
}