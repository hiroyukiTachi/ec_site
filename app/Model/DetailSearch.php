<?php
App::uses('AppModel', 'Model');

/*
 * 詳細検索モデル
 */
class DetailSearch extends AppModel{    
    
    public $useTable = 'products';
    
    public function getProductsBySeachCondition(Searchcondition $searchCondition) {      
        
        $sexType = $searchCondition->sexType;
        $productType = $searchCondition->productType;
        $useType = $searchCondition->useType;
        $shopType = $searchCondition->shopType;
        $categoryType = $searchCondition->categoryType;
        $colorType = $searchCondition->colorType;
        $sizeType = $searchCondition->sizeType;
        $stockType = $searchCondition->stockType;
        
        $sql = "SELECT ec.products.product_id, ec.products.name, ec.products.price "
         . "FROM ec.products "
         . "WHERE ec.products.sex_type = ? "
         . "AND ec.products.product_type = ? "
         . "AND ec.products.use_type = ? "
         . "AND ec.products.shop_type = ? "
         . "AND ec.products.category_type = ? "
         . "AND ec.products.color_type = ? "
         . "AND ec.products.size_type = ? "
         . "AND ec.products.stock_type = ? "
         . "ORDER BY ec.products.product_id";
        
        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql,array($sexType, $productType, $useType, $shopType, $categoryType, $colorType, $sizeType, $stockType), true);
        
        return $result;       
    }    
}
