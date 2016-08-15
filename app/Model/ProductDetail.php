<?php
App::uses('AppModel', 'Model');

/*
 * 商品詳細モデル
 */
class ProductDetail extends AppModel{    
    
    public $primaryKey = 'product_id';
    public $useTable = 'products';
    
    // データベースから商品詳細情報を取得する
    public function getProductDetailById($customerId, $productId){
        
        $sql = "SELECT ec.products.product_id, ec.products.name, ec.products.price, ec.products.main_comment, "
                . "ec.sex_type.sex_type_name, ec.product_type.product_type_name, ec.use_type.use_type_name, "
                . "ec.shop_type.shop_type_name, ec.categorys.category_name, " 
                . "ec.color_type.color_type_name, ec.size_type.size_type_name, ec.product_stock_isexist.stock_type, ec.order.order_id "
                . "FROM ec.products "
                . "LEFT JOIN ec.sex_type ON ec.products.sex_type = ec.sex_type.sex_type "
                . "LEFT JOIN ec.product_type ON ec.products.product_type = ec.product_type.product_type_id "
                . "LEFT JOIN ec.use_type ON ec.products.use_type = ec.use_type.use_type_id "
                . "LEFT JOIN ec.shop_type ON ec.products.shop_type = ec.shop_type.shop_type_id "
                . "LEFT JOIN ec.categorys ON ec.products.category_type = ec.categorys.category_id "
                . "LEFT JOIN ec.color_type ON ec.products.color_type = ec.color_type.color_type_id "
                . "LEFT JOIN ec.size_type ON ec.products.size_type = ec.size_type.size_type_id "
                . "LEFT JOIN ec.product_stock_isexist ON ec.products.stock_type = ec.product_stock_isexist.stock_id "
                . "LEFT JOIN ec.order ON ec.order.customer_id = ? "
                . "WHERE ec.products.product_id = ?";
        
        $result = $this->query($sql, array($customerId, $productId), true);
        
        return $result; 
    }    
}