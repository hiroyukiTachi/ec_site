<?php
App::uses('AppModel', 'Model');

/*
 * 商品カテゴリモデル
 */
class ProductCategory extends AppModel{
    
    // 使用テーブル
    public $useTable = 'products';
    
    // データベースから商品カテゴリ情報を取得する
    public function getProductCategoryById($categoryId){
       
        $sql = "SELECT ec.products.product_id, ec.products.name, ec.products.price "
             . "FROM ec.products "
             . "WHERE ec.products.category_type = ?";
        
        $result = $this->query($sql,array($categoryId), true);
          
        return $result;
    }
}