<?php

App::uses('AppController', 'Controller');

/*
 * お気に入り商品コントローラ
 */
class CustomerFavoriteProductsController extends AppController {    
    
    // コンストラクタ
    public function beforeFilter() {
        parent::beforeFilter();        
    }
    
    public function favorite(){        
        $user = $this->Auth->user();
       
        // ログイン済みでない場合
        if (is_null($user)){
            // ログイン画面へリダイレクト
            $this->redirect(['controller'=>'customers','action'=>'login']);
        }        
    }    
    
}