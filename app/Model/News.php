<?php
App::uses('AppModel', 'Model');

/*
 * ニュースモデル
 */
class News extends AppModel{    
    
    // 使用テーブル
    public $useTable = 'news';
    
    /**
     * データベースから新着ニュース情報を取得する
     * @param int $getCount 取得レコード数
     * @return array データベースからの取得結果
     */
    public function getNewNews($getCount){

        $sql = "SELECT ec.news.news_id, ec.news.news_detail, ec.news.create_date "
         . "FROM ec.news "
         . "ORDER BY ec.news.create_date DESC "
         . "LIMIT $getCount";

        // 第三引数は二回目以降のキャッシュ有効・無効
        $result = $this->query($sql,true);
        
        return $result;
        
    }    
}