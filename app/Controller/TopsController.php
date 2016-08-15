<?php
App::uses('AppController', 'Controller');

/*
 * トップページコントローラ
 */
class TopsController extends AppController {
    
    // 使用モデル
    public $uses = array( 'Customer', 'Product', 'RankingProduct', 'CustomerFavoriteProduct', 'News');
    // ユーザID
    public $customerId;
    // セッション情報
    public $session_email;
    
    /*
     * 初期処理
     */
    public function index() {
        
        // セッション情報取得
        $this->session_email = $this->readSession();
        // ユーザID取得
        $this->customerId = $this->getCustomerId($this->session_email);
        
        // 新着商品取得
        $newProducts = $this->getNewProducts();
        // ランキング入り商品情報取得
        $rankingProducts = $this->getRankingProducts();
        // お気に入り商品情報取得
        $favoriteProducts = $this->getFavoriteProucts($this->customerId);
        // 新着ニュース取得
        $newNews = $this->getNewNews();
        
        // 各ビューへ取得データをセット
        $this->set('session_email', $this->session_email);
        $this->set('newProducts', $newProducts);
        $this->set('rankingProducts', $rankingProducts);
        $this->set('favoriteProducts', $favoriteProducts);
        $this->set('newNews', $newNews);
    }
  
    // ユーザIDを取得する
    private function getCustomerId($email){
        return $this->Customer->getCustomerId($email);
    }
    
    // セッション情報を読み込む
    private function readSession(){
         return $this->session_email = $this->Session->read('session_email'); 
    }
    
    // 新着商品を取得する
    private function getNewProducts() {
        return $this->Product->getNewProducts(4);
    }
    
    // ランキング入り商品情報を取得する
    private function getRankingProducts() {
        return $this->RankingProduct->getRankingProducts(4);
    }
    
    // お気に入り商品取得
    private function getFavoriteProucts($customerId){
        return $this->CustomerFavoriteProduct->getFavoriteProducts($customerId, 4);
    }
    
    // 新着ニュース取得
    private function getNewNews(){
        return $this->News->getNewNews(5);
    }   
    
}