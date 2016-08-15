<?php
App::uses('AppModel', 'Model');
App::uses('../Lib/interface/IQuerySelectExecutor', 'IQuerySelectExecutor');

/*
 * 商品カテゴリーモデル
 */
class ProductsCategories extends AppModel{
    
    // データベースから商品カテゴリ情報を取得する
    public function select($category_id){
        
        $sql = "";
        
        try{
            $result = $this->query($sql, false);
            return $result;
        } catch (Exception $ex) {

        }
    }
}