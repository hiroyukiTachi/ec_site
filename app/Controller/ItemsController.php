<?php

App::uses('AppController', 'Controller');

/*
 * 商品コントローラ
 */
class ItemsController extends AppController {
    
    // 使用モデル
    public $uses = array('Item', 'ProductCategory');
    public $components = array('RequestHandler');
    
    // 非同期テスト
    public function get(){
        
        if($this->RequestHandler->isAjax()) {
         
            $categoryId = $this->request->data['category_id'];
            
            Configure::write('debug', 0);
            
            // $favoriteProducts = $this->Item->getAll();
            $favoriteProducts = $this->ProductCategory->select($categoryId);
            $this->set('favoriteProducts', $favoriteProducts);
            
            $this->viewClass = 'Json';
            $this->set('_serialize','favoriteProducts');
            
        }else{
            exit();
        }
    }
}


 