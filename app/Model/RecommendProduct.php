<?php
App::uses('AppModel', 'Model');
App::uses('../Lib/interface/IQuerySelectExecutor', 'IQuerySelectExecutor');

/*
 * 関連商品モデル
 */
class RecommendProduct extends AppModel{
    
    // データベースから関連商品情報を取得する
    public function select($productId){     

        $sql = "";
        
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql,true);
        
        return $result;
        
    } 
}