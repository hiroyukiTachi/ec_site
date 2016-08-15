<?php

App::uses('AppController', 'Controller');

/*
 * 詳細検索コントローラ
 */
class DetailSearchController extends AppController {

    // 使用モデル
    public $uses = array('DetailSearch');
    
    public function detailSearch(){}    
    
    public function searchResult(){
        
        if ($this->request->is('post')) {
            
            $searchCondition = new Searchcondition();
            
            // 検索条件パラメータ取得
            $searchCondition->sexType = $this->request->data('sex-type');
            $searchCondition->productType = $this->request->data('product-type');
            $searchCondition->useType = $this->request->data('use-type');
            $searchCondition->shopType = $this->request->data('shop-type');
            $searchCondition->categoryType = $this->request->data('category-type');
            $searchCondition->colorType = $this->request->data('color-type');
            $searchCondition->sizeType = $this->request->data('size-type');
            $searchCondition->stockType = $this->request->data('stock-type');
            
            $searchResult = $this->DetailSearch->getProductsBySeachCondition($searchCondition);
            
            if (count($searchResult) == 0){
                $this->Flash->error(__('検索結果が見つかりませんでした。　検索条件を再度指定してから実行してください。'));
            }
            
            $this->set('searchResult', $searchResult);
        
        }    
    }
    
}

/**
 * 検索条件クラス
 */
class Searchcondition {
    public $sexType;
    public $productType;
    public $useType;
    public $shopType;
    public $categoryType;
    public $colorType;
    public $sizeType;
    public $stockType;
}
    
    
    
    
    
    
    
    
    
    
    