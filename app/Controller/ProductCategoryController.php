<?php

App::uses('AppController', 'Controller');

/*
 * 商品カテゴリコントローラ
 */
class ProductCategoryController extends AppController{
    
    // 使用モデル
    public $uses = array( 'ProductDetail', 'RecommendProduct', 'Item', 'ProductCategory');
    public $components = array('RequestHandler');
    
    // コンストラクタ
    public function beforeFilter() {
        parent::beforeFilter();        
    }
    
    /*
     * カテゴリ一覧表示
     */
    public function categorylist(){
        
    }
    
    public function category($categpryId){
        $productCategories = $this->getProductCategoryById($categpryId);
        $this->set('productCategories', $productCategories);
    }
    
    /**
     * カテゴリIDから商品情報を取得する
     * @param int $categpryId カテゴリID
     * @return array 商品情報配列
     */
    private function getProductCategoryById($categpryId){
        return $this->ProductCategory->getProductCategoryById($categpryId);
    }
    
    // 非同期テスト
    public function getProductCategoryAjax(){
        
        // $searchCondition->sexType = $this->request->data('sex-type');
        
        if($this->RequestHandler->isAjax()) {
         
            $categoryId = $this->request->data['category_id'];
            
            Configure::write('debug', 0);
            
            // $favoriteProducts = $this->Item->getAll();
            $favoriteProducts = $this->ProductCategory->getProductCategoryById($categoryId);
            $this->set('favoriteProducts', $favoriteProducts);
            
            $this->viewClass = 'Json';
            $this->set('_serialize','favoriteProducts');
            
        }else{
            exit();
        }
    }
    
}


 